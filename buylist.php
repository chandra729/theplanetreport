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


<h1><b>Online subscription template</h1></b>
<form action="buy.php" method="get">
<p>
Subscription List:
<select name="item">
<option name="Daily">Daily</option>
<option name="Weekly">Weekly</option>
<option name="Monthyl">Monthly</option>
<option name="Yearly">Yearly</option>
<input type="hidden" name="PHPSESSID" value="<?php echo session_id(); ?> "/>

<!--ITEM:<input type="text" name="item" /><br/> -->
</select><br>
User Numbers:<input type="text" name="quantity" /><br/>

<input type="submit" value="Enter order" />
</p>
</form>
</div><!--contentleft---->
<?php include('sidebar.php');?>

</div><!--Content-->
</div> <!--container-->
<?php include('footer.php');?>
</head>
</body>
