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

    $sql = "DELETE FROM cake where idcake = ".$_GET["delidcake"]."";
    $query = mysqli_query($conn,$sql);
        if ($query){
            $msg = "ลบข้อมูลสำเร็จ";
            echo $msg;
            header("Location: cake_user.php");


        } else {
            $msg = "ไม่สามารถลบข้อมูลได้";
            echo $msg;
            header("Location: cake_user.php");

        }
    
    

?>