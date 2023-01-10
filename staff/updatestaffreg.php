<?php
  session_start();
  include 'connection.php';

  $lkey = $_COOKIE['lkey'];
  //echo $lkey;exit;

  $address = ($_POST['address']);
  $phno = ($_POST['phno']);
  $pin = ($_POST['pin']);
  $dob = ($_POST['dob']);

  $ug = ($_POST['ug']);
  $ugyear = ($_POST['ugyear']);
  $pg = ($_POST['pg']);
  $pgyear = ($_POST['pgyear']);
  $exp = $_POST['exp'];


  //echo $address;exit;
  
  $sql3="update tb_staff set address='".$address."',pincode='".$pin."',phno='".$phno."',dob='".$dob."', ug='".$ug."',ugyear='".$ugyear."',pg='".$pg."',pgyear='".$pgyear."',exp='".$exp."'";
  //echo $sql3;exit;
    
  $ex2=mysqli_query($conn,$sql3);

  if($ex2)
  {
    echo "<SCRIPT type='text/javascript'>alert('Staff Profile Updated Successfully');
    window.location.replace(\"index.php\");
    </SCRIPT>";
  }
  else
  {
    echo "<SCRIPT type='text/javascript'>alert('Staff Profile Updation Failed');
    window.location.replace(\"updatestaff.php\");
    </SCRIPT>";
  }  
  
?>
