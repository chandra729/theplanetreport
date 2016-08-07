<?php
session_start();
$ip = $_SERVER['REMOTE_ADDR'];
$browser = $_SERVER['HTTP_USER_AGENT'];
$referrer = $_SERVER['HTTP_REFERER'];
if ($referred == "") {
$referrer = "This page was accessed directly";
 }
echo "<b>Visitor IP address:</b><br/>" . $ip . "<br/>";
echo "<b>Browser (User Agent) Info:</b><br/>" . $browser . "<br/>";
echo "<b>Referrer:</b><br/>" . $referrer . "<br/>";


   $_SESSION['userName'] = $ip.$browser;
   if( isset( $_SESSION['counter'] ) ) {
      $_SESSION['counter'] += 1;
   }else {
      $_SESSION['counter'] = 1;
   }
	
   $msg = "You have visited this page ".  $_SESSION['counter'];
   $msg .= "in this session.";
?>

<html>
   
   <head>
      <title>Session Fixation</title>
   </head>
   
   <body>
   
   <?php echo "Your session is running " . $_SESSION['userName']; ?> 
  <br>
   <?php  echo ( $msg ); ?>
   </body>
   
</html>
