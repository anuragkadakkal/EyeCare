<?php
    session_start();
    setcookie('logined',1);
    if(isset($_SESSION['logined']) && $_SESSION['logined']==1)
    {
      include 'connection.php';
      include 'doctorheader.php';
      $ptid = $_COOKIE['lkey'];
      $sql="select * from tb_doctor inner join tb_booking on tb_doctor.loginid=tb_booking.drid where tb_booking.loginid='".$ptid."' order by tb_booking.bkdate desc";
      //echo $sql;exit;
      $result = mysqli_query($conn,$sql);

?>
<script type="text/javascript">
  function endDate() {

    var e1 = document.getElementById("e1");
    var edate = document.getElementById('ap_date').value;

    if(edate=="")
       {
         e1.textContent = "**Select Any Date for Searching";
         document.getElementById("ap_date").focus();
         return false;
       }
       else
       {
        e1.textContent = "";
        return true;
       }
  }

  function checkaAll() {

    if(endDate())
       {
         return true;
       }
       else
       {
        return false;
       }
  }
</script>
     <!-- Main content -->
    <section class="content">
      <div class="container-fluid">



        <!-- Small boxes (Stat box) --><br><br><br>
        <h2 style="font-family: 'Open Sans', sans-serif;"><center><b>View Appointments</b></center></h2><br>
        

        <form role="form" action="viewdatewisebooking.php" method="post" enctype="multipart/form-data" name="myform">
                        
              <div class="form-group">
                
                <input placeholder="Select Appoinment Date" class="textbox-n form-control input-sm" type="text" onfocus="(this.type='date')" id="ap_date" name="ap_date" >
                  <span style="color: red;font-size: 12px" id="e1"></span>
                              </div> 
                  <input type="submit" value="View Bookings" class="btn btn-info btn-block" onclick="return checkaAll()" >
                            </form>


          <!--// min="<?php $curdate//=date('Y-m-d'); echo date('Y-m-d'); ?>" 
                max="<?php $date //= new DateTime($curdate); echo $date->format('Y-m-t'); ?>"  -->

</div>
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
