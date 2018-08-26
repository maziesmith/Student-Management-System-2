<?php
require('dbcon.php');
//include("auth.php");
$status="";
if(isset($_POST['news']) && $_POST['news']==4)
{
$sname=$_REQUEST['$sname'];
$sshrct=$_REQUEST['sshrct'];
$subid=$_REQUEST['subid'];
$dept=$_REQUEST['dept'];
$sem=$_REQUEST['sem'];
$lect=$_REQUEST['lect'];
$submitby=$_SESSION["username"];
$query="INSERT into `subject` (sname,sshrct,subid,dept,sem,lect,submitby) VALUES ('$sname','$sshrct','$subid','$dept','$sem' ,'$lect','$submitby')";
mysql_query($query) or die(mysql_error());
$status = "New Record Inserted Successfully.</br></br><a href='view.php'>View Inserted Record</a>";
}
?>


<html>
<head>
<title>Subjects Entry</title>
<link rel="stylesheet" href="css/stylesheet.css" />
</head>
<body background="images/bg.jpg">
<center>

<div class="form">

<h1 align="center">Subjects Entry</h1>
<hr color="blue">

<form name="register" action="" method="post"  >

<table border="2">

<input type="hidden" name="news" value="4">

<tr>
<td>Subject:</td>
<td><input name="text" name="sname" placeholder="subject name" required="Enter sname" ></td>
</tr>

<tr>
<td>Subject Shortcut:</td>
<td><input name="text" name="sshrct" placeholder="shortcut" required="Enter enter shorcut"></td>
</tr>

<tr>
<td>Subject Code:</td>
<td><input name="text" name="subid" placeholder="Subject code" required="Enter subject code"></td>
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
                	<select name="techtxt" id="textbox">
                    	<option>---- Lecturer Name   ----</option>
                            <?php
                                $name=mysql_query("SELECT * FROM lecture");
								while($row=mysql_fetch_array($name))
								{
								?>
                                <option value="<?php echo $row['lect_id'];?>"> <?php echo $row['name'];?> </option>
                                	
								<?php	
									}
                            ?>
                    </select>
                </td>
</tr>

</table>

<input type="submit" name="submit" value="submit" onclick="subjectentry.php" >

</form>

<p style="color:#FF0000;"><?php echo $status; ?></p>

</div>

<input type="submit" name="submit" value="submit" onclick="subjectentry.php" >

</center>


</body>

</html>