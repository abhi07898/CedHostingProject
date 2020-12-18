<?php
session_start();
if (isset($_GET['id'])) {
    $prod_id = $_GET['id'];
    unset($_SESSION['cart_data'][($prod_id-1)]);
    print_r($_SESSION['cart_data']);
    // print_r($_SESSION['cart_data']);
    header('location:cart.php');
}

?>