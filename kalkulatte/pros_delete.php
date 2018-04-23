<?php
include ('config.php');
$bil=$_GET['bil'];
$query="delete from data_pengiraan where bil='$bil'";
$result=mysql_query($query);

if ($result==TRUE) echo"<script>alert('Padam anda berjaya!');
	               window.location='data_pengiraan.php'</script>";
if ($result==FALSE) echo "gagal<a href=\"data_pengiraan.php\">senarai</a>";
?>