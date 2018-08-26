<?php
if(empty($username))
{

die("Please enter your username!<br>");


}

if(empty($pswd))
{


die("Please enter your password!<br>");



}



if(empty($pswd_conf))
{



die("Please confirm password!<br>");



}


if(empty($type))
{



("Please enter your type!<br>");



}

if(empty($ussn))
{



die("Please enter your ussn!<br>");



}

if(empty($dept))
{



die("Please select your deapartment!<br>");



}

if(empty($phno))
{



die("Please enter your phone number!<br>");



}
//Let's check if this username is already in use


$username_check = mysql_query("SELECT username FROM `users` WHERE username='$username'");

$do_user_check = mysql_num_rows($username_check);


//Now if email is already in use




//Now display errors


if($do_user_check > 0)
{


die("Username already in use!<br>");




}




//Now let's check does passwords match


if($pswd != $confpswd)
{


die("Password doesn't match!<br>");



}
 
?>