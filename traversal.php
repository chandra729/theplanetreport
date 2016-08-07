<?php 
include('header.php');

?>
<div id="container">
<div id="content">
<div id="contentleft">
<h1> Welcome to directory traversal </h1>
<h4>Enter the right argument </h4>

<?php
   if(isset($_GET['data']))
  {
           echo "<h2> Director Traversal </h2> <br />";
            $lang=$_GET['data'] ;
  
    
            exec($lang, $execarray);
            foreach($execarray as $value)
                 { 
                        echo $value . "<br />";
             }
 }
?>


</div><!--contentleft---->
<?php include('sidebar.php');?>

</div><!--Content-->
</div> <!--container-->
<?php include('footer.php');?>

