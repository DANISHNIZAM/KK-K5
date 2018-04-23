<?php
include ('config.php');

$bil=$_POST['bil'];
$hasil=$_POST['hasil'];
$catatan=$_POST['catatan'];

echo"<br>";

$query="insert into data_pengiraan values
('$bil','$hasil','$catatan')";
if(mysql_query($query)){
if ($result==TRUE) header("Location:data_pengiraan.php");
if ($result==FALSE) header("Location:data_pengiraan.php");}
	
else


echo"something went wrong";

?>