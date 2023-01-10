<?php
    session_start();
    setcookie('logined',1);
    if(isset($_SESSION['logined']) && $_SESSION['logined']==1)
    {
      include 'connection.php';
      include 'patientheader.php';
      $ptid = $_COOKIE['lkey'];
      $ap_date = $_POST['ap_date'];
      //echo $ap_date;exit;
      $sql="select * from tb_doctor inner join tb_booking on tb_doctor.loginid=tb_booking.drid where tb_booking.loginid='".$ptid."' and tb_booking.bkdate='".$ap_date."' order by tb_booking.bkdate desc";
      $result = mysqli_query($conn,$sql);
      $flag=0;
       while ($row=mysqli_fetch_array($result))
      {
        $flag=1;
      }
      $sql="select * from tb_doctor inner join tb_booking on tb_doctor.loginid=tb_booking.drid where tb_booking.loginid='".$ptid."' and tb_booking.bkdate='".$ap_date."' order by tb_booking.bkdate desc";
      $result = mysqli_query($conn,$sql);

?>
  
     <!-- Main content -->
    <section class="content">
      <div class="container-fluid">



        <!-- Small boxes (Stat box) --><br><br><br>
        <h2 style="font-family: 'Open Sans', sans-serif;"><center><b>Appointment Booking History</b></center></h2><br>

               <div class="form-group"> 
                 <font color="orange" size="5px"><b><center>Booking Date : <?php echo $ap_date; ?></center></b></font>
               </div> 
<?php 
  if($flag==1)
  {
?>

        <table class="table table-bordered" id="table"  data-toggle="table" data-height="460"  data-pagination="true"   data-search="true"> 
        <thead>
    <tr style="text-align: center;">
      <th>#</th>
      <th>Dr. Name</th>
      <th>Specialization</th>
      <th>Booking Date</th>
      <th>Time Slot</th>
      <th>Status</th>
      <th>Payment</th>

    </tr>
  </thead>
  <tbody>
  <?php $c=1;
  while ($row=mysqli_fetch_array($result))
  { ?>
    <tr style="text-align: center;">
      <td><?php echo $c; $c=$c+1; ?></td>
      <td><?php echo $row['name']; ?></td>
      <td><?php 
                
                $s=$row['specialization']; 
                if($s==''){
                  echo "General";
                }
                else
                {
                  echo $s;
                }

          ?></td>
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
      <td><?php $status = $row['status'];
      if($status==2)
        { ?>
          <font color="grey"><b>Pending for Approval</b></font>
  <?php      }
        if($status==1)
        { ?>
           <font color="green"><b>Approved</b></font>
  <?php      }
        if($status==0)
        {   ?>
           <font color="red"><b>Rejected</b></font>
  <?php      }   
        if($status==3)
        {   ?>
           <font color="red"><b>Cancelled [ Doctor on Leave ]</b></font>
  <?php      }    ?>

  </td> 
  <td><button class="btn btn-primary">Make Payment</button></a></td>                                      
    </tr> 
  <?php } ?> 
  </tbody>
</table>
<div class="form-group"> <br>
          <a href="viewdrbookings.php"><button class="btn btn-outline-success btn-block"><i class="fa fa-undo" aria-hidden="true"></i>&nbsp;&nbsp;Back To Booking</button></a>
      </div>
<?php
}
else
{ ?>
      <div class="form-group"> <br><br><br><br><br><br><br><br>
          <font color="red" size="4px"><b><center>No Booking Found For The Selected Date</center></b></font><br>
          <a href="viewdrbookings.php"><button class="btn btn-danger btn-block"><i class="fa fa-undo" aria-hidden="true"></i>&nbsp;&nbsp;Back To Booking</button></a>
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
