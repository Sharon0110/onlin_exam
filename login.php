<!DOCTYPE html>
<html>
    <head>
	<meta charset="UTF-8">
	<title>Login| online Exam</title>
    
	<link rel="stylesheet" href="css/style.css" type="text/css"/>
    <link rel="stylesheet" href="css/style_log.css" type="text/css"/>
   <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
	
   </head>
<body style="background-image: url(images/bg-body.png);">
	<div class="background">
		<div class="page">
			<a href="default.php" id="logo">
			Online Exam
			</a>
			<div class="sidebar" style="margin-top: -20px;">
				<ul>
					<li>
						<a href="default.php">Home</a>
					</li>
					<li>
						<a href="programs.php">Programs</a>
					</li>
					<li class="selected">
						<a href="about.php">About</a>
					</li>
					<li>
						<a href="services.php">Services</a>
					</li>
					
					<li>
						<a href="contact.php">Contact</a>
					</li>
					<li>
						<a href="signup.php">Register</a>
					</li>
					<li>
						<a href="login.php">Login</a>
					</li>
				</ul>
				<div class="first">
					<div>
						<h3>Purpose</h3>
						<img src="images/man.jpg" alt="">
						<p>
								Online Exam for Employers is a technology platform for recruiters working in corporates and consultancy. Using our service.
						</p>
					</div>
				</div>
			
			</div>
			<div class="body">
				<div class="services" style="background: white;height:500px;padding-top: 100px;">
			
            <div>
				<div>
								    
      <section class="container" >
    <div class="login" style="width:350px;margin-left:100px;">
      <h1>Login Here</h1>
      <form method="post" action="welcome.php">
        <p><input type="text" name="loginid" value="" placeholder="Username or Email"></p>
        <p><input type="password" name="pass" value="" placeholder="Password"></p>
        
        <p class="submit"><input type="submit" name="submit" value="Login"></p>
      </form>
       <?php
       
		  if(isset($_GET["errmsj"]))
		  {
		  	echo $_GET["errmsj"];
		  }
    ?>
    </div>
		<a href="admin/index.php">admin login click here</a>
    
  </section>  
    </div>	
					</div>
				</div>
			</div>
			<div class="footer">
			<?php include("footer.php");?>
			</div>
		</div>
	</div>
</body>
</html>