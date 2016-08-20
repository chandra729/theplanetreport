<html>
<head>
<?php 
include('header.php');
?>
<body>
<div id="container">
<div id="content">
<div id="contentleft">
<?php
        
          $db = mysql_connect('localhost','root','@Shekhar1985') or die("can't connect");
          $selectedDB=mysql_select_db('data2',$db);

          $user=$_GET['user'];
          $pass=$_GET['pass'];
  
  $question="select *  from login where username='$user' and password='$pass' ";
  $answer=mysql_query($question,$db);
  
  $amount=mysql_num_rows($answer);
  if($amount>0)
   {
  //   $row=mysql_fetch_row($answer);
  //   print  "welcome $row[0].$row[1].$row[2] <br/>" ;
    //  print_r ($answer);
     while($row=mysql_fetch_assoc($answer))
            {
              
               echo "<h4>". "ID:". $row["id"]. "-Name:" . $row["username"] . "-Password:" . $row["password"] . "<br>". "AccessLevel:".$row["access"] . "<br>"."</h4>";    
              
                   echo $row[0];            

}   
   
   

//        printf("Welcome %s with password %s and id %u  \n", $row[0],$row[1],$row[2]);
    }
    
   else 
    {
        print "you do not have access";
    }
?>

</div><!--contentleft---->
<?php include('sidebar.php');?>

</div><!--Content-->
</div> <!--container-->
<?php include('footer.php');?>
</head>
</body>

