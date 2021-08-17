<!Doctype html>
<html>
 
  <header>
	<link href="css/bootstrap.min.css" rel="stylesheet"/>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
</header>
  <body>
    <?php 
	
	  require_once("connect.php");
	  
	  if(isset($_REQUEST["edit_id"])) 
	  {
	  $editID=$_REQUEST["edit_id"]; //[if any data comes with this name(edit_id) thorugh those address of any users then we store them in those variable[$editID],that data we will send that will its value and this will go in query id=$editID
	  
	  $selectInfo="SELECT * FROM customer_booking WHERE id=$editID";
	  $runInfo=mysqli_query($connect,$selectInfo);
	  
	  while($getData=mysqli_fetch_array($runInfo))
	  { ?>
	  <div class="container">
	  <div class="booking_form fixed_all_page">
	    <form action="" method="POST">
		<!--<div class="form-group">
			<label>Customer Name</label>
			<input type="text" class="form-control book_control" style="width:40%" name="customer_name"  value="<?php echo $getData["customer_name"]?>" required>
	    </div>-->
		<div class="form-group">
    <label>Customer Name</label>
	<input class="form-control book_control" type="text" name="customer_name" value="<?php echo $getData["customer_name"]?>" placeholder="customer_name"/>
	 </div>
		  <div class="form-group">
    <label>Email</label>
	<input class="form-control book_control" type="email" name="customer_email" value="<?php echo $getData["customer_email"]?>" placeholder="customer_email"/>
	 </div>
		  <div class="form-group">
    <label>Phone Number</label>
	<input class="form-control book_control" type="text" name="customer_phone" value="<?php echo $getData["customer_phone"]?>" placeholder="customer_phone"/>
	 </div>
		  <div class="form-group">
    <label>Address</label>
	<input class="form-control book_control" type="text" name="customer_addr" value="<?php echo $getData["customer_addr"]?>" placeholder="customer_addr"/>
	 </div>
		  <div class="form-group">
    <label>Book Name</label>
	<input class="form-control book_control" type="text" name="book_name" value="<?php echo $getData["book_name"]?>" placeholder="book_name"/>
	 </div>
		  <div class="form-group">
    <label>Author</label>
	<input class="form-control book_control" type="text" name="author" value="<?php echo $getData["author"]?>" placeholder="author"/>
	 </div>
		  <input type="hidden" name="editingID" value="<?php echo $editID;?>"/> 
	      <input class="btn btn-success" type="submit" name="editButton" value="UPDATE DATA"/>
	    </form>
		</div>
		</div>
	    
	  <?php }}?>
	  
	  <?php
	  if(isset($_REQUEST["editButton"]))
	{
	  require_once("connect.php");
		$customer_name=$_REQUEST["customer_name"];
		$customer_email=$_REQUEST["customer_email"];
		$customer_addr=$_REQUEST["customer_addr"];
		$customer_phone=$_REQUEST["customer_phone"];
		$customer_addr=$_REQUEST["customer_addr"];
		$book_name=$_REQUEST["book_name"];
		$author=$_REQUEST["author"];
		$editingID=$_REQUEST["editingID"];
		$upQuery="UPDATE customer_booking SET customer_name='$customer_name',customer_email='$customer_email',customer_phone='$customer_phone',customer_addr='$customer_addr',book_name='$book_name',author='$author' WHERE ID=$editingID ";
		$runQuery=mysqli_query($connect,$upQuery);
	  
	  if($runQuery==true)
	  {
		header("location:admin/order_update.php?edited");
	  }
	}
	?>
    
  </body>
</html>