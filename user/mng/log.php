<?php
$servername = "localhost";
$username = "camre";  
$password = "camre";
$dbname = "campus_recruitment";
$tbl1_name="users";

$tbl3_name="vol_det";

$tbl4_name="hod_det";



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
} 


$sql4="SELECT dept FROM $tbl4_name  WHERE email='$_POST[username]';";

$res4  = $conn->query($sql4);



$res4 =  $res4->fetch_assoc(); 

$use=substr($_POST['username'], 2);

$sql3="SELECT dept FROM $tbl3_name  WHERE admno='$use';";

$res3  = $conn->query($sql3);



$res3 =  $res3->fetch_assoc();



$hpass=md5($_POST['password']);

$sql = "SELECT password,iden FROM $tbl1_name  WHERE username='$_POST[username]';";

 

$res  = $conn->query($sql);



$res =  $res->fetch_assoc();  
 
$flag=$_POST['flag'];


if (($res['password']==$hpass) and ($res['iden']==$flag) and ($res['iden']=='S') ) {
	//echo "Successful login ".$_POST['flag'];
	header("Location: ../info.php?admno=$_POST[username]"); /* Redirect browser */
    exit();
}
elseif (($res['password']==$hpass) and ($res['iden']==$flag) and ($res['iden']=='V')) {
	header("Location: ../volentaprovl.php?branch=$res3[dept]"); /* Redirect browser */
    exit();
}

elseif (($res['password']==$hpass) and ($res['iden']==$flag) and ($res['iden']=='C')) {
	header("Location: ../../company/comphome.php?cname=$_POST[username]"); /* Redirect browser */
    exit();
}

elseif (($res['password']==$hpass) and ($res['iden']==$flag) and ($res['iden']=='A')) {
	header("Location: ../../admin/admin.html"); /* Redirect browser */
    exit();
}

elseif (($res['password']==$hpass) and ($res['iden']==$flag) and ($res['iden']=='H')) {
	header("Location: ../approvel.php?branch=$res4[dept]"); /* Redirect browser */
    exit();
}


else {
	//echo "Unsuccessful login";
	header("Location: notlogd.html");
	exit();
}


$conn->close();
?>