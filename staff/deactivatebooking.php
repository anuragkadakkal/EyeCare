<?php
  session_start();
	include 'connection.php';

  $bkid = $_GET['t'];
	 $status=0;

  	$sql2 = "update tb_booking set status='".$status."' where id='".$bkid."'";
    //echo $sql2;exit;
  	$ex2=mysqli_query($conn,$sql2);

  	if($ex2)
	{
    	echo "<SCRIPT type='text/javascript'>alert('Booking Rejected');window.location.replace(\"viewdrbookings.php\"); </SCRIPT>";
	}
	else
	{
    	echo "<SCRIPT type='text/javascript'>alert('Booking Rejection Failed');window.location.replace(\"viewdrbookings.php\");</SCRIPT>";
  	}

?>
