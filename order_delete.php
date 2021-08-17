<?php 
	
	require_once("connect.php");
	  
	$getID=$_REQUEST["id"]; 
	$dltQuery="DELETE FROM customer_booking WHERE id=$getID";
	$runQuery=mysqli_query($connect,$dltQuery);
	  
	if($runQuery==true)
	{
		header("location:admin/order_update.php?deleted");
	}
	  
?>
    
  