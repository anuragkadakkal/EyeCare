<?php
  session_start();
  if(isset($_SESSION['logined']) && $_SESSION['logined']==1)
  { 
    include 'connection.php';
    include 'doctorheader.php';
    include 'doctormainhome.php';
    include 'doctorfooter.php';
  }
  else
  {
    Header("location:../index.php");
  }
?>
