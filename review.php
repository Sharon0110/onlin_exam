<!DOCTYPE html>
<?php
session_start();
extract($_POST);
extract($_SESSION);
include("database.php");
if($submit=='Finish')
{
	mysql_query("delete from mst_useranswer where sess_id='" . session_id() ."'") or die(mysql_error());
	unset($_SESSION[qn]);
	header("Location: welcome.php");
	exit;
}
?>
<html>
<head>
	<meta charset="UTF-8">
	<title>Login| online Exam</title>
     <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
 <link rel="stylesheet" href="css/ bootstrap-theme.css" type="text/css">
   
	<link rel="stylesheet" href="css/style.css" type="text/css">
   <link rel="stylesheet" href="quiz.css" type="text/css">
   
</head>
<body style="background: url(images/bg-body.png);">
	<div class="background" >
		<div class="page" style="height: 605px;">
			<a href="default.php" id="logo">
			Online Exam 
			</a>
			<div class="sidebar" style="margin-top:-20px;">
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
                    <?php include("header.php"); ?>
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
                    	<div class="first" style='width:760px;height:400px;position:relative;top:-410px;left:220px;'>
				            
                            <?php
                    
echo "<h1 class=head1> Review Test Question</h1>";
if(!isset($_SESSION[qn]))
{
		$_SESSION[qn]=0;
}
else if($submit=='Next Question' )
{
	$_SESSION[qn]=$_SESSION[qn]+1;
	
}
$rs=mysql_query("select * from mst_useranswer where sess_id='" . session_id() ."'",$cn) or die(mysql_error());
mysql_data_seek($rs,$_SESSION[qn]);
$row= mysql_fetch_row($rs);
echo "<form name=myfm method=post action=review.php>";
echo "<table width=100%> <tr> <td width=30>&nbsp;<td> <table border=0>";
$n=$_SESSION[qn]+1;
echo "<tR><td><span class=style2>Que ".  $n .": $row[2]</style>";
echo "<tr><td class=".($row[7]==1?'tans':'style8').">$row[3]";
echo "<tr><td class=".($row[7]==2?'tans':'style8').">$row[4]";
echo "<tr><td class=".($row[7]==3?'tans':'style8').">$row[5]";
echo "<tr><td class=".($row[7]==4?'tans':'style8').">$row[6]";
if($_SESSION[qn]<mysql_num_rows($rs)-1)
echo "<tr><td><input type=submit class='btn btn-success' name=submit value='Next Question'></form>";
else
echo "<tr><td><input type=submit class='btn btn-success'name=submit value='Finish'></form>";

echo "</table></table>";
?>

                                
			         	</div>
			
			</div>
		</div>
	</div>
</body>
</html>