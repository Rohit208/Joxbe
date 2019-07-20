<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 

      $sql = "SELECT * FROM joxbe_users WHERE (user = '$myusername' and password = '$mypassword') 
              OR (email = '$myusername' and password = '$mypassword')";

      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);



// need to add a column to diffrentiate between a "blogger" and a "new customer" 

// if a blogger then redirect to blog generation page ...

// else new customer login dashboard ...  


      // If result matched $myusername and $mypassword, table row must be 1 row	
      if($count == 1) {

         $_SESSION['login_user'] = $myusername;
         header("location: ../blog_post.php");
      }else {
         header("location: ../404.html");
      }

   }
?>