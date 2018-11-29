
<?php
$servername = "localhost";
$username = "camre";
$password = "camre"; 
$dbname = "campus_recruitment";
$tbl1_name="com_sel";
$cname=$_GET['cname'];


 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
} 

$sql="select name,stu_admno from $tbl1_name where cname='$cname' and flag='1';";
$res  = $conn->query($sql);

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
* {
  box-sizing: border-box;
}


.list ul {margin-left:40%;
  position: absolute;
  top: 30%;
  bottom: 20px;
  left: 50px;
  right: 10%;
  overflow: scroll;
  margin: 0;
  padding: 0;
  border: 2px solid #ccc;
  font-size: 16px;
  font-family: Arial, sans-serif;
  -webkit-overflow-scrolling: touch;
}

.list li {
  padding: 10px 20px;
  border-bottom: 1px solid #ccc;
}
.list li:last-child {
  border-bottom: none;
}
.list li:nth-child(even) {
  background: #f8f8f8;
}
.navbar{
	background-color:#34495e;
	border-color:#34495e;
	width:102%;
	margin-left:-1%;
}
.navbar hover{
	background-color:white;
}
/* Change color on hover */

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
      <a href="download.php?cname=<?php echo $cname ?>" style=color:white>
        <span class="glyphicon glyphicon-export" style=color:white></span> Export
      </a>
      <a href="../user/index.html" style=color:white> <span class="glyphicon glyphicon-log-out"></span> Logout</a>
    </div> 
  </div>
</div>

<!--
<div class="container">
	<div class="list">
	<ul>
  <li style=padding-left:20%>Admission No<span style=padding-left:40%>Name</span></li>
  <hr>





</ul>
</div>
	
 </div>
-->

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
      echo "<td>" . $row['stu_admno'] . "</td>";
      echo "<td>" . $row['name'] . "</td>";
      echo "</tr>";

    }
  }

  echo "</table>";

  $conn->close();
  ?>






</div>






<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <center>
       <div class="col-xs-4">
        <label for="ex1" style=padding-top:4%>Enter the CGPA</label>
        <input class="form-control" id="ex1" type="number">
      </div></center>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Submit</button>
      </div>
    </div>

  </div>
</div>



<div class="modal fade" id="myModal1" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <center>
       <div class="col-xs-4">
        <label for="ex1" style=padding-top:4%>Enter the maximum number of supply</label>
        <input class="form-control" id="ex1" type="number">
      </div></center>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Submit</button>
      </div>
    </div>

  </div>
</div>
</body>
</html>