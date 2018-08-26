<?php
$conn=mysql_connect("localhost","root","sairam") or die(mysql_error());
$sdb=mysql_select_db("demo",$conn) or die(mysql_error());
if(isset($_POST['submit'])!=""){
  $name=$_FILES['photo']['name'];
  $size=$_FILES['photo']['size'];
  $type=$_FILES['photo']['type'];
  $temp=$_FILES['photo']['tmp_name'];
  $caption1=$_POST['caption'];
  $link=$_POST['link'];
  move_uploaded_file($temp,"files/".$name);
$insert=mysql_query("insert into upload(name)values('$name')");

if($insert){
header("location:upload.php");
}
else{
die(mysql_error());
}
}

?>
<html>
<head>
<title>Assignment</title>
</head>
<style>
body background="images/bg.jpg"{ font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;}
a{color:#666;}
#table{margin:0 auto;background:#333;box-shadow: 5px 5px 5px #888888;border-radius:10px;color:#CCC;padding:10px;}
#table1{margin:0 auto;}
</style>
<body background="images/bg.jpg">
<?php
include("menu.php");
?>
<h5>Uploads can be viewed with txt format and images only</h5>
<h3><p align="center">Assignment Uploads</p></h3>	
<form enctype="multipart/form-data" action="" name="form" method="post">
<table border="0" cellspacing="0" cellpadding="5" id="table">
<tr>
<th >Choose Files</th>
<td ><label for="photo"></label>
<input type="file" name="photo" id="photo" /></td>
</tr>

<tr>
<th colspan="2" scope="row"><input type="submit" name="submit" id="submit" value="Submit" /></th>
</tr>
</table>
</form>
<br />
<br />
<table border="1" align="center" id="table1" cellpadding="0" cellspacing="0">
<tr>
<td align="center"> File Name</td>
<td align="center"> View</td>
<td align="center"> Download</td>
<td align="center"> Delete</td>
</tr>
<?php
$select=mysql_query("select * from upload order by id desc");
while($row1=mysql_fetch_array($select)){
	$name=$row1['name'];
?>
<tr>
<td align="center" width="300"><?php echo $name ;?></td>
<td align="center" width="300"><a href="files/<?php echo $name; ?>" target="_blank">view</a></td>
<td align="center" width="300"><a href="download.php?filename=<?php echo $name;?>">Download</a></td>
<td align="center" width="300"><a href="deletef.php?id=<?php echo $row1["id"]; ?>">Delete</a></td></tr>
<td>
</td>
</tr>
<?php }?>
</table>
<a href="logout.php"><button>Logout</button></a>
</body>
</html>