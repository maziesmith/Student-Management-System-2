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
<p><a href="index.php">Home</a> | <a href="insert.php">Insert New Record</a> | <a href="logout.php">Logout</a></p>
<h2>View Records</h2>
<table class="hovertable" width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr>
 <th><strong>Sl No</strong></th>
 <th><strong> Lecture ID </strong></th>
 <th><strong> Department </strong></th>
 <th><strong> Type</strong></th>
 <th><strong> Name </strong></th>
 <th><strong> Phone Number </strong></th>
 <th><strong> Address</strong></th>
 <th><strong> Gender</strong></th>
 <th><strong> D.O.B </strong></th>
 <th><strong>Father Name </strong></th>
 <th><strong>Mother Name </strong></th>
 <th><strong> Marital Status</strong></th>
 <th><strong> Spouse </strong></th>
 <th><strong> Degree </strong></th>
 <th><strong> Institution </strong></th>
 <th><strong> Work Experience </strong></th>
 <th><strong> Subject Handled </strong></th>
 <th><strong>Salary</th>
 <th><strong>Edit</th>
 <th><strong>Delete</th>
</tr>
</thead>
<tbody>
 <?php
 $count=1;
 $dept = $_POST["dept"];
 $sel_query="select * from lecture where dept=".$dept." ";
 $result = mysql_query($sel_query);
 while($row = mysql_fetch_assoc($result))
 { 
 ?>
<tr>
 <td align="center"><?php echo $count; ?></td>
 <td align="center"><?php echo $row["lect_id"]; ?></td>
 <td align="center"><?php echo $row["dept"]; ?></td>
 <td align="center"><?php echo $row["type"]; ?></td>
 <td align="center"><?php echo $row["name"]; ?></td>
 <td align="center"><?php echo $row["phno"]; ?></td>
 <td align="center"><?php echo $row["address"]; ?></td>
 <td align="center"><?php echo $row["gender"]; ?></td>
 <td align="center"><?php echo $row["dob"]; ?></td>
 <td align="center"><?php echo $row["fname"]; ?></td>
 <td align="center"><?php echo $row["mname"]; ?></td>
 <td align="center"><?php echo $row["mstat"]; ?></td>
 <td align="center"><?php echo $row["hname"]; ?></td>
 <td align="center"><?php echo $row["degree"]; ?></td>
 <td align="center"><?php echo $row["dgrins"]; ?></td>
 <td align="center"><?php echo $row["wrkexp"]; ?></td>
 <td align="center"><?php echo $row["subhan"]; ?></td>
 <td align="center"><?php echo $row["salary"]; ?></td>
 <td align="center"><a href="editlecture.php?id=<?php echo $row["id"]; ?>"><img src="edit.png" ></a></td>
 <td align="center"><a href="dellec.php?id=<?php echo $row["id"]; ?>"><img src="delete.png"></a></td>
</tr>
 <?php
 $count++;
  } 
 ?>
</tbody>
</table>
</div>
</body>
</html>
