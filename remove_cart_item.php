<?php
session_start();
error_reporting(0);
include('includes/config.php');

$pid = $_GET['pid'];
// print_r($_SESSION['cart'][$pid]);

unset($_SESSION['cart'][$pid]);
header('location: my-cart.php');
?>
