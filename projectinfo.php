<!DOCTYPE html>
<html>
<head>
<title>PROJECT REGISTRATION DETAILS</title>
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
<th>SSN</th>
<th>PROJECTNUMBER</th>
<th>SPONSORNAME</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "university database");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql ="SELECT g.SSN,g.PROJECTNUMBER,e.SPONSORNAME FROM studentworkson g,projects e WHERE e.PROJECTNUMBER=g.PROJECTNUMBER;";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr>
<td>" . $row["SSN"]. "</td>
<td>" . $row["PROJECTNUMBER"] . "</td>
<td>" . $row["SPONSORNAME"] . "</td>
</tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>