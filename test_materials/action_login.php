<?php
        $username = $_GET['username'];
        $password = $_GET['password'];
        $con = mysqli_connect('localhost','root','123456','sample');
           if (!$con){
            echo('Connection ERROR');
             die(print_r(mysqli_error($con)));
           }
     $result = mysqli_query($con, "SELECT * FROM `users` WHERE username='$username' AND password='$password'");
        if(mysqli_num_rows($result) == 0)
            echo 'Invalid username or password'.'Please try again';
              else
              echo '<h1>You have successfully Logged in</h1><p>This text should be visible only when you have logged 
                     in with successful username and password.</p>';
      
?>
  

