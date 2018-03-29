<?php session_start(); ?>
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
    <a class="nav-link" href="">Link</a>
  </li>
</ul>
    <div class="container">
    <br>
    <h1>Replies</h1>
    </div>
    <br>
<?php

    
    require_once('db.php');
    if ($conn->connect_errno) {
    printf("Connect failed: %s\n", $conn->connect_error);
    exit();
}
    if(isset($_SESSION['delete'])){
        if($_SESSION['delete']=="done") { ?> <div class="alert alert-danger container">Deleted</div> 
         <?php
         $_SESSION['delete']="ok";}
    }
      
      $r_query = "SELECT * FROM `contact` WHERE `replied` = 'no'"; 
        if ($result = $conn->query($r_query)) {

        /* fetch associative array */
        while ($row = $result->fetch_assoc()) {
            $post_name=$row['name'] ;
            $post_email=$row['email'] ;
            $post_subject=$row['subject'] ;
            $post_message=$row['message'] ;
            $post_replied=$row['replied'] ;
            $post_date=$row['date'] ;
            $post_id=$row['id'] ; 

?>
                              
                           <div class="container">
                    
                    <h4>
                        <a href="#">Name:<?php echo $post_name ?></a>
                    </h4>

                    <p><span class="glyphicon glyphicon-time"></span> <?php echo $post_date ?></p>
                    <hr>
                    <p class="lead">
                    <a href="#">Mail:<?php echo $post_email ?></a>
                    </p>
                    <hr>
                    <p class="lead">
                    <a href="#">Subject:<?php echo $post_subject ?></a>
                    </p>
                    <hr>
                    <p>Content:<?php echo $post_message ; ?></p>
                    <hr>
                    <a href="deletereply.php?id=<?php echo $post_id ?>"><input type="submit" class="btn btn-primary"></a>

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


