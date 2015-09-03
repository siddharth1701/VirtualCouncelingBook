<?php
session_start();
$message="";
if(count($_POST)>0) {
$conn = mysql_connect("localhost","root","");
mysql_select_db("login",$conn);
$result = mysql_query("SELECT * FROM userlogin WHERE username='" . $_POST["username"] . "' and password = '". $_POST["password"]."'");
$row  = mysql_fetch_array($result);
if(is_array($row)) {
$_SESSION["username"] = $row[username];
$_SESSION["password"] = $row[password];
} else {
$message = "Invalid Username or Password!";
}
}
if(isset($_SESSION["username"])) {
header("Location:user_dashboard.php");
}
?>
<html>
<head>
</head>
<body>

<form name="login" method="post" action="">
    <input type="text" placeholder="username" name="username" required/><br>
    <input type="password" placeholder="password" name="password" required/><br>
 

      <button class="btn waves-effect waves-purple" name="submit">Submit</button>
      </form>
      </body>
      </html>