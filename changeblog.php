<?php session_start(); 
if(isset($_SESSION)){
    if(isset($_SESSION['user'])) {
        if($_SESSION['user']!="true") {header("location: login.php");}
    } else {header("location: login.php");}
} else {
    header("location: login.php");
}
?><!doctype html>
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
</ul>
    <div class="container">
    <br>
    <h1>Edit Blog</h1>
    
    <br>
<?php

    require_once('db.php');
    if ($conn->connect_errno) {
    printf("Connect failed: %s\n", $conn->connect_error);
    exit();
}
?>

<?php  

    if(isset($_GET)){
        if(isset($_GET['id'])){
            $d_id=$_GET['id'];
            $d_query = "SELECT * from posts WHERE id='$d_id' ";
            $result = mysqli_query($conn,$d_query);
            $row = $result->fetch_assoc() ;
            $post_title=$row['title'] ;
            $post_author=$row['author'] ;
            $post_content=$row['content'] ;
            $post_image=$row['image'] ;
            $post_summary=$row['summary'] ;
            $post_date=$row['date'] ;
            $post_id=$row['id'] ; 
            $post_category=$row['category'];
        }   
    }

?>
  
  <form method="post">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="title">Title</label>
      <input type="text" class="form-control" placeholder="Blog Title" name="title" value="<?php echo $post_title ; ?>" required>
    </div>
    <div class="form-group col-md-6">
      <label for="author">Author</label>
      <input type="text" class="form-control" placeholder="Blog Author" name="author" value="<?php echo $post_author ; ?>" required>
    </div>
  </div>
  <div class="form-group">
    <label for="summary">Summary</label>
    <input type="text" class="form-control" placeholder="Blog Summary" name="summary" value="<?php echo $post_summary ; ?>" required>
  </div>
  <div class="form-group">
    <label for="content">Content</label>
    <textarea name="content" cols="30" rows="10" class="form-control" required><?php echo $post_content ; ?></textarea>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="category">Category</label>
      <input type="text" class="form-control" name="category" placeholder="Blog Category" value="<?php echo $post_category ; ?>" required>
    </div>
    <div class="form-group col-md-6">
      <label for="image">Image</label>
      <input type="text" class="form-control" name="image" placeholder="Name of image in img folder"  value="<?php echo $post_image ; ?>" required>
    </div>
  </div>
  <button type="submit" class="btn btn-primary" name="change">Change</button>
</form>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>

<?php 
    if(isset($_POST)){
        if(isset($_POST['change']))
        {$author = $_POST['author'];
        $title = $_POST['title'];
        $summary = $_POST['summary'];
        $content = $_POST['content'];
        $image = $_POST['image'];
        $category = $_POST['category'];    
        
        $query_add = "INSERT INTO `posts` (`id`, `title`, `image`, `author`, `content`, `category`, `summary`, `date`) VALUES (NULL, '$title', '$image', '$author', '$content', '$category', '$summary', CURRENT_TIMESTAMP) ";
        
        $result = mysqli_query($conn,$query_add);
        $_SESSION['editblog'] = "done" ;
        header("location: editblog.php");
    }
    if(!$result){
        echo "bug";
    }}
    else{
        echo "no";
    }

?>
