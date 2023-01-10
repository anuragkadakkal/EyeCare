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


  function phcUser() {

    var f11 = document.getElementById("sp1");
    var phc = document.getElementById('specs').value;

    if(phc=="null")
       {
         f11.textContent = "**Select any Specialization";
         document.getElementById("specs").focus();
         return false;
       }
       else
       {
        f11.textContent = "";
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

  function fileCheck() {

    var f8 = document.getElementById("file1");
    var file = document.getElementById('file').value;

    var file=file.split('.').pop();
    if(file=="pdf" || file=='pdf')
    {
      f8.textContent = "";
      return true;
    }
    else
    {
      f8.textContent = "**Select .pdf File";
      document.getElementById("file").focus();
      return false;
    }
  }



  function checkAll() {

    if(addrUser()&&distPin()&&phoneUser()&&dobCheck()&&phcUser()&&ugName()&&ugYear()&&pgName()&&pgYear()&&expCheck()&&fileCheck())
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
        <h2 style="font-family: 'Open Sans', sans-serif;"><center><b>Update Profile</b></center></h2><br>
        <form role="form" method="POST" action="updatedoctorreg.php" name="myform" enctype="multipart/form-data">
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
                                            <textarea rows="2" name="address" id="address" onkeyup="addrUser()" class="form-control input-sm" placeholder="Address" ><?php echo $row['address']; ?></textarea>
              <span style="color: red;font-size: 14px" id="f3"></span>
                                        </div>
                            <div class="row">
                                            <div class="col-xs-6 col-sm-6 col-md-6">
                                  <div class="form-group">
       <input type="text" name="pin" class="form-control input-sm" placeholder="Pincode" value="<?php echo $row['pincode']; ?>" id="pincode" onkeyup="distPin()">
                  <span style="color: red;font-size: 14px" id="f8"></span>

                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-6 col-md-6">
                                  <div class="form-group">
                                  <div class="form-group" >
                                     <input type="text" name="lno" class="form-control input-sm" placeholder="License Number" value="License Number : <?php echo $row['lno']; ?>" readonly>
                                  </div>
                                                </div>
                                            </div>
                                        </div>                                                  
                                                

                             <div class="row">
                                            <div class="col-xs-6 col-sm-6 col-md-6">
                                  <div class="form-group">
                                                   <input type="text" name="phno" class="form-control input-sm" placeholder="Phone Number" value="<?php echo $row['phno']; ?>" onkeyup="phoneUser()" id='phone'>
                  <span style="color: red;font-size: 14px" id="ph1"></span>

                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-6 col-md-6">
                                  <div class="form-group">
                                  <div class="form-group">
                                  <input type="text" onfocus="(this.type='date')" name="dob" class="form-control input-sm" 
                                  placeholder="Date of Birth" value="<?php if($row['dob']=='0000-00-00') {echo "";}else{echo $row['dob']; } ?>" max="<?php echo date('Y-m-d') ?>" 
                                  id="dob" onfocusout="dobCheck()">
                  <span style="color: red;font-size: 14px" id="sd1"></span>

                                                    
                                                </div>
                                                </div>
                                            </div>
                                        </div>

                                  <div class="form-group">
                                      <select class="form-control input-sm" name="specs" id="specs" onclick="phcUser()">
                                      <option value="null">Specialization</option>
                                      <option value="Cornea specialist">Cornea specialist</option>
                                      <option value="Optician">Optician</option>
                                      <option value="Ophthalmologist">Ophthalmologist</option>
                                      <option value="Optometrist">Optometrist</option>
                                      <option value="Pediatric specialist">Pediatric specialist</option>
                                      <option value="Neuro-ophthalmologists">Neuro-ophthalmologists</option>
                                      </select>
                                      <span style="color: red;font-size: 14px" id="sp1"></span>
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
                                     <input type="text" name="pgyear" class="form-control input-sm" placeholder="PG Year" value="<?php if($row['pgyear']=='0000'){echo "";}else{echo $row['pgyear'];} ?>" 
                                     id='pgyear' onkeyup="pgYear()" >
                                    <span style="color: red;font-size: 14px" id="pgy1"></span>
                                  </div>
                                                </div>
                                            </div>
                                        </div> 

                                  <div class="row">
                                            <div class="col-xs-6 col-sm-6 col-md-6">
                                  <div class="form-group">
                                    <br>
                              <input type="text" name="exp" class="form-control input-sm" placeholder="Experience Duration [Year(s)]" value="<?php echo $row['expduration']; ?>" 
                              id='exp' onkeyup="expCheck()" >
                                    <span style="color: red;font-size: 14px" id="exp1"></span>

                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-6 col-md-6">
                                  <div class="form-group">
                                  <div class="form-group" >
                                    <span style="color: red;font-size: 14px" id="f8">Experience Certificate</span>
                                    <input type="file" name="aadharfile"  class="form-control input-sm" id="file" onchange="fileCheck()">
              <span style="color: red;font-size: 14px" id="file1"></span>
                                    
                                                </div>
                                            </div>
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
