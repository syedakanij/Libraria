<?php 
  
  $host="localhost";
  $dbUser="mehedi";
  $dbPass="mehedi123";
  $dbName="library_200";
  
  $connect=mysqli_connect($host,$dbUser,$dbPass,$dbName);
  
  if($connect==false)
  {
    echo "<h1 style='color:red'>Error Establishing Database Connection<h1>"; 
  } 
  
 
?>