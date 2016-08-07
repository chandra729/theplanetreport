 <html>
        <head>
	</head>
<body>
<?php
if (!isset($_GET['submit'])){
?>   
   <!-- The HTML login form -->
   <!-- <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>" >  -->
   <form action="<?=$_SERVER['PHP_SELF']?>" method="GET">
    <p>	Username: <input type="text" name="username"/><br> </p>
    <p>Password: <input type="password" name ="password"/><br></p>
      	<!--  <input type="submit" name="login" value="login"/><br> -->
        <input type="submit" name="submit" value="Login"/><br>
           	
</form>
<?php
  }
   
   else {
           $con = mysqli_connect('localhost','root','@Shekhar1985','sample');
           if (!$con){
            echo('Connection ERROR');
            die(print_r(mysqli_error($con)));
           }
          
           $username = $_GET['username'];
           $password = $_GET['password'];
           $result = mysqli_query($con, "SELECT * FROM `users` WHERE username='$username' AND password='$password'");
           if(mysqli_num_rows($result) == 0)
            {
                echo 'Invalid username or password'.'Please try again';
            } 
            else
                      {
                         echo '<h1>'.'You have successfully Logged in.'.'</h1>'.'<p>'.'This text should be visible only when you have logged 
                         in with successful username and password.</p>';
                         // include('home.php');
                     
                      }

}

?>

</body>
</html>


  
