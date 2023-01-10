<?php
  session_start();
	include 'connection.php';

  $ptid=$_COOKIE["lkey"];//patientid
	$ap_date = $_POST['ap_date'];
	$drid = $_POST['drid'];
	$tsslot = $_POST['tsslot'];
  //echo $tsslot;exit;
  $status = 0;

  $sql1="insert into tb_booking(drid,bkdate,bktimeslot,status,loginid) values ('".$drid."','".$ap_date."','".$tsslot."','".$status."','".$ptid."')";
  $ex1=mysqli_query($conn,$sql1);

  if($tsslot=='s1')
  {
    $sql1="update tb_drslots set slot1='0' where availdate ='".$ap_date."' and loginid='".$drid."'";
    $ex1=mysqli_query($conn,$sql1);
  }

  if($tsslot=='s2')
  {
    $sql1="update tb_drslots set slot2='0' where availdate ='".$ap_date."' and loginid='".$drid."'";
    $ex1=mysqli_query($conn,$sql1);
  }

  if($tsslot=='s3')
  {
    $sql1="update tb_drslots set slot3='0' where availdate ='".$ap_date."' and loginid='".$drid."'";
    $ex1=mysqli_query($conn,$sql1);
  }

  if($tsslot=='s4')
  {
    $sql1="update tb_drslots set slot4='0' where availdate ='".$ap_date."' and loginid='".$drid."'";
    $ex1=mysqli_query($conn,$sql1);
  }

  if($tsslot=='s5')
  {
    $sql1="update tb_drslots set slot5='0' where availdate ='".$ap_date."' and loginid='".$drid."'";
    $ex1=mysqli_query($conn,$sql1);
  }

  if($tsslot=='s6')
  {
    $sql1="update tb_drslots set slot6='0' where availdate ='".$ap_date."' and loginid='".$drid."'";
    $ex1=mysqli_query($conn,$sql1);
  }

  if($tsslot=='s7')
  {
    $sql1="update tb_drslots set slot7='0' where availdate ='".$ap_date."' and loginid='".$drid."'";
    $ex1=mysqli_query($conn,$sql1);
  }

  if($ex1)
	{
     echo "<SCRIPT type='text/javascript'>alert('Appoinment Booked Successfully');
     window.location.replace(\"viewdrbookings.php\");
     </SCRIPT>";
	}
	else
	{
    echo "<SCRIPT type='text/javascript'>alert('Appointment Booking Failed');
     window.location.replace(\"drbooking.php\");
     </SCRIPT>";
  }

?>