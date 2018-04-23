<style>
body
{
	background-color: skyblue;
}
.menu ul {
	list-style: none;
	margin: 0;
	padding: 0;
	overflow: hidden;
    background-color: #3366ff;
}
.menu li{
	display: inline-table;
	padding: 0;
}
.menu ul li a{
	text-decoration: none;
}
.menu li a:hover{
	background-color: #111;
}
.menu li a{
	display: block;
    color: #fef380;
    text-align: center;
    padding: 14px;
    text-decoration: none;
}
.button {
    border: none;
    color: white;
    padding: 7px 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}


</style>
<?php
ini_set('display_errors',0);
if( isset( $_REQUEST['calculate'] ))
{
$operator=$_REQUEST['operator'];
if($operator=="+")
{
$add1 = $_REQUEST['fvalue'];
$add2 = $_REQUEST['lvalue'];
$res= $add1+$add2;
}
if($operator=="-")
{
$add1 = $_REQUEST['fvalue'];
$add2 = $_REQUEST['lvalue'];
$res= $add1-$add2;
}
if($operator=="*")
{
$add1 = $_REQUEST['fvalue'];
$add2 = $_REQUEST['lvalue'];
$res =$add1*$add2;
}
if($operator=="/")
{
$add1 = $_REQUEST['fvalue'];
$add2 = $_REQUEST['lvalue'];
$res= $add1/$add2;
}
if($operator=="%")
{
$add1 = $_REQUEST['fvalue'];
$add2 = $_REQUEST['lvalue'];
$res= $add1%$add2;
}
if($_REQUEST['fvalue']==NULL && $_REQUEST['lvalue']==NULL)
{
echo "<script language=javascript> alert(\"Please Enter values.\");</script>";
}
else if($_REQUEST['fvalue']==NULL)
{
echo "<script language=javascript> alert(\"Please Enter First value.\");</script>";
}
else if($_REQUEST['lvalue']==NULL)
{
echo "<script language=javascript> alert(\"Please Enter second value.\");</script>";
}
}
?>
<br>
	<center>
		<img src="kalkulatte.png">
	</center>
	<br>
	<br>
		<div class="menu">
	<ul>
		<li><a href="kalkulatte.php">Kalkullator</a></li>
		<li><a href="data_pengiraan.php">Hasil</a></li>
		<li style="float: right;"><a href="login.php">Logout</a></li>
	</ul>
</div>
<br>
<center>
<form>

<table style="background-color:black; width: 400px;height: 185px;">
<tr>
<td style="background-color:#3366ff; color:#ffffb3; font-family:'Arial Rounded MT Bold'">No. Pertama</td>
<td colspan="1">
<input name="fvalue" type="text" style="#ffffb3"<td>
</tr>
<tr>
<td style="color:burlywood; font-family:'Arial Rounded MT Bold'">Operasi</td>
<td>
<select name="operator" style="width: 63px">
<option>+</option>
<option>-</option>
<option>*</option>
<option>/</option>
<option>%</option>
</select></td>
</tr>
<tr>
<td style="background-color:#3366ff; color:#ffffb3; font-family:'Arial Rounded MT Bold'">No. Kedua</td>
<td>
<input name="lvalue" type="text"  style="color:black"/></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="calculate" value="Kira" style="color:#3366ff"; /></td>
</tr>
<br>
<tr>
<td style="background-color:#3366ff;color:#ffffb3; font-family:'Arial Rounded MT Bold';">Hasil = </td>
<td style="background-color:white; color:red; font-family:'arial'"><?php echo $res;?></td>
</tr>

</center>
</table>
</form>
</center>

<form id="form" name="form" method="post" action="pros_insert.php">
<center>
<tr>
<td style="background-color:#ff5050; color:black; font-family:'Arial Rounded MT Bold'">Hasil</td>
<td colspan="1">
<input name="hasil" type="text" style="color:black"/></td>
</tr>
<tr>
<td style="background-color:#ff6666; color:black; font-family:'Arial Rounded MT Bold'">CATATAN</td>
<td colspan="1">
<input name="catatan" type="text" style="color:black"/></td>
</tr>
</center>
<center>
	<br>
<tr>
<td>
<center>
<value="Submit"><button class="button button5">Submit</button>
<value="Reset"><button class="button button5">Isi Semula</button> 
</tr>
<br>
</form>