<?php 
require('dbcon.php');
//include("auth.php");
$id=$_REQUEST['id'];
$query = "SELECT * from subject where id='".$id."'"; 
$result = mysql_query($query) or die ( mysql_error());
$row = mysql_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Update Record</title>
<link rel="stylesheet" href="css/style.css" />
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
<p><a href="dashboard.php">Dashboard</a> | <a href="insert.php">Insert New Record</a> | <a href="logout.php">Logout</a></p>
<h1>Update Fee</h1>
<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$id=$_REQUEST['id'];
$ussnu=$_REQUEST['ussnu'];
$dept=$_REQUEST['dept'];
$sem=$_REQUEST['sem'];
$total=$_REQUEST['total'];
$paid=-$_REQUEST['paid'];
$balance=$_REQUEST['balance'];
$update="update subject set ussnu='".$ussnu."', dept='".$dept."',sem='".$sem."',total='".$total."',paid='".$paid."', balances='".$balance."' where id='".$id."' ";
mysql_query($update) or die(mysql_error());
$status = "Record Updated Successfully. </br></br><a href='viewfee.php'>View Updated Record</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}
else
{
?>
<div>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="id" type="hidden" value="<?php echo $row['id'];?>" />

<table class="hovertable" border="2">

<tr>
<td>USSN:</td>
<td><input type="text" name="ussnu" placeholder="USSN" required="Enter sname" value="<?php echo $row['ussnu'];?>" ></td>
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
<td>Total:</td>
<td><input type="text" name="total" placeholder="total" required="Enter sname" value="<?php echo $row['total'];?>" ></td>
</tr>

<tr>
<td>Paid:</td>
<td><input type="text" name="paid" placeholder="paid" required="Enter sname" value="<?php echo $row['paid'];?>" ></td>
</tr>

<tr>
<td>Balance</td>
<td><input type="text" name="balance" placeholder="paid" required="Enter sname" value="<?php echo $row['balance'];?>" ></td>
</tr>


</table>
</tr><p><input name="submit" type="submit" value="Update" /></p>

</form>
<?php } ?>
</div>
</div>
</ceneter>
</body>
</html>
