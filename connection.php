<?php
$host="localhost";
$username="root";
$pass="";
$db="office";

$conn=mysqli_connect($host,$username,$pass,$db);


if ($conn) {
        // echo "connected successfully";
}
else {
    echo "not connected";
}
?>