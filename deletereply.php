<?php
    
    require_once('db.php');
    session_start();
    
    
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $del_query = "DELETE FROM `contact` WHERE `contact`.`id` = '$id' ";
        $result = $conn->query($del_query) ;
        if($result){
         header("location: admin.php");
         $_SESSION['delete']="done";     
     }
    if(!$result){
        echo "bug";
    }
    }else{
        echo "no";
    }
    

?>