<?php 
require('dbcon.php');
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
<title>View Records</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body background="images/bg.jpg">
<div class="form">
<?php include("menu.php");?>
<h2>View Records</h2>
<table class="hovertable" width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr>
<th><strong>Sl .No</strong></th>
<th><strong>USSN</strong></th>
<th><strong>Department</strong></th>
<th><strong>Semester</strong></th>
<th><strong>Total</strong></th>
<th><strong>Paid</strong></th>
<th><strong>Balance</strong></th>
<th><strong>Delete</strong></th>
</tr>
</thead>
<tbody>
<?php
$count=1;
$sel_query="Select * from fee ORDER BY id desc;";
$result = mysql_query($sel_query);
while($row = mysql_fetch_assoc($result)) { ?>
<tr onmouseover="this.style.backgroundColor='#ffff66';" onmouseout="this.style.backgroundColor='#d4e3e5';" align="center"><td align="center"><?php echo $count; ?></td>
<td ><?php echo $row["ussnu"]; ?></td>
<td align="center"><?php echo $row["dept"]; ?></td>
<td align="center"><?php echo $row["sem"]; ?></td>
<td align="center"><?php echo $row["total"]; ?></td>
<td align="center"><?php echo $row["paid"]; ?></td>
<td align="center"><?php echo $row["balance"]; ?></td>
<td align="center"><a href="delfee.php?id=<?php echo $row["id"]; ?>"><img src="delete.png"></a></td></tr>
<?php $count++; } ?>
</tbody>
</table>
<a href="logout.php"><button>Logout</button></a>
</div>
</body>
</html>
