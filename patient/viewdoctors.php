<?php
  session_start();
  $lkey=$_COOKIE["lkey"];
  //echo $lkey;
  $date=$_POST['ap_date'];
  if(isset($_SESSION['logined']) && $_SESSION['logined']==1)
  { 
    include 'connection.php';
    include 'patientheader.php';
  	$sql="select d.name,d.specialization,d.loginid from tb_doctor d inner join tb_drslots s on d.loginid=s.loginid where s.availdate='".$date."'";
  	$result = mysqli_query($conn,$sql);
    $flag=0;
    while ($row=mysqli_fetch_array($result))
    {
      $flag=1;
    }
    $sql="select d.name,d.specialization,d.loginid from tb_doctor d inner join tb_drslots s on d.loginid=s.loginid where s.availdate='".$date."'";
    //echo $sql;exit;
    $result = mysqli_query($conn,$sql);
?>

  <section class="content-header">
      
    </section> 

     <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
        
            <div class="col-lg-8 col-12">
            
        </div>
        
        
          
          
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->

            <div class="card-body" >
                          <center><h3 style="color: grey;"><b>Doctor Appoinment Booking</b></h3></center>
<div class="card-body" ><div class="card-body" ><div class="card-body" ><div class="card-body" >
            

			<form role="form" action="viewdocslot.php" method="post" enctype="multipart/form-data" name="myform">
                <div class="form-group">
					<input value="<?php echo $date; ?>" class="form-control input-sm" id="ap_date" name="ap_date" readonly>
					<span style="color: red;font-size: 14px" id="f5"></span>
				</div> 

				<div class="form-group" >
					<select name="drnames" id="drnames" class="form-control input-sm">
					<?php
						while ($row=mysqli_fetch_array($result))
					    {  ?>
					    	<option value="<?php echo $row['loginid']; ?>"><?php echo $row['name']." [ ".$row['specialization']." ] "; ?></option>
					 <?php }	?>

           <?php
              if($flag==0)
              { ?>
                <option value="No Doctors Available">No Doctors Available</option>
     <?php         }
           ?>
					</select>
				</div>    	                         
  <?php
              if($flag==1)
              { ?>
               
<input type="submit" value="View Available Slots" class="btn btn-info btn-block" > <?php //onclick="return checkAll()" ?>
     <?php         }
           ?>

                            </form>

<?php 
                 if($flag==0){
                  ?> <a href="drbooking.php"><button class="btn btn-danger btn-block"><i class="fa fa-undo" aria-hidden="true"></i>&nbsp;&nbsp;Back To Booking</button></a>
          <?php       }
                 ?>

                        </div>  </div></div>  </div>

                        </div>

          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer" style="position:relative; z-index:99; ">
   <small><center>Designed and developed by Celine Carmel M J | EyeLet Eye care 2022</center></small>
    
  </footer>


</div>
<!-- ./wrapper -->
<?php
}
  else
  {
    Header("location:../index.php");
  }
?>
