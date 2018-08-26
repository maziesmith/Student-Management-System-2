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
<body background="images/bg.jpg" >
<div class="form">
<p><a href="index.php">Home</a> | <a href="insertmarks.php">Insert New Record</a> | <a href="logout.php">Logout</a></p>
<h2>View Records</h2>
<?php
$count=1;
$sel_query="Select * from marks ORDER BY ussn ;";
$result = mysql_query($sel_query);
while($row = mysql_fetch_assoc($result)) 
{
?>
<table border="1" style="border-collapse:collapse;" class="hovertable">
<thead>
<tr onmouseover="this.style.backgroundColor='#ffff66';" onmouseout="this.style.backgroundColor='#d4e3e5';" align="center" >
<td><strong>Subject Name</strong></th>
<td align="center"><?php echo $row["sname"]; ?></td>
</tr>
<tr onmouseover="this.style.backgroundColor='#ffff66';" onmouseout="this.style.backgroundColor='#d4e3e5';" align="center" >
<td><strong>Subject Code</strong></th>
<td align="center"><?php echo $row["subid"]; ?></td>
</tr>
<tr onmouseover="this.style.backgroundColor='#ffff66';" onmouseout="this.style.backgroundColor='#d4e3e5';" align="center" >
<td><strong>USSN</strong></th>
<td align="center"><?php echo $row["ussn"]; ?></td>
</tr>
<tr onmouseover="this.style.backgroundColor='#ffff66';" onmouseout="this.style.backgroundColor='#d4e3e5';" align="center" >
<td><strong>Department</strong></th>
<td align="center"><?php echo $row["dept"]; ?></td>
</tr>
<tr onmouseover="this.style.backgroundColor='#ffff66';" onmouseout="this.style.backgroundColor='#d4e3e5';" align="center" >
<td><strong>Semester</strong></th>
<td align="center"><?php echo $row["sem"]; ?></td>
</tr>
<tr onmouseover="this.style.backgroundColor='#ffff66';" onmouseout="this.style.backgroundColor='#d4e3e5';" align="center" >
<td><strong>First Internal Marks</strong></th>
<td align="center"><?php echo $row["fi"]; ?></td>
</tr>
<tr onmouseover="this.style.backgroundColor='#ffff66';" onmouseout="this.style.backgroundColor='#d4e3e5';" align="center" >
<td><strong>Subject Handled Lecturer</strong></th>
<td align="center"><?php echo $row["lect"]; ?></td>
</tr>
</thead>
<tbody>
<?php 
$count++; 
}
?>
</tbody>
</table>
</div>
</body>
</html>
