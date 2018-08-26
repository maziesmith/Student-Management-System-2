<html>
<head>
<title>Logout</title>
</head>
<body background="images/bg.jpg">

<div align="center">

<?php

session_start();
 

//This function will destroy your session

session_destroy();

echo "You are now logged out!<br><br><br><br><br><br><br>"
?>
<br><br>
<a href="index.php">Home</a>
</center>
</body>
</html>
