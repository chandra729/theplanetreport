<?php 
include('header.php');
?>
<div id="container">
<div id="content">
<div id="contentleft">
<h3>Donation Template </h3>
<h4>We are non-profit news aggregator organization , to keep afloat we need some donation.Please use the donation template below to donate.</h4>
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

<form method="get" action="transfer.php">
<!--<form action="order.php">-->
<input type="hidden" name="PHPSESSID" value="<?php echo session_id(); ?> "/>
<h2>Enter the amount you want to donate in ($):</h2>
<input type="text" name="money"/>
<input type="submit" name="transfer" value="Transfer"> <br/>
</form>
<hr>

<h2>You have donated:<?php echo $_SESSION['totalmoney']; ?> Dollar</h2> 

<p>
   <b> To reset your donation click:

 <a  href ="reset.php?<?php echo SID; ?>">Cancel</a><b>
</p>

</div><!--contentleft---->
<?php include('sidebar.php');?>

</div><!--Content-->
</div> <!--container-->
<?php include('footer.php');?>

