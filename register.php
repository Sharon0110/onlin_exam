<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Login| online Exam</title>
     <link rel="stylesheet" href="quiz.css" type="text/css">
   
	<link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/style_log.css" type="text/css">
    <script language="javascript">
function check()
{

 if(document.form1.lid.value=="")
  {
    alert("Plese Enter Login Id");
	document.form1.lid.focus();
	return false;
  }
 
 if(document.form1.pass.value=="")
  {
    alert("Plese Enter Your Password");
	document.form1.pass.focus();
	return false;
  } 
  if(document.form1.cpass.value=="")
  {
    alert("Plese Enter Confirm Password");
	document.form1.cpass.focus();
	return false;
  }
  if(document.form1.pass.value!=document.form1.cpass.value)
  {
    alert("Confirm Password does not matched");
	document.form1.cpass.focus();
	return false;
  }
  if(document.form1.name.value=="")
  {
    alert("Plese Enter Your Name");
	document.form1.name.focus();
	return false;
  }
  if(document.form1.address.value=="")
  {
    alert("Plese Enter Address");
	document.form1.address.focus();
	return false;
  }
  if(document.form1.city.value=="")
  {
    alert("Plese Enter City Name");
	document.form1.city.focus();
	return false;
  }
  if(document.form1.phone.value=="")
  {
    alert("Plese Enter Contact No");
	document.form1.phone.focus();
	return false;
  }
  if(document.form1.email.value=="")
  {
    alert("Plese Enter your Email Address");
	document.form1.email.focus();
	return false;
  }
  e=document.form1.email.value;
		f1=e.indexOf('@');
		f2=e.indexOf('@',f1+1);
		e1=e.indexOf('.');
		e2=e.indexOf('.',e1+1);
		n=e.length;

		if(!(f1>0 && f2==-1 && e1>0 && e2==-1 && f1!=e1+1 && e1!=f1+1 && f1!=n-1 && e1!=n-1))
		{
			alert("Please Enter valid Email");
			document.form1.email.focus();
			return false;
		}
  return true;
  }
  
</script>
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
				<h4 style="font-size:30px;margin-left:100px;">Registration Here</h4>
			 <br />
             <div style="width: 700px;">
			
				
   <table  border="0"  align="center" style="margin-left: 200px;" bgcolor="">
  
   <tr>
     <td><form name="form1" method="post" action="signupuser.php" onSubmit="return check();">
       <table width="301" border="0" align="left">
         <tr>
           <td><div align="left" class="style7">Login Id </div></td>
           <td><input type="text" name="lid"></td>
         </tr>
         <tr>
           <td class="style7">Password</td>
           <td><input type="password" name="pass"></td>
         </tr>
         <tr>
           <td class="style7">Confirm Password </td>
           <td><input name="cpass" type="password" id="cpass"></td>
         </tr>
         <tr>
           <td class="style7">Name</td>
           <td><input name="name" type="text" id="name"></td>
         </tr>
         <tr>
           <td valign="top" class="style7">Address</td>
           <td><textarea name="address" id="address"></textarea></td>
         </tr>
         <tr>
           <td valign="top" class="style7">City</td>
           <td><input name="city" type="text" id="city"></td>
         </tr>
         <tr>
           <td valign="top" class="style7">Phone</td>
           <td><input name="phone" type="text" id="phone"></td>
         </tr>
         <tr>
           <td valign="top" class="style7">E-mail</td>
           <td><input name="email" type="text" id="email"></td>
         </tr>
         <tr>
           <td>&nbsp;</td>
           <td><input type="submit" name="Submit" value="Signup">
           </td>
         </tr>
       </table>
     </form></td>
   </tr>
 </table> 
                      	
					</div>
				</div>
			</div>
			<div class="footer">
				
			         <?php include("footer.php");?>
			</div>
		</div>
	</div>
</body>
</html>