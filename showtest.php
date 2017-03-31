<!DOCTYPE html>
<?php
session_start();
if(!isset($_SESSION["login"]))
{   
    $_SESSION["lf"]="please login first";
    header("location:login.php");
}
?>
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
                <div class="first"  style='overflow:auto;width:760px;height:400px;position:relative;top:-410px;left:220px;'>
				<?php
    
include("database.php");
extract($_GET);
$rs1=mysql_query("select * from mst_subject where sub_id=$subid");
$row1=mysql_fetch_array($rs1);
echo "<h1 align=center class=''><font color=blue> $row1[1]</font></h1>";
$rs=mysql_query("select * from mst_test where sub_id=$subid");
if(mysql_num_rows($rs)<1)
{
	echo "<br><br><h2 class=head1> No Quiz for this Subject </h2>";
	exit;
}
echo "<h2 class='page-header'> Select Quiz Name to Give Quiz </h2>";
echo "<table align=center class='table'>";

while($row=mysql_fetch_row($rs))
{
	echo "<tr><td align=center><a class = 'panel-body btn btn-success' href=quiz.php?testid=$row[0]&subid=$subid><font size=4>$row[2]</font></a>";
}
echo "</table>";
?>
				</div>
				
			</div>
		<div class="body">
				<div class="home" style="margin-top: -10px;">
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