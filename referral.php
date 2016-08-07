<?php 
include('header.php');

?>
<div id="container">
<div id="content">
<div id="contentleft">

<?php
$destination = $_POST['redirect'];
$someInput = $_POST['someUserInput'];
if(!empty($someInput)) 
    {
     //redirect
     header('Location: '.$destination);
    }
 else 
   echo "Please Enter the address of websites you want to visit";

?>
</div><!--contentleft---->
<?php include('sidebar.php');?>

</div><!--Content-->
</div> <!--container-->
<?php include('footer.php');?>

