<?php
$servername = "localhost";
$username = "camre";
$password = "camre"; 
$dbname = "campus_recruitment";
$tbl1_name="per_det";
$tbl2_name="per_aca";
$tbl3_name="users";
$tbl4_name="per_res";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
} 



$target_dir = "../images/";
$target_file = $target_dir . basename($_FILES["photo"]["name"]);
if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
	//echo "The file ". basename( $_FILES["photo"]["name"]). " has been uploaded.";
} else {
	echo "Sorry, there was an error uploading your file.";
}


$target_dir2 = "../resume/";
$target_file2 = $target_dir2 . basename($_FILES["resume"]["name"]);
if (move_uploaded_file($_FILES["resume"]["tmp_name"], $target_file2)) {
	//echo "The file ". basename( $_FILES["resume"]["name"]). " has been uploaded.";
} else {
	echo "Sorry, there was an error uploading your file.";
}

$resname=$_FILES['resume']['name'];

$sql4="INSERT INTO $tbl4_name VALUES ('$_POST[admission]','$resname');";
if ($conn->query($sql4)) 
{
	//echo "New record 4 created successfully for ".$_POST['Name'];
} else {
	echo "Error: 4";
}








$hpass=md5($_POST['date']);

$sql3="INSERT INTO $tbl3_name VALUES ('$_POST[admission]','$hpass','S');";
if ($conn->query($sql3)) 
{
	//echo "New record 3 created successfully for ".$_POST['Name'];
} else {
	echo "Error: 3";
}


$filename=$_FILES['photo']['name'];

//$sql = "SELECT network, email, password FROM $tbl1_name";
$sql = "INSERT INTO $tbl1_name VALUES ('$filename','$_POST[admission]','$_POST[Name]','$_POST[date]','$_POST[mail]','$_POST[mob]','$_POST[optradio]','$_POST[addr]','$_POST[fname]','$_POST[foccu]','$_POST[fmob]','$_POST[mname]','$_POST[moccu]','$_POST[mmob]');";

//$date = date('Y-m-d', strtotime("$_POST['date']")); //date format

/*
$sql = "INSERT INTO $tbl1_name VALUES('$_POST[Name]','b16cs067','1997-1-12','ask1234560@gmail.com','8139811434','M','blaa bla blaa','roy','sds','2345678909','lucy','ccgg','3465789876');";
*/

if ($conn->query($sql)) 
{
	//echo "New record 1 created successfully for ".$_POST['Name'];
} else {
	echo "Error: 1";
}


$sql2="INSERT INTO $tbl2_name VALUES ('$_POST[admission]','$_POST[Name]','$_POST[optradio2]','$_POST[sel1]','$_POST[division]','$_POST[sel2]','$_POST[rank]','$_POST[supply]','$_POST[HOA]','$_POST[tenth]','$_POST[twelve]','$_POST[u1]','$_POST[u2]','$_POST[u3]','$_POST[u4]','$_POST[u5]','$_POST[ucgpa]','$_POST[p1]' ,'$_POST[p2]','$_POST[pcgpa]');";


/*$sql2="INSERT INTO $tbl2_name VALUES ('2354','M.tech','Civil','3','General','2','34','Y','23','2','2','3','4','5','6','2','1' ,'3','23');";*/

if ($conn->query($sql2)) 
{
	//echo "New record 2 created successfully for ".$_POST['admission'];
	header("Location: submitted.html");
exit();
	
} else {
	echo "Error: 2";
}










$conn->close();
?>