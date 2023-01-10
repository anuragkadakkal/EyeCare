<?php
  session_start();
  include 'connection.php';

  $bkid = $_GET['t'];
  $status=0;
  $_SESSION['bkid']=$bkid;
  $sql2 = "update tb_booking set status='".$status."' where id='".$bkid."'";
  $ex2=mysqli_query($conn,$sql2);

  if($ex2)
  {
    echo "<SCRIPT type='text/javascript'>alert('Booking Rejected');window.location.replace(\"rejected_bkmail.php\"); </SCRIPT>";
  }
  else
  {
    echo "<SCRIPT type='text/javascript'>alert('Booking Rejection Failed');window.location.replace(\"viewdrbookings.php\");</SCRIPT>";
  }

?>
