<?php 
	
	require_once("connect.php");
	  
	$getID=$_REQUEST["id"]; 
	$dltQuery="DELETE FROM book_details WHERE id=$getID";
	$runQuery=mysqli_query($connect,$dltQuery);
	  
	if($runQuery==true)
	{
		header("location:admin/book_update.php?deleted");
	}
	  
?>
    
  