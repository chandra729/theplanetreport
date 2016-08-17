<?php 
include('header.php');
?>
</head>
<body>
<div id="container">
<div id="content">
<div id="contentleft">


<form enctype="multipart/form-data" action="uploader.php" method="POST">
<input type="hidden" name="MAX_FILE_SIZE" value="100000"/><br>
Choose a file to upload:<input name="uploadedfile" type="file" /><br>
<input type="submit" value="Upload File" />
</form>

</body>

</div><!--contentleft---->
<?php include('sidebar.php');?>

</div><!--Content-->
</div> <!--container-->
<?php include('footer.php');?>
</body>
</html>
