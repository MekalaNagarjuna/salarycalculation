<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Login Page</title>
<style type="text/css">
<!--
.style3 {
	color: #000099;
	font-weight: bold;
}
.style4 {color: #000099}
-->
</style>
</head>

<body><center><strong>LOGIN</strong></center>
<form action="login.php" method="post">
  <table width="253" border="2" align="center" bordercolor="#990000">
    <tr>
      <td><div align="right"><span class="style3">Username:</span></div></td>
      <td width="144"><input name="Username" type="text" id="Username" /></td>
    </tr>
    <tr>
      <td><div align="right"><strong><span class="style4">Password:</span></strong></div></td>
      <td><input name="Password" type="password" id="Password" /></td>
    </tr>
    <tr>
      <td colspan="2">
        
        <div align="center"><strong>
          <input type="submit" name="Submit" value="Login" />
          </strong></div></td>
    </tr>
  </table>
</form>
</body>
</html>
<?php
$con=mysql_connect("localhost","root","") or die (mysql_error());
$db=mysql_select_db("salary management",$con) or die(mysql_error());
if(isset($_POST['Submit']))
	{
	 $name=$_POST['Username'];
	 $pass=$_POST['Password'];
	
	if($name=='')
	{
	echo"<script>alert('Enter your name')</script>";
	exit();
	}
	if($pass=='')
	{
	echo"<script>alert('Enter your password')</script>";
	exit();
	}
	
	else
	{
	$que="insert into user_registration(username,Password) values('$name','$pass')";
	if(mysql_query($que))
	{
	echo"<script>alert('Registration Sucessful')</script>";
	echo"<script>window.open('home.php','_self')</script>";
	}
	}
	}
	

?>
