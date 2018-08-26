<?php
	require('dbcon.php');
	session_start();
    // If form submitted, insert values into the database.
    if (isset($_POST['username']))
    {
        $username = $_POST['username'];
        $pswd = $_POST['pswd'];
		
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE username='$username' and pswd='$pswd'";
		$result = mysql_query($query) or die(mysql_error());
		$rows = mysql_num_rows($result);
        if($rows==1)
        {
			$_SESSION['username'] = $username;
			header("Location: index.php"); // Redirect user to index.php
            }
            else
            {
				echo "<div class='form'><h3>Username/pswd is incorrect.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
				}
 }
 
 }
 
?> 