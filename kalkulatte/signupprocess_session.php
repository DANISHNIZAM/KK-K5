<?php
include ('config.php');
$username=$_POST['username'];
$password=$_POST['password'];

echo "<br>";

$query="insert into login values
('$username','$password')";
if(mysql_query($query)){
	echo"signup berjaya";
	echo"-->";
echo"<a href=\"login.php\">list</a>";}
else
	echo"something went wrong";
?>
