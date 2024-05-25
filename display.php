<?php
	include("universitydatabase.html");
	error_reporting(0);
	$query="SELECT * FROM STUDENT";
	$data=mysqli_connect($conn,$query);
	$total=mysqli_num_rows($data);
	$result=mysqli_fetch_assoc($data);
	echo $result['SSN']."	".$result['Name']."	  ".$result['AGE']."	".$result['DEGREE'];
	//echo $total;
	if($total!=0)
	{
		//echo "Table has records";
	}
	else
	{
		echo "no records";
	}
?>