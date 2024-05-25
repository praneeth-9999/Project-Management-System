<!DOCTYPE html>
<html>
<head>
<title>PROJECT INFORMATION</title>
<style>
table {
border-collapse: collapse;
width: 75%;
color: #588c7e;
font-family: monospace;
font-size: 20px;
text-align: left;
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
<th>PROJECTNUMBER</th>
<th>SPONSORNAME</th>
<th>STARTINGDATE</th>
<th>ENDINGDATE</th>
<th>BUDGET</th>

</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "university database");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM projects";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr>
<td>" . $row["PROJECTNUMBER"]. "</td>
<td>" . $row["SPONSORNAME"] . "</td>
<td>".$row["STARTINGDATE"]. "</td>
<td>".$row["ENDINGDATE"]."</td>
<td>".$row["BUDGET"]."</td>
</tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>