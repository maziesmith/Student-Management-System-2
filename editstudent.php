<?php 
require('dbcon.php');
include("auth.php");
$id=$_REQUEST['id'];
$query = "SELECT * from student where id='".$id."'"; 
$result = mysql_query($query) or die ( mysql_error());
$row = mysql_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Update Record</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body background="images/bg.jpg">
<div class="form">
<?php
include("menu.php");
?>

<h1>Update Student Record</h1>
<?php 
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$id=$_REQUEST['id'];
$ussn=$_REQUEST['ussn'];
$name=$_REQUEST['name'];
$sem=$_REQUEST['sem'];
$dept=$_REQUEST['dept'];
$fname=$_REQUEST['fname'];
$mname=$_REQUEST['mname'];
$dob=$_REQUEST['dob'];
$address=$_REQUEST['address'];
$gender=$_REQUEST['gender'];
$caste=$_REQUEST['fname'];
$category=$_REQUEST['fname'];
$phone=$_REQUEST['phone'];
$base=$_REQUEST['base'];
$lastinst=$_REQUEST['lastinst'];
$lyear=$_REQUEST['lyear'];
$marks=$_REQUEST['marks'];
$update="update student set ussn='".$ussn."', name='".$name."', sem='".$sem."',dept='".$dept."',fname='".$fname."',mname='".$mname."',dob='".$dob."',address='".$address."',gender='".$gender."',caste='".$caste."',category='".$category."',phone='".$phone."',base='".$base."',lastinst='".$lastinst."',lyear='".$lyear."',marks='".$marks."' where id='".$id."'";
mysql_query($update) or die(mysql_error());
$status = "Record Updated Successfully. </br></br><a href='viewstudent.php'>View Updated Record</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}
else
{
?>
<div>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="id" type="hidden" value="<?php echo $row['id'];?>" />
<table border="2">

<tr>
<td>USSN:</td>
<td><input type="text" name="ussn" placeholder="ussn no" required="Enter ussn" size="100" value="<?php echo $row['ussn'];?>"></td>
</tr>

<tr>
<td>Name:</td>
<td><input type="text" name="name" placeholder="name" required="Enter name" size="100" value="<?php echo $row['name'];?>"></td>
</tr>

<tr>
<td>Semester:</td>
<td>
<select name="sem">
<option name="sem">1</option>
<option name="sem">2</option>
<option name="sem">3</option>
<option name="sem">4</option>
<option name="sem">5</option>
<option name="sem">6</option>
</select>
</td>
</tr>



<tr>
<td>Department:</td>
<td>
<select name="dept" value="<?php echo $row['dept'];?>">
<option name="dept" >Computer Science Engineering</option>
<option name="dept" >Informaion Science Engineering</option>
<option name="dept" >Mechanical Engineering</option>
<option name="dept" >Mechatronics Engineering</option>
<option name="dept" >Automobile Engineering</option>
<option name="dept" >Electrical and Electronics Engineering</option>
<option name="dept" >Electrical and Commmunication Engineering</option>
<option name="dept" >Civil Engineering</option>
</select>
</td>
</tr>

<tr>
<td>Father Name:</td>
<td><input type="text" name="fname" placeholder="Father Name" required="Enter Father Name" size="100" value="<?php echo $row['fname'];?>"></td>
</tr>

<tr>
<td> Mother Name: </td>
<td> <input type="text" name="mname" placeholder="Mother Name" required="Enter Mother Name" size="100" value="<?php echo $row['mname'];?>"> </td>
</tr>

<tr>
<td>Date of Birth</td>
<td><input type="date" name="dob" placeholder="yyyy-mm-dd" required="Enter DOB" size="100" value="<?php echo $row['dob'];?>"></td>
</tr>

<tr>
<td>Address:</td>
<td><input type="text" name="address" placeholder="address" required="Enter address" size="100" value="<?php echo $row['address'];?>"></td>
</tr>
<tr>

<td>Gender:</td>
<td><input type="radio" name="gender" value="Male">Male
    <input type="radio" name="gender" value="Female">Female</td>
</tr>

<tr>
<td>Caste:</td>
<td><input type="text" name="caste" placeholder="caste" required="Enter caste" size="100" value="<?php echo $row['caste'];?>"></td>
</tr>

<tr>
<td>Category:</td>
<td><input type="text" name="category" placeholder="category" required="Enter category" size="100" value="<?php echo $row['category'];?>"></td>
</tr>

<tr>
<td>Phone Number:</td>
<td><input type="number" name="phone" placeholder="Phone number" required="Enter Phone number" size="100" value="<?php echo $row['phone'];?>"></td>
</tr>

<tr>
<td>Base Education:</td>
<td><input type="radio" name="base" value="sslc">SSLC
    <input type="radio" name="base" value="puc">PUC</td>
</tr>

<tr>
<td> Last Institution :</td>
<td><input type="text" name="lastinst" placeholder="Last Studied" required="Enter last institution" size="100" value="<?php echo $row['lastinst'];?>"></td>
</tr>

<td>Studied Year:</td>
<td><input type="number" name="lyear" placeholder="year" required="Enter year" size="100" value="<?php echo $row['lyear'];?>"></td>
</tr>

<tr>
<td>Result:</td>
<td><input type="number" name="marks" placeholder="marks scored in last institution" required="Enter marks" size="100" value="<?php echo $row['marks'];?>"></td>
</tr><p><input name="submit" type="submit" value="Update" /></p>
<a href="logout.php"><button>Logout</button></a>
</form>
<?php } ?>
</div>
</div>
</body>
</html>
