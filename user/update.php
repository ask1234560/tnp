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
</style>
</head>
<body>
<div class="header">
  <a href="#default" class="logo">Training and Placement Cell</a>
  <div class="header-right">
     <a href="loginvol.html" style=color:white>Home</a>
    <a href="loginvol.html" style=color:white> <span class="glyphicon glyphicon-log-in"></span> Sign Out</a>
  </div>
</div>


<div class="container" style=margin-top:5%>
	<h2  style=padding-left:10%>Update Information</h2>
        
        
	<form class="form-horizontal" action="mng/updata.php" method="post" style=margin-top:3%>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Cgpa :</label>
      <div class="col-sm-6">
        <input type="number" class="form-control" id="uc" placeholder="Enter Cgpa" name="uc">
      </div>
    </div>
   

  
    
    
    <div class="form-group"> 
      <label class="control-label col-sm-2" for="email">Number of arries :</label>
      <div class="col-sm-6">
        <input type="number" class="form-control" id="parr" placeholder="Enter number of supply" name="parr">
      </div>
    </div>
    
 <input type="hidden" id="admno" name="admno" value=<?php echo $_GET['admno'] ?>>

 <button type="Submit" class="btn btn-primary"  style=margin-left:55%;margin-top:2%>update</button>
      
</form>

</body>
</html>