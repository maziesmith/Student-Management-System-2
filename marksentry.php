<?php
require('dbcon.php');
include("auth.php");
$status = "";
if(isset($_POST['news']) && $_POST['news']==2)
{
$sname=$_POST['sname'];
$subid=$_POST['subid'];
$ussn=$_POST['ussn'];
$dept=$_POST['dept'];
$sem=$_POST['sem'];
$fi=$_POST['fi'];
$lect=$_POST['lect'];
$query="INSERT into `marks` (sname,subid,ussn,dept,sem,fi,lect) VALUES ('$sname','$subid','$ussn','$dept','$sem','$fi','$lect')";
mysql_query($query) or die(mysql_error());
$status = "New Record Inserted Successfully.</br></br><a href='viewmarks.php'>View Inserted Record</a>";
} 
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

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
<title> I Internal Marks Entry</title>
<link rel="stylesheet" href="style.css" />
</head>
<body background="images/bg.jpg">
<?php include("menu.php");?>

<center>
<div class="form" class="hovertable">

<div>
<h1>I Internal Marks Entry</h1>
<table border="1" class="hovertable">
<form name="form" method="post" action=""> 
<input type="hidden" name="news" value="2">
<tr>
<td>Subject:</td>
<td><select name="sname" >
                    	<option>---- Subject Name----</option>
                            <?php
                                $sname=mysql_query("SELECT * FROM subject");
								while($row=mysql_fetch_array($sname))
								{
								?>
                                <option name="sname" value="<?php echo $row['sname'];?>"> <?php echo $row['sname'];?> </option>
                                	
								<?php	
									}
                            ?>
                    </select></td>
</tr>

<tr>
<td>Subject Code:</td>
<td><input type="text" name="subid" placeholder="Subject code" required="Enter Subject code"></td>
</tr>

<tr>
<td>USSN:</td>
<td><input type="text" name="ussn" placeholder="USSN" required="Enter USSN"></td>
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
<td>First Internal Marks:</td>
<td><input type="text" name="fi" placeholder="Int Marks"  ></td>
</tr>

<tr>
<td>Lecturer</td>
         	<td>
                	<select name="lect" id="textbox">
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


<input type="submit" name="submit" value="submit" onclick="subjectentry.php">
<a href="logout.php"><button>Logout</button></a>
</form>
<p style="color:#FF0000;"><?php echo $status; ?></p>
</div>
</div>
</center>
</body>
</html>
