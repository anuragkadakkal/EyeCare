<?php
    session_start();
    setcookie('logined',1);
    if(isset($_SESSION['logined']) && $_SESSION['logined']==1)
    {
      include 'connection.php';
      include 'staffheader.php';
      $drid = $_GET['t'];
      
      $sql="select * from tb_patient inner join tb_booking on tb_patient.loginid=tb_booking.loginid where drid='".$drid."' order by tb_booking.bkdate desc";
      //echo $sql;exit;
      $result = mysqli_query($conn,$sql);
      $flag=0;
       while ($row=mysqli_fetch_array($result))
      {
        $flag=1;
      }
      $sql="select * from tb_patient inner join tb_booking on tb_patient.loginid=tb_booking.loginid where drid='".$drid."' order by tb_booking.bkdate desc";
      //echo $sql;exit;
      $result = mysqli_query($conn,$sql);

?>
  
     <!-- Main content -->
    <section class="content">
      <div class="container-fluid">



        <!-- Small boxes (Stat box) --><br><br><br>
        <h2 style="font-family: 'Open Sans', sans-serif;"><center><b>Appointment Booking Details</b></center></h2><br>

               <div class="form-group"> 
                 <font color="orange" size="5px"><b><center>Booking Date : <?php echo date('d-m-Y'); ?></center></b></font>
               </div> 
<?php 
  if($flag==1)
  {
?>

        <table class="table table-bordered" id="table"  data-toggle="table" data-height="460"  data-pagination="true"   data-search="true"> 
        <thead>
    <tr style="text-align: center;">
      <th>#</th>
      <th>Patient Name</th>
      <th>Booking Date</th>
      <th>Time Slot</th>
    </tr>
  </thead>
  <tbody>
  <?php $c=1;
  while ($row=mysqli_fetch_array($result))
  { ?>
    <tr style="text-align: center;">
      <td><?php echo $c; $c=$c+1; ?></td>
      <td><?php echo $row['name']; ?></td>
      <td><?php echo $row['bkdate']; ?></td>
      <td><?php 
        $ts=$row['bktimeslot']; 
        if($ts=='s1')
        { 
          echo "9am-9.30am";
        }
        if($ts=='s2')
        { 
          echo "9.30am-10am";
        }
        if($ts=='s3')
        { 
          echo "10am-10.30am";
        }
        if($ts=='s4')
        { 
          echo "11am-11.30am";
        }
        if($ts=='s5')
        { 
          echo "12.30pm-1pm";
        }
        if($ts=='s6')
        { 
          echo "2pm-2.30pm";
        }
        if($ts=='s7')
        { 
          echo "3pm-3.30pm";
        }
?></td>
     
      <!-- <td><button class="btn btn-secondary" data-toggle="modal" data-target="#example<?php //echo $row['ambkey']; ?>">Notify</button></td> -->
                   
    </tr> 
  <?php } ?> 
  </tbody>
</table>
<div class="form-group"> <br>
          <a href="viewdrs.php"><button class="btn btn-outline-success btn-block"><i class="fa fa-undo" aria-hidden="true"></i>&nbsp;&nbsp;Back To Home</button></a>
      </div>
<?php
}
else
{ ?>
      <div class="form-group"> <br><br><br><br><br><br><br><br>
          <font color="red" size="4px"><b><center>No Booking Found For The Selected Date</center></b></font><br>
          <a href="viewdrs.php"><button class="btn btn-danger btn-block"><i class="fa fa-undo" aria-hidden="true"></i>&nbsp;&nbsp;Back To Home</button></a>
      </div>
<?php
}
?>
          

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
