<?php
require('dbcon.php');
include("auth.php");

$status = "";
if(isset($_POST['news']) && $_POST['news']==2)
{
$lect_id=$_REQUEST['lect_id'];
$dept=$_REQUEST['dept'];
$type=$_REQUEST['type'];
$name=$_REQUEST['name'];
$phno=$_REQUEST['phno'];
$address=$_REQUEST['address'];
$gender=$_REQUEST['gender'];
$dob=$_REQUEST['dob'];
$fname=$_REQUEST['fname'];
$mname=$_REQUEST['mname'];
$mstat=$_REQUEST['mstat']; 
$hname=$_REQUEST['hname'];
$degree=$_REQUEST['degree'];
$dgrins=$_REQUEST['dgrins'];
$wrkexp=$_REQUEST['wrkexp'];
$subhan=$_REQUEST['subhan'];
$salary=$_REQUEST['salary'];
$query="INSERT into `lecture` (lect_id,dept,type,name,phno,address,gender,dob,fname,mname,mstat,hname,degree,dgrins,wrkexp,subhan,salary) VALUES ('$lect_id','$dept','$type','$name','$phno','$address','$gender','$dob','$fname','$mname','$mstat','$hname','$degree','$dgrins','$wrkexp','$subhan','$salary')";
mysql_query($query) or die(mysql_error());
$status = "New Record Inserted Successfully.</br></br><a href='viewlecture.php'>View Inserted Record</a>";
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Lecture Entry</title>

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

<div>
<h1>Lecturer Entry</h1>

<form name="form" method="post" action=""> 
<input type="hidden" name="news" value="2">
<table class="hovertable" border="1">
<tr onmouseover="this.style.backgroundColor='#ffff66';" onmouseout="this.style.backgroundColor='#d4e3e5';">
<td>lect_id:</td>
<td><input type="text" name="lect_id" placeholder="lect_id no" required="Enter lect_id" size="100"></td>
</tr>

<tr onmouseover="this.style.backgroundColor='#ffff66';" onmouseout="this.style.backgroundColor='#d4e3e5';">
<td>Department:</td>
<td>
<select name="dept" required>
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
<tr onmouseover="this.style.backgroundColor='#ffff66';" onmouseout="this.style.backgroundColor='#d4e3e5';">
<td>Type:</td>
<td>
<select name="type">
<option name="type">Lecturer</option>
<option name="type">H.O.D</option>
</select>
</td>
</tr>

<tr onmouseover="this.style.backgroundColor='#ffff66';" onmouseout="this.style.backgroundColor='#d4e3e5';">
<td>Name:</td>
<td><input type="name" name="name" placeholder="name" required="Enter name" size="100"></td>
</tr>

<tr onmouseover="this.style.backgroundColor='#ffff66';" onmouseout="this.style.backgroundColor='#d4e3e5';">
<td>Phone Number:</td>
<td><input type="number" name="phno" placeholder="Phone number" required="Enter Phone number" size="100"></td>
</tr>

<tr onmouseover="this.style.backgroundColor='#ffff66';" onmouseout="this.style.backgroundColor='#d4e3e5';">
<td>Address:</td>
<td><input type="text" name="address" placeholder="address" required="Enter address" size="100"></td>
</tr>
<tr>

<td>Gender:</td>
<td><input type="radio" name="gender" value="Male">Male
    <input type="radio" name="gender" value="Female">Female</td>
</tr>

<tr onmouseover="this.style.backgroundColor='#ffff66';" onmouseout="this.style.backgroundColor='#d4e3e5';">
<td>Date of Birth</td>
<td><input type="date" name="dob" placeholder="yyyy-mm-dd" required="Ente DOB" size="100"></td>
</tr>


<tr onmouseover="this.style.backgroundColor='#ffff66';" onmouseout="this.style.backgroundColor='#d4e3e5';">
<td>Father Name:</td>
<td><input type="text" name="fname" placeholder="Father name" required="Enter Father name" size="100"></td>
</tr>

<tr onmouseover="this.style.backgroundColor='#ffff66';" onmouseout="this.style.backgroundColor='#d4e3e5';">
<td>Mother name:</td>
<td><input type="text" name="mname" placeholder="Mother name" required="Enter Mother name" size="100"></td>
</tr>

<tr onmouseover="this.style.backgroundColor='#ffff66';" onmouseout="this.style.backgroundColor='#d4e3e5';">
<td>Marital Status:</td>
<td><input type="radio" name="mstat" value="Single">Single
    <input type="radio" name="mstat" value="Married">Married</td>
</tr>



<tr onmouseover="this.style.backgroundColor='#ffff66';" onmouseout="this.style.backgroundColor='#d4e3e5';">
<td>Husband Name:</td>
<td><input type="text" name="hname" placeholder="not compulsory"  size="100"></td>
</tr>


<tr onmouseover="this.style.backgroundColor='#ffff66';" onmouseout="this.style.backgroundColor='#d4e3e5';">
<td>Degree:</td>
<td><input type="text" name="degree" placeholder="degree"></td>
</tr>

<tr onmouseover="this.style.backgroundColor='#ffff66';" onmouseout="this.style.backgroundColor='#d4e3e5';">
<td> Institution :</td>
<td><input type="text" name="dgrins" placeholder="Last Studied" required="Enter last institution" size="100"></td>
</tr>

<tr onmouseover="this.style.backgroundColor='#ffff66';" onmouseout="this.style.backgroundColor='#d4e3e5';">
<td> Works Experience :</td>
<td><input type="number" name="wrkexp" placeholder="Work experience" required="Enter last institution" size="100"></td>
</tr>


<tr onmouseover="this.style.backgroundColor='#ffff66';" onmouseout="this.style.backgroundColor='#d4e3e5';">
<td>Subjects handled</td>
<td><input type="name" name="subhan" placeholder="Subjects Handled" required="Enter subjects" size="100"></td>
</tr>

<tr onmouseover="this.style.backgroundColor='#ffff66';" onmouseout="this.style.backgroundColor='#d4e3e5';">
<td>Salary</td>
<td><input type="number" name="salary" placeholder="Salary" required="Enter salary" size="100"></td>
</tr>
</table>

<input type="submit" name="submit" value="submit" onclick="lectureentry.php">
<a href="logout.php"><button>Logout</button></a>
</form>
<p style="color:#FF0000;"><?php echo $status; ?></p>
</div>
</div>
</center>
</body>
</html>
