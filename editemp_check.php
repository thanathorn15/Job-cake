<?php 
if(!isset($_SESSION)){
    session_start();
    $ID=  $_SESSION['ID'] ;
    $nameuser=  $_SESSION['name'] ;
     $email= $_SESSION['email'] ;
     $tel= $_SESSION['tel'];
     $address= $_SESSION['address'];
     $username= $_SESSION['username'];
      $password= $_SESSION['password'];
      $status= $_SESSION['status'];
 
        if(!isset($_SESSION["ID"])){
            header("Location: login.php");
        exit;
        }
    }
?>

<?php

     include "connectcakeDB/connectcakeDB.php";
    if(isset($_POST)){

    
        $ID=  $_POST['ID'] ;
        $name=  $_POST['name'] ;
         $email= $_POST['email'] ;
         $tel= $_POST['tel'];
         $address= $_POST['address'];
         $username= $_POST['username'];
          $password= $_POST['password'];
     
       
        $sql_update = "update user set  name = '".$name."',username = '".$username."',password='".$password."',email = '".$email."',tel = '".$tel."',address = '".$address."'  where ID = '".$ID."'";
        $query_sql = mysqli_query($conn,$sql_update);

    

        if ($query_sql){
          $sadang="เรียบร้อย";
          echo $sadang;
            echo "<meta http-equiv='refresh' content='0.25;URL= employee.php'>";
        }else{
           
            echo "Fail : ". $sql_update . $conn->error;

    }}
?>

