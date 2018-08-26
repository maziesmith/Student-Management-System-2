<html>
<head>
<title>Change Password</title>
</head>
<body background="images/bg.jpg">
<?php

require("dbcon.php");

$username=$_POST['username'];
$pswd=$_POST['pswd'];
$confpswd=$_POST['confpswd'];




if(empty($username)){?>
	<script>

alert("Please enter your username!");
</script>
<?php
}

if(empty($pswd)){
	?>
<script>
alert("Please enter your password!");
</script>
<?php
}

if(empty($confpswd)){?>
<script>
alert("Please confirm your password!");
</script><?php
}


$username_check = mysql_query("SELECT username FROM users WHERE username='$username'");

$do_user_check = mysql_num_rows($username_check);




if($do_user_check == 0)
{?>
<script>

alert("Username does not exists ");
</script>
<?php
}


if($pswd != $confpswd)
{
	?>
	<script>
alert("Passwords don't match!");
</script>
<?php
}

//If everything is okay let's register this user


$update = mysql_query("UPDATE users SET pswd='$pswd' WHERE username='$username'");

if(!$update){

die(mysql_error());


}

die("$username , your password has been changed ");
</script>
?>
</body>
</html>