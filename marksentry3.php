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
$ti=$_POST['ti'];
$lect=$_POST['lect'];
$query=$query="update marks set  ti='".$ti."' where ussn='$ussn' and dept='$dept' and sem='$sem' and lect='$lect' and subid='$subid' and sname='$sname'  ";
mysql_query($query) or die(mysql_error());
$status = "New Record Inserted Successfully.</br></br><a href='viewmarks.php'>View Inserted Record</a>";
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>III Internal Marks Entry</title>
<link rel="stylesheet"  href="style.css" />
</head>
<body background="images/bg.jpg">
<?php include("menu.php");?>
<center>
<div class="form">

<div>
<h1>III Internal Marks Entry</h1>
<table class="hovertable" border="1">
<form name="form" method="post" action=""> 
<input type="hidden" name="news" value="2">
<tr>
<td>Subject:</td>
<td><select name="sname" >
                    	<option>---- Subject Name   ----</option>
                            <?php
                                $sname=mysql_query("SELECT * FROM subject");
								while($row=mysql_fetch_array($sname))
								{
								?>
                                <option  name="sname" value="<?php echo $row['sname'];?>"> <?php echo $row['sname'];?> </option>
                                	
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
<td>Third Internal Marks:</td>
<td><input type="text" name="ti" placeholder="Int Marks"  ></td>
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


<input type="submit" name="submit" value="submit" onclick="marksentry3.php">
<a href="logout.php"><button>Logout</button></a>
</form>
<p style="color:#FF0000;">
<?php
 echo $status; 
 ?>
 </p>
</div>
</div>
</center>
</body>
</html>
