<?php 
if($menu='login');
include 'header.php';?>	<!---header--->
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
<?php include 'footer.php';?>
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
					}else if(password==''){
						alert('Password is a required Feild');
					} else {
						var action = 'login';
						$.ajax({
							url:'ajaxaction.php',
							type:'post',
							data : {email:email,password:password, action:action},
							success : function(data) {
								if(data==1) {
									window.location.href = "index.php";
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