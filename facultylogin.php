<?php
//session_start();
$message="";
if(count($_POST)>0) {
$conn = mysql_connect("localhost","root","");
mysql_select_db("login",$conn);
$result = mysql_query("SELECT * FROM facultylogin WHERE user_name='" . $_POST["user_name"] . "' and password = '". $_POST["password"]."'");
$row  = mysql_fetch_array($result);
if(is_array($row)) {
$_SESSION["user_name"] = $row[user_name];
$_SESSION["password"] = $row[password];
} else {
$message = "Invalid Username or Password!";
}
}
if(isset($_SESSION["user_name"])) {
header("Location:faclogin_dashboard.php");
}
?>
<html>
<head>
</head>
<body>
<form name="login" method="post" action="">
    <input type="text" placeholder="username" name="user_name" required/><br>
    <input type="password" placeholder="password" name="password" required/><br>
 

      <button class="btn waves-effect waves-purple" name="facsubmit">Submit</button>
      </form>	
</body>
</html>