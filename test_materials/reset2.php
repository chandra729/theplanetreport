<?php 
include('header.php');
?>
<div id="container">
<div id="content">
<div id="contentleft">
<?php
session_start();
unset($_SESSION['totalmoney']);
?>
<h2> Your transfer has been reset.</h2>
<p><b>To transfer money again.<br/>
Click on  the link :<a href = "transfer.php">Transfer</a></b>
</p>

</div><!--contentleft---->
<?php include('sidebar.php');?>

</div><!--Content-->
</div> <!--container-->
<?php include('footer.php');?>




