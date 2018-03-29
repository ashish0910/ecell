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