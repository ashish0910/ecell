<?php session_start(); 
if(isset($_SESSION)){
    if(isset($_SESSION['user'])) {
        if($_SESSION['user']!="true") {header("location: login.php");}
    } else {header("location: login.php");}
} else {
    header("location: login.php");
}
?>
<?php
    
    require_once('db.php');    
    
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