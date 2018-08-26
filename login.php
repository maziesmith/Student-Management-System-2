
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" href="css/style.css" /> 
</head>
<body>
<center>
<?php
	require('dbcon.php');
	session_start();
    // If form submitted, insert values into the database.
    if (isset($_POST['username'])){
        $username = $_POST['username'];
        $pswd = $_POST['pswd'];
		
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE username='$username' and pswd='$pswd'";
		$result = mysql_query($query) or die(mysql_error());
		$rows = mysql_num_rows($result);
        if($rows==1){
			$_SESSION['username'] = $username;
			header("Location: menu.php"); // Redirect user to index.php
            }else{
				echo "<div class='form'><h3>Username/pswd is incorrect.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
				}
    }else{
?>
<div class="form">
<h1>Log In</h1>
<hr color="red"> 
<form action="" method="post" name="login">
<p>

<label class="uname">Username:
<input type="text" name="username" placeholder="Username" required />
</p>

<p>
<label class="youpasswd">Password:</label>
<input type="password" name="pswd" placeholder="pswd" required />
</p>
                         <p class="login button"> 
                                    <input type="submit" name="action" value="Login"/> 
								</p>
                                <p class="change_link">
									Not a member yet ?
									<a href="register1.php" class="to_register">Join us</a>
								</p>


</form>


<?php error_reporting($level = null);
if($_GET['action']=='Login') 
{
	echo '<meta http-equiv="refresh" content="0.1; URL=menu.php">';
}
?>
<p class="change_link">
									Forgot
									<a href="forgotpasswd.php" class="to_register">Password</a>
								</p></div>
<?php } ?>
<center>
</body>
</html>
