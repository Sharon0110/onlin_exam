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
    <style>
        .assignt 
        {
            text-decoration:none;
        
        
        }
    </style>
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
				<div class="first" class='table-responsive'style='overflow-y:scroll;width:760px;height:400px;position:relative;top:-410px;left:220px;'>
			             <?php

include("database.php");
echo "<h2 class=head1> Select Subject to Give Quiz </h2>";
$rs=mysql_query("select * from mst_subject");
echo "<table align='center' class='table' >";
while($row=mysql_fetch_row($rs))
{
	echo "<tr><td align=center ><a class='btn btn-info' href=showtest.php?subid=$row[0]><font size=4>$row[1]</font></a>";
}
echo "</table>";
?>
					
		
            
				</div>
				
                
			</div>
				<div class="body">
				<div class="home" style="margin-top:-10px;">
					<div class="featured">
							
							<div class="admin_panel_title" style='height:180px;width:800px'>
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