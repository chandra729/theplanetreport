<?php 

$redirect_url=$_GET['demo'];
header("Location: ". $redirect_url);
include('header.php');

?>
<div id="container">
<div id="content">
<div id="contentleft">


<?php
$redirect_url=$_GET['demo'];
header("Location: ". $redirect_url);

echo "welcome to demo page";
?>


</div><!--contentleft---->
<?php include('sidebar.php');?>

</div><!--Content-->
</div> <!--container-->
<?php include('footer.php');?>



