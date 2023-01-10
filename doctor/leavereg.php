<?php
  session_start();
  include 'connection.php';

  $type = $_POST['type'];

  $sdate = $_POST['sdate'];
  $edate = $_POST['edate'];
  $reason = $_POST['reason'];
  $stid = $_POST['stid'];

  $currentdate = date('m-d-Y');
  $status=0;
  $utype='doctor';

  $sql3="insert into tb_leaves(type,sdate,edate,reason,applydate,status,staffid,utype) 
  values ('".$type."','".$sdate."','".$edate."','".$reason."','".$currentdate."','".$status."','".$stid."','".$utype."')";
  //echo $sql3;exit;
    
  $ex2=mysqli_query($conn,$sql3);

  if($ex2)
  {
    echo "<SCRIPT type='text/javascript'>alert('Leave Applied Successfully');
    window.location.replace(\"viewleaves.php\");
    </SCRIPT>";
  }
  else
  {
    echo "<SCRIPT type='text/javascript'>alert('Leave Submission Failed');
    window.location.replace(\"applyleavereg.php\");
    </SCRIPT>";
  }  
  
?>
