<?php
  session_start();
	include 'connection.php';

	$email = $_POST['email'];
	$name = $_POST['name'];
  $pass = $_POST['pass'];
  $conpass = $_POST['conpass'];
  $status = 1;
  $utype = 'patient';
  $encpass=md5($pass);

  $sql2="select username from tb_login where username='".$email."'";
  $result = mysqli_query($conn,$sql2);
  $flag=0;
  while($row=mysqli_fetch_array($result))
  {
      $flag=1;
  }

  if($flag==1)
  {
    echo "<SCRIPT type='text/javascript'>alert('Email already registered. Try another email.');
     window.location.replace(\"patientreg.php\");
     </SCRIPT>";
  }

  $sql1="insert into tb_login(username,password,utype,status) values ('".$email."','".$encpass."','".$utype."','".$status."')";
 
  $ex1=mysqli_query($conn,$sql1);

  $sql2="select id from tb_login where username='".$email."' and password='".$encpass."'";
  
  $result = mysqli_query($conn,$sql2);
  while($row=mysqli_fetch_array($result))
  {
      $loginid=$row["id"];
  }

  $sql3="insert into tb_patient (name,loginid) values ('".$name."','".$loginid."')";
  $ex2=mysqli_query($conn,$sql3);

  if($ex1 && $ex2)
	{
    //exit;
      echo "<SCRIPT type='text/javascript'>alert('Registration Successfull');
     window.location.replace(\"index.php\");
     </SCRIPT>";    
	}
	else
	{
    echo "<SCRIPT type='text/javascript'>alert('Registration Failed');
     window.location.replace(\"patientreg.php\");
     </SCRIPT>";
  }

?>