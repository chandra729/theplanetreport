<?php 
include('header.php');

?>
<div id="container">
<div id="content">
<div id="contentleft">
<?php
$name = $_GET['name'];
//echo "<h3>Welcome to theplanetreports.com<strong> $name </strong>  <br>";
//echo date_default_timezone_get();
date_default_timezone_set('Europe/Berlin');

$timezone = date_default_timezone_get();
//echo "The current server timezone is: " . $timezone;


//$date = date('m/d/Y h:i:s a', time());
$date = date('m/d/Y');
echo "<h3>";
// 24-hour format of an hour without leading zeros (0 through 23)
$Hour = date('G');
if ( $Hour >= 5 && $Hour <= 11 ) {
    echo "Good Morning,".$name;
} else if ( $Hour >= 12 && $Hour <= 18 ) {
    echo "Good Afternoon,".$name ;
} else if ( $Hour >= 19 || $Hour <= 4 ) {
    echo "Good Evening,".$name ;
}

echo "</h3>";
echo "<h4>";
echo "These are the main headlines at this moment ". $date;
echo "</h4>"
?>

<?php include('mainheadlines.php');

echo "</br>";
echo "<a href='http://theplanetreports.com'>Homepage <br> </a>";
?>
</div><!--contentleft---->
<?php include('sidebar.php');?>

</div><!--Content-->
</div> <!--container-->
<?php include('footer.php');?>




