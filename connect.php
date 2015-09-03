<? php
$user = 'root';
$pass = '';
$db = 'login';


$conn = mysql_connect('localhost', $user, $pass, $db) or die("unable to connect");

//echo "connected database sucessfully";
?>