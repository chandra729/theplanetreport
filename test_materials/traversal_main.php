<html>
<head>
<title>Directory Traversal </title>
</head>
<body>
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

</body>
</html>


