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
  top: 32%;
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


<script src="datapro.js" defer></script>
<script src="jquery.js" ></script>

<script>
  showUser=function(str1,str2,str3,str4,str5) {
    if (str1 == "" || str2 == "" || str3 == "" || str4 =="") {
      document.getElementById("txtHint").innerHTML = "";
      return;
    } else {  
      if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
          } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP"); 
          }
          xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
              document.getElementById("txtHint").innerHTML = this.responseText;
            }
          };
          xmlhttp.open("GET","data.php?co="+str1+'&de='+str2+'&cg='+str3+'&nos='+str4+'&so='+str5+'&cname='+"<?php echo $_GET['cname'] ?>",true);
          xmlhttp.send();
        }
      }
    </script>


  </head>
  <body>
    <div class="header">
      <a href="#default" class="logo">Training and Placement Cell</a>
      <div class="header-right">
        
        <a href="../user/login.html" style=color:white> <span class="glyphicon glyphicon-log-out"></span> Logout</a>
      </div>
    </div>
  </div>

  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
       
      </div>
      <ul class="nav navbar-nav">
        <li><a href="../user/index.html">Home</a></li>

        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Course<span class="caret"></span></a>




          <ul class="dropdown-menu">
            <li><a href="#" onclick="calling_co('MCA');">MCA</a></li>
            <li><a href="#" onclick="calling_co('B.tech');">BTECH</a></li>
            <li><a href="#" onclick="calling_co('M.tech');">MTECH</a></li>
          </ul>




        </li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Department<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#" onclick="calling_de('Mechanical');">Mechanical</a></li>
            <li><a href="#" onclick="calling_de('Computer Science');">Computer Science</a></li>
            <li><a href="#" onclick="calling_de('Electronics and Communication');">Electronics</a></li>
            <li><a href="#" onclick="calling_de('Civil');">Civil</a></li>
            <li><a href="#" onclick="calling_de('Electrical and Electronics');">Electrical</a></li>
          </ul>
        </li>

        <li><a data-toggle="modal" data-target="#myModal" href="#">CGPA</a></li>
        <li><a data-toggle="modal" data-target="#myModal1"href="#">Number of Supply</a></li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Sort<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#" onclick="calling_so('uc');">CGPA</a></li>
            <li><a href="#" onclick="calling_so('name');">Name</a></li>
          </ul>
        </li>
        <li><a href="selected.php?cname=<?php echo $_GET['cname'] ?>">Selected Students</a></li>
      </ul>

    </div>
  </nav>
  



  <div id="txtHint" style="width: 80%;margin: 10% auto;border: 3px solid #00a3cc;font-size: 20px;">
    <table>
      <tr>
        <th>Admission No</th>
        <th>Name</th> 

      </tr>

    </table>
  </div>
  

 <!-- <div class="container">
   <div class="list">
     <ul>
      <li style=padding-left:20%>Admission No<span style=padding-left:40%>Name</span></li>
      <hr>
      





    </ul>
  </div>

</div>-->


<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <form>
      <div class="modal-content">
        <center>
         <div class="col-xs-4">
          <label for="ex1" style=padding-top:4%>Enter the CGPA</label>
          <input class="form-control" id="ex1" type="number">
        </div></center>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" id="btn11" data-dismiss="modal">Submit</button>
        </div>
      </div>
    </form>

  </div>
</div>



<div class="modal fade" id="myModal1" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <form>
      <div class="modal-content">
        <center>
         <div class="col-xs-4">
          <label for="ex1" style=padding-top:4%>Enter the maximum number of supply</label>
          <input class="form-control" id="ex2" type="number">
        </div></center>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" id="btn22" data-dismiss="modal" >Submit</button>

        </div>
      </div>
    </form>
  </div>
</div>

</body>
</html>