<html>
<head>
<title>Persistent Attack demo </title>
</head>
<body>
<form action="persis.php" method="GET">
<input type="text" size="50" value="" name="sig" /> <br>
<input type="submit" value="Sign it"/>
</form>

<?php

//$file_destino_path="http://localhost/attacker/victim/XSS/sigs.txt";


if($_GET['sig']){
         file_put_contents('entry.txt',$_GET['sig'] ."\n", FILE_APPEND | LOCK_EX);
}

//else 
//echo "Error";

?>

<h2>Previous guestook signatures:</h2>

<?php
   $data=file_get_contents('entry.txt');
   foreach(split("\n",$data) as $rec){
    echo $rec. "<br />" ;

}

?>
</body>
</html>


