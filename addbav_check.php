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

 include "connectcakeDB/connectcakeDB.php";
if(isset($_POST)){
      
       
        $bev_name =  $_POST['bev_name'];
        $bev_unit   =   $_POST['bev_unit'];
        $bev_price   =   $_POST['bev_price'];
        $file_get   =   $_FILES['bev_imgs']['name'];
        $temp   =   $_FILES['bev_imgs']['temp_name'];

        
    $file_to_save = "imgs/".$file_get;
    move_uploaded_file($temp,$file_to_save);
        
        

    $sql = "INSERT INTO beverage(bev_name,bev_unit,bev_price,bev_imgs) VALUES
    ('".$bev_name."','".$bev_unit."','".$bev_price."','".$file_to_save."')";
    $query = mysqli_query($conn,$sql);
    if ($query){
        $msg = "บันทึกข้อมูลสำเร็จ";
        echo $msg;
        header("Location: bav_menu.php");


    }else{
        $msg = "ไม่สามารถป้อนข้อมูลได้ [".''.$query.''."]";
        echo $msg;
       

    }
}
?>

