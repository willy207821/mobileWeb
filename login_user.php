<?php
session_start();
$_SESSION['active_user']=null;
?>
<!DOCTYPE html>
<html>
<head>
<title>Login Form</title>
<link type="text/css "rel="stylesheet" href="css/login_design.css"/>
</head>
<body class='site'>
<div class='head'>JIL Hagonoy Praise and Worship Songs </div>
<!--Login Form-->
<form method='POST' action='login_process.php'>
	<div class = 'login' >
		<p>Please enter your credentials to login</p> 
		<div class ='usernane'>
		<input type='text' name='username' placeholder='User Name'/>
		</div>
		<div class ='password'>
 		<input type='password' name='password'placeholder='Password'>
 		</div>
 		<div class ='button'>
   		<input type='submit' name='submit' value='Sign In'>
   		</div>
   		<div id='register'><a href='register.php'>Sign Up</a></div>
	</div>
</form>
<?php
if(!isset($_GET['signup']))
{
	exit();
}else
{
	$check_signup=$_GET['signup'];
	if($check_signup=='empty')
	{
		print "<div class='error'><p>".'you must fill up the form to enter'.'</p></div>';
	}
	if($check_signup=='notregistered')
	{
		print "<div class='error'><p>".'wrong username or password'.'</p></div>';
	}
}
	


?>

</body>
</html>
