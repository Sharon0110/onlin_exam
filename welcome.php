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
	<link rel="stylesheet" href="css/style.css" type="text/css">
    
</head>
<body style="background: url(images/bg-body.png);">
	<div class="background" style="height: 605px;">
		<div class="page">
			<a href="default.php" id="logo">
			Online Exam
			</a>
			<div class="sidebar">
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
                	<div class="first" style='width:760px;height:360px;position:relative;top:-385px;left:230px;'>
					<?php

include("database.php");
extract($_POST);

if(isset($submit))
{
	$rs=mysql_query("select * from mst_user where login='$loginid' and pass='$pass'");
	if(mysql_num_rows($rs)<1)
	{
		$_SESSION["found"]="N";
	}
	else
	{
		$_SESSION["login"]=$loginid;
	}
}
if (isset($_SESSION["login"]))
{
    echo "<h1 class='page' align=center>Wel come to Online Exam</h1>";
        echo"<b style='display:block;margin-left:200px;'>start quiz --</b>";
		echo '<table width="88%"  border="0"  align="center">
  <tr>
    <td   valign="bottom" align=center><img src="images/HLPBUTT2.JPG" width="50" height="50" align="middle"></td>
    <td  valign="bottom" bordercolor="#0000FF" align=center> <a class="btn btn-info" href="sublist.php" class="style4">Subject for Quiz </a></td>
  </tr>
  <tr>
    <td valign="bottom" align=center><img src="images/DEGREE.JPG" width="43" height="43" align="absmiddle"></td>
    <td valign="bottom" align=center> <a href="result.php"  class="btn btn-info">Result </a></td>
  </tr>
</table>';
   		exit;
}
if(isset($_SESSION["found"]))
{
    header("location:login.php?errmsj=wrong username and password");
}
?>
				</div>
                
				
			</div>
			<div class="body">
				<div class="home" >
					<div class="featured">
							
							<div class="admin_panel_title" style='height:180px;'>
								<p align='center'style='color:grey;font-family:agency fb;font-size:40px;font-weight:600;margin-top:70px;margin-left:-40px;'>
										User Panel
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