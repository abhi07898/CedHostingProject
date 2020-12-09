	<?php
	session_start();
	?>
	<!---header--->
		<div class="header">
			<div class="container">
				<nav class="navbar navbar-default">
					<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
								<i class="sr-only">Toggle navigation</i>
								<i class="icon-bar"></i>
								<i class="icon-bar"></i>
								<i class="icon-bar"></i>
							</button>				  
							<div class="navbar-brand">
								<h1><a href="index.php" class="cedhost"><span class="ced">Ced </span><span class="host">Hosting</span></a></h1>
							</div>
						</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
								<li class='<?php if($menu=="index"){echo"active";}?>'><a href="index.php">Home <i class="sr-only">(current)</i></a></li>
								<li class='<?php if($menu=="about"){echo"active";}?>'><a href="about.php">About</a></li>
								<!-- <li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages<i class="caret"></i></a>
										<ul class="dropdown-menu">
											<li><a href="blog.php">Blog</a></li>
											<li><a href="pricing.php">Pricing</a></li>
											<li><a href="faq.php">FAQ's</a></li>
											<li><a href="testimonials.php">Testimonials</a></li>
											<li><a href="history.php">History</a></li>
											<li><a href="support.php">Support</a></li>
											<li><a href="templatesetting.php">Template setting</a></li>
											<li><a href="login.php">Login</a></li>
											<li><a href="portfolio.php">Portfolio</a></li>
										</ul>
									</li> -->
								<li class='<?php if($menu=="services"){echo"active";}?>'><a href="services.php">Services</a></li>								
								<li class="dropdown  <?php if(($menu=="linuxhosting")||($menu=="wordpresshosting")|| ($menu=="windowshosting")||($menu=="cmshosting")){echo"active";}?>">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hosting<i class="caret"></i></a>
									<ul class="dropdown-menu">
										<li class='<?php if($menu=="linuxhosting"){echo"active";}?>'><a href="linuxhosting.php">Linux hosting</a></li>
										<li class='<?php if($menu=="wordpresshosting"){echo"active";}?>'><a href="wordpresshosting.php">WordPress Hosting</a></li>
										<li class='<?php if($menu=="windowshosting"){echo"active";}?>'><a href="windowshosting.php">Windows Hosting</a></li>
										<li class='<?php if($menu=="cmshosting"){echo"active";}?>'><a href="cmshosting.php">CMS Hosting</a></li>
									</ul>			
								</li>
								<li class='<?php if($menu=="blog"){echo"active";}?>'><a href="blog.php">Blog</a></li>	
								<li class='<?php if($menu=="cart"){echo"active";}?>'><a href="cart.php"><i class="fa fa-shopping-cart " style="font-size: 25px;" ></i></a></li>
								<li class='<?php if($menu=="pricing"){echo"active";}?>'><a href="pricing.php">Pricing</a></li>
								<li class='<?php if($menu=="contact"){echo"active";}?>'><a href="contact.php">Contact</a></li>
								<?php
								if(isset($_SESSION['user'])){ ?>
								 <li class='<?php if($menu=="login"){echo"active";}?>'><a href="logout.php">Logout</a></li>
								<?php } else {?>
								<li class='<?php if($menu=="login"){echo"active";}?>'><a href="login.php">Login</a></li>
								<?php }?>
							</ul>
									  
						</div><!-- /.navbar-collapse -->
					</div><!-- /.container-fluid -->
				</nav>
			</div>
		</div>
	<!---header--->
