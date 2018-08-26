<?php 
require('dbcon.php');
include("auth.php");
$id=$_REQUEST['id'];
$query = "SELECT * from lecture where id='".$id."'"; 
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

<h1>Update Lecturer Record</h1>
<?php
$status = ""; 
if(isset($_POST['new']) && $_POST['new']==1)
{
$id=$_REQUEST['id'];
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
$update="update lecture set lect_id='".$lect_id."',dept='".$dept."',type='".$type."', name='".$name."',phno='".$phno."',address='".$address."',fname='".$fname."',mname='".$mname."',mstat='".$mstat."',hname='".$hname."',degree='".$degree."',dgrins='".$dgrins."',wrkexp='".$wrkexp."',subhan='".$subhan."',salary='".$salary."'";
mysql_query($update) or die(mysql_error());
$status = "Record Updated Successfully. </br></br><a href='viewlecture.php'>View Updated Record</a>";
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
<td>lect_id:</td>
<td><input type="text" name="lect_id" placeholder="lect_id no" required="Enter lect_id" size="100" value="<?php echo $row['lect_id']; ?>"></td>
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
<td>Type:</td>
<td>
<select name="type">
<option name="type">Lecturer</option>
<option name="type">H.O.D</option>
</select>
</td>
</tr>

<tr>
<td>Name:</td>
<td><input type="name" name="name" placeholder="name" required="Enter Phone number" size="100" value="<?php echo $row['name'];?>"></td>
</tr>

<tr>
<td>Phone Number:</td>
<td><input type="number" name="phno" placeholder="Phone number" required="Enter Phone number" size="100" value="<?php echo $row['phno'];?>"></td>
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
<td>Date of Birth</td>
<td><input type="date" name="dob" placeholder="yyyy-mm-dd" required="Enter DOB" size="100" value="<?php echo $row['dob'];?>" /></td>
</tr>


<tr>
<td>Father Name:</td>
<td><input type="text" name="fname" placeholder="Father name" required="Enter Father name" size="100" value="<?php echo $row['fname'];?>"></td>
</tr>

<tr>
<td>Mother name:</td>
<td><input type="text" name="mname" placeholder="Mother name" required="Enter Mother name" size="100" value="<?php echo $row['mname'];?>"></td>
</tr>


<td>Marital Status:</td>
<td><input type="radio" name="mstat" value="Single">Single
    <input type="radio" name="mstat" value="Married">Married</td>
</tr>



<tr>
<td>Husband Name:</td>
<td><input type="text" name="hname" placeholder="not compulsory"  size="100" value="<?php echo $row['hname'];?>"></td>
</tr>


<tr>
<td>Degree:</td>
<td><input type="text" name="degree" placeholder="degree"value="<?php echo $row['degree'];?>"></td>
</tr>

<tr>
<td> Institution :</td>
<td><input type="text" name="dgrins" placeholder="Last Studied" required="Enter last institution" size="100" value="<?php echo $row['dgrins'];?>"> </td>
</tr>

<tr>
<td> Works Experience :</td>
<td><input type="number" name="wrkexp" placeholder="Work experience" required="Enter last institution" size="100" value="<?php echo $row['wrkexp'];?>"></td>
</tr>


<tr>
<td>Subjects handled</td>
<td><input type="name" name="subhan" placeholder="Subjects Handled" required="Enter subjects" size="100" value="<?php echo $row['subhan'];?>"></td>
</tr>

<tr>
<td>Salary</td>
<td><input type="number" name="salary" placeholder="Salary" required="Enter salary" size="100" value="<?php echo $row['salary'];?>"></td>
</tr>

</table>

<input name="submit" type="submit" value="Update" /></p>

<a href="logout.php"><button>Logout</button></a>
</form>

<?php } ?>
</div>
</div>
</body>
</html>
