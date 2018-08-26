<?php 
require('dbcon.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>View Records</title>
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
	border-style: solid ;
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
<div class="form">
<p><a href="index.php">Home</a> | <a href="insertmarks.php">Insert New Record</a> | <a href="logout.php">Logout</a></p>
<form action="" method="post">
<input type="hidden" name="new" value="1">
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

</form>

<h2>View Records</h2>
<table width="100%" border="1" style="border-collapse:collapse;" class="hovertable">
<thead>
<tr>
<th><strong>SL No</strong></th>
<th><strong>Subject Name</strong></th>
<th><strong>Subject Code</strong></th>
<th><strong>USSN</strong></th>
<th><strong>Department</strong></th>
<th><strong>Semester</strong></th>
<th><strong>First Internal Marks</strong></th>
<th><strong>Second Internal Marks</strong></th>
<th><strong>Third Internal Marks</strong></th>
<th><strong>Subject Handled Lecturer</strong></th>
<th><strong>Edit</strong></th>
<th><strong>Delete</strong></th>
</tr>
</thead>
<t<body background="images/back.jpg">>
<?php
if(isset($_POST['new']) && $_POST['new']==1)
{
$dept=$_POST["dept"];
}
$count=1; 
$sel_query="Select * from marks ORDER BY ussn where dept="$dept" ;";
$result = mysql_query($sel_query);
while($row = mysql_fetch_assoc($result)) 
{
?>
<tr onmouseover="this.style.backgroundColor='#ffff66';" onmouseout="this.style.backgroundColor='#d4e3e5';" align="center" >
<td align="center"><?php echo $count; ?></td>
<td align="center"><?php echo $row["sname"]; ?></td>
<td align="center"><?php echo $row["subid"]; ?></td>
<td align="center"><?php echo $row["ussn"]; ?></td>
<td align="center"><?php echo $row["dept"]; ?></td>
<td align="center"><?php echo $row["sem"]; ?></td>
<td align="center"><?php echo $row["fi"]; ?></td>
<td align="center"><?php echo $row["si"]; ?></td>
<td align="center"><?php echo $row["ti"]; ?></td>
<td align="center"><?php echo $row["lect"]; ?></td>
<td align="center"><a href="editmarks.php?id=<?php echo $row["id"]; ?>"><img src="edit.png"></a></td>
<td align="center"><a href="delmarks.php?id=<?php echo $row["id"]; ?>"><img src="delete.png"></a></td></tr>
<?php 
$count++; 
}
?>
</table>
</div>
</body>
</html>
