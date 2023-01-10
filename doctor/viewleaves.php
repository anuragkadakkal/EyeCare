<?php
    session_start();
    setcookie('logined',1);
    if(isset($_SESSION['logined']) && $_SESSION['logined']==1)
    {
      include 'connection.php';
      include 'doctorheader.php';
      $staffid = $_COOKIE['lkey'];
      //echo $ap_date;exit;
      $sql="select * from tb_leaves where staffid='".$staffid."' order by id desc";

      $result = mysqli_query($conn,$sql);
      

?>
  
     <!-- Main content -->
    <section class="content">
      <div class="container-fluid">



        <!-- Small boxes (Stat box) --><br><br><br>
        <h2 style="font-family: 'Open Sans', sans-serif;"><center><b>Leaves History</b></center></h2><br>



        <table class="table table-bordered" id="table"  data-toggle="table" data-height="460"  data-pagination="true"   data-search="true"> 
        <thead>
    <tr style="text-align: center;">
      <th>#</th>
      <th>Type</th>
      <th>Start Date</th>
      <th>End Date</th>
      <th>Reason</th>
      <th>Status - Comments</th>
    </tr>
  </thead>
  <tbody>
  <?php $c=1;
  while ($row=mysqli_fetch_array($result))
  { ?>
    <tr style="text-align: center;">
      <td><?php echo $c; $c=$c+1; ?></td>
      <td><?php echo $row['type']; ?></td>
      <td><?php echo $row['sdate']; ?></td>
      <td><?php echo $row['edate']; ?></td>
      <td><?php echo $row['reason']; ?></td>
      <td><?php $status=$row['status']; 

      if($status==0)
        echo "<b><font color='grey'>Not Viewed</font></b>";
      else if ($status==1)
        echo "<b><font color='green'>Approved [ ".$row['comments']." ]</font></b>";
      else if ($status==2)
        echo "<b><font color='red'>Rejected [ ".$row['comments']." ]</font></b>";
      else
        echo "<b><font color='violet'>Viewed By Admin</font></b>";

      ?></td>
     
    </tr> 
  <?php } ?> 
  </tbody>
</table>
<div class="form-group"> <br>
          <a href="applyleave.php"><button class="btn btn-outline-success btn-block"><i class="fa fa-undo" aria-hidden="true"></i>&nbsp;&nbsp;Back To Home</button></a>
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
