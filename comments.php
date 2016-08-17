<?php 
include('header.php');
?>
<body>
<div id="container">
<div id="content">
<div id="contentleft">
<h1> Guest Signatures: </h1>
<form action="comments.php" method="GET">
<input type="text" size="50" value="" name="sig" /> <br>
<input type="submit" value="Sign it"/>
</form>
<?php
if($_GET['sig']){
         file_put_contents('entry.txt',$_GET['sig'] ."\n", FILE_APPEND | LOCK_EX);
}
?>
<h2>Previous Guestook Signatures:</h2>
<?php
   $data=file_get_contents('entry.txt');
   foreach(split("\n",$data) as $rec){
    echo $rec. "<br />" ;
}

?>   
</div><!--contentleft---->
<?php include('sidebar.php');?>

</div><!--Content-->
</div> <!--container-->
<?php include('footer.php');?>
</body>
</html>

