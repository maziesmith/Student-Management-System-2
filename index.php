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
			
			header("Location: menu.php"); 
            }
             else
            {
            	?>
            	<script>
				 alert("Username/password is incorrect");
				</script>
				<?php
				}
    }
    else
    
    {
?>
<html>
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="admin" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style3.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
    </head>
    <body>
    			</nav>
            </header>
            <section>				
                <div id="container_demo" >
                   
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  action="" autocomplete="on" method="post"> 
                                <h1>Log in</h1> 
                                <p> 
                                    <label for="username" class="uname"  > Username </label>
                                    <input id="username" name="username" required="required" type="text" placeholder="username"/>
                                </p>
                                
                                <p> 
                                    <label for="password" class="youpasswd" > Your password </label>
                                    <input id="password" name="pswd" required="required" type="password" placeholder="password" /> 
                                </p>

                                <p class="login button"> 
                                    <input type="submit" value="Login" /> 
								</p>
                        <p class="change_link">
                        <a href="forgotpasswd.php" >Forgot Password????????</a>
									Not a member yet ?
									<a href="register1.php" class="to_register">Join us</a>				
								</p>
                            </form>
                        </div>
<?php 
} 
?>
                            </body>
</html>