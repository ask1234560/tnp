<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$co = $_GET['co'];
$de = $_GET['de'];
$cg = intval($_GET['cg']);
$nos = intval($_GET['nos']);



$servername = "localhost";
$username = "camre";
$password = "camre";
$dbname = "campus_recruitment";
$tbl1_name="per_aca";




// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 



$sql="SELECT admno,name FROM $tbl1_name WHERE course = '". $co . "' AND br ='".$de."' AND uc =" .$cg. " AND parr =" .$nos . ';';

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
    echo "<td>" . $row['admno'] . "</td>";
    echo "<td>" . $row['name'] . "</td>";
    echo "</tr>";

    }
} else {
    echo "0 results";
}




echo "</table>";

$conn->close();
?>
</body>
</html>