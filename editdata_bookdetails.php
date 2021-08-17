<!Doctype html>
<html>
  <head>
	<link href="css/bootstrap.min.css" rel="stylesheet"/>
  </head>
  <body>
    <?php 
	
	  
	  require_once("connect.php");
	  if(isset($_REQUEST["edit_id"])) 
	  {
	  $editID=$_REQUEST["edit_id"]; //[if any data comes with this name(edit_id) thorugh those address of any users then we store them in those variable[$editID],that data we will send that will its value and this will go in query id=$editID
	  
	  $selectInfo="SELECT * FROM book_details WHERE id=$editID";
	  $runInfo=mysqli_query($connect,$selectInfo);
	  
	  while($getData=mysqli_fetch_array($runInfo))
	  { ?>
	  
	  <div class="container">
	<div class="booking_form fixed_all_page">
	<form action="" method="POST" enctype="multipart/form-data">
		<div class="form-group">
		<label>Image</label>
		  <!--<input type="file" name="image" class="form-control" style="width:40%"/>-->
		  <input type="file" class="form-control book_control" style="width:40%" name="image" value="<?php echo $getData["image"]?>" > 
		  <input type="hidden" class="form-control book_control" style="width:40%" name="image" value="<?php echo $getData["image"]?>" required> 
		</div>

	   <div class="form-group">
			 <label>Book Name</label>
			 <input type="text" class="form-control book_control" style="width:40%" name="name" value="<?php echo $getData["name"]?>" required>
	   </div>

	  <div class="form-group">
		<label>Author</label>
		<input type="text" class="form-control book_control" style="width:40%" name="author" value="<?php echo $getData["author"]?>" required>
	  </div>

	<div class="form-group">
		<label>Price</label>
		<input type="text" class="form-control book_control" style="width:40%" name="price" value="<?php echo $getData["price"]?>" required/>
	  </div>
	  <input type="hidden" name="editingID" value="<?php echo $editID;?> "/> 
	    <input type="submit" class="btn btn-success" name="editButton" value="UPDATE DATA"/>
		</form>
		
		</div>
		</div>
	  
	    
	    
	  <?php }}?>
	  
	  <?php
	  
	  
	  if(isset($_REQUEST["editButton"]))
	{
	  require_once("connect.php");
		//$image=$_FILES["image"];
		$filename=$_FILES['image']['name'];
		$filetmp=$_FILES['image']['tmp_name'];
		$folder="book_image/";
		$image_nameForDB=uniqid();
		move_uploaded_file($filetmp,$folder."$image_nameForDB.jpg");
	
		$name=$_REQUEST["name"];
		$author=$_REQUEST["author"];
		$price=$_REQUEST["price"];
		$editingID=$_REQUEST["editingID"];
		$upQuery="UPDATE book_details SET image='$image_nameForDB.jpg',name='$name',author='$author',price='$price' WHERE ID=$editingID ";
		$runQuery=mysqli_query($connect,$upQuery);
	  
	  if($runQuery==true)
	  {
		header("location:admin/book_update.php?edited");
	  }
	}
	?>
	
    
  </body>
</html>