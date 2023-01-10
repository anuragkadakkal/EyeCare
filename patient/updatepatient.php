<?php
    session_start();
    setcookie('logined',1);
    if(isset($_SESSION['logined']) && $_SESSION['logined']==1)
    {
      include 'connection.php';
      include 'patientheader.php';
      $ptid = $_COOKIE['lkey'];
      $sql="select * from tb_patient inner join tb_login on tb_patient.loginid=tb_login.id where tb_patient.loginid='".$ptid."'";
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

  function phoneUser() {
    var f5 = document.getElementById("f5");
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

  function checkAll() {

    if(addrUser()&&phoneUser()&&dobCheck())
       {
         return true;
       }
       else
       {
        return false;
       }
  }

</script>

        <!-- Small boxes (Stat box) --><br><br><br><br><br>
        <h2 style="font-family: 'Open Sans', sans-serif;"><center><b>Update Profile</b></center></h2><br>
        <form role="form" method="POST" action="updatepatientreg.php" name="myform">
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
                                            <textarea rows="2" name="address" id='address' class="form-control input-sm" placeholder="Address" onkeyup="addrUser()" ><?php echo $row['address']; ?></textarea>
                                            <span style="color: red;font-size: 14px" id="f3"></span>
                                        </div>
                             <div class="row">
                                            <div class="col-xs-6 col-sm-6 col-md-6">
                                  <div class="form-group">
                                                   <input type="text" name="phno" id='phone' class="form-control input-sm" placeholder="Phone Number" value="<?php echo $row['phno']; ?>" onkeyup="phoneUser()" >
                                                   <span style="color: red;font-size: 14px" id="f5"></span>

                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-6 col-md-6">
                                  <div class="form-group">
                                  <div class="form-group">
                                  <input type="text" onfocus="(this.type='date')" name="dob" class="form-control input-sm" placeholder="Date of Birth" value="<?php if($row['dob']=='0000-00-00'){echo "Date of Birth";}else{echo $row['dob'];} ?>" value="" max="<?php echo date('Y-m-d') ?>"  id="dob" onfocusout="dobCheck()">
                  <span style="color: red;font-size: 14px" id="sd1"></span>
                                                    
                                                </div>
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
