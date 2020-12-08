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
					 <div>
						<span>Name<label>*</label></span>
						<input type="text" id="name" oncopy="return false" onpaste="return false" oncut="return false"> 
					 </div>
					 <div>
						<span>Contact<label>*</label></span>
						<input type="text" id="contact" oncopy="return false" onpaste="return false" oncut="return false"> 
					 </div>
					 <div>
						 <span>Email Address<label>*</label></span>
						 <input type="text" id="email" oncopy="return false" onpaste="return false" oncut="return false"> 
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
								<input type="password" id="pass"  oncopy="return false" onpaste="return false" oncut="return false">
							 </div>
							 <div>
								<span>Confirm Password<label>*</label></span>
								<input type="password" id="conf_pass"  oncopy="return false" onpaste="return false" oncut="return false">
							 </div>
					 </div>
					 <div class="register-top-grid">
						 <div>
							<span>Security Question<label>*</label></span>
							<select name="question" id="sec_que">
								<option selected>Select Any Question from here</option>
								<option value="What was your childhood nickname?">What was your childhood nickname?</option>
								<option value="What is the name of your favourite childhood friend?">What is the name of your favourite childhood friend? </option>
								<option value="What was your favourite place to visit as a child?">What was your favourite place to visit as a child?</option>
								<option value="What was your dream job as a child">What was your dream job as a child ?</option>
								<option value="What is your favourite teacher's nickname?">What is your favourite teacher's nickname? ?</option>
							</select>
						 </div>
						 <div>
							<span>Security Answer<label>*</label></span>
							<input type="text" id="sec_ans"> 
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
						name = $('#name').val();
						email = $('#email').val();
						contact = $('#contact').val();
						pass = $('#pass').val();
						conf_pass = $('#conf_pass').val();
						sec_que = $('#sec_que').val();
						sec_ans = $('#sec_ans').val();
						if(name=='' || contact =='' || pass == '' || conf_pass == '' ||email == '' || sec_que=='' || sec_ans == '') {
							alert("marks with * fields are required");
						} else if(contact.length!==10) {
							alert("Number Should be 10 digit");
						} 
						else if(!(email.match(/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/))) {
							alert("Email  should be in a proper way no consecutive(.) and not rather single @ are allowed ");
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
							return !/[~`.0123456789!@#$%\^&*()+=\-\[\]\\';,/{}|\\":<>\?]/g.test(str);
							alert("you are doing wrong"); 
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
							return contact(character);     
						});

						function contact(str) {
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
				
// contact
// pass
// conf_pass
// sec_que
// sec_ans

				
			</script>
	</body>
</html>