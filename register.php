<html>
<head>
<title>Registration</title>
<link rel="stylesheet" href="css/stylesheet.css" />
</head>
<body background="images/bg.jpg">
<center>
<?php
require('dbcon.php');
if(isset($_POST['new']) && $_POST['new']==1)
{
$username=$_POST['username'];
$pswd=$_POST['pswd'];
$type=$_POST['type'];
$ussn=$_POST['ussn'];
$dept=$_POST['dept'];
$phno=$_POST['phno'];
$confpswd=$_POST['confpswd'];

$query="INSERT into `users` (username,pswd,type,ussn,dept,phno) VALUES ('$username','$pswd','$type','$ussn','$dept','$phno')";
$result = mysql_query($query);
if($result)
{
echo "$username your successfully register"; 
}
}
else 
{	
?>
<div class="form">
<h1 align="center">Registration</h1>
<hr color="blue">
<form name="register" action="valid.php" method="post"  >
<table border="2">

<input type="hidden" name="new" value="1"> 

<tr>
<td>Username:</td>
<td><input type="text" name="username" placeholder="username" required="Enter username" ></td>
</tr>

<tr>
<td>Password:</td>
<td><input type="password" name="pswd" placeholder="password" required="Enter password"></td>
</tr>

<tr>
<td>Confirm Password:</td>
<td><input type="password" name="confpswd" placeholder="confirm password" required="Enter password"></td>
</tr>

<tr>
<td>Type:</td>
<td><input type="radio" name="type" value="student">Lecturer
    <input type="radio" name="type" value="lecturer">Student</td>
</tr>

<tr>
<td>USSN:</td>
<td><input type="text" name="ussn" placeholder="USSN" required="Enter USSN" ></td>
</tr>

<tr>
<td>Department:</td>
<td>
<select name="dept">
<option name="dept">Computer Science Engineering</option>
<option name="dept">Informaion Science Engineering</option>
<option name="dept">Mechanical Engineering</option>
<option name="dept">Mechatronics Engineering</option>
<option name="dept">Automobile Engineering</option>
<option name="dept">Electrical and Electronics Engineering</option>
<option name="dept">Electrical and Commmunication Engineering</option>
<option name="dept">Civil Engineering</option>
</select>
</td>
</tr>

<tr>
<td>Phone Number:</td>
<td><input type="number" name="phno" placeholder="Phone number" required="Enter Phone number"></td>
</tr>

</table>
<input type="submit" name="submit" value="Register" >

</form>
</div>
<?php
}
?>

</center>
</body>
</html>