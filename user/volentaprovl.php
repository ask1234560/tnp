<?php
$servername = "localhost";
$username = "camre";
$password = "camre";
$dbname = "campus_recruitment";
$tbl1_name="per_aca";
$bra=$_GET['branch']; 
$tbl2_name="per_appr"; 



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}  

$sql="select admno,name from $tbl1_name where br= '".$bra."' ;" ;
$res  = $conn->query($sql);

$sql2="select * from $tbl2_name where approved=1 AND branch='$bra';" ;
$res2= $conn->query($sql2);


?>

<!DOCTYPE html>
<html>
<head>
	<title>TNP</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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


table {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

table td, table th {
  border: 1px solid #ddd;
  padding: 8px;
}

table tr:nth-child(even){background-color: #f2f2f2;}

table tr:hover {background-color: #ddd;}

table th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #34495e;
  color: white;
}

</style>
</head>
<body>
  <div class="header">
    <a href="#default" class="logo">Training and Placement Cell</a>
    <div class="header-right">
      <!--<a href="#contact" style=color:white>Events</a>-->
      <a href="login.html" style=color:white> <span class="glyphicon glyphicon-log-out"></span> Logout</a>
    </div>
  </div>
  <div class="container">
   <center><h2>Approvel List</h2></center>
   <div class="panel panel-default" style=margin-top:2%>
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">To be approved</a>
      </h4>
    </div>
    <div id="collapse1" class="panel-collapse collapse">
      <div class="panel-body">
       <div class="container">
        <div class="col-sm-10">
          
  <!--<table class="table table-hover">
    <thead>
      <tr>
        <th>Admission No</th>
        <th>Name</th>
        <th></th>
      </tr>
    </thead>



  </table>-->


  <div id="txtHint" style="width: 80%;margin: 10% auto;border: 3px solid #00a3cc;font-size: 20px;">
    <?php
    echo "<table>
      <tr>
        <th>Admission No</th>
        <th>Name</th> 

      </tr>";

      if ($res->num_rows > 0) {
      // output data of each row
      while($row = $res->fetch_assoc()) {

      echo "<tr>"; 
        echo "<td>" ."<a href=display.php?admno=".$row['admno'].">". $row['admno'] ."</a>". "</td>";
        echo "<td>" . $row['name'] . "</td>";
      echo "</tr>";

    }
  }

echo "</table>";


?>






</div>




</div></div>

</div>
</div>
</div>


<div class="panel panel-default" >
  <div class="panel-heading">
    <h4 class="panel-title">
      <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Volunteer approved</a>
    </h4>
  </div>
  <div id="collapse2" class="panel-collapse collapse">
    <div class="panel-body">
     <div class="container">
      <div class="col-sm-10">
   

<!--  <table class="table table-hover">
    <thead>
      <tr>
        <th>Admission No</th>
        <th>Name</th>
        <th></th>
      </tr>
    </thead>



  </table>-->



  <div id="txtHint" style="width: 80%;margin: 10% auto;border: 3px solid #00a3cc;font-size: 20px;">
    <?php
    echo "<table>
      <tr>
        <th>Admission No</th>
        <th>Name</th> 

      </tr>";

      if ($res2->num_rows > 0) {
      // output data of each row
      while($row2 = $res2->fetch_assoc()) {
      
      echo "<tr>"; 
        echo "<td>" . $row2['admno'] . "</td>";
        echo "<td>" . $row2['name'] . "</td>";
      echo "</tr>";

    }
  }

echo "</table>";


?>






</div>




</div></div></div>
</div>
</div>




</div>
<?php
$conn->close();

 ?>

</body>
</html>