<?php
  include 'connection.php';
  $lkey=$_COOKIE["lkey"];
  //echo $lkey;
  $sql="select * from tb_doctor where loginid='".$lkey."'";
  $result = mysqli_query($conn,$sql);
  while ($row=mysqli_fetch_array($result))
  { 
    $fullname=$row['name'];
  }

?>
<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<title>EyeLet Eye Care</title>
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous"> -->
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
  
 <!-- Select2 -->
 <link rel="icon" href="../logo.png" type="image/icon type">
  <link rel="stylesheet" href="plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="jquery.dataTables.min.css"> 
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
	
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="index.php"><i class="fas fa-bars text-success"><span class=" font-weight-light text-success">&nbsp;&nbsp;Welcome Dr. <?php echo $fullname; ?></span>
          </i></a>
      </li>

    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <span class="brand-text font-weight-light">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;EyeLet Eye Care <i class="nav-icon fas fa-home"></i></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      

      <!-- Sidebar Menu -->
            <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
		
				<li class="nav-item">
				<a  href="index.php" class="nav-link " >
				<i class="nav-icon fas fa-home text-pink"></i>
				<p>
				Dashboard
				</p>
				</a>
				</li>
       
             
				
           <div class="info text-gray">
          <i>Services</i>
        </div>
            		  		 <!-- <li class="nav-item">
            <a  href="onlinedr.html" class="nav-link ">
              <i class="nav-icon fa fa-plus text-danger " style="background:#FFF; border-radius:25px"></i>
              <p>
                Online Doctor Service
              </p>
            </a>
          </li> -->

         <!--  <li class="nav-item">
            <a  href="drbooking.php" class="nav-link ">
              <i class="nav-icon  fas fa-envelope text text-green"></i>
              <p>
               Notifications
              </p>
            </a>
          </li> -->
          <li class="nav-item">
            <a  href="setdoctorschedules.php" class="nav-link ">
              <i class="nav-icon  fas fa-pen text text-blue"></i>
              <p>
                Set Your Schedules
              </p>
            </a>
          </li>

           <li class="nav-item">
            <a  href="viewdrbookings.php" class="nav-link ">
              <i class="nav-icon  fas fa-book text text-green"></i>
              <p>
               View Bookings
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a  href="applyleave.php" class="nav-link ">
              <i class="nav-icon  fas fa-calendar text text-yellow"></i>
              <p>
               Apply Leave
              </p>
            </a>
          </li>
         
           <div class="info text-gray">
          <i>General</i>
        </div>


		  		<li class="nav-item">
            <a  href="updatedoctor.php" class="nav-link ">
              <i class="nav-icon  fas fa-user text-orange"></i>
              <p>
                Update Profile
                
              </p>
            </a>
          </li>

           <li class="nav-item">
            <a  href="passwordchange.php" class="nav-link ">
              <i class="nav-icon fas fa-key text-success"></i>
              <p>
                Password Change
                
              </p>
            </a>
          </li>

		  		 <li class="nav-item">
            <a  href="logout.php" class="nav-link ">
              <i class="nav-icon fas fa-sign-out-alt text-danger"></i>
              <p>
                Logout
                
              </p>
            </a>
          </li>

          

          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
           
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Updated: 27-04-2021 6:33 pm</li>
            </ol>
          </div>
        </div>
      </div></.container-fluid 
    </section> -->
