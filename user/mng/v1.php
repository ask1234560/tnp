<?php
$servername = "localhost";
$username = "camre";
$password = "camre";
$dbname = "campus_recruitment"; 
$tbl1_name="vol_det";
$tbl2_name="users";




// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$hpass=md5($_POST['date']);
$ad='v-'.$_POST['admission'];

$sql2 ="INSERT INTO $tbl2_name VALUES ('$ad','$hpass','V');";


if ($conn->query($sql2)) 
{
    //echo "New record 2 created successfully for ".$_POST['Name'];
} else {
    echo "Error: 2";
}


$sql = "INSERT INTO $tbl1_name VALUES ('$_POST[admission]','$_POST[Name]','$_POST[optradio]','$_POST[date]','$_POST[mail]','$_POST[mob]','$_POST[sel0]','$_POST[sel1]');";

if ($conn->query($sql)) 
{
   // echo "New record 1 created successfully for ".$_POST['Name'];
	header("Location: submitted.html");
exit();
} else {
    echo "Error: 1";
}


$conn->close();
?>