<html>
<head>
<title>Forgot Password</title>
<link rel="stylesheet" href="css/style.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="admin" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style3.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
    </head>
</head>
<body background="images/bg.jpg">
 <div id="container_demo" >
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                <form action="change.php" method="post">

<h1>Forgot Password</h1>
<p>
<label class="uname">Username</label>
<input type="text" name="username" id="password" placeholder="username">
</p>
<p>
<label class="youpasswd">Password</label>
<input type="password" name="pswd" id="pswd" placeholder="newpassword">
</p>
<p>
<label class="youpasswd">Confirm Password</label>
<input type="password" name="confpswd" id="confpswd" placeholder="confirm password">
</p>
<p class="login button">
<input type="submit" name="conf_pswd" value="Change Password">
</p>
</form>
</div>
</body>
