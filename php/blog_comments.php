<?php

    include("config.php");
    
    //Connection Check
    if ($db->connect_errno) {
      header("location: ../404.html");
      exit();
    }

    $blog_id = $_GET['id'];
    if($blog_id){ header("location: ../404.html"); }
     
    if(isset($_POST['AddComment'])) {
        
      //Comments Code
      $name = strip_tags($_POST['name']);
      $email = strip_tags($_POST['email']);
      $comment = strip_tags($_POST['comment']);
  
  
      if ( !empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
		    $email = "anonymous@mail.com";
	    }

      if(!empty($name)) { $name = "anonymous"; };

      if($comment == '' || $comment == NULL || $comment == 0) { 
        header("location: ../blog_single_left_sidebar.php?id=$blog_id"); 
      };

      $name = mysqli_real_escape_string($db,$name);
      $email = mysqli_real_escape_string($db,$email);
      $comment = mysqli_real_escape_string($db,$comment);
  
      $sql = "INSERT INTO `joxbe_blog_comments` (`name`, `comment`, `email`, `blog_id`, `comment_date_time`) VALUES ('$name', '$comment', '$email', '$blog_id', CURRENT_TIMESTAMP)";  
      
      $result = mysqli_query($db,$sql);
 
      if($result == 1) {

         header("location: ../blog_single_left_sidebar.php?id=$blog_id");
      }else {
      
         header("location: ../404.html");
      }
    }

?>