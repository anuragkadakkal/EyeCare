<?php
  session_start();
  if(isset($_SESSION['logined']) && $_SESSION['logined']==1)
  { 
    include 'connection.php';
    include 'patientheader.php';
    include 'patientmainhome.php';
    include 'patientfooter.php';
  }
  else
  {
    Header("location:../index.php");
  }
?>
