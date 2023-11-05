<?php
$servername = "database-1.cmt1ygketgpr.us-east-1.rds.amazonaws.com";
$username = "admin";
$password = "admin123";
$dbname = "bloodbank";
$conn = new mysqli($servername, $username, $password, $dbname);
if(!$conn){
 die('Could not Connect MySql:' .mysql_error());
}
?>
