<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
	color: #0000FF;
	font-weight: bold;
}
.style2 {
	color: #990000;
	font-weight: bold;
}
-->
</style>
</head>

<body>

<h1 class="style1">Payroll management system</h1>
<p>&nbsp;</p>
<a href="home1.php">Home</a>
<a href="employee.php">Employee</a>
<a href ="login.php">loGout</a>
<p class="style2">new employee</p>
<form action="admin.php"id="form1" name="form1" method="post" >

<table width="237" border="1">
  <tr>
    <th scope="row">name</th>
    <td><input type="text" name="textfield" /></td>
  </tr>
  <tr>
    <th scope="row">phone no </th>
    <td><input type="text" name="textfield2" />
    <input type="text" name="textfield3" /></td>
  </tr>
  <tr>
    <th scope="row">email</th>
    <td><input type="text" name="textfield4" /></td>
  </tr>
  <tr>
    <th scope="row">designation</th>
    <td><input type="text" name="textfield5" /></td>
  </tr>
  <tr>
    <th scope="row">user name </th>
    <td><input type="text" name="textfield6" /></td>
  </tr>
  <tr>
    <th scope="row">password</th>
    <td><input type="text" name="textfield7" /></td>
  </tr>
  <tr>
    <th scope="row">level</th>
    <td><select name="select">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
    </select>    </td>
  </tr>
  <tr>
    <th colspan="2" scope="row"><input type="submit" name="Submit" value="Submit" /></th>
    </tr>
</table>
</form>
<p>&nbsp;</p>
</body>



</html>
<?php


?>