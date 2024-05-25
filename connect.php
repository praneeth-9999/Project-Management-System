<?php
if(isset($_POST['SSN']))
{
	$yes=false;
	$insert=false;
	//$SSN,$Name,$AGE,$DEGREE="";
	$SSN=$_POST['SSN'];
	$Name = $_POST['Name'];
	$AGE= $_POST['AGE'];
	$DEGREE=$_POST['DEGREE'];

	// Database connection
	$conn = new mysqli('localhost','root','','university database');
	if($conn->connect_error)
	{
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} 
	else 
	{
		$sql ="insert into `student`(`SSN`, `Name`, `AGE`, `DEGREE`) values ('$SSN', '$Name', '$AGE', '$DEGREE');";
		if($conn->query($sql))
		{
		//	echo "Insertion successful......";
			$insert=true;
		}
		$conn->close();
	}
	$yes=$insert;
}
?>
<DOCTYPE html>
<html>
<head>
	<title>DWARAKA UNIVERSITY</title>
	<style>
		body {
			background-image:url("4.jpg");
			background-repeat:no-repeat;
			background-size:cover;
			}
			h1 {
				color:orange;
				margin:10px}

		form{
			width:25%;
			background:orange;
			}
			input[type="text"],[type="number"]{
				width:90%;
				heigth:40px;
				font-size:30px;
				margin:10px;
				outline:none;
				}
				input[type="submit"]{
					width:90%;
					color:white;
					background:blue;
					cursor:pointer;
					outline:none;
					margin:10px;
					font-size:18px;
					}
	</style>
	</title>


</head>


<body>

</body>
 <center>
 <h1>STUDENT INFORMATION</h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <form action="connect.php" method="post">
 <input id="number" type="number" name="SSN" id="SSN" placeholder="SSN"/></br>
 <input id="name" type="text" name="Name" id="Name" placeholder="Name"/></br>
 <input id="age" type="number" min="17" max="24" name="AGE" id="AGE" placeholder="AGE"/></br>
 <input type="text" name="DEGREE" id="DEGREE" placeholder="DEGREE"/></br>
 <input type="submit" value="Submit"></br>
 </form>
 </center>

<p>
<h3 align="center">
	<font face="cinzel" size="4">
		<a href="display1.php">STUDENTINFORMATION</a>&nbsp;&nbsp;&nbsp;
	</font>
	</h3>
	</p>
</html>