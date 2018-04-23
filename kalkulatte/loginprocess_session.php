<html>
<head>
<title>Login</title>
</head>
<body>
<?PHP
session_start();
$username=$_POST['username'];
$password=$_POST['password'];
if ($username && $password)
{
	$server='localhost';
	$userid2='root';
	$password2='';
	$dbname='kalkulatte';
	$conn=mysql_connect("$server", "$userid2","$password2");
	mysql_select_db("$dbname", $conn) or die(mysql_error());
	$query = mysql_query("select * from login where username = '$username'");
	$numrows = mysql_num_rows($query);
	if ($numrows !=0)
	{
		while ($row=mysql_fetch_assoc($query))
		{
			$dbusername = $row['username'];
			$dbpassword = $row['password'];
		}
	if($username==$dbusername&&$password==$dbpassword)
	{
		$_SESSION['username']=$username;
	echo"<script>alert('Login anda berjaya!');
	window.location='kalkulatte.php'</script>";
	}else
	{
		echo " Incorrect Password !! <a href='login.php'>Click here to login </a>";}
	}
	else
		die (" That user doesn't exist");
}
else 
{
	echo " Please enter userid and password !! <a href='login.php'> Click here to login </a>";
}
?>
</body>
</html>