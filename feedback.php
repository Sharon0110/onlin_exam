<?php
    session_start();
    if(!isset($_SESSION["login"]))
{   
    $_SESSION["lf"]="please login first";
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>online exam | user panel feedback page</title>
     <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
 <link rel="stylesheet" href="css/ bootstrap-theme.css" type="text/css">
   
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<style>
			.admin_panel_title p{
			
					width:800px;
					height:300px;
			
			}
	</style>
</head>
<body>
	<div class="background" >
		<div class="page" style="height: 605px;">
        
			<a href="default.php" id="logo">Online Exam</a>
			<div class="sidebar" >
				<ul>
					<li>
						<a href="profile.php">Profile</a>
					</li>
					<li>
						<a href="editaccount.php">Edit Account</a>
					</li>
					<li class="selected">
						<a href="sublist.php">Subjects</a>
					</li>
			
            		<li>
						<a href="result.php">Results</a>
					</li>
					<li>
						<a href="feedback.php">feedback</a>
					</li>
					<li>
						<a href="welcome.php">home</a>
					</li>
                     <?php include("header.php"); ?>
				
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
				<div class="first" style='width:760px;height:400px;position:relative;top:-410px;left:220px;'>
					
			          
								<div >
									<h4>Send a message</h4>
									<form action="fHandler.php" method="post" role = "form">
									<div class = "form-group">
                                    	<label for="name">Your Name:</label>
										<input type="text" class = "form-control" id="name" name="nm">
                                    </div>
                                    <div class = "form-group">
										<label for="name">Subject:</label>
										<input type="text" class = "form-control" id="name" name="subj">
									</div>
                                    <div class = "form-group">
                                        <label for="email">Email Address:</label>
										<input type="email"  class = "form-control" id="email" name="eml" >
									</div>
                                    <div class = "form-group">
                                        <label for="message">Message:</label>
										<textarea name="message" class = "form-control"id="message" cols="30" rows="1"></textarea>
									</div>
                                        
										<input type="submit" name="send" class="btn btn-primary" value="Send">
										
									</form>
								</div>
							<?php
                                    if(isset($_GET["f_msj"]))
                                    {
                                        echo"<b style='color:green;'>".$_GET["f_msj"]."</b>";
                                    }
                            ?>
					
				</div>
				
			</div>
			<div class="body">
				<div class="home" style="margin-top:-10px;">
					<div class="featured">
							
							<div class="admin_panel_title" style='height:180px;'>
								<p align='center'style='color:grey;font-family:agency fb;font-size:40px;font-weight:600;'>
										<?php
                                        if(isset($_SESSION["unm"]))
                                        {
                                            echo"<span style='margin-left:333px;'>".$_SESSION["unm"]."</span>";
                                        }
                                        ?>
								</p>
							</div>
						
					</div>
					
				</div>
			</div>
		
		</div>
	</div>
</body>
</html>