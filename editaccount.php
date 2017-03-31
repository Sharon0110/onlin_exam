<?php
        session_start();
    include("database.php");
    
?>      
<?php

    $uid=null;
        if(isset($_SESSION["login"]))
        {
         $uid=$_SESSION["login"];   
            
        }
        if(isset($_POST["sub"]))
        {
                $fld_nm=$_POST["fld_nm"];
                $nw_val=$_POST["n_val"];
                
        $q="update mst_user set $fld_nm ='$nw_val' where login='$uid'";
            
            $r=mysql_query($q,$cn);
            if($r>0)
            {
                header("location:editaccount.php?up_msj='update successfull'");
            }
        }

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>online exam |user panel edit account page</title>
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
		<div class="page"  style="height: 605px;">
			<a href="../index.php" id="logo">Online Exam</a>
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
				<div class="first" style='width:760px;height:400px;position:relative;top:-410px;left:220px;' >
		      <h2 class="page">Update Your Record</h2><br />
         <form method="post">
            <table class="table" height='200px' bgcolor="teal#">
                    <tr>
                        <td align="center">
                        choose a field
                            <select name='fld_nm'>
                                <option>name</option>
                                <option>mobile</option>
                                <option>address</option>
                                <option>email</option>
                                <option>password</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td align="center">
                        enter new value
                        <input type="text" name="n_val"/>
                        </td>
                    </tr>
                    <tr>
                            <td align="center">
            <input class='btn btn-success'type="submit" name="sub" value="udate"/>
                            </td>
                    </tr>
            </table>
        </form>
            <?php
            
                        if(isset($_GET["up_msj"]))
                        {
                            echo"<p style=>".$_GET["up_msj"]."</p>";
                        }
                        
            ?>
        		</div>
				
			</div>
			<div class="body">
				<div class="home" style="margin-top: -10px;">
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