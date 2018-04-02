<?php session_start(); 
if(isset($_SESSION)){
    if(isset($_SESSION['user'])) {
        if($_SESSION['user']!="true") {header("location: login.php");}
    } else {header("location: login.php");}
} else {
    header("location: login.php");
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Admin</title>
  </head>
  <body>
    <ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link" href="index.php">View site</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="editblog.php">Edit blogs</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="admin.php">View Replies</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="addblog.php">Add Blog</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="logout.php">Logout</a>
  </li>      
</ul>
    <div class="container">
    <br>
    <h1>Edit blogs</h1>
    </div>
 <?php 
          if(isset($_SESSION['addblog'])){
          if($_SESSION['addblog']=="done") { ?> <div class="alert alert-success container">Added Blog</div> 
          <?php
          $_SESSION['addblog']="ok";}
          }
          if(isset($_SESSION['editblog'])){
          if($_SESSION['editblog']=="done") { ?> <div class="alert alert-success container">Changed Blog</div> 
          <?php
          $_SESSION['editblog']="ok";}
          }      
          if(isset($_SESSION['blogdelete'])){
          if($_SESSION['blogdelete']=="done") { ?> <div class="alert alert-danger container">Deleted</div> 
          <?php
          $_SESSION['blogdelete']="ok";}     } 
?>

<?php

    require_once('db.php');
    if ($conn->connect_errno) {
    printf("Connect failed: %s\n", $conn->connect_error);
    exit();
}

    $query = "SELECT * FROM posts ORDER by id DESC";

    if ($result = $conn->query($query)) {

        /* fetch associative array */
        while ($row = $result->fetch_assoc()) {
            $post_title=$row['title'] ;
            $post_author=$row['author'] ;
            $post_content=$row['content'] ;
            $post_image=$row['image'] ;
            $post_summary=$row['summary'] ;
            $post_date=$row['date'] ;
            $post_id=$row['id'] ; 
?>         
         
                <div class="container">
                <br>
                <h2>
                    <a href="#"><?php echo $post_title ?></a>
                </h2>
                <p class="lead">
                    by <a href="#"><?php echo $post_author ?></a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> Posted on <?php echo $post_date ?></p>
                <hr>
                <img class="img-responsive" src="img/<?php echo $post_image ?>" alt="image" style="width:800px;height:300px;">
                <hr>
                <p><?php echo $post_content ; ?></p>
                <hr>
                <a href="deleteblog.php?id=<?php echo $post_id; ?>"><input class="btn btn-primary" name="delete" type="submit" value="Delete"></a>
                <a href="changeblog.php?id=<?php echo $post_id; ?>"><input class="btn btn-primary" name="edit" type="submit" value="Edit" style="margin-left:10px;"></a>
                <br>         
                </div>
            <?php
        }    
}

?>              
   
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>


