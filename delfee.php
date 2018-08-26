
<?php 
require('dbcon.php');
include('auth.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM fee WHERE id=$id"; 
$result = mysql_query($query) or die ( mysql_error());
header("Location: viewfee.php"); 
 ?>
