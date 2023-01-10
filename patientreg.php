<?php 
    include 'ptregheader.php';
?>
<script type="text/javascript">
  function firstName() {
    var f1 = document.getElementById("f1");
    var fname = document.getElementById('name').value;

    if(!/^[A-Za-z ]{5,26}$/.test(fname))
       {
         f1.textContent = "**Invalid Full Name";
         var x = document.getElementById("name");
         x.focus();
         return false;
       }
       else
       {
        f1.textContent = "";
        return true;
       }
  }

  function emailPUser() {
    var f3 = document.getElementById("p8");
    var email = document.getElementById('pemail').value;

    if (!/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,8}$/.test(email))
       {
         f3.textContent = "**Invalid Email Format";
         document.getElementById("pemail").focus();
         return false;
       }
       else
       {
        f3.textContent = "";
        return true;
       }
  }

  function passPUser() {
    var f9 = document.getElementById("p9");
    var pass = document.getElementById('ppass').value;

    if(!/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/.test(pass))
       {
         f9.textContent = "**Password Must Have 1(Uppercase,Lowercase,Digit) & 6 to 20 Character Length";
         document.getElementById("ppass").focus();
         return false;
       }
       else
       {
        f9.textContent = "";
        return true;
       }
  }

  function conpassUser() {
    var f10 = document.getElementById("f10");
    var conpass = document.getElementById('conpass').value;
    var pass = document.getElementById('ppass').value;

    if(conpass!=pass)
       {
         f10.textContent = "**Password Doesn't Match";
         document.getElementById("conpass").focus();
         return false;
       }
       else
       {
        f10.textContent = "";
        return true;
       }
  }

   function pcheckAll() {

    if(firstName()&&emailPUser()&&passPUser()&&conpassUser())
       {
         return true;
       }
       else
       {
        return false;
       }
  }


</script>
<br><br><br>
        <!-- contact-style-two -->
        <section class="contact-style-two p_relative">
            <div class="pattern-layer">
                <div class="pattern-1" style="background-image: url(assets/images/shape/shape-55.png);"></div>
                <div class="pattern-2" style="background-image: url(assets/images/shape/shape-56.png);"></div>
            </div>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-8 col-md-12 col-sm-12 big-column offset-lg-2">
                        <div class="form-inner"><br>
                            <h2>Patient Registration</h2>
                            <form method="post" action="patientregister.php" enctype="multipart/form-data" > 
                                <div class="card-body" >
                    
                            
<div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                  <div class="form-group">
                                          <div class="form-group">
                  <input type="text" name="name" class="form-control input-sm" placeholder="Full Name" id="name" onkeyup="firstName()" >
                  <span style="color: red;font-size: 10px" id="f1"></span>
                                          
                                  </div>

                                  </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                  <div class="form-group">
                  <div class="form-group">
                    <input type="email" name="email"  class="form-control input-sm" placeholder="Email Address" id="pemail" onkeyup="emailPUser()" >
                  
                  <span style="color: red;font-size: 10px" id="p8"></span>
                                          
                                  </div>
                                  </div>
                                </div>
                              </div>
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                  <div class="form-group">
                                          <div class="form-group">
                  <input type="password" name="pass" class="form-control input-sm" placeholder="Password" id="ppass" onkeyup="passPUser()"  style="border-radius: 50px;height: 50px;"> <span style="color: red;font-size: 10px" id="p9"></span>
                                          
                                  </div>

                                  </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                  <div class="form-group">
                  <div class="form-group">
                    <input type="Password" name="conpass"  class="form-control input-sm" placeholder="Confirm Password" id="conpass" onkeyup="conpassUser()"  style="border-radius: 50px;height: 50px;">
                  <span style="color: red;font-size: 10px" id="f10"></span>
                                          
                                  </div>
                                  </div>
                                </div>
                              </div>
                            <input type="submit" value="Register" class="btn btn-info btn-block" onclick="return pcheckAll()" >
                                    </form>




                        </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-style-two end -->
<br><br><br>

<?php 
    include 'mainfooter.php';
?>