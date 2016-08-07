<html>
<head>
<?php 
session_start();
include('header.php');
?>
<body>
<div id="container">
<div id="content">
<div id="contentleft">
<body style="font-family:Arial">

<?php

$item=$_REQUEST['item'];
$quantity=$_REQUEST['quantity'];
?>
<!--<p> Thank you for your order!</p> -->

<?php
//$clean=array();

//if((isset['$item'] && isset['$quantity']))
if(!empty($_REQUEST['quantity']))

{

     echo 'Thank you for ur order , your order of :'.'<br>';
     echo 'ITEM:-'.$item.'<br>';
     echo 'QUANTITY:-'.$quantity.'<br>';
     echo 'Has been placed.'.'<br>';
//     echo session_id();
}
  
   else 
    {
          echo "<p> There was problem with your order.</p>";
           echo "<p> Quantity not specified.</p>";
   }  





?>




</div><!--contentleft---->
<?php include('sidebar.php');?>

</div><!--Content-->
</div> <!--container-->
<?php include('footer.php');?>
</head>
</body>


























