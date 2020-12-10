<!--
Au
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
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
<?php include 'header.php';?>
    <!---header--->
        <!---login--->
            <div class="content">
                <!-- registration -->
    <div class="main-1">
        <div class="container">
            <div class="register">
                <form> 
                 <div class="register-top-grid">
                    <h3>personal information</h3>
                    <span>Fields with <label>*</label> Symobol are Required</span>
                     <div>
                        <span>Name<label>*</label></span>
                        <input type="text" id="name" placeholder = "Extra spaces are not allowed" oncopy="return false" onpaste="return false" oncut="return false"> 
                     </div>
                     <div>
                        <span>Contact<label>*</label></span>
                        <input type="text" id="contact" placeholder = "Contact should 10 digit(11 included 0)" oncopy="return false" onpaste="return false" oncut="return false"> 
                     </div>
                     <div>
                         <span>Email Address<label>*</label></span>
                         <input type="text" id="email" placeholder = "E-mail should follow email-format two cosecutive(.) are not allowed" oncopy="return false" onpaste="return false" oncut="return false"> 
                     </div>
                     <div class="clearfix"> </div>
                       <a class="news-letter" href="#">
                         <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>Sign Up for Newsletter</label>
                       </a>
                     </div>
                     <div class="register-bottom-grid">
                            <h3>login information</h3>
                             <div>
                                <span>Password<label>*</label></span>
                                <input type="password" id="pass" placeholder="Password should 8 to 16 digit (like-Abhi#12aa4)"  oncopy="return false" onpaste="return false" oncut="return false">
                             </div>
                             <div>
                                <span>Confirm Password<label>*</label></span>
                                <input type="password" id="conf_pass" placeholder="Eneter value same as password field"  oncopy="return false" onpaste="return false" oncut="return false">
                             </div>
                     </div>
                     <div class="register-top-grid">
                         <div>
                            <span>Security Question<label>*</label></span>
                            <select name="question" id="sec_que">
                                <option value="What was your childhood nickname?">What was your childhood nickname?</option>
                                <option value="What is the name of your favourite childhood friend?">What is the name of your favourite childhood friend? </option>
                                <option value="What was your favourite place to visit as a child?">What was your favourite place to visit as a child?</option>
                                <option value="What was your dream job as a child">What was your dream job as a child ?</option>
                                <option value="What is your favourite teacher's nickname?">What is your favourite teacher's nickname? ?</option>
                            </select>
                         </div>
                         <div>
                            <span>Security Answer<label>*</label></span>
                            <input type="text" id="sec_ans" placeholder = "Only Alpha or Alphanumeric are alowed"> 
                         </div>
                         <div>
                    </div>
                </form>
                <div class="clearfix"> </div>
                <div class="register-but">
                   <form>
                       <input type="submit" value="submit" id='submit_register'>
                       <div class="clearfix"> </div>
                   </form>
                </div>
           </div>
         </div>
    </div>
<!-- registration -->

            </div>
<!-- login -->
                <!---footer--->
<?php include 'footer.php';?>
            <!---footer--->
            <script type="text/javascript">
                $(document).ready(function(){
                    $("#submit_register").click(function(e){
                        e.preventDefault();
                        name = $('#name').val().trim();
                        email = $('#email').val();
                        contact = $('#contact').val();
                        pass = $('#pass').val();
                        conf_pass = $('#conf_pass').val();
                        sec_que = $('#sec_que').val().trim();
                        sec_ans = $('#sec_ans').val().trim();
                        if(name=='' || contact =='' || pass == '' || conf_pass == '' ||email == '' || sec_que=='' || sec_ans == '') {
                            alert("marks with * fields are required");
                        }else if(!(name.match(/^([a-zA-Z]+\s?)*$/))) {
                            alert("name should in proper way");
                            $('#name').focus();
                        } else if(!(contact.match(/^(0|[+91]{3})?[7-9][0-9]{9}$/))){
                            alert("Contact Number is not in Correct Form");
                            $('#contact').focus();
                        } else if(!(pass.match(/^(?=.*\d)(?=.*[-+_!@#$%^&*., ?])(?=.*[a-z])(?=.*[A-Z]).{8,16}$/))) {
                            alert("Password would be 8 to 16 digit ex-(Abhi@1234)");
                            $('#pass').focus();
                        }
                        else if(pass!=conf_pass) {
                            alert("Password not matched");
                            $('#conf_pass').focus();
                        } 
                        else if(!(email.match(/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/))) {
                            alert("Email  should be in a proper way no consecutive(.) and not rather single @ are allowed ");
                            $('#email').focus();
                        }else if(!(sec_ans.match(/^([a-zA-Z0-9]+\s?)*$/))) {
                            alert("Answer Should be in Proper way");
                            $('#sec_ans').focus();
                        } else {
                            var action = "register_user";
                            $.ajax({
                                url :'ajaxaction.php',			
                                type : 'POST',
                                data : {action:action, name:name, email:email,contact:contact, password:conf_pass,question:sec_que, answer:sec_ans},
                                success : function (data) {
                                    alert(data);
                                }
                            });
                        }

                    });
                });
                //   {
                // alert("Please put 10 digit mobile number");
                    //performing validation for some specific feild
                        $("#name ").keypress(function(event) {
                            var character = String.fromCharCode(event.keyCode);
                            return isValid(character);  
                              
                        });
                        function isValid(str) {				
                            return  !/[~`0-9.!@#$%\^&*()+=\-\[\]\\';,/{}|\\":<>\?]/g.test(str);
                            // alert("you are doing wrong"); 
                        }
                        $("#sec_ans").keypress(function(event) {
                            var character = String.fromCharCode(event.keyCode);
                            return issecValid(character);     
                        });
                        function issecValid(str) {
                            return !/[~`!@#$%\^&*()+=\-\[\]\\';,/{}|\\":<>\?]/g.test(str);
                        }
                        $("#contact").keypress(function(event) {
                            var character = String.fromCharCode(event.keyCode);
                            return contactvALID(character);     
                        });
                        function contactvALID(str) {
                            return !/[~`. a-zA-Z!@#$%\^&*()+=\-\[\]\\';,/{}|\\":<>\?]/g.test(str);
                        }
                        $("#sec_ans").keypress(function(event) {
                            var character = String.fromCharCode(event.keyCode);
                            return issec_ansValid(character);     
                        });

                        function issec_ansValid(str) {				
                            return !/[~`.!@#$%\^&*()+=\-\[\]\\';,/{}|\\":<>\?]/g.test(str);
                        }
                        $("#pass , #conf_pass ").keypress(function(event) {
                            var character = String.fromCharCode(event.keyCode);
                            return ispassValid(character);     
                        });

                        function ispassValid(str) {				
                            return !/[~` .!\^&*()+=\-\[\]\\';,/|\\":<>\?]/g.test(str);
                        }	
                        // email validation
                        $("#email").keypress(function(event) {
                            var character = String.fromCharCode(event.keyCode);
                            return emailvALID(character);     
                        });

                        function emailvALID(str) {
                            return !/[~`!#$%\^&*()+=\-\[\]\\';,/{}|\\":<>\?]/g.test(str);
                        }			
            </script>
    </body>
</html>