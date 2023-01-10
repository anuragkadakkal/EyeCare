<?php
    session_start();
    setcookie('logined',1);
    if(isset($_SESSION['logined']) && $_SESSION['logined']==1)
    {
      include 'connection.php';
      include 'staffheader.php';
      $staffid = $_COOKIE['lkey'];
      //echo $staffid;exit;
      //$pt_id = $_GET['t'];
?>

     <!-- Main content -->
    <section class="content">
      <div class="container-fluid">



        <!-- Small boxes (Stat box) --><br><br><br>
        <h2 style="font-family: 'Open Sans', sans-serif;"><center><b>Leave - Actions</b></center></h2><br>


      
      <div class="form-group"> 
            <a href="applyleavereg.php"><button class="btn btn-success btn-block"><i class="fa fa-book" aria-hidden="true"></i>&nbsp;&nbsp;Apply Leave</button></a>
      </div>

      <div class="form-group"> 
            <a href="viewleaves.php"><button class="btn btn-info btn-block"><i class="fa fa-bookmark" aria-hidden="true"></i>&nbsp;&nbsp;View Applied Leaves</button></a>
      </div>



          

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
