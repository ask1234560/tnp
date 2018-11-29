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


$servername = "localhost";
$username = "camre";
$password = "camre";
$dbname = "campus_recruitment";
$tbl1_name="hod_appr";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if (isset($_GET['de']))
{
    $de = $_GET['de'];
$sql="SELECT admno,name FROM $tbl1_name WHERE branch = '". $de . "' AND approved=1 ;";
}

if (isset($_GET['admno']))
{ 
$admno = $_GET['admno'];
$sql="SELECT admno,name FROM $tbl1_name WHERE admno = '". $admno . "' AND approved=1 ;";


}




$res  = $conn->query($sql);

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

$conn->close();
?>
</body>
</html>


