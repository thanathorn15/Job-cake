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
        $bev_id = $_POST['bev_id'];
        $bev_name= $_POST['bev_name'];
        $bev_unit  =   $_POST['bev_unit'];
        $bev_price =   $_POST['bev_price'];
        $bev_imgs =   $_FILES['bev_imgs'];

        $file_get   =   $_FILES['bev_imgs']['name'];
        $temp       =   $_FILES['bev_imgs']['tmp_name'];
        $file_to_saved = "imgs/".$file_get;
        move_uploaded_file($temp, $file_to_saved); 



      
        $sql_update = "update beverage set bev_name = '".$bev_name."',bev_unit = '".$bev_unit."',bev_price='".$bev_price."',bev_imgs = '".$file_to_saved."'  where bev_id = '".$bev_id."'";
        $query_sql = mysqli_query($conn,$sql_update);

        if ($query_sql){
          
            echo "<meta http-equiv='refresh' content='0.25;URL=bav_menu.php'>";
        }else{
           
            echo "<meta http-equiv='refresh' content='0.25;URL=bav_menu.php'>";
    }}
?>

