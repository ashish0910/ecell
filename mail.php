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
    if(isset($_POST)){
        if(isset($_POST['mail'])){
           $to = $_GET['to'];
           $subject = $_POST['subject'];
           $message = $_POST['message'];
           $headers = 'From: webmaster@example.com' . "\r\n" .
           'Reply-To: webmaster@example.com' . "\r\n" .
           'X-Mailer: PHP/' . phpversion();
            mail($to, $subject, $message, $headers);
            $_SESSION['mail']="done";
            header("location: admin.php");
        }
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
    <h1>Mail to:</h1>
    </div>
    <br>
    <form method="post">
    <div class="container">
  <div class="form-group">
    <label for="subject">Subject:</label>
    <input type="text" class="form-control" placeholder="Subject" name="subject" required>
  </div>
  <div class="form-group">
    <label for="Message">Message:</label>
    <textarea name="message" class="form-control" cols="30" rows="10">Your Message</textarea>
  </div>
   <input type="submit" class="btn btn-primary" name="mail" value="Send">
    </div>
    </form>