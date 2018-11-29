<?php
$servername = "localhost";
$username = "camre"; 
$password = "camre";
$dbname = "campus_recruitment";
$tbl1_name="com_sel";   




// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO $tbl1_name VALUES ('$_POST[name]','$_POST[admno]','$_POST[chk]','$_POST[branch]','$_POST[cname]');";

if ($conn->query($sql)) 
{
    
    //echo "New record created successfully for ".$_POST['name'];
    header("Location: submitted.html");

} else {
    echo "Error:";
}

$conn->close();
?>