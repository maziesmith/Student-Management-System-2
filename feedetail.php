

<?php
require('dbcon.php');
include("auth.php");
$status = "";
if(isset($_POST['news']) && $_POST['news']==2)
{
$ussnu=$_POST['ussnu'];
$dept=$_POST['dept'];
$sem=$_POST['sem'];
$total=$_POST['total'];
$paid=$_POST['paid'];
$balance=$total-$paid;

$query="INSERT into `fee` (ussnu,dept,sem,total,paid,balance) VALUES ('$ussnu','$dept','$sem','$total','$paid' ,'$balance')";
mysql_query($query) or die(mysql_error());
$status = "New Record Inserted Successfully.</br></br><a href='viewfee.php'>View Inserted Record</a>";
}
?>
 <!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Subject Entry</title>
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
<link rel="stylesheet" href="style.css" />
</head>
<body background="images/bg.jpg">
<?php
include("menu.php");
?>

<center>
<div class="form">

<div>
<h1>Fee Detail Entry</h1>
<table class="hovertable">
<form name="form" method="post" action=""> 
<input type="hidden" name="news" value="2">
<tr>
<td>USSN:</td>
<td><input type="text" name="ussnu" placeholder="USSN" required="Enter ussn"  ></td>
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
<td>Total Fee</td>
<td><input type="text" name="total" placeholder="Total fee" required="Enter total fee"></td>
</tr>

<tr>
<td>Paid</td>
<td><input type="text" name="paid" placeholder="Paid amount" required="Enter paid amount"></td>
</tr>


</table>


<input type="submit" name="submit" value="submit" onclick="feedetail.php">
<a href="logout.php"><button>Logout</button></a>
</form>
<p style="color:#FF0000;"><?php echo $status; ?></p>
</div>
</div>
</center>
</body>
</html>
