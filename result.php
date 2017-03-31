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
	<title>Login| online Exam</title>
   
     <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="css/ bootstrap-theme.css" type="text/css">
   
    <link rel="stylesheet" href="css/style.css" type="text/css">
   
</head>
<body style="background: url(images/bg-body.png);">
	<div class="background">
		<div class="page" style="height: 605px;">
			<a href="default.php" id="logo">
			Online Exam
			</a>
			<div class="sidebar">
				<ul>
					<li>
						<a href="welcome.php">Profile</a>
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
			             <?php

include("database.php");
extract($_SESSION);
$rs=mysql_query("select t.test_name,t.total_que,r.test_date,r.score from mst_test t, mst_result r where
t.test_id=r.test_id and r.login='$login'",$cn) or die(mysql_error());

echo "<h1 class = 'page'> Result </h1>"."<Br>";
if(mysql_num_rows($rs)<1)
{
	echo "<br><br><h1 class=head1> You have not given any quiz</h1>";
	exit;
}
echo "<table class='table table-hover' align=center>
<tr class='info'><td width=300>Test Name <td> Total<br> Question <td> Score";
while($row=mysql_fetch_row($rs))
{
echo "<tr class='success'><td>$row[0] <td align=center> $row[1] <td align=center> $row[3]";
}
echo "</table>";
?>
				</div>
			
			</div>
				<div class="body">
				<div class="home" style="margin-top:-10px;">
					<div class="featured">
							
							<div class="admin_panel_title" style='height:180px;width:800px;'>
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