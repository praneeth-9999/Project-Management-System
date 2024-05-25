<?php
if(isset($_POST['PROFID']))
{
	$yes=false;
	$insert=false;
	//$SSN,$Name,$AGE,$DEGREE="";
	$PROFID=$_POST['PROFID'];
	$Name = $_POST['Name'];
	$AGE= $_POST['AGE'];
	$RANK=$_POST['RANK'];
	$RESEARCHSPECIALITY=$_POST['RESEARCHSPECIALITY'];

	// Database connection
	$conn = new mysqli('localhost','root','','university database');
	if($conn->connect_error)
	{
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} 
	else 
	{
		$sql ="insert into `professor`(`PROFID`, `Name`, `AGE`, `RANK`,`RESEARCHSPECIALITY`) values ('$PROFID', '$Name', '$AGE', '$RANK','$RESEARCHSPECIALITY');";
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
			background-image:url("2.jpg");
			background-repeat:no-repeat;
			background-size:cover;
			}
			h1 {
				color:#00fff6;
				margin:10px}

		form{
			width:25%;
			background:orange;
			}
			input[type="text"],[type="number"]{
				width:90%;
				heigth:40px;
				
				//font-size:30px;
				margin:10px;
				outline:none;
				}
				input[type="submit"]{
					width:40%;
					color:white;
					background:blue;
					border-radius: 10px;
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
 <h1>PROFESSOR INFORMATION</h1>
 <form action="connect1.php" method="post">
 <input type="number" name="PROFID" id="PROFID" placeholder="PROFID"/></br>
 <input type="text"  name="Name" id="Name" placeholder="Name"/></br>
 <input type="number" min="26" max="59" name="AGE" id="AGE" placeholder="AGE"/></br>
 <input type="text" name="RANK" id="RANK" placeholder="RANK"/></br>
 <input type="text" name="RESEARCHSPECIALITY" id="RESEARCHSPECIALITY" placeholder="RESEARCHSPECIALITY"/></br>
 <input type="submit" value="Submit"></br>
 </form>
	
 </center>
 
</html>