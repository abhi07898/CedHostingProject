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
<?php
require 'header.php';
print_r($_SESSION['otp']);
$email = $_SESSION['otp']['email'];
$otp = $_SESSION['otp']['otp'];
?>
        <!---login--->
        <div class="content">
                <div class="main-1">
                    <div class="container">
                        <div class="login-page">
                            <div class="account_grid">
                                <div class="col-md-6 login-left">
                                     <h3>If Your OTP Expired</h3>
                                     <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p> 
                                     <a class="acount-btn" href="email.php?email=<?php echo $email;?>">Resend OTP</a>
                                </div>
                                <div class="col-md-6 login-right">
                                    <h3>G-Mail Verification</h3>
                                    <p>Hey ! OTP code already sended to your mail , during Registration.</p>
                                    <form>
                                      <div>
                                        <span>Email Address<label>*</label></span>
                                        <input type="text" id="email" value = "<?php echo $email; ?>" disabled> 
                                      </div>
                                      <div>
                                        <span>Enter OTP<label>*</label></span>
                                        <input type="text" id="entered_otp" placeholder = "Enter OTP that already sended your g-mail"> 
                                      </div>
                                      <input type="submit" value="Verify G-Mail" id="verify" required>
                                    </form>
                                </div>	
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- login -->
<?php require 'footer.php';?>
<script>
$(document).ready(function(){
    $('#verify').click(function(e){
        e.preventDefault();
        otp = $('#entered_otp').val();
        sended_otp = "<?php echo $_SESSION['otp']['otp'];?>";
        g_mail = "<?php echo $_SESSION['otp']['email'];?>";
        if(otp == '') {
            alert("OTP field arer required");
            $('#entered_otp').focus();
        }
        else if(!(otp.match(/^([0-9]+\s?)*$/))) {
            alert("Enter Only Numeric Value");
            $('#entered_otp').focus();
        } else  if(sended_otp == otp)
            {
                
                var action = 'verified_gmail';
                $.ajax({
                    url: 'ajaxaction.php',
                    type : 'post',
                    data : {action:action,email:g_mail},
                    success : function(data) {
                      if(data==1) {
                        alert("Heyy CONGRATS you are ready to LOGIN!!!!");
                        window.location.href='login.php';
                      }   
                    }
                });
                
            } else {
                alert('Enter OTP are invalid');
            }
    });
});

</script>