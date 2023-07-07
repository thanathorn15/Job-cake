
<?php 
session_start();
        if(isset($_POST['username'])){
                  include("condb.php");
                  $username = $_POST['username'];
                  $password = $_POST['password'];
                  $name   =   $_POST['name'];
                  $email  =  $_POST['email'];
                  $tel  =  $_POST['tel'];
                  $address  =   $_POST['address'];
                  $worktime  =   $_POST['worktime'];
                  $status  =   $_POST['status'];
 
                  $sql="SELECT * FROM user 
                  WHERE  
                  username='".$username."'  
                  AND  password='".$password."' ";
                  $result = mysqli_query($con,$sql);
				
                  if(mysqli_num_rows($result)==1){
                      $row = mysqli_fetch_array($result);
                      $_SESSION["username"] = $row["username"];
                      $_SESSION["password"] = $row["password"];
                      $_SESSION["ID"] = $row["ID"];
                      $_SESSION["name"] = $row["name"];
                      $_SESSION["email"] = $row["email"];
                      $_SESSION["tel"] = $row["tel"];
                      $_SESSION["address"] = $row["address"];
                      $_SESSION["worktime"] = $row["worktime"];
                      $_SESSION["status"] = $row["status"];
                   
                      if($_SESSION["status"]=="01"){ 
                        echo "<meta http-equiv='refresh' content='0.75;URL=index.php'>";
  
                         
  
                        }
                    if ($_SESSION["status"]=="02"){ 
                      echo "<meta http-equiv='refresh' content='0.75;URL=index_user.php'>";
                        }
 
 
                       
                    
                 
                  }else{
                    echo "<script>";
                        echo "alert(\" user หรือ  password ไม่ถูกต้อง\");"; 
                        echo "window.history.back()";
                    echo "</script>";
 
                  }
        }else{
 
             Header("Location: login.php"); //user & password incorrect back to login again
 
        }
?>