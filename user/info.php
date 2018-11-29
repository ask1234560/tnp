<?php
$servername = "localhost";
$username = "camre";
$password = "camre";
$dbname = "campus_recruitment";
$tbl1_name="per_det";
$tbl2_name="per_aca";

//echo '<h1>'. $_GET['admno'] .'</h1>';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
} 


$sql = "select * from $tbl1_name where admno= '". $_GET['admno']."' ;";
$res  = $conn->query($sql);
$res =  $res->fetch_assoc();
//echo '<h1>'. $sql .'</h1>';
//echo '<h1>'.$res['admno'] .'</h1>';

$sql2 = "select * from $tbl2_name where admno= '". $_GET['admno']."' ;";
$res2  = $conn->query($sql2);
$res2 =  $res2->fetch_assoc();

$tbl3_name="per_res";

$sql3="select resume from $tbl3_name where admno= '". $res['admno']."' ;";
$res3  = $conn->query($sql3);
$res3 =  $res3->fetch_assoc();


?>


<!DOCTYPE html>
<html>
<head>
  <title>TNP</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <style>
  {box-sizing: border-box;}

  body { 
   font-family: 'Raleway', sans-serif;
   margin: 0;

 }

 .header {
  overflow: hidden;
  background-color: #34495e;
  padding: 20px 10px;
}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  padding-left:10%;
  color:white;
  font-size: 25px;
  font-weight: bold;
}



.header a.active {
  background-color: dodgerblue;
  color: white;
}

.header-right {
  color:white;
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  .header-right {
    float: none;
  }
}
body{
  background-color:#eceeee;
}
.large h2{
  font-family: 'Raleway', sans-serif;
  font-weight:bold 10%;
  background-color:#eceeee;
  padding-bottom:5%;
  font-size:40px;
}
.panel-group{
  width:105%;
  background-color:;
}
.panel-heading a{
  text-decoration: none;
}
.btn-primary{
  float:left;
  margin-left:47%;
  padding-left:2%;
  padding-right:2%;
}

.checkbox1{
  margin-left:5%;
}
.allign{
  margin-left:20%;
  padding-right:5%;
}
.button {
  background-color:#008CBA; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  margin-left:50%;
}
.division{
  margin-left:4%;
}
.photo{
  height:100px;
  width:10%;
  border-style: solid;
  margin-left:70%;
  border-width:2px;
  border-color:black;
}
</style> 
</head>
<body>
  <div class="header">
    <a href="#default" class="logo">Training and Placement Cell</a>
    <div class="header-right">
      <a href="update.php?admno=<?php echo $res['admno']; ?>" style=color:white > Update</a>
      <a href="login.html" style=color:white> Sign Out</a>

 <a href="resume/<?php echo $res3['resume']; ?>" style=color:white>resume</a>
    </div>
  </div>


   



  <div class="large"style="padding-left:40%">
    <h2>Student Details</h2>


  </div>

  <div class="allign">

    <h2>Personal Information</h2>



    <div class="photo">
      <img src="images/<?php echo $res['image']; ?>" style="width: 100px;height: 100px;">

    </div>
    
    <p class="control-label col-sm-2" for="email">Name : &emsp;<?php echo $res['name']; ?> <span class="division"></span></p>


    <p class="control-label col-sm-2" for="text">Admission No : &emsp;<?php echo $res['admno']; ?><span class="division"></span></p>


    
    <p class="control-label col-sm-2" for="pwd">DOB : &emsp;<?php echo $res['dob']; ?><span class="division"></span></p>


    <p class="control-label col-sm-2" for="pwd">Email : &emsp;<?php echo $res['email']; ?><span class="division"></span></p>

    
    <label class="control-label col-sm-2" for="email">Mobile No : &emsp;<?php echo $res['mob']; ?><span class="division"></span></label>

    <p class="control-label col-sm-2" for="pwd">Gender : &emsp;<?php echo $res['sex']; ?><span class="division"></span></p>
    <p>Address : &emsp;<?php echo $res['addr']; ?><span class="division"></span></p>


    <h2>Parent's Details</h2>

    <p class="control-label col-sm-2" for="email">Father's Name : &emsp;<?php echo $res['fname']; ?><span class="division"></span></p>


    <p class="control-label col-sm-2" for="email">Occupation : &emsp;<?php echo $res['focc']; ?><span class="division"></span></p>

    
    <p class="control-label col-sm-2" for="email">Mobile No : &emsp;<?php echo $res['fmo']; ?><span class="division"></span></p>


    
    <p class="control-label col-sm-2" for="email">Mother's Name : &emsp;<?php echo $res['mname']; ?><span class="division"></span></p>

    
    <p class="control-label col-sm-2" for="email">Occupation : &emsp;<?php echo $res['mocc']; ?><span class="division"></span></p>


    <p class="control-label col-sm-2" for="email">Mobile No : &emsp;<?php echo $res['mmo']; ?><span class="division"></span></p>



    <h2>Acadamic Details</h2>

    <p class="control-label col-sm-2" for="email">Course : &emsp;<?php echo $res2['course']; ?><span class="division"></span></p>

    <p>Branch : &emsp;<?php echo $res2['br']; ?><span class="division"></span></p>



    <p>Division : &emsp;<?php echo $res2['divs']; ?><span class="division"></span></p>



    <p>Admission Quota : &emsp;<?php echo $res2['admq']; ?><span class="division"></span></p>



    <p>Entrance Rank : &emsp;<?php echo $res2['entr']; ?><span class="division"></span></p>




    <p>Present arrears: &emsp;<?php echo $res2['parr']; ?><span class="division"></span></p>



    <p>History of arrears : &emsp;<?php echo $res2['harr']; ?><span class="division"></span></p>



    <p>10th % : &emsp;<?php echo $res2['t10p']; ?><span class="division"></span></p>



    <p>12th % : &emsp;<?php echo $res2['t12p']; ?><span class="division"></span></p>
    

    <label class="control-label col-sm-2" for="pwd" style=padding-left:10%>UG_SGPA</label>

    <p>S1 SGPA : &emsp;<?php echo $res2['u1']; ?><span class="division"></span></p>
    <p>S2 SGPA : &emsp;<?php echo $res2['u2']; ?><span class="division"></span></p>
    <p>S3 SGPA : &emsp;<?php echo $res2['u3']; ?><span class="division"></span></p>
    <p>S4 SGPA : &emsp;<?php echo $res2['u4']; ?><span class="division"></span></p>
    <p>S5 SGPA : &emsp;<?php echo $res2['u5']; ?><span class="division"></span></p>
    <br>

    <P>CGPA : &emsp;<?php echo $res2['uc']; ?><span class="division"></span></P>
      
 </div>
      </div>
    </div>
  </div> 
<?php
$conn->close();
?>

</body>
</html>