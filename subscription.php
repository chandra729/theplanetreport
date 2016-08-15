<?php include('header.php');?>

<link rel="stylesheet" type="text/css" href="style.css" />
<div id="container">
<div id="content">
<div id="contentleft">
<h1>Subscription details:</h1>
<p><h3>Details about Subscription </h3></p>

<?php 
$host='localhost';
$dbname='orders';
$username='root';
$password='@Shekhar1985';

echo "<body style='background-color:#99ccff'>";


//echo "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']."\n";



$dbh=null;



try{

   //  $dbh=new PDO("mysql:dbname=orders;host=localhost","root","123456");
   
    
     $dbh=new PDO("mysql:host=$host;dbname=$dbname",$username,$password);

         
    #echo " connected successfully to $dbname at $host ";

     $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   }
catch(PDOException $e){
echo $e->getMessage();
}


//bad query injectable and vulnerable to query stacking
$stmt = $dbh->query("SELECT * FROM three  where orderNumber = ".$_GET['id']);
//print_r($_GET);
if(isset($_GET['id'])){
$stmt->execute();

#echo '<table border=1px>';  // opening table tag

#echo '<table border="1px" cellspacing="2" cellpadding="2"table >';
echo '<table>';
echo'<th>OrderNumber</th><th>ProductCode</th><th>QuantityOrdered</th><th>PriceEach</th><th>OrderLineNumber</th>'; //table headers


while($row = $stmt->fetch(PDO::FETCH_ASSOC)) 
{
//echo print_r($row);
 //echo "<tr><td>";

#   echo "<p>";
# echo "OrderNumber: {$row[orderNumber]} <br>".
#       "ProductCode:{$row[productCode]} <br>".
#       "QuantityOrdered:{$row[quantityOrdered]} <br>".
#       "PriceEach:{$row[priceEach]} <br>".
#       "OrderLineNumber:{$row[orderLineNumber]} <br>".
#        "------------------------------------<br>";

#  echo "</p>";


echo'<tr>'; // printing table row
echo '<td>'.$row['orderNumber'].'</td>';
echo '<td>'.$row['productCode'].'</td>';
echo '<td>'.$row['quantityOrdered'].'</td>';
echo '<td>'.$row['priceEach'].'</td>';
echo '<td>'.$row['orderLineNumber'].'</td>';
// we are looping all data to be printed till last row in the table
echo'</tr>'; // closing table row

}
}
//close PDO connection
$dbh = null;


?>


<?php //include('sidebar.php'); ?>

</div><!--Content-->
</div> <!--container-->
<?php include('footer.php'); ?>














