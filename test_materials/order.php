<?php
session_start();
if(!isset($_SESSION['totalmoney']))
  {
      $_SESSION['totalmoney']=0;
  }
  else
  { 
     $_SESSION['totalmoney']=$_SESSION['totalmoney']+$_GET['money'];
   }
?>
<html>
<body>

<form method="get" action="order.php">
<!--<form action="order.php">-->
<input type="hidden" name="PHPSESSID" value="<?php echo session_id(); ?> "/>
<h2>Enter the amount you want to transfer in ($):</h2>
<input type="text" name="money"/>
<input type="submit" name="transfer" value="Transfer"> <br/>
</form>
<hr>

<h2>You have transferred:<?php echo $_SESSION['totalmoney']; ?>Dollar</h2> 

<p>
   <b> To cancel your transfer click:

 <a  href = "reset.php?<?php echo SID; ?>">Cancel</a><b>
</p>



</body>
</html>






   
