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
.placed{
	margin-left:20%;
	margin-top:10%;
	height:300px;
	width:50%;
	background-color:white;
	border-style:solid;
	padding-left:5%;
	border-color:#34495e;
	font-weight:bold;
	padding-top:5%;

}
</style>
</head>
<body>
<div class="header">
  <a href="#default" class="logo">Training and Placement Cell</a>
  <div class="header-right">
  	 <a href="comphome.html" style=color:white>Home</a>
        <a href="../user/login.html" style=color:white> Sign Out</a>
   
  </div>
</div>
<form action="perpla.php" method="post">
<div class="placed">
	<p style=padding-left:8%>Admission No : <?php echo $_GET['admno'] ?></p>
	<p style=padding-left:16.5%>Name : <?php echo $_GET['name'] ?></p>
	<p style=padding-top:3%>Enter company name :
	<input style=height:30px;margin-bottom:7% type="text" class="form-control" id="com" name="com"></p>
  <input type="hidden" id="name" name="name" value="<?php echo $_GET['name'] ?>">
  <input type="hidden" id="admno" name="admno" value="<?php echo $_GET['admno'] ?>">
<button type="Submit" class="button button2" style=margin-left:70%>Submit</button>
</div>
</form>

</body>
</html>