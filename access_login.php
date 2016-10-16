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
          $selectedDB=mysql_select_db('access',$db);

          $user=$_GET['user'];
          $pass=$_GET['pass'];
  
  $question="select username,password  from control  where username='$user' and password='$pass' ";
  $answer=mysql_query($question,$db);

  $amount=mysql_num_rows($answer);
  if($amount>0)
   {
      $row=mysql_fetch_row($answer);

       if($row[0]=='admin'){
       print  "welcome $row[0]. <br/>" ;
       echo '<p><a href="http://theplanetreports.com/adminpage.php" target="_blank">'." For admin page" . '</a></p>';       
       }

       else
       print "welcome $row[0]. <br/>";
       echo '<p><a href="http://theplanetreports.com/userpage.php" target="_blank">'." For user  page" . '</a></p>';       
      
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

