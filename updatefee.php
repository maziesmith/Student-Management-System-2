<?php 
require('dbcon.php');
//include("auth.php");
$id=$_REQUEST['id'];
$query = "SELECT * from fee where id='".$id."'"; 
$result = mysql_query($query) or die ( mysql_error());
$row = mysql_fetch_assoc($result);
?>
<!DOCTYPE html>
<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$ussnu=$_REQUEST['ussnu'];
$dept=$_REQUEST['dept'];
$sem=$_REQUEST['sem'];
$total=$_REQUEST['total'];
$paid=$_REQUEST['paid'];
$balance=$_REQUEST['balance'];
$balances=$balance-$paid;
 
$update="update fee set ussnu='".$ussnu."', dept='".$dept."',sem='".$sem."',total='".$total."', paid='".$paid."',balance='".$balances."'";
mysql_query($update) or die(mysql_error());
$status = "Record Updated Successfully. </br></br><a href='view.php'>View Updated Record</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}
else
{
?>
<html>
<head>
<meta charset="utf-8">
<title>Update Fee details</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body background="images/bg.jpg">
<p><a href="dashboard.php">Dashboard</a> | <a href="insert.php">Insert New Record</a> | <a href="logout.php">Logout</a></p>
<h1>Update Record</h1>

<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="id" type="hidden" value="<?php echo $row['id'];?>" />

<table border="2">

<tr>
<td>USSN:</td>
<td><input type="text" name="ussnu" placeholder="USSN" required="Enter ussn" value="<?php echo $row['ussnu']; ?>"  ></td>
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
</td></tr>

<tr>
<td>Total Fee</td>																						
<td><input type="text" name="total" placeholder="Total fee" required="Enter total fee" value="<?php echo $row['total']; ?>"></td>
</tr>

<tr>
<td>Paid</td>
<td><input type="text" name="paid" placeholder="Paid amount" required="Enter paid amount" value="<?php echo $row['paid']; ?>"></td>
</tr>



</table>
<input name="submit" type="submit" value="Update" />
</form>
<?php }
 ?>
</body>
</html>
