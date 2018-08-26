<?php 
require('dbcon.php');
//include("auth.php");
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
<title></title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body background="images/bg.jpg">
<div class="form">
<p><a href="index.php">Home</a> | <a href="studententry.php">Insert New Record</a> | <a href="logout.php">Logout</a></p>
<h2>Student Details</h2>


<table width="100%" border="1" style="border-collapse:collapse;" class="hovertable">
<thead>
<tr>
<th><strong>Sl No</strong></th>
<th><strong> USSN </strong></th>
<th><strong> Name </strong></th>
<th><strong> Semester </strong></th>
<th><strong> Department </strong></th>
<th><strong> Father name </strong></th>
<th><strong> Mother name </strong></th>
<th><strong> D.O.B </strong></th>
<th><strong> Address </strong></th>
<th><strong> Gender </strong></th>
<th><strong> Caste </strong></th>
<th><strong> Category </strong></th>
<th><strong> Phone </strong></th>
<th><strong> Base Education </strong></th>
<th><strong> Last Institution studied </strong></th>
<th><strong> Last Year </strong></th>
<th><strong> Result </strong></th>
<th><strong> Edit</strong></th>
<th><strong> Delete</strong></th>
</tr>
</thead>
<tbody>
<?php
$count=1;
$dept=$_POST['dept'];
$sel_query="Select * from student ORDER BY id desc where dept='$dept' ";
$result = mysql_query($sel_query);
while($row = mysql_fetch_assoc($result))
{
	 ?>
<tr>
<td onmouseover="this.style.backgroundColor='#ffff66';" onmouseout="this.style.backgroundColor='#d4e3e5';" align="center"><?php echo $count; ?></td>
<td onmouseover="this.style.backgroundColor='#ffff66';" onmouseout="this.style.backgroundColor='#d4e3e5';" align="center"><?php echo $row["ussn"]; ?></td>
<td onmouseover="this.style.backgroundColor='#ffff66';" onmouseout="this.style.backgroundColor='#d4e3e5';" align="center"><?php echo $row["name"]; ?></td>
<td onmouseover="this.style.backgroundColor='#ffff66';" onmouseout="this.style.backgroundColor='#d4e3e5';"align="center"><?php echo $row["sem"]; ?></td>
<td onmouseover="this.style.backgroundColor='#ffff66';" onmouseout="this.style.backgroundColor='#d4e3e5';" align="center"><?php echo $row["dept"]; ?></td>
<td onmouseover="this.style.backgroundColor='#ffff66';" onmouseout="this.style.backgroundColor='#d4e3e5';" align="center"><?php echo $row["fname"]; ?></td>
<td onmouseover="this.style.backgroundColor='#ffff66';" onmouseout="this.style.backgroundColor='#d4e3e5';" align="center"><?php echo $row["mname"]; ?></td>
<td onmouseover="this.style.backgroundColor='#ffff66';" onmouseout="this.style.backgroundColor='#d4e3e5';" align="center"><?php echo $row["dob"]; ?></td>
<td onmouseover="this.style.backgroundColor='#ffff66';" onmouseout="this.style.backgroundColor='#d4e3e5';"align="center"><?php echo $row["address"]; ?></td>
<td onmouseover="this.style.backgroundColor='#ffff66';" onmouseout="this.style.backgroundColor='#d4e3e5';"align="center"><?php echo $row["gender"]; ?></td>
<td onmouseover="this.style.backgroundColor='#ffff66';" onmouseout="this.style.backgroundColor='#d4e3e5';"align="center"><?php echo $row["caste"]; ?></td>
<td onmouseover="this.style.backgroundColor='#ffff66';" onmouseout="this.style.backgroundColor='#d4e3e5';"align="center"><?php echo $row["category"]; ?></td>
<td onmouseover="this.style.backgroundColor='#ffff66';" onmouseout="this.style.backgroundColor='#d4e3e5';"align="center"><?php echo $row["phone"]; ?></td>
<td onmouseover="this.style.backgroundColor='#ffff66';" onmouseout="this.style.backgroundColor='#d4e3e5';"align="center"><?php echo $row["base"]; ?></td>
<td onmouseover="this.style.backgroundColor='#ffff66';" onmouseout="this.style.backgroundColor='#d4e3e5';"align="center"><?php echo $row["lastinst"]; ?></td>
<td onmouseover="this.style.backgroundColor='#ffff66';" onmouseout="this.style.backgroundColor='#d4e3e5';"align="center"><?php echo $row["lyear"]; ?></td>
<td onmouseover="this.style.backgroundColor='#ffff66';" onmouseout="this.style.backgroundColor='#d4e3e5';"align="center"><?php echo $row["marks"]; ?></td>
<td onmouseover="this.style.backgroundColor='#ffff66';" onmouseout="this.style.backgroundColor='#d4e3e5';"align="center"><a href="editstudent.php?id=<?php echo $row["id"]; ?>">Edit</a></td>
<td onmouseover="this.style.backgroundColor='#ffff66';" onmouseout="this.style.backgroundColor='#d4e3e5';"align="center"><a href="delstu.php?id=<?php echo $row["id"]; ?>">Delete</a></td></tr>
<?php 
$count++;
 }
  ?>
</tbody>

</table>
</div>
</body>
</html>
