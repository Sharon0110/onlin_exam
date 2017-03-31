<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Login| online Exam</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/style_log.css" type="text/css">
    
</head>
<body>
	<div class="background">
		<div class="page">
			<a href="default.php" id="logo">
			Online Exam
			</a>
			<div class="sidebar">
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
				<div>
					<div>
						<h3>Get Hired by Exam</h3>
						
						<img src="images/doctors-and-nurse.jpg" alt="">
						<p>
							Online Exam for Employers is a technology platform for recruiters working in corporates and consultancy. Using our service
						</p>
					</div>
				</div>
			</div>
			<div class="body">
				<div class="services" style="background: white;height:500px;padding-top: 100px;">
					
                <div>
				<div>
								    
                       <?php

extract($_POST);
include("database.php");
$rs=mysql_query("select * from mst_user where login='$lid'");
if (mysql_num_rows($rs)>0)
{
	echo "<br><br><br><div class=head1>Login Id Already Exists</div>";
	exit;
}
$query="insert into mst_user(user_id,login,pass,username,address,city,phone,email) values('$uid','$lid','$pass','$name','$address','$city','$phone','$email')";
$rs=mysql_query($query)or die("Could Not Perform the Query");
echo "<br><br><br><div class=head1>Your Login ID  $lid Created Sucessfully</div>";
echo "<br><div class=head1>Please Login using your Login ID to take Quiz</div>";
echo "<br><div class=head1><a href=index.php>Login</a></div>";


?>   
				    </div>	
					</div>
				</div>
			</div>
			<div class="footer">
				<div>
					<div>
						<h4>Blog</h4>
						<p>About Online Examination website: Free online test is a leading website which provides useful and important questions regarding Aptitude, Reasoning, English, General Knowledge, Banking Sector,..

						</p>
						<a href="blog.html">Go To Blog</a>
					</div>
					<div>
						<h4>Links</h4>
						<ul>
							<li>
								<a href="default.php">Home</a>
							</li>
							<li>
								<a href="programs.php">Programs</a>
							</li>
							<li>
								<a href="about.php">About</a>
							</li>
							<li>
								<a href="services.php">Services</a>
							</li>
							<li>
								<a href="blog.html">Blog</a>
							</li>
							<li>
								<a href="contact.html">Contact</a>
							</li>
						</ul>
					</div>
					<div class="connect">
						<h4>Keep In Touch</h4>
						<a href="#" id="twitter">twitter</a> <a href="#" id="facebook">facebook</a> <a href="#" id="googleplus">google+</a>
					</div>
				</div>
				<p>
					&#169; Copyright 2012. All rights reserved
				</p>
			</div>
		</div>
	</div>
</body>
</html>