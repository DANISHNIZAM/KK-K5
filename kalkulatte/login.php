<!DOCTYPE html>
<html>
<head>
<title>KALKULATTE</title>
</head>
<meta charset="UTF-18">
<body>
<style>
.btn{
  text-decoration:none;
}
a
{
  text-decoration: none;
}
body {
    background-color:skyblue ;
}
</style>
<style>
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}

.cancelbtn,.signupbtn {float:left;width:50%}


.container {
    padding: 16px;
}

.modal {
    display: none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgb(0,0,0);
    background-color: rgba(0,0,0,0.4);
    padding-top: 60px;
}

.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto;
    border: 1px solid #888;
    width: 80%;
}

.close {
    position: absolute;
    right: 35px;
    top: 15px;
    color: #000;
    font-size: 40px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}


.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}

.button5 {background-color: #555555;}
input[type=submit]
{
	background-color:grey;
}
</style>
<form action="loginprocess_session.php" method="post">
<br>
<center><img src="logo.png"></center>
<h4><center> Sila masukkan username dan kata laluan anda</center></h4>
<center>
<table width="400" border="1">
<tr>
<th scope="col">username:</th>
<th scope="col"><div align="left">
<input type="text" name="username" size="20"/>
</div>
</th>
</tr>
<tr>
<th scope="col">password:</th>
<th scope="col"><div align="left">
<input type="password" name="password" size="10"/>
</div>
</th>
</tr>
</table>
<br>
<input type='submit' name='log in' value="Submit">
</div>
</form>
<body>
<form action="signupprocess_session.php" method="post">
<center><button class="btn" onclick="document.getElementById('id01').style.display='block'"">Sign Up</button></center>

<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
  <form class="modal-content animate" action="/action_page.php">
    <div class="container">
      <input type="text" placeholder="Masukkan username" name="username" required>
      <input type="password" placeholder="Masukkan password" name="password" required>
      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" class="signupbtn">Sign Up</button>
      </div>
    </div>
  </form>
</div>

<script>
var modal = document.getElementById('id01');

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
</html>