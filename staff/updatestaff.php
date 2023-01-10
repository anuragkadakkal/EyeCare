<?php
    session_start();
    setcookie('logined',1);
    if(isset($_SESSION['logined']) && $_SESSION['logined']==1)
    {
      include 'connection.php';
      include 'staffheader.php';
      $drid = $_COOKIE['lkey'];
      $sql="select * from tb_staff inner join tb_login on tb_staff.loginid=tb_login.id where tb_staff.loginid='".$drid."'";
      //echo $sql;exit;
      $result = mysqli_query($conn,$sql);

?>
<script type="text/javascript">
  
  function addrUser() {
    var f3 = document.getElementById("f3");
    var address = document.getElementById('address').value;

    if (!/^[#.0-9a-zA-Z\s,-]{8,50}$/.test(address))
       {
         f3.textContent = "**Invalid Address Format";
         document.getElementById("address").focus();
         return false;
       }
       else
       {
        f3.textContent = "";
        return true;
       }
  }

  function distPin() {

    var f8 = document.getElementById("f8");
    var pincode = document.getElementById('pincode').value;

    if(!/^[0-9]{6}$/.test(pincode))
       {
         f8.textContent = "**Enter Correct Pincode";
         document.getElementById("pincode").focus();
         return false;
       }
       else
       {
        f8.textContent = "";
        return true;
       }
  }

  function phoneUser() {
    var f5 = document.getElementById("ph1");
    var phone = document.getElementById('phone').value;

    if(!/^[6-9]{1}[0-9]{9}$/.test(phone))
       {
         f5.textContent = "**Invalid Phone # Format";
         document.getElementById("phone").focus();
         return false;
       }
       else
       {
        f5.textContent = "";
        return true;
       }
  }

  function dobCheck() {

    var s1 = document.getElementById("sd1");
    var sdate = document.getElementById('dob').value;

    if(sdate=="")
       {
         s1.textContent = "**Select Your Date of Birth";
         document.getElementById("dob").focus();
         return false;
       }
       else
       {
        s1.textContent = "";
        return true;
       }
  }

  function ugName() {
    var f1 = document.getElementById("u1");
    var fname = document.getElementById('ugname').value;

    if(!/^[A-Za-z. ]{7,26}$/.test(fname))
       {
         f1.textContent = "**Invalid UG Name";
         var x = document.getElementById("ugname");
         x.focus();
         return false;
       }
       else
       {
        f1.textContent = "";
        return true;
       }
  }

  function pgName() {
    var f1 = document.getElementById("pg1");
    var fname = document.getElementById('pgname').value;

    if(!/^[A-Za-z. ]{7,26}$/.test(fname))
       {
         f1.textContent = "**Invalid PG Name";
         var x = document.getElementById("pgname");
         x.focus();
         return false;
       }
       else
       {
        f1.textContent = "";
        return true;
       }
  }


  function ugYear() {
    var f1 = document.getElementById("uy1");
    var fname = document.getElementById('ugyear').value;

    if(!/^[0-9]{4}$/.test(fname))
       {
         f1.textContent = "**Invalid UG Year";
         var x = document.getElementById("ugyear");
         x.focus();
         return false;
       }
       else
       {
        f1.textContent = "";
        return true;
       }
  }

  function pgYear() {
    var f1 = document.getElementById("pgy1");
    var fname = document.getElementById('pgyear').value;

    if(!/^[0-9]{4}$/.test(fname))
       {
         f1.textContent = "**Invalid PG Year";
         var x = document.getElementById("pgyear");
         x.focus();
         return false;
       }
       else
       {
        f1.textContent = "";
        return true;
       }
  }

  function expCheck() {
    var f1 = document.getElementById("exp1");
    var fname = document.getElementById('exp').value;

    if(!/^[0-9.]{1,4}$/.test(fname))
       {
         f1.textContent = "**Invalid Experience Year, Format : X.X";
         var x = document.getElementById("exp");
         x.focus();
         return false;
       }
       else
       {
        f1.textContent = "";
        return true;
       }
  }
  function checkAll() {

    if(addrUser()&&distPin()&&phoneUser()&&dobCheck()&&ugName()&&ugYear()&&pgName()&&pgYear()&&expCheck())
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
        <div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid"><div class="container-fluid">

   
        <!-- Small boxes (Stat box) --><br><br>
        <h2 style="font-family: 'Open Sans', sans-serif;"><center><b>Update Profile</b></center></h2><br>
        <form role="form" method="POST" action="updatestaffreg.php" name="myform" enctype="multipart/form-data">
            <?php while ($row=mysqli_fetch_array($result))
  {  ?>
                            <div class="form-group">
                                <input type="text" name="name"  class="form-control input-sm" placeholder="Full Name" value="<?php echo $row['name']; ?>" readonly>
                              </div>
                              <div class="form-group">
                                <input type="text" name="email"  class="form-control input-sm" placeholder="Email Address" value="<?php echo $row['username']; ?>" readonly>
                              </div>
                          <input type="hidden" name="key" value="<?php echo $row['loginid']; ?>">
                                          <div class="form-group">
                                            <textarea rows="2" name="address"  id='address' class="form-control input-sm"
                                             placeholder="Address" onkeyup="addrUser()"><?php echo $row['address']; ?></textarea>
                                            <span style="color: red;font-size: 14px" id="f3"></span>
                                        </div>
                                                                          
                              <div class="form-group">
                                <input type="text" name="pin" id='pincode' class="form-control input-sm" placeholder="Pincode" value="<?php echo $row['pincode']; ?>" onkeyup="distPin()">
                                <span style="color: red;font-size: 14px" id="f8"></span>
                              </div>                  

                             <div class="row">
                                            <div class="col-xs-6 col-sm-6 col-md-6">
                                  <div class="form-group">
                                                   <input type="text" id='phone' name="phno" class="form-control input-sm" placeholder="Phone Number" value="<?php echo $row['phno']; ?>"  onkeyup="phoneUser()">
                                <span style="color: red;font-size: 14px" id="ph1"></span>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-6 col-md-6">
                                  <div class="form-group">
                                  <div class="form-group">
                                  <input type="text" onfocus="(this.type='date')" name="dob" class="form-control input-sm" placeholder="Date of Birth"  max="<?php echo date('Y-m-d') ?>"  
                                  value="<?php if($row['dob']=='0000-00-00') {echo "";}else{echo $row['dob']; } ?>" 
                                  id="dob" onfocusout="dobCheck()">
                  <span style="color: red;font-size: 14px" id="sd1"></span>
                                                    
                                                </div>
                                                </div>
                                            </div>
                                        </div>

                                  

                                  <div class="row">
                                            <div class="col-xs-6 col-sm-6 col-md-6">
                                  <div class="form-group">
                                    <input type="text" name="ug" class="form-control input-sm" placeholder="UG" value="<?php echo $row['ug']; ?>" id='ugname' onkeyup="ugName()" >
                                    <span style="color: red;font-size: 14px" id="u1"></span>

                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-6 col-md-6">
                                  <div class="form-group">
                                  <div class="form-group" >
                                     <input type="text" name="ugyear" class="form-control input-sm" placeholder="UG Year" value="<?php if($row['ugyear']=='0000'){echo "";}else{echo $row['ugyear'];} ?>" 
                                     id='ugyear' onkeyup="ugYear()" >
                                    <span style="color: red;font-size: 14px" id="uy1"></span>
                                  </div>
                                                </div>
                                            </div>
                                        </div> 
                                  <div class="row">
                                            <div class="col-xs-6 col-sm-6 col-md-6">
                                  <div class="form-group">
                                    <input type="text" name="pg" class="form-control input-sm" placeholder="PG" value="<?php echo $row['pg']; ?>"
                                     id='pgname' onkeyup="pgName()" >
                                    <span style="color: red;font-size: 14px" id="pg1"></span>

                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-6 col-md-6">
                                  <div class="form-group">
                                  <div class="form-group" >
                                     <input type="text" name="pgyear" class="form-control input-sm" placeholder="PG Year" value="<?php if($row['pgyear']=='0000'){echo "";}else{echo $row['pgyear'];} ?>" id='pgyear' onkeyup="pgYear()" >
                                    <span style="color: red;font-size: 14px" id="pgy1"></span>
                                  </div>
                                                </div>
                                            </div>
                                        </div> 

                                <div class="form-group">
                                <input type="text" name="exp"  class="form-control input-sm" placeholder="Experience" value="<?php echo $row['exp']; ?>"
                                id='exp' onkeyup="expCheck()" >
                                    <span style="color: red;font-size: 14px" id="exp1"></span>
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
