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

$cart_data = array();

if (isset($_GET['name'])) {
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
    $_SESSION['cart_data'][] = $cart_data;
    // session_destroy();
} 
// else {
//     echo '<script>window.location.href="catpage.php";</script>';
// }

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
 <table class ='table table-striped'>
 <thead>
    <tr>
        <th>Name</th>
        <th>Free Domain</th>
        <th>SKU</th>
        <th>MailBox</th>
        <th>Web Spaces</th>
        <th>Band Width</th>
        <th>L-T-S</th>
        <th>ACTION</th>
    </tr>
 </thead>
 <tbody>
<?php
foreach ($_SESSION['cart_data'] as $key) {
    ?>
        <tr onclick='delete_cart(<?php echo $key;?>)'>
            <td><?php echo $key['name'];?></td>
            <td><?php echo $key['free_domain'];?></td>
            <td><?php echo $key['sku'];?></td>
            <td><?php echo $key['mail'];?></td>
            <td><?php echo $key['web_space'];?></td>
            <td><?php echo $key['band_width'];?></td>
            <td><?php echo $key['lts'];?></td>
            <td><button type = "button" class= "btn btn-danger" value="<?php echo $key['name']; ?>">REMOVE</button></td>   
        </tr>
<?php } ?>   
 </tbody>
 </table>
 <script>
 function delete_cart(x) {
    var index = x.rowIndex;
    window.location.href = 'cartdelete.php?id='+index;

 }


 </script>
<?php require 'footer.php';?>