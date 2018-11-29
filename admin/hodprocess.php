<?php
$servername = "localhost";
$username = "camre";
$password = "camre"; 
$dbname = "campus_recruitment";
$tbl1_name="hod_det";
$tbl3_name="users";



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO $tbl1_name VALUES ('$_POST[name]','$_POST[email]','$_POST[mob]','$_POST[sel1]');";


if ($conn->query($sql)) 
{
	//echo "New record 1 created successfully for ".$_POST['name'];
} else {
	echo "Error: 1";
}

$hpass=md5($_POST['pass']);

$sql3 = "INSERT INTO $tbl3_name VALUES ('$_POST[email]','$hpass','H');";

if ($conn->query($sql3)) 
{
	//echo "New record 2 created successfully for ".$_POST['email'];
	header("Location: submitted.html");
exit();
} else {
	echo "Error: 2";
}

$conn->close();
?>