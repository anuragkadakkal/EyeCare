<?php 
    session_start();
    include 'connection.php';
    $usr = $_POST["username"];
    $en = md5($_POST["password"]);

        
    $sql="select id,status,utype from tb_login where username='".$usr."' and password='".$en."'";
    //xecho $sql;exit;
    $result = mysqli_query($conn,$sql);
    $a=0;
    while ($row=mysqli_fetch_array($result))
    {
        $a++;
        $b=$row['id'];
        $c=$row['utype'];
        $d=$row['status'];
    }
    if($a>0)
    {
        if($d==1)
        {
            setcookie("lkey",$b);
            if ($c=='admin')
            {   
                date_default_timezone_set('Asia/Kolkata');
                $logtoken = md5(date("d-m-Y h:i:sa"));
                $sql="insert into tb_logginglogin(logtoken,loginusername,curdate) values('".$logtoken."','".$usr."','".date("d-m-Y h:i:sa")."')";
                $result = mysqli_query($conn,$sql);
                $_SESSION["logined"] = 1;
                header("location:admin/");
            }
            else if($c=='doctor')
            {   
                $_SESSION["logined"] = 1;
                setcookie("logined",1);
                header("location:doctor/");
                /*Customer SESSION - Completed - Validation Completed*/
            }
            else if($c=='staff')
            {
                $_SESSION["logined"] = 1;
                header("location:staff/"); 
                /*Police Station SESSION - Completed - Validation Completed*/
            }
            else if($c=='patient')
            {
                $_SESSION["logined"] = 1;
                header("location:patient/");
                /*Community SESSION - Completed - Validation Completed*/
            }
            else{}
        }
        else if ($d==2)
        {
            echo "<SCRIPT type='text/javascript'>alert('Permission Denied.....!!');
            window.location.replace(\"index.php\");
            </SCRIPT>";
        }
        else
        {
            echo "<SCRIPT type='text/javascript'>alert('Approval Pending.....!!');
            window.location.replace(\"index.php\");
            </SCRIPT>";
        }
    }
    else
    {
        echo "<SCRIPT type='text/javascript'>alert('Invalid User.....!!');
        window.location.replace(\"index.php\");
        </SCRIPT>";
    }
        
?>