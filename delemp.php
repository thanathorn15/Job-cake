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



<?php include "connectcakeDB/connectcakeDB.php";

    $sql = "DELETE FROM user where ID = ".$_GET["ID"]."";
    $query = mysqli_query($conn,$sql);
        if ($query){
            $msg = "ลบข้อมูลสำเร็จ";
            echo $msg;
            header("Location: employee.php");


        } else {
            $msg = "ไม่สามารถลบข้อมูลได้";
            echo $msg;
            header("Location: employee.php");

        }
    
    

?>