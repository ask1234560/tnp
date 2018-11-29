<?php
$servername = "localhost";
$username = "camre";
$password = "camre";
$dbname = "campus_recruitment";
$tbl1_name="com_det"; 
$tbl2_name="users";


 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO $tbl1_name VALUES ('$_POST[name]','$_POST[email]','$_POST[mob]','$_POST[addr]','$_POST[website]');";


if ($conn->query($sql)) 
{
	//echo "New record 1 created successfully for ".$_POST['name'];
} else {
	echo "Error: 1";
}

$pass=md5($_POST['mob']);

$sql2 = "INSERT INTO $tbl2_name VALUES ('$_POST[name]','$pass','C');";

if ($conn->query($sql2)) 
{
	//echo "New record 2 created successfully for ".$_POST['name'];
	header("Location: submitted.html");
	exit();
} else {
	echo "Error: 2";
}



$conn->close();
?>