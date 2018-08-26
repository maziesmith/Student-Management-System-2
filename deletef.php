<?php 
$conn=mysql_connect("localhost","root","sairam") or die(mysql_error());
mysql_select_db("demo",$conn) or die(mysql_error());
//include('auth.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM upload WHERE id=$id"; 
$result = mysql_query($query) or die ( mysql_error());
header("Location: upload.php"); 
 ?>
