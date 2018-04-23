<!DOCTYPE html>
<html>
<head>
<body>
<meta charset="UTF-8">
<title>Data Pengiraan</title>
<center><h1><font face="Neon" size="20">DATA PENGIRAAN</font></h1></center>
<style>
body {
    background-color: skyblue;
}
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 50%;
}

td, th {
    border: 1px solid black;
    text-align: left;
    padding: 8px;
}
.button {
    border: none;
    color: white;
    padding: 10px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}

.button5 {background-color: #555555;}
</style>

<?php
include('config.php');
$sql="SELECT * from data_pengiraan";
$result=mysql_query($sql)or die(mysql_error());
?>

<table border="1" width="849" align="center" cellspacing="2" cellpadding="2">
<tr>
<td align="center" bgcolor="#3366ff"><strong>Hasil</strong></td>
<td align="center" bgcolor="#3366ff"><strong>Catatan</strong></td>
<td align="center" bgcolor="#3366ff"><strong>Tindakan</strong></td>
</tr>

<br>
<br>
<?php
while($row=mysql_fetch_array($result))
{
	echo"<tr>";
	echo"<td>".$row["hasil"]."</td>";
	echo"<td>".$row["catatan"]."</td>";
	echo "<td><center><a href=\"pros_delete.php?bil=".$row['bil']."\">Padam</a>";
	echo"</td>";
}
echo"</table>";
echo"<center>";
echo"<br>";
?>
</table>
<a href="kalkulatte.php"<button class="button button5">Kembali ke KALKULATTE</button></a><br><br>
</center>
</body>
</head>
</html>