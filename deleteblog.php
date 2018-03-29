<?php
    
    require_once('db.php');
    session_start();
    
    
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $del_query = "DELETE FROM `posts` WHERE `posts`.`id` = '$id' ";
        $result = $conn->query($del_query) ;
        if($result){
         header("location: editblog.php");
         $_SESSION['blogdelete']="done";     
     }
    if(!$result){
        echo "bug";
    }
    }else{
        echo "no";
    }
    

?>