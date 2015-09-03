

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
<title>VCB</title>
<link href="TTAS.css" type="text/css" rel="stylesheet">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
</head>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

<body>
<div class="background"></div>
<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title"></h1>
            <div class="account-wall">
               <!-- <img class="profile-img" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120"
                    alt="">-->
                   <h1 align="center"> Signin to VCB</h1>
                   <br>
                   <br>
                <form  action="" method="post" class="form-signin">
                <div class="message"><?php if($message!="") { echo $message; } ?></div>
                <input type="text" name="username" class="form-control" placeholder="Username" required autofocus><br>
                <input type="password" name="password" class="form-control" placeholder="Password" required><br>
                
                <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">
                    Sign in</button>
               <!-- <label class="checkbox pull-left">
                    <input type="checkbox" value="remember-me">
                    Remember me
                </label>-->
                <!--<a href="#" class="pull-right need-help">Need help? </a><span class="clearfix"></span>-->
                </form>
            </div>
           <!-- <a href="#" class="text-center new-account">SignUp </a>-->
        </div>
    </div>
</div>
