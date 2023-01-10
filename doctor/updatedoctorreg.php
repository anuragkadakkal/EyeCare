<?php
  session_start();
  include 'connection.php';

  $lkey = $_COOKIE['lkey'];
  //echo $lkey;exit;

  $address = ($_POST['address']);
  $pin = ($_POST['pin']);
  $phno = ($_POST['phno']);
  $dob = ($_POST['dob']);

  $specs = ($_POST['specs']);
  $ug = ($_POST['ug']);
  $ugyear = ($_POST['ugyear']);
  $pg = ($_POST['pg']);
  $pgyear = ($_POST['pgyear']);
  $exp = $_POST['exp'];

  $filename = $_FILES['aadharfile']["name"];
  $filePath = realpath($_FILES["aadharfile"]["tmp_name"]);
  //echo $filePath;exit;
  
  $sql3="update tb_doctor set address='".$address."',pincode='".$pin."',phno='".$phno."',dob='".$dob."', specialization='".$specs."',ug='".$ug."',ugyear='".$ugyear."',pg='".$pg."',pgyear='".$pgyear."',expduration='".$exp."',exp='".$filename."'";
  //echo $sql3;exit;
    
  $ex2=mysqli_query($conn,$sql3);

  if($ex2)
  {
    $path="../Uploads/".$lkey;
    if (!file_exists($path)) {
      mkdir($path,0777,true);
    }
    move_uploaded_file($_FILES['aadharfile']["tmp_name"],$path."/".$_FILES['aadharfile']["name"]);
    //exit;
    echo "<SCRIPT type='text/javascript'>alert('Doctor Profile Updated Successfully');
    window.location.replace(\"index.php\");
    </SCRIPT>";
  }
  else
  {
    echo "<SCRIPT type='text/javascript'>alert('Doctor Profile Updation Failed');
    window.location.replace(\"updatedoctor.php\");
    </SCRIPT>";
  }  
  
?>
