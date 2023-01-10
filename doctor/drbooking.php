<?php
  session_start();
  $lkey=$_COOKIE["lkey"];
  //echo $lkey;
  
  if(isset($_SESSION['logined']) && $_SESSION['logined']==1)
  { 
    include 'connection.php';
    include 'patientheader.php';
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
                          <h2 style="font-family: 'Open Sans', sans-serif;"><center><b>Doctor Appointment Booking</b></center></h2><br>
<div class="card-body" ><div class="card-body" >
            

                          <form role="form" action="viewdoctors.php" method="post" enctype="multipart/form-data" name="myform">
                        
              <div class="form-group">
                
                <input placeholder="Appoinment Date" min="<?php $curdate=date('Y-m-d'); echo date('Y-m-d'); ?>" 
                max="<?php $date = new DateTime($curdate); echo $date->format('Y-m-t'); ?>" class="textbox-n form-control input-sm" type="text" onfocus="(this.type='date')" id="ap_date" name="ap_date" required>
                  <span style="color: red;font-size: 14px" id="f5"></span>
                              </div> 
                  <input type="submit" value="View Available Doctors" class="btn btn-info btn-block" > <?php //onclick="return checkAll()" ?>
                            </form>




                        </div>  

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
