<html>
<head><title> PHP LOGIN</title></head>
<body bgcolor="orange"><center>
  <span class="style1"> Sign In Here</span>
</center>
<form action="login.php" method="post">
<table width="274" border="1" align="center">
  <tr>
    <td width="115"><div align="right"><span class="style2">User Name : </span></div></td>
    <td width="144"><input name="uname" type="text" id="uname" />  </td>
  </tr>
  <tr>
    <td><div align="right"><span class="style2">Password:</span></div></td>
    <td><input name="upass" type="password" id="upass" /></td>
  </tr>
 
  <tr>
    <td colspan="2">
      <div align="center">
        <input type="submit" name="login" value="Login" />
        </div></td>
    </tr>
</table>





</form>
</body>
</html>
<?php
$con=mysql_connect("localhost","root","") or die (mysql_error());
$db=mysql_select_db('salary management',$con) or die (mysql_error());
if(isset($_POST['login']))
{
   $uname=$_POST['uname'];
   $upass=$_POST['upass'];
  
   if($uname=='')
   {
   echo "<script>window.open('login.php?name=please enter ur name','_self')</script>";
   exit();
   }
     if($upass=='')
   {
   echo "<script>window.open('login.php?pass=Please Enter Ur pass','_self')</script>";
   exit();
   }
  else
  {
 	$query="select * from user_registration where uname='$uname' AND upass='$upass'";
   $run=mysql_query($query)or die(mysql_error()); 
   if(mysql_num_rows($run)>0)
   {
   echo "<script>window.open('employee.php','_self')</script>";
   }
  }
   
   }
?>
