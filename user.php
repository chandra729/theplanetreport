
<html>
<head>
<?php 
include('header.php');
?>
<body>
<div id="container">
<div id="content">
<div id="contentleft">

<h4> To view list of your permission level , please enter your username and password: </h4>
<form action="user_login.php" method="GET">
<p>Username: <input type="text" size="12" name="user" /></p>
<p>Password: <input type="password" size="12" name="pass" /></p>
<p><input type="submit" name ="ok"  value="OK" /></p>
</form>

</div><!--contentleft---->
<?php include('sidebar.php');?>

</div><!--Content-->
</div> <!--container-->
<?php include('footer.php');?>
</head>
</body>
