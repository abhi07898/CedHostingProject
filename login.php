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
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Planet Hosting a Hosting Category Flat Bootstrap Responsive Website Template | Login :: w3layouts</title>
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
<?php 
if ($menu='login');
require 'header.php';
// if(isset($_SESSION['user'])) {
// 	echo '<script>window.location.href = "index.php"</script>';
// }
// if(isset($_SESSION['admin'])) {
// 	echo '<script>window.location.href = "Admin/index.php"</script>';
// }
?><!---header--->

        <!---login--->
            <div class="content">
                <div class="main-1">
                    <div class="container">
                        <div class="login-page">
                            <div class="account_grid">
                                <div class="col-md-6 login-left">
                                     <h3>new customers</h3>
                                     <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
                                     <a class="acount-btn" href="account.php">Create an Account</a>
                                </div>
                                <div class="col-md-6 login-right">
                                    <h3>registered</h3>
                                    <p>If you have an account with us, please log in.</p>
                                    <form>
                                      <div>
                                        <span>Email Address<label>*</label></span>
                                        <input type="text" id="email"> 
                                      </div>
                                      <div>
                                        <span>Password<label>*</label></span>
                                        <input type="password" id="password"> 
                                      </div>
                                      <a class="forgot" href="#">Forgot Your Password?</a>
                                      <input type="submit" value="Login" id="submit_login">
                                    </form>
                                    </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- login -->
                <!---footer--->
<?php require 'footer.php';?>
            <!---footer--->
            <script>
            $(document).ready(function(){
                $('#submit_login').click(function(e){
                    e.preventDefault();
                    email = $('#email').val();
                    password = $('#password').val();
                    if(email=='') {
                        alert("E-mail is a requierd Field");
                    } else if(!(email.match(/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/))) {
                        alert("Entered Mail in Corrrect Way");
                        $('#email').focus();
                    }else if(password==''){
                        alert('Password is a required Feild');
                        $('#password').focus();
                    } else {
                        var action = 'login';
                        $.ajax({
                            url:'ajaxaction.php',
                            type:'post',
                            data : {email:email,password:password, action:action},
                            success : function(data) {
                                if(data==1) {
                                    window.location.href = "index.php";
                                } else if(data == 2){
                                    window.location.href = "Admin/index.php";
                                } else {
                                    alert(data);
                                }
                            }
                        })
                    }
                    });
            });
            </script>
</body>
</html>