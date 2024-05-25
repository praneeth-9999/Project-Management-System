<!DOCTYPE html>
<html>
<head>
<title>DEPARTMENT INFORMATION</title>
<style>
table {
border-collapse: collapse;
width: 75%;
color: #588c7e;
font-family: monospace;
font-size: 20px;
text-align: center;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
<table>
<tr>
<th>DEPTNO</th>
<th>DEPTNAME</th>
<th>MAINOFFICE</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "university database");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM department";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr>
<td>" . $row["DEPTNO"]. "</td>
<td>" . $row["DEPTNAME"] . "</td>
<td>".$row["MAINOFFICE"]. "</td>
</tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>