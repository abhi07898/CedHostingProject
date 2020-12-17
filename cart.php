<?php
/**
 * Short description for code
 * php version 7.2.10
 *
 * @category Category_Name
 * @package  PackageName
 * @author   Abhishek Pandey <author@example.com>
 * @license  http://www.php.net/license/3_01.txt 
 * @link     http://pear.php.net/package/PackageName
 *
 * This is a "Docblock Comment"
 */
if ($menu='cart');
require 'header.php';

if (!isset($_SESSION['cart_data'])) {
    $_SESSION['cart_data'] = array();
}
$cart_data = array();
$_SESSION['cart_data'] = array();
if (isset($_GET)) {
    $name = $_GET['name'];
    $monthly_price = $_GET['monthly'];
    $free_domain = $_GET['free_domain'];
    $annaul_price = $_GET['annaul'];
    $sku=$_GET['sku'];
    $mail = $_GET['mail_box'];
    $web_spaces = $_GET['web_spaces'];
    $band_width = $_GET['band_width'];
    $lts=$_GET['lts'];  
    $cart_data = array('name'=>$name, 'mprice'=>$monthly_price, 'free_domain' => $free_domain, 'annual_price' => $annaul_price, 'sku'=>$sku, 'mail'=>$mail, 'web_space' =>$web_spaces, 'band_width' => $band_width, 'lts' => $lts);
    array_push($_SESSION['cart_data'], $cart_data);
    $_SESSION['cart_data'] = array_map("unserialize", array_unique(array_map("serialize", $_SESSION['cart_data'])));
              
} else {
    echo '<script>window.location.href="catpage.php";</script>';
}
print_r($_SESSION['cart_data']);
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Planet Hosting a Hosting Category Flat Bootstrap Responsive Website Template | Account :: w3layouts</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Planet Hosting Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<!---fonts-->
<link href='//fonts.googleapis.com/css?family=Voltaire' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!---fonts-->
<!--script-->
<link rel="stylesheet" href="css/swipebox.css">
            <script src="js/jquery.swipebox.min.js"></script> 
                <script type="text/javascript">
                    jQuery(function($) {
                        $(".swipebox").swipebox();
                    });
                </script>
<!--script-->
</head>
<body>

<?php require 'footer.php';?>