<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
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
<body  background="images/bg.jpg" >
<center>
<?php
	require('dbcon.php');
    
    if (isset($_POST['username']))
    {
$username=$_POST['username'];
$username=stripslashes($username);
$username=mysql_real_escape_string($username);
$pswd=$_POST['pswd'];
$pswd=stripslashes($pswd);
$pswd=mysql_real_escape_string($pswd);
$type=$_POST['type'];
$type=stripslashes($type);
$type=mysql_real_escape_string($type);
$ussn=$_POST['ussn'];
$ussn=mysql_real_escape_string($ussn);
$ussn=mysql_real_escape_string($ussn);
$dept=$_POST['dept'];
$dept=stripslashes($dept);
$dept=mysql_real_escape_string($dept);
$phno=$_POST['phno'];
$phno=stripslashes($phno);
$phno=mysql_real_escape_string($phno);
$confpswd=$_POST['confpswd'];
$confpswd=stripslashes($confpswd);
$confpswd=mysql_real_escape_string($confpswd);
        $query="INSERT into `users` (username,pswd,type,ussn,dept,phno) VALUES ('$username','$pswd','$type','$ussn','$dept','$phno')";
        $result = mysql_query($query);
        if($result)
        {
        	?>
        	<script>
            alert( "You are registered successfully.");
			</script>
<?php        
        }
    }
else
    {
?>
 <div id="container_demo" >
                   
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">

<form name="registration" action="" method="post">
<h1>Registration</h1>
<p>
<label class="uname">Username:</label>
<input type="text" name="username" placeholder="username" required="Enter username" >
</p>

<p>
<label class="uname">Password:</label>
<input type="password" name="pswd" placeholder="password" required="Enter password">
</p>

<p>
<label class="uname">Confirm Password:</label>
<input type="password" name="confpswd" placeholder="confirm password" required="Enter password">
</p>

<p>
<label class="uname">Type:</label>
<input type="radio" name="type" value="lecturer">Lecturer<input type="radio" name="type" value="student">Student
</p>

<p>
<label class="uname">USSN/Lect ID:</label>
<input type="text" name="ussn" placeholder="USSN or LECT ID" required="Enter USSN" >
</p>

<p>
<label class="uname">Department:</label>
<select name="dept">
<option name="dept">Computer Science Engineering</option>
<option name="dept">Informaion Science Engineering</option>
<option name="dept">Mechanical Engineering</option>
<option name="dept">Mechatronics Engineering</option>
<option name="dept">Automobile Engineering</option>
<option name="dept">Electrical and Electronics Engineering</option>
<option name="dept">Electrical and Commmunication Engineering</option>
<option name="dept">Civil Engineering</option>
</select>
</p>


<p>
<label class="uname">Phone Number:</label>
<input type="text" name="phno" placeholder="Phone number"  required="Enter Phone number">
</p>


<p class="login button">
<input type="submit" name="submit" value="Register" />
</p>
</form>
</div>
<?php 
	} 
?>
</center>
</body>
</html>