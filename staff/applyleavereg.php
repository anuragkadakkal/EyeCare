<?php
    session_start();
    setcookie('logined',1);
    if(isset($_SESSION['logined']) && $_SESSION['logined']==1)
    {
      include 'connection.php';
      include 'staffheader.php';
      $staffid = $_COOKIE['lkey'];
      //echo $staffid;exit;
?>

     <!-- Main content -->
    <section class="content">
      <div class="container-fluid">



        <!-- Small boxes (Stat box) --><br><br><br>
        <h2 style="font-family: 'Open Sans', sans-serif;"><center><b>Apply Leave</b></center></h2><br>


<form role="form" method="POST" action="leavereg.php" name="myform" enctype="multipart/form-data">

  <input type="hidden" name="stid" value="<?php echo $staffid; ?>">
        <table class="table table-bordered" id="table"  data-toggle="table" data-height="460"  data-pagination="true"   data-search="true"> 
        <thead>
          <tr style="text-align: center;">
            <th></th>
            <th>Type</th>
            <th>Start Date</th>
            <th>End Date</th>
          </tr>
      </thead>
      <tbody>
        <tr style="text-align: center;">
          <th>Details</th>
          <td>
            <select name="type" id="type" class="form-control input-sm">
                <option value="">---SELECT---</option>
                <option value="FN">FN</option>
                <option value="AN">AN</option>
                <option value="Full Day">Full Day</option>
                
          </select>
        </td>
          <td><input class="form-control input-sm" placeholder="Right CyL"  type="date" name="sdate"
            id='sdate' onkeyup="rcylCheck()"><span style="color: red;font-size: 12px" id="rcyl1"></span></td>
          <td><input class="form-control input-sm" placeholder="Right Axis"  type="date" name="edate"
            id='edate' onkeyup="raxisCheck()"><span style="color: red;font-size: 12px" id="raxis1"></span></td>
        </tr> 

        

        <tr style="text-align: center;" >
          <th>Reason</th>
          <td colspan='5'><input class="form-control input-sm" placeholder="Enter Reason"  type="text" name="reason"
            id='reason' onkeyup="pdCheck()"><span style="color: red;font-size: 12px" id="reason"></span></td>
        </tr> 
      
      </tbody>
</table>
<div class="form-group"> <br>
            <a href="leavereg.php"><button class="btn btn-outline-success btn-block" type="submit" onclick="return checkAll()"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;&nbsp;Apply</button></a>
      </div>
</form>
      
      <div class="form-group"> 
            <a href="applyleave.php"><button class="btn btn-outline-danger btn-block"><i class="fa fa-undo" aria-hidden="true"></i>&nbsp;&nbsp;Back To Home</button></a>
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
