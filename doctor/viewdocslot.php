<?php
  session_start();
  date_default_timezone_set("Asia/Calcutta");

  
  $a = strval(date('Hms'));
  $s0 = '090000';
  $s1 = '093000';

  $s2 = '100000';

  $s3 = '110000';

  $s4 = '123000';
  $s5 = '140000'; //2pm

  $s6 = '150000'; //3pm


  //exit;
  $ptid=$_COOKIE["lkey"];//patientid
  //echo $lkey;
  $date=$_POST['ap_date']; //ap_date
  $drid = $_POST['drnames']; //drloginid
  //echo $drid;exit;
  if(isset($_SESSION['logined']) && $_SESSION['logined']==1)
  { 
    include 'connection.php';
    	include 'patientheader.php';
  	$sql="select * from tb_doctor where loginid = '".$drid."'";
  	$result = mysqli_query($conn,$sql);
  	while ($row=mysqli_fetch_array($result))
	{
		$drname=$row['name'];
		$spec=" [ ".$row['specialization']." ] ";
	}

	$sql="select * from tb_drslots where loginid = '".$drid."' and availdate='".$date."'";
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
            

			<form role="form" action="bookslot.php" method="post" enctype="multipart/form-data" name="myform">
                <div class="form-group">
					<input value="<?php echo $date; ?>" class="form-control input-sm" id="ap_date" name="ap_date" readonly>
					<span style="color: red;font-size: 14px" id="f5"></span>
				</div> 

				<div class="form-group">
					<input value="<?php echo $drname.$spec; ?>" class="form-control input-sm" id="drname" name="drname" readonly>
					<input type="hidden" name="drid" value="<?php echo $drid; ?>" id='drid'>
					<span style="color: red;font-size: 14px" id="f5"></span>
				</div> 

				<div class="form-group" >
					<select name="tsslot" id="tsslot" class="form-control input-sm">
					<?php
						$f=0;
						while ($row=mysqli_fetch_array($result))
              {   
                
                $slot=$row['slot1'];
                if($slot=='0' ){}else{$f=1;  if($a < $s0 or date('Y-m-d')< $date){     ?> <option value="s1">9am-9.30am</option> <?php }}   

                $slot=$row['slot2'];
                if($slot==0){}else{$f=1;   if($a < $s1 or date('Y-m-d')< $date){     ?> <option value="s2">9.30am-10am</option> <?php  } } 

                $slot=$row['slot3'];
                if($slot==0){}else{$f=1;   if($a < $s2 or date('Y-m-d')< $date){     ?> <option value="s3">10am-10.30am</option> <?php  } }

                $slot=$row['slot4'];
                if($slot==0){}else{$f=1;   if($a < $s3 or date('Y-m-d')< $date){     ?> <option value="s4">11am-11.30am</option> <?php }  } 

                $slot=$row['slot5'];
                if($slot==0){}else{$f=1;   if($a < $s4 or date('Y-m-d')< $date){     ?> <option value="s5">12.30pm-1pm</option> <?php }  } 

                $slot=$row['slot6'];
                if($slot==0){}else{$f=1;   if($a < $s5 or date('Y-m-d')< $date){     ?> <option value="s6">2pm-2.30pm</option> <?php  }}  

                $slot=$row['slot7'];
                if($slot==0){}else{$f=1;   


                  if($a < $s6 or date('Y-m-d')< $date)
                  {     ?> 
                      <option value="s7">3pm-3.30pm</option> <?php 
                  }
                  else
                  { ?>

                    <option value="No Slot Available">No Slot Available</option>

                 <?php } }   ?>
          <?php } 
				  	if($f==0){
                 	?>  <option value="No Slot Available">No Slot Available</option>
          <?php       }
                 ?>
					</select>
				</div> 
                <?php 
                 if($f==1 and $a < $s6 or date('Y-m-d')< $date){
                 	?>  <input type="submit" value="Book Slot" class="btn btn-info btn-block" >
          <?php       } ?>
                           
                 </form>


                 <?php 
                 if($f==1 and $a < $s6 or date('Y-m-d')< $date){
                  ?>  
          <?php       }else{?>
           <a href="drbooking.php"><button class="btn btn-danger btn-block"><i class="fa fa-undo" aria-hidden="true"></i>&nbsp;&nbsp;Back To Booking</button></a>
 <?php         }
                 ?>





                 <?php 
                 if($f==0 or $a > $s6){
                  if( date('Y-m-d') > $date)
                  { ?>
                    <a href="drbooking.php"><button class="btn btn-danger btn-block"><i class="fa fa-undo" aria-hidden="true"></i>&nbsp;&nbsp;Back To Booking</button></a>
                  <?php } 
                 	?> 
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
