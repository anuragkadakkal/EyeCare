<?php
  session_start();
  include 'connection.php';

  $ptid = $_POST['ptid'];

  $rsph = $_POST['rsph'];
  $rcyl = $_POST['rcyl'];
  $raxis = $_POST['raxis'];
  $rprism = $_POST['rprism'];
  $radd = $_POST['radd'];

  $lsph = $_POST['lsph'];
  $lcyl = $_POST['lcyl'];
  $laxis = $_POST['laxis'];
  $lprism = $_POST['lprism'];
  $ladd = $_POST['ladd'];

  $pd = $_POST['pd'];

  $rdate = date('m-d-Y');

  $sql3="insert into tb_ptrecords(rsph,rcyl,raxis,rprism,radd,lsph,lcyl,laxis,lprism,ladd,pd,rdate,ptid) 
  values ('".$rsph."','".$rcyl."','".$raxis."','".$rprism."','".$radd."','".$lsph."','".$lcyl."','".$laxis."','".$lprism."','".$ladd."','".$pd."','".$rdate."','".$ptid."')";
  //echo $sql3;exit;
    
  $ex2=mysqli_query($conn,$sql3);

  if($ex2)
  {
    echo "<SCRIPT type='text/javascript'>alert('Patient Record Added Successfully');
    window.location.replace(\"viewpts.php\");
    </SCRIPT>";
  }
  else
  {
    echo "<SCRIPT type='text/javascript'>alert('Patient Record Adding Failed');
    window.location.replace(\"viewpts.php\");
    </SCRIPT>";
  }  
  
?>
