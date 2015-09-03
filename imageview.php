<?php
$conn = mysql_connect("localhost", "root", "");
mysql_select_db("login") or die(mysql_error());
if(isset($_GET['roll'])) {
$sql = "SELECT pic FROM  WHERE =" . $_GET['roll'];
$result = mysql_query("$sql") or die("<b>Error:</b> Problem on Retrieving Image BLOB<br/>" . mysql_error());
$row = mysql_fetch_array($result);
header("Content-type: " . $row["pic"]);
echo $row["pic"];
}
mysql_close($conn);
?>