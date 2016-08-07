<?php

$name = $_GET['name'];
echo "Welcome <strong> $name </strong>  <br>";
//echo date_default_timezone_get();
date_default_timezone_set('Europe/Berlin');

// 24-hour format of an hour without leading zeros (0 through 23)
$Hour = date('G');
if ( $Hour >= 5 && $Hour <= 11 ) {
    echo "Good Morning,";
} else if ( $Hour >= 12 && $Hour <= 18 ) {
    echo "Good Afternoon,";
} else if ( $Hour >= 19 || $Hour <= 4 ) {
    echo "Good Evening,";
}

echo "<br>";
echo "Thank you for visiting my website.".'<br>'." You will find lots of cool stuffs here.";
echo "<br>";
echo "<br>";
echo "<a href='http://victim.com'>Homepage <br> </a>";

?>
