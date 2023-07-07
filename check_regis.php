
<?php

include "connectcakeDB/connectcakeDB.php";
if(isset($_POST)){
     
      
    
       $username  =   $_POST['username'];
       $password   =   $_POST['password'];
       $name   =   $_POST['name'];
       $email  =  $_POST['email'];
       $tel  =  $_POST['tel'];
       $address  =   $_POST['address'];
       $work_start  =   $_POST['work_start'];
       $worktime= $_POST['worktime'];
       $status =   $_POST['status'];
      


   $sql = "INSERT INTO user(username,password,name,email,tel,address,work_start,worktime,status) VALUES
   ('".$username."','".$password."','".$name."','".$email."','".$tel."','".$address."','".$work_start."','".$worktime."','". $status."')";
   $query = mysqli_query($conn,$sql);
   if ($query){
       $msg = "บันทึกข้อมูลสำเร็จ";
       echo $msg;
       header("Location: employee.php");


   }else{
     echo "fall".$sql . $conn->error;
      

   }
}
?>

