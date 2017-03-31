<?php
            include("database.php");
?>
<?php
session_start();

        if(isset($_POST["send"]))
        {
            $nm=$_POST["nm"];
            $eml=$_POST["eml"];
            $subj=$_POST["subj"];
            $msj=$_POST["message"];
        
        if(!isset($_SESSION["login"]))
        {
            
         $q="insert into contact_us(name,req_type,subject,Description,email,dt_tm) values('".$nm."','visitor','".$subj."','".$msj."','".$eml."','".CURRENT_TIMESTAMP."')";
             
              $r=mysql_query($q,$cn);
                    if($r>0)
                    {
                        header("location:contact.php?f_msj=your feedback have submitted");
                    }
                             
        }
            
        }

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Contact |online Exam</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	<div class="background">
		<div class="page">
			<a href="default.php" id="logo">Online Exam</a>
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
						Online Examination purpose to give their visitors all type of questions that they can easily crack the problem
						</p>
					</div>
				</div>
				<div>
					<div>
						<h3>Free Online Exam Assesments</h3>
						
						<img src="images/doctors-and-nurse.jpg" alt="">
						<p align="justify">
							About Online Examination website: Free online test is a leading website which provides useful and important questions regarding Aptitude, Reasoning, English, General Knowledge, Banking Sector, Computer, Interview tips and many more. We can say it is a completely useful for all the aspirants who is preparing for Competitive Exams like IBPS, RRB, SSC etc. Here we provide lots of online test along with solution and report page. 
						</p>
					</div>
				</div>
			</div>
			<div class="body">
				<div class="contact">
					<div>
						<div>
							<div>
								<h4>Why to contact us for Just Hire</h4>
								<p>
									Visit Online Examination website: Free online test is a leading website which provides useful and important questions regarding Aptitude, Reasoning, English, General Knowledge, Banking Sector, Computer, Interview tips and many more  <a href="#">Forums</a>.
								</p>
								<table>
									<tr>
										<td><span>Location</span>
											<p>
												to contact us is just by  you can emai, us
											</p></td>
										<td><span>Department</span>
											<p>
												(222) 987 65 43 2100 <br> (687) 123 45 67 8900
											</p></td>
										<td><span>Department</span>
											<p>
												(123) 456 789 00 <br> (987) 654 321 00
											</p></td>
									</tr>
									<tr>
										<td><span>Email</span>
											<p>
												<a href="#">
											onlineExamfreeSolution.com
											<br>
											or<br>
											onlinexamfreeSol@gmail.com
												</a> 
											</p></td>
										<td><span>Department</span>
											<p>
												(123) 456 789 00 <br> (987) 654 321 00
											</p></td>
										<td><span>Department</span>
											<p>
												(222) 987 65 43 2100 <br> (687) 123 45 67 8900
											</p></td>
									</tr>
								</table>
							</div>
							<div>
								<div>
									<h4>Send a message</h4>
									<form action="#"method="post" >
										<label for="name">Your Name:</label>
										<input type="text" name="nm" id="name"/>
                                        
										<label for="email">subject:</label>
										<input type="text" name="subj" id="email"/>
										<label for="email">Email Address:</label>
										<input type="email" name="eml" id="email"/>
										<label for="message">Message:</label>
										<textarea name="message" id="message" cols="30" rows="10"></textarea>
										<span>
										<input type="submit" name="send" value="Send">
										</span>
									</form>
                                    <br /><br /><br />
                                    <?php 
                                        if(isset($_GET["f_msj"]))
                                        {
                                            echo"<b style='color:green;'>".$_GET["f_msj"]."</b>";
                                        }
                                 ?>
								</div>
                                
								<div>
									<div>
										<h4>Programs</h4>
										<h3>
										Free Online Exam
										</h3>
										<p>
											online Exam provides free online exams for candidates in .Net, Java, LAMP, SQL Server, Oracle, C++, OS and more.
										</p>
										<span><a href="programs.html">Learn More</a></span>
									</div>
									<div>
										<h4>Online Assesments</h4>
										
										<ul>
											<li>
												<p>
													C asesments
												</p>
											</li>
											<li>
												<p>
													programming Assesments
												</p>
											</li>
											<li>
												<p>
												web programming
												</p>
											</li>
											<li>
												<p>
												Cloud Computing Assesments
												</p>
											</li>
											<li>
												<p>
													Adndroid Assesments
												</p>
											</li>
										
										</ul>
										<span><a href="services.html">Learn More</a></span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="footer">
				<div>
					<div>
						<h4>Blog</h4>
						<p>
							This website template has been designed by Free Website Templates for you, for free. You can replace all this text with your own text.
						</p>
						<a href="#">Go To Blog</a>
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
								<a href="contact.php">Contact</a>
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