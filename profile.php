<?php
    session_start();
    if(!isset($_SESSION["login"]))
{   
    $_SESSION["lf"]="please login first";
    header("location:login.php");
}
    include("database.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>online exam |user panel profile page</title>
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
	<div class="background">
		<div class="page" style="height:605px;">
			<a href="../index.php" id="logo">Online Exam</a>
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
				<div class="first" style='width:760px;height:400px;position:relative;top:-410px;left:220px;'>
				        <h1 class="page-header" style="margin:0;">profile</h1>
                	   
                    <?php
                $u=$_SESSION["login"];
                $query="select *from mst_user where login='$u'";
                //echo $query;    
                    $r=mysql_query($query,$cn);
                    
            if($row=mysql_fetch_array($r,MYSQL_ASSOC))
            {
                $_SESSION["unm"]=$row["login"];
                    echo"<table class='table' align='center' class='user_tbl'>";
                            echo"<tr>";
                                    echo"<th>Login Name</th>";
                                    echo"<td>".$row["login"]."</td>";
                            echo"</tr>";
                           
                             echo"<tr>";
                                    echo"<th>Email</th>";
                                    echo"<td>".$row["email"]."</td>";
                            echo"</tr>";
                            echo"<tr>";
                                    echo"<th>password</th>";
                                    echo"<td>".$row["pass"]."</td>";
                            echo"</tr>";
                            
                            echo"<tr>";
                                    echo"<th>username</th>";
                                    echo"<td>".$row["username"]."</td>";
                            echo"</tr>";
                            echo"<tr class='addr'>";
                                    echo"<th>address</th>";
                                    echo"<td>".$row["address"]."</td>";
                            echo"</tr>";
                            echo"<tr>";
                                    echo"<th>Mobile no</th>";
                                    echo"<td>".$row["phone"]."</td>";
                            echo"</tr>";
                           
                    echo"</table>";
      } 
              else
              {
                echo"no record found";
              }
                  
    
                    ?>
				</div>
				
			</div>
			<div class="body">
				<div class="home" style="margin-top: -10px;">
					<div class="featured">
							
							<div class="admin_panel_title" style='height:180px;'>
								<p align='center' style='color:grey;font-family:agency fb;font-size:40px;font-weight:600;'>
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