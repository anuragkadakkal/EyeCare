<?php
    session_start();
    setcookie('logined',1);
    if(isset($_SESSION['logined']) && $_SESSION['logined']==1)
    {
      include 'connection.php';
      include 'staffheader.php';
      $drid = $_COOKIE['lkey'];
      $pt_id = $_GET['t'];
?>
<script type="text/javascript">
  function rsphCheck() {

    var rsph1 = document.getElementById("rsph1");
    var rsph = document.getElementById('rsph').value;

    if(!/^[+-]{1}[0-9]{1,3}[.]{1}[0-9]{1,4}$/.test(rsph))
       {
         rsph1.textContent = "**Enter Correct Right SpH Value. Format : +/-1.00";
         document.getElementById("rsph").focus();
         return false;
       }
       else
       {
        rsph1.textContent = "";
        return true;
       }
  }

  function rcylCheck() {

    var rcyl1 = document.getElementById("rcyl1");
    var rcyl = document.getElementById('rcyl').value;

    if(!/^[+-]{1}[0-9]{1,3}[.]{1}[0-9]{1,4}$/.test(rcyl))
       {
         rcyl1.textContent = "**Enter Correct Right CyL Value. Format : +/-1.00";
         document.getElementById("rcyl").focus();
         return false;
       }
       else
       {
        rcyl1.textContent = "";
        return true;
       }
  }

  function raxisCheck() {

    var raxis1 = document.getElementById("raxis1");
    var raxis = document.getElementById('raxis').value;

    if(!/^[1-3]{1}[0-9]{1,2}$/.test(raxis)||raxis>360)
       {
         raxis1.textContent = "**Enter Correct Right Axis Value. Min : 0 to Max : 360 Degree";
         document.getElementById("raxis").focus();
         return false;
       }
       else
       {
        raxis1.textContent = "";
        return true;
       }
  }

  function rprismCheck() {

    var rprism1 = document.getElementById("rprism1");
    var rprism = document.getElementById('rprism').value;

    if(!/^[0-9a-zA-Z ]{1,10}$/.test(rprism))
       {
         rprism1.textContent = "**Enter Correct Right Prism Value.";
         document.getElementById("rprism").focus();
         return false;
       }
       else
       {
        rprism1.textContent = "";
        return true;
       }
  }

  function raddCheck() {

    var radd1 = document.getElementById("radd1");
    var radd = document.getElementById('radd').value;

    if(!/^[+-]{1}[0-9]{1,3}[.]{1}[0-9]{1,4}$/.test(radd))
       {
         radd1.textContent = "**Enter Correct Right Add Value. Format : +/-1.00";
         document.getElementById("radd").focus();
         return false;
       }
       else
       {
        radd1.textContent = "";
        return true;
       }
  }

function lsphCheck() {

    var rsph1 = document.getElementById("lsph1");
    var rsph = document.getElementById('lsph').value;

    if(!/^[+-]{1}[0-9]{1,3}[.]{1}[0-9]{1,4}$/.test(rsph))
       {
         rsph1.textContent = "**Enter Correct Left SpH Value. Format : +/-1.00";
         document.getElementById("lsph").focus();
         return false;
       }
       else
       {
        rsph1.textContent = "";
        return true;
       }
  }

  function lcylCheck() {

    var rcyl1 = document.getElementById("lcyl1");
    var rcyl = document.getElementById('lcyl').value;

    if(!/^[+-]{1}[0-9]{1,3}[.]{1}[0-9]{1,4}$/.test(rcyl))
       {
         rcyl1.textContent = "**Enter Correct Left CyL Value. Format : +/-1.00";
         document.getElementById("lcyl").focus();
         return false;
       }
       else
       {
        rcyl1.textContent = "";
        return true;
       }
  }

  function laxisCheck() {

    var raxis1 = document.getElementById("laxis1");
    var raxis = document.getElementById('laxis').value;

    if(!/^[1-3]{1}[0-9]{1,2}$/.test(raxis)||raxis>360)
       {
         raxis1.textContent = "**Enter Correct Right Axis Value. Min : 0 to Max : 360 Degree";
         document.getElementById("laxis").focus();
         return false;
       }
       else
       {
        raxis1.textContent = "";
        return true;
       }
  }

  function lprismCheck() {

    var rprism1 = document.getElementById("lprism1");
    var rprism = document.getElementById('lprism').value;

    if(!/^[0-9a-zA-Z ]{1,10}$/.test(rprism))
       {
         rprism1.textContent = "**Enter Correct Right Prism Value.";
         document.getElementById("lprism").focus();
         return false;
       }
       else
       {
        rprism1.textContent = "";
        return true;
       }
  }

  function laddCheck() {

    var radd1 = document.getElementById("ladd1");
    var radd = document.getElementById('ladd').value;

    if(!/^[+-]{1}[0-9]{1,3}[.]{1}[0-9]{1,4}$/.test(radd))
       {
         radd1.textContent = "**Enter Correct Right Add Value. Format : +/-1.00";
         document.getElementById("ladd").focus();
         return false;
       }
       else
       {
        radd1.textContent = "";
        return true;
       }
  }

  function pdCheck() {

    var radd1 = document.getElementById("pd1");
    var radd = document.getElementById('pd').value;

    if(!/^[0-9]{1,3}$/.test(radd))
       {
         radd1.textContent = "**Enter Correct Pupilary Distance Value.";
         document.getElementById("pd").focus();
         return false;
       }
       else
       {
        radd1.textContent = "";
        return true;
       }
  }

  function checkAll()
  {
   if(rsphCheck()&&rcylCheck()&&raxisCheck()&&rprismCheck()&&raddCheck()&&lsphCheck()&&lcylCheck()&&laxisCheck()&&lprismCheck()&&laddCheck()&&pdCheck())
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
        <h2 style="font-family: 'Open Sans', sans-serif;"><center><b>Patient Records</b></center></h2><br>


<form role="form" method="POST" action="addrecordsreg.php" name="myform" enctype="multipart/form-data">
  <input type="hidden" name="ptid" value="<?php echo $pt_id; ?>">
        <table class="table table-bordered" id="table"  data-toggle="table" data-height="460"  data-pagination="true"   data-search="true"> 
        <thead>
          <tr style="text-align: center;">
            <th></th>
            <th>SpH</th>
            <th>Cyl</th>
            <th>Axis</th>
            <th>Prism</th>
            <th>Add</th>
          </tr>
      </thead>
      <tbody>
        <tr style="text-align: center;">
          <th>Right</th>
          <td><input class="form-control input-sm" placeholder="Right SpH"  type="text" name="rsph" 
            id='rsph' onkeyup="rsphCheck()"><span style="color: red;font-size: 12px" id="rsph1"></span></td>
          <td><input class="form-control input-sm" placeholder="Right CyL"  type="text" name="rcyl"
            id='rcyl' onkeyup="rcylCheck()"><span style="color: red;font-size: 12px" id="rcyl1"></span></td>
          <td><input class="form-control input-sm" placeholder="Right Axis"  type="text" name="raxis"
            id='raxis' onkeyup="raxisCheck()"><span style="color: red;font-size: 12px" id="raxis1"></span></td>
          <td><input class="form-control input-sm" placeholder="Right Prism"  type="text" name="rprism"
            id='rprism' onkeyup="rprismCheck()"><span style="color: red;font-size: 12px" id="rprism1"></span></td>
          <td><input class="form-control input-sm" placeholder="Right Add"  type="text" name="radd"
            id='radd' onkeyup="raddCheck()"><span style="color: red;font-size: 12px" id="radd1"></span></td>
        </tr> 

        <tr style="text-align: center;">
          <th>Left</th>
          <td><input class="form-control input-sm" placeholder="Left SpH"  type="text" name="lsph"
            id='lsph' onkeyup="lsphCheck()"><span style="color: red;font-size: 12px" id="lsph1"></span></td>
          <td><input class="form-control input-sm" placeholder="Left Cyl"  type="text" name="lcyl"
            id='lcyl' onkeyup="lcylCheck()"><span style="color: red;font-size: 12px" id="lcyl1"></span></td>
          <td><input class="form-control input-sm" placeholder="Left Axis"  type="text" name="laxis"
            id='laxis' onkeyup="laxisCheck()"><span style="color: red;font-size: 12px" id="laxis1"></span></td>
          <td><input class="form-control input-sm" placeholder="Left Prism"  type="text" name="lprism"
            id='lprism' onkeyup="lprismCheck()"><span style="color: red;font-size: 12px" id="lprism1"></span></td>
          <td><input class="form-control input-sm" placeholder="Left Add"  type="text" name="ladd"
            id='ladd' onkeyup="laddCheck()"><span style="color: red;font-size: 12px" id="ladd1"></span></td>
        </tr> 

        <tr style="text-align: center;" >
          <th>PD</th>
          <td colspan='7'><input class="form-control input-sm" placeholder="Pupillary Distance"  type="text" name="pd"
            id='pd' onkeyup="pdCheck()"><span style="color: red;font-size: 12px" id="pd1"></span></td>
        </tr> 
      
      </tbody>
</table>
<div class="form-group"> <br>
            <a href="index.php"><button class="btn btn-outline-success btn-block" type="submit" onclick="return checkAll()"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;&nbsp;Add Record</button></a>
      </div>
</form>
      
      <div class="form-group"> 
            <a href="index.php"><button class="btn btn-outline-danger btn-block"><i class="fa fa-undo" aria-hidden="true"></i>&nbsp;&nbsp;Back To Home</button></a>
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
