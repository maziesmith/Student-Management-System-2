<?php
$server="localhost";
$username="root";
$password="sairam";
$query=mysql_connect($server, $username , $password ) or alert("Error Connecting Server");
$db="3rdsembe";
mysql_select_db($db,$query) or die("Error connecting Server");
?>
