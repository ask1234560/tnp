<?php
$servername = "localhost";
$username = "camre";
$password = "camre";
$dbname = "campus_recruitment";
$tbl1_name="per_aca";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
} 

$sql= "update $tbl1_name set parr='$_POST[parr]',uc='$_POST[uc]' where admno='$_POST[admno]';";

if ($conn->query($sql)) 
{
    //echo "New record 1 created successfully for ".$_POST['admno'];
    header("Location: submitted.html");
exit();
} else {
    echo "Error: 1";
}

$conn->close();
?>