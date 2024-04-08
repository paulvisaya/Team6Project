<?php 
//Database Connection Script 
$hostname = "surveyappserver.database.windows.net";
$username = "sqladmin";
$password = "P@ssw0rd";
$db = "SurveyMaster";
$dbconnect=mysqli_connect($hostname,$username,$password,$db);
if ($dbconnect->connect_error) {
  die("Database connection failed: " . $dbconnect->connect_error);
}
?>    

