<!DOCTYPE html>
<html>
<head>
<style>

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

<?php
$co = $_GET['co'];
$de = $_GET['de'];
$cg = intval($_GET['cg']);
$nos = intval($_GET['nos']);
$so = $_GET['so'];



$servername = "localhost";
$username = "camre";
$password = "camre";
$dbname = "campus_recruitment";
$tbl1_name="tpo_appr";




// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}  



$sql="SELECT admno,name FROM $tbl1_name WHERE approved=1 AND course = '". $co . "' AND branch ='".$de."' AND uc >=" .$cg. " AND parr <=" .$nos . '  ORDER BY '.$so.' ;';

$res  = $conn->query($sql);

echo "<table>
<tr>
<th>Admission No</th>
<th>Name</th> 

</tr>";
 
 $cn=$_GET['cname'];

 //echo $cn ;

if ($res->num_rows > 0) {
    // output data of each row
    while($row = $res->fetch_assoc()) {
    
    echo "<tr>";
    echo "<td>" ."<a href=info.php?admno=".$row['admno'].'&cname='.$cn.">". $row['admno'] ."</a>". "</td>";
    echo "<td>" . $row['name'] . "</td>";
    echo "</tr>";

    }
}

echo "</table>";

$conn->close();
?>
</body>
</html>