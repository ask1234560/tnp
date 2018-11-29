<?php
$servername = "localhost";
$username = "camre"; 
$password = "camre";
$dbname = "campus_recruitment";
$tbl1_name="per_pla";




// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO $tbl1_name VALUES ('$_POST[name]','$_POST[admno]','$_POST[com]');";

if ($conn->query($sql)) 
{
    //echo "New record created successfully for ".$_POST['name'];
    header("Location: submitted.html");
exit();
} else {
    echo "Error:";
}

$conn->close();
?>