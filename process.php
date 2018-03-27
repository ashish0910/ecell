<?php
      require_once('db.php');
      
      if(isset($_POST)){
          
          echo "working"; 
          $name = $_POST['name'];
          $email = $_POST['subject'];
          $message = $_POST['message'];
          $subject = $_POST['subject'];
          
          $query = "INSERT INTO contact (name, subject, email, message)
    VALUES ('".$name."','".$subject."','".$email."','".$message."')";
      }
      
     if ($conn->connect_errno) {
        printf("Connect failed: %s\n", $conn->connect_error);
        exit();
     }
     
     $result = $conn->query($query) ;
     if($result){
         echo "inserted";
     }
    if(!$result){
        echo "bug";
    }
                

?>     