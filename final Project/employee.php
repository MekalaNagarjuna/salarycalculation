<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Employee page</title>
</head>

<body bgcolor="magenta">
<h1> Employee </h1>
<p>&nbsp;</p>
<a  href="home.php">home</a>
<a href="logout.php">log out</a>
<form id="form1" name="form1" method="post" action="">
  <table width="347" height="30" border="1">
    <tr>
      <td width="132">Name</td>
      <td width="52"><input type="text" name="uname" /></td>
    </tr>
    <tr>
      <td colspan="2">
        
        <div align="center">
          <input type="submit" name="Submit" value="Submit" />
        </div></td>
    </tr>
  </table>
</form>
</body>
</html>
<?php
$con=mysql_connect("localhost","root","") or die (mysql_error());
$db=mysql_select_db('salary management',$con) or die (mysql_error());

if(isset($_POST['Submit']))
{
   $uname=$_POST['uname'];
   
   if($uname=='')
   {
   echo "<script>('please enter ur name')</script>";
   exit();
   }
   
   else 
   {
   
   $q="select basic as q from salary where uname='$uname'";
   $result=mysql_query($q);
  	while($info=mysql_fetch_array($result))
	{
   print "grade=" .$info['q']."";
   
  	}
	echo "<script>window.open('login.php','_self')</script>";
  }
  
}
?>
