<?php 
require('dbcon.php');
include("auth.php");
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
</head>
<body background="images/bg.jpg">
<div class="form">
<?php
include("menu.php");
?>

<h1>Update Subject Record</h1>
<?php 
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$id=$_REQUEST['id'];
$sname=$_REQUEST['sname'];
$sshrct=$_REQUEST['sshrct'];
$subid=$_REQUEST['subid'];
$dept=$_REQUEST['dept'];
$sem=$_REQUEST['sem'];
$lect=$_REQUEST['lect'];
$update="update subject set sname='".$sname."', sshrct='".$sshrct."', subid='".$subid."',dept='".$dept."',sem='".$sem."',lect='".$lect."'";
mysql_query($update) or die(mysql_error());
$status = "Record Updated Successfully. </br></br><a href='viewsubject.php'>View Updated Record</a>";
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
<td>Subject:</td>
<td><input type="text" name="sname" placeholder="subject name" required="Enter sname" value="<?php echo $row['sname'];?>" ></td>
</tr>

<tr>
<td>Subject Shortcut:</td>
<td><input type="text" name="sshrct" placeholder="shortcut" required="Enter enter shorcut" value="<?php echo $row['sshrct'];?>"></td>
</tr>

<tr>
<td>Subject Code:</td>
<td><input type="text" name="subid" placeholder="Subject code" required="Enter subject code" value="<?php echo $row['subid'];?>"></td>
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
<td>Lecturer</td>
         	<td>
                	<select name="lect" >
                    	<option>---- Lecturer Name   ----</option>
                            <?php
                                $name=mysql_query("SELECT * FROM lecture");
								while($row=mysql_fetch_array($name))
								{
								?>
                                <option value="<?php echo $row['name'];?>"> <?php echo $row['name'];?> </option>
                                	
								<?php	
									}
                            ?>
                    </select>
                </td>
</tr>

</table>
</tr><p><input name="submit" type="submit" value="Update" /></p>
<a href="logout.php"><button>Logout</button></a>
</form>
<?php } ?>
</div>
</div>
</body>
</html>
