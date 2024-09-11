<?php
session_start();
include 'Inventory-Management-Admin-Dashboard-main/include/db.php';

// Handle form submission for adding products to the cart
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['product_id'])) {
    $product_id = $_POST['product_id'];

    // Fetch product details from the database using the product ID
    $sql = "SELECT * FROM products WHERE p_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $product_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $product = $result->fetch_assoc();

    if ($product) {
        $product_img = json_decode($product['product_img'], true)[1]; // Assume this is the main product image
        $product_name = $product['product_name'];
        $price = $product['price'];
        $quantity = $product['qty']; // Fetch quantity from the database

        $product_exists = false;

        // Check if the product already exists in the cart
        if (!empty($_SESSION['cart'])) {
            foreach ($_SESSION['cart'] as $key => $item) {
                if ($item['product_id'] === $product_id) {
                    if ($item['qty'] < $quantity) {
                        $_SESSION['cart'][$key]['qty'] += 1; // Increase quantity by 1
                        $_SESSION['cart'][$key]['price'] = $price * $_SESSION['cart'][$key]['qty']; // Update price based on new quantity
                        $product_exists = true;
                    } else {
                        echo json_encode(['status' => 'error', 'message' => 'Quantity full']);
                        $stmt->close();
                        exit();
                    }
                    break;
                }
            }
        }

        // If the product does not exist in the cart, add it as a new item if quantity is available
        if (!$product_exists) {
            if ($quantity > 0) {
                $_SESSION['cart'][] = [
                    'product_id' => $product_id,
                    'product_img' => $product_img,
                    'product_name' => $product_name,
                    'price' => $price,
                    'qty' => 1
                ];
                echo json_encode(['status' => 'success', 'message' => 'Product added to cart']);
            } else {
                echo json_encode(['status' => 'error', 'message' => 'Quantity full']);
            }
        }
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Product not found']);
    }

    $stmt->close();
}

// Handle quantity updates via AJAX
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update_cart'])) {
    $key = $_POST['key'];
    $requested_quantity = $_POST['qty'];
    $price = $_POST['price'];

    if (isset($_SESSION['cart'][$key])) {
        // Fetch the available stock from the database
        $product_id = $_SESSION['cart'][$key]['product_id'];
        $sql = "SELECT qty FROM products WHERE p_id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $product_id);
        $stmt->execute();
        $result = $stmt->get_result();
        $product = $result->fetch_assoc();

        if ($product) {
            $available_quantity = $product['qty'];
            if ($requested_quantity <= $available_quantity) {
                $_SESSION['cart'][$key]['qty'] = $requested_quantity;
                $_SESSION['cart'][$key]['price'] = $price; // Keep the price as a unit price

                // Calculate updated subtotal for the item
                $subtotal = $_SESSION['cart'][$key]['price'] * $_SESSION['cart'][$key]['qty'];

                // Calculate updated total price for all items in the cart
                $total_price = 0;
                foreach ($_SESSION['cart'] as $item) {
                    $total_price += $item['price'] * $item['qty']; // Multiply price by quantity
                }

                // Return new subtotal and total prices as JSON
                echo json_encode([
                    'status' => 'success',
                    'subtotal' => $subtotal,
                    'total_price' => $total_price
                ]);
            } else {
                // Return error message and available quantity
                echo json_encode([
                    'status' => 'error',
                    'message' => 'Stock full. please contact ',
                    'available_quantity' => $available_quantity
                ]);
            }
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Product not found']);
        }

        $stmt->close();
    }
    exit();
}

// Handle removing items from the cart
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['remove_key'])) {
    $key = $_POST['remove_key'];

    if (isset($_SESSION['cart'][$key])) {
        unset($_SESSION['cart'][$key]);
        $_SESSION['cart'] = array_values($_SESSION['cart']); // Re-index the array
        echo json_encode(['status' => 'success', 'message' => 'Item removed']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Item not found']);
    }

    exit();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odor - Vape Store WooCommerce HTML Template</title>
    <!-- Favicon img -->
    <link rel="shortcut icon" href="assets/images/favicon.png">
    <!-- Bootstarp min css -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- All min css -->
    <link rel="stylesheet" href="assets/css/all.min.css">
    <!-- Swiper bundle min css -->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <!-- Magnigic popup css -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!-- Animate css -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- Nice select css -->
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <!-- Style css -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <!-- Header area start here -->
       <?php include("header.php");  ?>

    <!-- Header area end here -->

    <!-- Sidebar area start here -->
    <div id="targetElement" class="side_bar slideInRight side_bar_hidden">
        <div class="side_bar_overlay"></div>
        <div class="logo mb-30">
            <img src="assets/images/logo/logo.svg" alt="logo">
        </div>
        <p class="text-justify">The foundation of any road is the subgrade, which provides a stable base for the road
            layers above. Proper compaction of
            the subgrade is crucial to prevent settling and ensure long-term road stability.</p>
        <ul class="info py-4 mt-65 bor-top bor-bottom">
            <li><i class="fa-solid primary-color fa-location-dot"></i> <a href="#0">example@example.com</a>
            </li>
            <li class="py-4"><i class="fa-solid primary-color fa-phone-volume"></i> <a href="tel:+912659302003">+91 2659
                    302 003</a>
            </li>
            <li><i class="fa-solid primary-color fa-paper-plane"></i> <a href="#0">info.company@gmail.com</a></li>
        </ul>
        <div class="social-icon mt-65">
            <a href="#0"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="#0"><i class="fa-brands fa-twitter"></i></a>
            <a href="#0"><i class="fa-brands fa-linkedin-in"></i></a>
            <a href="#0"><i class="fa-brands fa-instagram"></i></a>
        </div>
        <button id="closeButton" class="text-white"><i class="fa-solid fa-xmark"></i></button>
    </div>
    <!-- Sidebar area end here -->

    <!-- Preloader area start -->
    <!-- <div class="loading">
        <span class="text-capitalize">L</span>
        <span>o</span>
        <span>a</span>
        <span>d</span>
        <span>i</span>
        <span>n</span>
        <span>g</span>
    </div>

    <div id="preloader">
    </div> -->
    <!-- Preloader area end -->

    <!-- Mouse cursor area start here --><!-- 
    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div> -->
    <!-- Mouse cursor area end here -->


    <main>
        <!-- Page banner area start here -->
        <section class="page-banner bg-image pt-130 pb-130" data-background="assets/images/banner/inner-banner.jpg">
            <div class="container">
                <h2 class="wow fadeInUp mb-15" data-wow-duration="1.1s" data-wow-delay=".1s">Cart Page</h2>
                <div class="breadcrumb-list wow fadeInUp" data-wow-duration="1.3s" data-wow-delay=".3s">
                    <a href="index.html" class="primary-hover"><i class="fa-solid fa-house me-1"></i> Home <i
                            class="fa-regular text-white fa-angle-right"></i></a>
                    <span>Cart</span>
                </div>
            </div>
        </section>
        <!-- Page banner area end here -->

        <!-- cart page area start here -->
        <section class="cart-page pt-130 pb-130">
            <div class="container">

                <div class="shopping-cart radius-10 bor sub-bg">

                    <div
                        class="column-labels py-3 px-4 d-flex justify-content-between align-items-center fw-bold text-white text-uppercase">
                        <label class="product-details">Product</label>
                        <label class="product-price">Price</label>
                        <label class="product-quantity">Quantity</label>
                        <label class="product-line-price">Total</label>
                        <label class="product-removal">Edit</label>
                    </div>

                    <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <td class="text-center">Image</td>
                                    <td class="text-start">Product Name</td>
                                    <td class="text-end">Price</td>
                                    <td class="text-start">Quantity</td>
                                    <td class="text-end">Total</td>
                                    <td class="text-center">Remove</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $total_price = 0;

                                if (!empty($_SESSION['cart'])) {
                                    foreach ($_SESSION['cart'] as $key => $item) {
                                        $item_total = $item['price'] * $item['qty'];
                                        ?>

                                        <tr>
                                            <td class="text-center">
                                                <img src="Inventory-Management-Admin-Dashboard-main/upload/<?php echo htmlspecialchars($item['product_img']); ?>" class="img-thumbnail" style="width: 50px; height: 50px;">
                                            </td>
                                            <td class="text-start"><?php echo htmlspecialchars($item['product_name']); ?></td>
                                            <td class="text-end pro-price"><span data-price="<?php echo htmlspecialchars($item['price']); ?>"><?php echo htmlspecialchars($item['price']); ?></span></td>
                                            <td class="text-start">
                                                <input type="number" class="quantity-input" data-key="<?php echo $key; ?>" value="<?php echo htmlspecialchars($item['qty']); ?>" min="1" style="width: 50px;">
                                            </td>
                                            <td class="text-end pro-subtotal"><?php echo htmlspecialchars($item_total); ?></td>
                                            <td class="text-center">
                                                <button class="remove-item-btn border-0" data-key="<?php echo $key; ?>">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <?php
                                        $total_price += $item_total;
                                    }
                                } else {
                                    echo '<tr><td colspan="6" class="text-center">Your cart is empty!</td></tr>';
                                }

                                // Calculate delivery charges
                                $delivery_charge = ($total_price >= 2000) ? 0 : 140;
                                ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="4" class="text-end"><strong>Delivery Charge:</strong></td>
                                    <td class="text-end delivery-charge"><?php echo $delivery_charge; ?></td>
                                    <td></td>
                                     <!-- Delivery Charge Message -->
                                    <div class="delivery-message">
                                        <p><strong>Note:</strong> Spend <span id="amount-to-go"><?php echo 2000 - $total_price; ?></span> more to get free delivery!</p>
                                    </div>
                                </tr>
                                  <tr>
        <td colspan="4" class="text-end"><strong>Discount</strong></td>
        <td class="text-end discount-price"></td>
        <td></td>
    </tr>
                                <tr>
                                    <td colspan="4" class="text-end"><strong>Total:</strong></td>
                                    <td class="text-end total-price" id="subtotal"><?php echo $total_price + $delivery_charge; ?></td>
                                    <td></td>
                                </tr>
                            </tfoot>
                        </table>

                </div>
                <!-- shopping-cart-mobile -->
                <div class="shopping-cart mobile-view bor sub-bg">

                    <div class="product p-4 bor-top bor-bottom">
                        <div class="product-details d-flex align-items-center">
                            <img src="assets/images/shop/01.jpg" alt="image">
                            <h4 class="ps-4 text-capitalize">VortexVape</h4>
                        </div>
                        <div class="product-price">12.99</div>
                        <div class="product-quantity">
                            <input type="number" value="2" min="1">
                        </div>
                        <div class="product-line-price">25.98</div>
                        <div class="product-removal">
                            <button class="remove-product">
                                <i class="fa-solid fa-x heading-color"></i>
                            </button>
                        </div>
                    </div>

                    <div class="product p-4 bor-bottom">
                        <div class="product-details d-flex align-items-center">
                            <img src="assets/images/shop/02.jpg" alt="image">
                            <h4 class="ps-4 text-capitalize">EnigmaVapor</h4>
                        </div>
                        <div class="product-price">50.00</div>
                        <div class="product-quantity">
                            <input type="number" value="1" min="1">
                        </div>

                        <div class="product-line-price">50.00</div>
                        <div class="product-removal">
                            <button class="remove-product">
                                <i class="fa-solid fa-x heading-color"></i>
                            </button>
                        </div>
                    </div>
                    <div class="product p-4 bor-bottom">
                        <div class="product-details d-flex align-items-center">
                            <img src="assets/images/shop/03.jpg" alt="image">
                            <h4 class="ps-4 text-capitalize">ZenithVapor</h4>
                        </div>
                        <div class="product-price">45.99</div>
                        <div class="product-quantity">
                            <input type="number" value="1" min="1">
                        </div>

                        <div class="product-line-price">45.99</div>
                        <div class="product-removal">
                            <button class="remove-product">
                                <i class="fa-solid fa-x heading-color"></i>
                            </button>
                        </div>
                    </div>
                    <div class="product p-4 bor-bottom">
                        <div class="product-details d-flex align-items-center">
                            <img src="assets/images/shop/04.jpg" alt="image">
                            <h4 class="ps-4 text-capitalize">RadiantVape</h4>
                        </div>
                        <div class="product-price">99.99</div>
                        <div class="product-quantity">
                            <input type="number" value="2" min="1">
                        </div>

                        <div class="product-line-price">199.99</div>
                        <div class="product-removal">
                            <button class="remove-product">
                                <i class="fa-solid fa-x heading-color"></i>
                            </button>
                        </div>
                    </div>
                    <div class="product p-4">
                        <div class="product-details d-flex align-items-center">
                            <img src="assets/images/shop/02.jpg" alt="image">
                            <h4 class="ps-4 text-capitalize">SerenitySmoke</h4>
                        </div>
                        <div class="product-price">25.98</div>
                        <div class="product-quantity">
                            <input type="number" value="1" min="1">
                        </div>
                        <div class="product-line-price">25.98</div>
                        <div class="product-removal">
                            <button class="remove-product">
                                <i class="fa-solid fa-x heading-color"></i>
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- cart page area end here -->
    </main>

    <!-- Footer area start here -->
    <footer class="footer-area bg-image" data-background="assets/images/footer/footer-bg.jpg">
        <div class="container">
            <div class="footer__wrp pt-65 pb-65 bor-top bor-bottom">
                <div class="row g-4">
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-duration="1.1s" data-wow-delay=".1s">
                        <div class="footer__item">
                            <h4 class="footer-title">Customer Service</h4>
                            <ul>
                                <li><a href="contact.html"><span></span>Help Portal</a></li>
                                <li><a href="contact.html"><span></span>Contact Us</a></li>
                                <li><a href="error.html"><span></span>Delivery Information</a></li>
                                <li><a href="error.html"><span></span>Click and Collect</a></li>
                                <li><a href="error.html"><span></span>Refunds and Returns</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".2s">
                        <div class="footer__item">
                            <h4 class="footer-title">Get to Know Us</h4>
                            <ul>
                                <li><a href="about.html"><span></span>About Us</a></li>
                                <li><a href="blog-grid.html"><span></span>News & Blog</a></li>
                                <li><a href="error.html"><span></span>Careers</a></li>
                                <li><a href="error.html"><span></span>Investors</a></li>
                                <li><a href="contact.html"><span></span>Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-duration="1.3s" data-wow-delay=".3s">
                        <div class="footer__item">
                            <h4 class="footer-title">vapes new collections</h4>
                            <ul>
                                <li><a href="shop.html"><span></span>E-Cigarettes</a></li>
                                <li><a href="shop.html"><span></span>Vape Pens</a></li>
                                <li><a href="shop.html"><span></span>Pod Systems</a></li>
                                <li><a href="shop.html"><span></span>Disposable Vapes</a></li>
                                <li><a href="shop.html"><span></span>Nicotine Salt Devices</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-duration="1.4s" data-wow-delay=".4s">
                        <div class="footer__item newsletter">
                            <h4 class="footer-title">get newsletter</h4>
                            <div class="subscribe">
                                <input type="email" placeholder="Your Email">
                                <button><i class="fa-solid fa-paper-plane"></i></button>
                            </div>
                            <div class="social-icon mt-40">
                                <a href="#0"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#0"><i class="fa-brands fa-twitter"></i></a>
                                <a href="#0"><i class="fa-brands fa-linkedin-in"></i></a>
                                <a href="#0"><i class="fa-brands fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__copy-text pt-50 pb-50">
                <a href="index.html" class="logo d-block">
                    <img src="assets/images/logo/logo.svg" alt="logo">
                </a>
                <p>&copy; Copyright 2023 <a href="#0" class="primary-hover">odor</a> All Rights Reserved</p>
                <a href="#0" class="payment d-block image">
                    <img src="assets/images/icon/payment.png" alt="icon">
                </a>
            </div>
        </div>
    </footer>
    <!-- Footer area end here -->

    <!-- Back to top area start here -->
    <div class="scroll-up">
        <svg class="scroll-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- Back to top area end here -->

    <!-- Jquery 3. 7. 1 Min Js -->
    <script src="assets/js/jquery-3.7.1.min.js"></script>
    <!-- Bootstrap min Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Swiper bundle min Js -->
    <script src="assets/js/swiper-bundle.min.js"></script>
    <!-- Counterup min Js -->
    <script src="assets/js/jquery.counterup.min.js"></script>
    <!-- Wow min Js -->
    <script src="assets/js/wow.min.js"></script>
    <!-- Magnific popup min Js -->
    <script src="assets/js/magnific-popup.min.js"></script>
    <!-- Nice select min Js -->
    <script src="assets/js/nice-select.min.js"></script>
    <!-- Pace min Js -->
    <script src="assets/js/pace.min.js"></script>
    <!-- Isotope pkgd min Js -->
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <!-- Waypoints Js -->
    <script src="assets/js/jquery.waypoints.js"></script>
    <!-- Script Js -->
    <script src="assets/js/script.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> <!-- Include SweetAlert2 -->
<script>
    $(document).ready(function () {
        // Update quantity
        $('.quantity-input').on('change', function () {
            var key = $(this).data('key');
            var qty = $(this).val();
            var price = $(this).closest('tr').find('.pro-price span').data('price');

            // AJAX request to update the cart item quantity
            $.ajax({
                url: 'cart.php',
                type: 'POST',
                data: {
                    update_cart: true,
                    key: key,
                    qty: qty,
                    price: price
                },
                success: function (response) {
                    var data = JSON.parse(response);
                    if (data.status === 'success') {
                        // Update the subtotal and total price on the page
                        $('.pro-subtotal').eq(key).text(data.subtotal);
                        var total_price = data.total_price;

                        // Check and update delivery charge based on the new total price
                        var delivery_charge = (total_price >= 2000) ? 0 : 140;
                        $('.delivery-charge').text(delivery_charge);

                        // Update final total price
                        $('.total-price').text(total_price + delivery_charge);

                        // Update the delivery message
                        $('#amount-to-go').text(Math.max(2000 - total_price, 0));
                    } else {
                        // Display an error message using SweetAlert
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: data.message,
                            confirmButtonText: 'OK'
                        }).then(() => {
                            // Reset the quantity input to the maximum available quantity
                            $('.quantity-input').eq(key).val(data.available_quantity);
                            // Update the subtotal and total price with the maximum quantity
                            $('.quantity-input').trigger('change');
                        });
                    }
                }
            });
        });

        // Remove item
$('.remove-item-btn').on('click', function () {
    var key = $(this).data('key');

    // AJAX request to remove the item
    $.ajax({
        url: 'cart.php',
        type: 'POST',
        data: {
            remove_key: key // Ensure the data key matches your PHP code
        },
        success: function (response) {
            var data = JSON.parse(response);
            if (data.status === 'success') {
                // Remove the item row from the cart
                $('button[data-key="' + key + '"]').closest('tr').remove();

                // Update the total price and delivery charge
                var new_total_price = data.total_price;
                var new_delivery_charge = (new_total_price >= 2000) ? 0 : 140;

                $('.total-price').text(new_total_price + new_delivery_charge);
                $('.delivery-charge').text(new_delivery_charge);

                // Update the delivery message
                $('#amount-to-go').text(Math.max(2000 - new_total_price, 0));
            } else {
                // Display an error message using SweetAlert
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: data.message,
                    confirmButtonText: 'OK'
                });
            }
        }
    });
});

    });
  $(document).ready(function() {
    var couponApplied = false; // Flag to track if coupon has been applied

    $('#coupon-form').on('submit', function(e) {
        e.preventDefault(); // Prevent the form from submitting traditionally

        if (couponApplied) {
            alert('Coupon code has already been applied.');
            return; // Exit the function if the coupon has already been applied
        }

        var couponCode = $('#coupon_code').val();

        $.ajax({
            url: 'get_coupon.php',
            type: 'POST',
            data: { coupon_code: couponCode },
            dataType: 'json', // Expect JSON response
            success: function(response) {
                if (response.status === 'success') {
                    // Update the discount field
                    $('.discount-price').text(response.discount + '%');

                    // Calculate the discount amount and update the subtotal
                    var subtotal = parseFloat($('#subtotal').text().replace('Rs', '')); // Assuming subtotal is in the format Rs123.45
                    var discount = parseFloat(response.discount);
                    var discountAmount = subtotal * (discount / 100);
                    var newSubtotal = subtotal - discountAmount;

                    // Update the subtotal field
                    $('#subtotal').text('Rs' + newSubtotal.toFixed(2));

                    couponApplied = true; // Set flag to true
                } else {
                    // Optionally handle error messages
                    $('.discount-price').text(''); // Clear the discount field or set a default message
                    alert(response.message); // Show error message
                }
            },
            error: function(xhr, status, error) {
                // Handle any errors
                console.error(xhr.responseText);
                $('.discount-price').text(''); // Clear the discount field on error
            }
        });
    });
});
</script>
</body>

</html>