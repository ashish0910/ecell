<?php
    
    require_once('db.php');
    session_start();
    
    
    if(isset($_POST)){
        $author = $_POST['author'];
        $title = $_POST['title'];
        $summary = $_POST['summary'];
        $content = $_POST['content'];
        $image = $_POST['image'];
        $category = $_POST['category'];    
        
        $query_add = "INSERT INTO `posts` (`id`, `title`, `image`, `author`, `content`, `category`, `summary`, `date`) VALUES (NULL, '$title', '$image', '$author', '$content', '$category', '$summary', CURRENT_TIMESTAMP)";
        
        $result = mysqli_query($conn,$query_add);
        $_SESSION['addblog'] = "done" ;
        header("location: editblog.php");
    }
    if(!$result){
        echo "bug";
    }
    else{
        echo "no";
    }
    

?>