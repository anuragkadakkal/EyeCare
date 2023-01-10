<?php
    session_start();
    setcookie('logined',1);
    if(isset($_SESSION['logined']) && $_SESSION['logined']==1)
    {
      include 'connection.php';
      include 'doctorheader.php';
      $drid = $_COOKIE['lkey'];
      $sql="select * from tb_doctor inner join tb_login on tb_doctor.loginid=tb_login.id where tb_doctor.loginid='".$drid."'";
      //echo $sql;exit;
      $result = mysqli_query($conn,$sql);

?>

  
     <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid">

<script type="text/javascript">
   function startDate() {

    var s1 = document.getElementById("s1");
    var sdate = document.getElementById('sdate').value;

    if(sdate=="")
       {
         s1.textContent = "**Select Any Date for Scheduling Slots.";
         document.getElementById("sdate").focus();
         return false;
       }
       else
       {
        s1.textContent = "";
        return true;
       }
  }

  function checkSlots()
  {
    var a1 = document.getElementById('a1').checked;
    var a2 = document.getElementById('a2').checked;
    var a3 = document.getElementById('a3').checked;
    var a4 = document.getElementById('a4').checked;
    var a5 = document.getElementById('a5').checked;
    var a6 = document.getElementById('a6').checked;
    var a7 = document.getElementById('a7').checked;


    if(a1||a2||a3||a4||a5||a6||a7)
    {
      return true;
    }
    else
    {
      var s1 = document.getElementById("s2");
      s1.textContent = "**Select Any 1 Slot";
      return false;
    }
  }

  function checkAll() {

    if(startDate()&&checkSlots())
       {
         return true;
       }
       else
       {
        return false;
       }
  }
    
</script>

        <!-- Small boxes (Stat box) --><br><br>
        <h2 style="font-family: 'Open Sans', sans-serif;"><center><b>Set Your Schedule for next day</b></center></h2><br>
        <form role="form" method="POST" action="registerdrschedule.php" name="myform" enctype="multipart/form-data">
            <?php while ($row=mysqli_fetch_array($result))
  {  ?>

                                  <div class="form-group">
                                  <input type="text" onfocus="(this.type='date')" name="availdate" class="form-control input-sm" placeholder="Available Date" value=""  min="<?php $curdate=date('Y-m-d'); echo date('Y-m-d'); ?>" id="sdate" onfocusout="startDate()" > 
                                  <span style="color: red;font-size: 12px" id="s1"></span>   <br>             
                                  
<center>
                                  <input type="checkbox" name="color[]" value="s1" id='a1'/>
                                  <label for="color_red">9am-9.30am</label>&nbsp;&nbsp;&nbsp;&nbsp;

                                  <input type="checkbox" name="color[]" value="s2" id='a2'/>
                                  <label for="color_red">9.30am-10am</label>&nbsp;&nbsp;&nbsp;&nbsp;

                                  <input type="checkbox" name="color[]" value="s3" id='a3'/>
                                  <label for="color_red">10am-10.30am</label><br>

                                  <input type="checkbox" name="color[]" value="s4" id='a4'/>
                                  <label for="color_red">11am-11.30am</label>&nbsp;&nbsp;&nbsp;&nbsp;

                                  <input type="checkbox" name="color[]" value="s5" id='a5'/>
                                  <label for="color_red">12.30pm-1pm</label>&nbsp;&nbsp;&nbsp;&nbsp;

                                  <input type="checkbox" name="color[]" value="s6" id='a6' />
                                  <label for="color_red">2pm-2.30pm</label><br>

                                  <input type="checkbox" name="color[]" value="s7"  id='a7'/>
                                  <label for="color_red">3pm-3.30pm</label><br>
                                  <span style="color: red;font-size: 12px" id="s2"></span>
</center>
                                  </div>

    
                            <input type="submit" value="Update" class="btn btn-info btn-block" onclick="return checkAll()">

                
                        <?php } ?>
                        </form>

</div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div>
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
