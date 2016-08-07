<html>
<head>
<title>Redirect</title>
<?php
$redirect_url = $_GET['url'];
header("Location: " . $redirect_url);
?>
<a href="http://www.google.com">Click for google.com</a>
</body>
</html>



