
<?php

     include "connectcakeDB/connectcakeDB.php";
    if(isset($_POST)){

    
         $ID=  $_POST['ID'] ;
         $username=  $_POST['username'] ;
         $password= $_POST['password'] ;
         $name=  $_POST['name'] ;
         $email= $_POST['email'] ;
         $tel= $_POST['tel'];
         $address= $_POST['address'];
         $work_start= $_POST['work_start'];
         $worktime= $_POST['worktime'];
     
       
        $sql_update = "update user set  username = '".$username."',password = '".$password."',name = '".$name."',email = '".$email."',tel = '".$tel."',address = '".$address."',work_start = '".$work_start."',worktime = '".$worktime."'  where ID = '".$ID."'";
        $query_sql = mysqli_query($conn,$sql_update);

    

        if ($query_sql){
          $sadang=" ";
          echo $sadang;
            echo "<meta http-equiv='refresh' content='0.25;URL= employee.php'>";
        }else{
           
            echo "Fail : ". $sql_update . $conn->error;

    }}
?>

