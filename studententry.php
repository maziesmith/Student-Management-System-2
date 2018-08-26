
<?php
require('dbcon.php');
include("auth.php");
$status="";
if(isset($_POST['new']) && $_POST['new']==1)
{
$ussn=$_POST['ussn'];
$name=$_POST['name'];
$sem=$_POST['sem'];
$dept=$_POST['dept'];
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$dob=$_POST['dob'];
$address=$_POST['address'];
$gender=$_POST['gender'];
$caste=$_POST['caste'];
$category=$_POST['category'];
$phone=$_POST['phone'];
$base=$_POST['base'];
$lastinst=$_POST['lastinst'];
$lyear=$_POST['lyear'];
$marks=$_POST['marks'];
$query="INSERT into `student` (ussn,name,sem,dept,fname,mname,dob,address,gender,caste,category,phone,base,lastinst,lyear,marks) VALUES ('$ussn','$name','$sem','$dept','$fname','$mname','$dob','$address','$gender','$caste','$category','$phone','$base','$lastinst','$lyear','$marks')";
mysql_query($query) or die(mysql_error());
$status = "New Record Inserted Successfully.</br></br><a href='viewstudent.php'>View Inserted Record</a>";
 
}
	
?>
<html>
<head>
<title>Student Entry</title>
<link rel="stylesheet" href="css/stylesheet.css" />
<style type="text/css">
table.hovertable {
	font-family: verdana,arial,sans-serif;
	font-size:11px;
	color:#333333;
	border-width: 1px;
	border-color: #999999;
	border-collapse: collapse;
}
table.hovertable th {
	background-color:#c3dde0;
	border-width: 1px;
	padding: 8px;
	border-style: solid;
	border-color: #a9c6c9;
}
table.hovertable tr {
	background-color:#d4e3e5;
}
table.hovertable td {
	border-width: 1px;
	padding: 8px;
	border-style: solid;
	border-color: #a9c6c9;
}
</style>
</head>
<body background="images/bg.jpg">
<center>
<div class="form">
<h1 align="center">Student Information</h1>
<hr color="blue">
<form name="register" action="" method="post"  >

<input type="hidden" name="new" value="1">
<table border="2" class="hovertable">

<tr>
<td>USSN:</td>
<td><input type="text" name="ussn" placeholder="ussn no" required="Enter ussn" size="100"></td>
</tr>

<tr>
<td>Name:</td>
<td><input type="text" name="name" placeholder="name" required="Enter name" size="100"></td>
</tr>

<tr>
<td>Semester:</td>
<td><input type="number" name="sem" placeholder="sem" required="Enter sem" size="100"></td>
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
<td>Father Name:</td>
<td><input type="text" name="fname" placeholder="Father Name" required="Enter Father Name" size="100"></td>
</tr>

<tr>
<td> Mother Name: </td>
<td> <input type="text" name="mname" placeholder="Mother Name" required="Enter Mother Name" size="100"> </td>
</tr>

<tr>
<td>Date of Birth</td>
<td><input type="date" name="dob" placeholder="yyyy-mm-dd" required="Enter DOB" size="100"></td>
</tr>

<tr>
<td>Address:</td>
<td><input type="text" name="address" placeholder="address" required="Enter address" size="100"></td>
</tr>
<tr>

<td>Gender:</td>
<td><input type="radio" name="gender" value="Male">Male
    <input type="radio" name="gender" value="Female">Female</td>
</tr>

<tr>
<td>Caste:</td>
<td><input type="text" name="caste" placeholder="caste" required="Enter caste" size="100"></td>
</tr>

<tr>
<td>Category:</td>
<td><input type="text" name="category" placeholder="category" required="Enter category" size="100"></td>
</tr>

<tr>
<td>Phone Number:</td>
<td><input type="number" name="phone" placeholder="Phone number" required="Enter Phone number" size="100"></td>
</tr>

<tr>
<td>Base Education:</td>
<td><input type="radio" name="base" value="sslc">SSLC
    <input type="radio" name="base" value="puc">PUC</td>
</tr>

<tr>
<td> Last Institution :</td>
<td><input type="text" name="lastinst" placeholder="Last Studied" required="Enter last institution" size="100"></td>
</tr>

<td>Studied Year:</td>
<td><input type="number" name="lyear" placeholder="year" required="Enter year" size="100"></td>
</tr>

<tr>
<td>Result:</td>
<td><input type="number" name="marks" placeholder="marks scored in last institution" required="Enter marks" size="100"></td>
</tr>

</table>
<input type="submit" name="submit" value="submit" onclick="studententry.php" >
<a href="logout.php"><button>Logout</button></a>
</form>
<p style="color:#FF0000;"><?php echo $status; ?></p>
</div>

</center>
</body>
</html>