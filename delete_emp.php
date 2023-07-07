<?php 
if(!isset($_SESSION)){
    session_start();
    $ID=  $_SESSION['ID'] ;
    $nameuser=  $_SESSION['name'] ;
     $email= $_SESSION['email'] ;
     $tel= $_SESSION['tel'];
     $status= $_SESSION['status'];
    
 
        if(!isset($_SESSION["ID"])){
            header("Location: login.php");
        exit;
        }
    }
?>



<?php
session_start();
include "connectcakeDB/connectcakeDB.php";
 $sql = 'DELETE FROM user where ID = "'.$_GET['emp_iddel'].'"';



 $query = mysqli_query($conn,$sql);
 if($query){
     header('Location:login.php');
 }else{
   echo "ไม่สามารถลบข้อมูลได้";
 }
?>