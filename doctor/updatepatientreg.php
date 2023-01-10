<?php
	session_start();
	include 'connection.php';

	$phno = $_POST['phno'];
	$address = $_POST['address'];
	$dob = $_POST['dob'];
	$key = $_POST['key'];


	$sql3 = "update tb_patient set phno='".$phno."', address='".$address."', dob='".$dob."'where loginid='".$key."'"; 
	//echo $sql3;exit;
	$ex2=mysqli_query($conn,$sql3);

	if($ex2)
	{
		echo "<SCRIPT type='text/javascript'>alert('Patient Profile Updated Successfully');window.location.replace(\"index.php\"); </SCRIPT>";
	}
	else
	{
		echo "<SCRIPT type='text/javascript'>alert('Updation Failed.');window.location.replace(\"updatepatient.php\");</SCRIPT>";
	}

?>
