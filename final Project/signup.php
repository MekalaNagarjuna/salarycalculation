<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Sign Up Page</title>
<style type="text/css">
<!--
.style1 {color: #FF0000}
.style2 {
	color: #00CC00;
	font-weight: bold;
}
.style3 {
	color: #00CC33;
	font-weight: bold;
}
-->
</style>
</head>

<body bgcolor="black"><center>
  <span class="style1"> Signup</span>
</center>
<form action="signup.php" method="post">
<table width="274" border="1" align="center">
  <tr>
    <td width="115"><div align="right"><span class="style2">User Name : </span></div></td>
    <td width="144"><input name="uname" type="text" id="uname" /></td>
  </tr>
  <tr>
    <td><div align="right"><span class="style2">Password:</span></div></td>
    <td><input name="upass" type="password" id="upass" /></td>
  </tr>
  <tr>
    <td><div align="right"><span class="style3">Email:</span></div></td>
    <td><input name="email" type="text" id="email" /></td>
  </tr>
  <tr>
    <td colspan="2">
      <div align="center">
        <input type="submit" name="Submit" value="Signup" />
        </div></td>
    </tr>
</table>





</form>
</body>
</html>
<?php
$con=mysql_connect("localhost","root","") or die (mysql_error());
$db=mysql_select_db('salary management',$con) or die (mysql_error());
if (isset($_POST['Submit']))
{
 $name=$_POST['uname'];
 $pass=$_POST['upass'];
 $email=$_POST['email'];
 if($name=='')
 {
 echo "<script>alert('Please Enter Ur Name')</script>";
 exit();
 }
  if($pass=='')
 {
 echo "<script>alert('Please Enter a password')</script>";
 exit();
 }
  if($email=='')
 {
 echo "<script>alert('Please Enter Ur Email')</script>";
 exit();
 }
 else
 {
 $que="insert into user_registration(uname,upass,uemail) values('$name','$pass','$email')";
 if(mysql_query($que))
 {
 echo"<script>alert('Registration Sucessful')</script>";
 echo "<script>window.open('login.php','_self')</script>";
 }
 }
 }



?>
