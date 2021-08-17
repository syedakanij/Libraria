<!DOCTYPE html>

<html>

  <body>
  <header>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
  </header>
    <?php 

	  if(isset($_REQUEST["action"]))
	  {
	    if($_REQUEST["action"]=='true')
		{
		  echo "<font color='green'>Data inserted</font>";
		}
		else
		{
		  echo "<font color='red'>Data could not be inserted</font>";
		}
	  }
	?>
	
	<!--<form action="library_savedata_core.php" method="POST">
    <input type="text" name="customer_name" placeholder="fname"/>
	<input type="email" name="customer_email" placeholder="lname"/>
	<input type="text" name="customer_phone" placeholder="lname"/>
	<input type="text" name="customer_addr" placeholder="email"/>
	<input type="text" name="book_name" placeholder="email"/>
	<input type="text" name="author" placeholder="email"/>
	<input type="submit" name="submit" value="SAVE DATA"/>
	</form>
	</br></br>-->
    <div class="container">
	<div class="booking_form fixed_all_page">
	<form action="" method="POST" enctype="multipart/form-data">
	<div class="form-group">
    <label>Image</label>
    
      <input type="file" class="form-control book_control" style="width:" name="image" required>  
	</div>

   <div class="form-group">
         <label>Book Name</label>
         <input type="text" class="form-control book_control" style="width:" name="name" required>
   </div>

  <div class="form-group">
    <label>Author</label>
    <input type="text" class="form-control book_control" style="width:" name="author" required>
  </div>

<div class="form-group">
    <label>Price</label>
    <input type="text" class="form-control book_control" style="width:" name="price" required/>
  </div>
    <div class="col-sm-4">
      <button type="submit" class="btn btn-success">Submit</button>
    </div>
	</form>
	
	</div>
	</div>
	
	<?php 

  require_once("connect.php");
  
  if(isset ($_FILES["image"]) && ($_REQUEST["name"]) && ($_REQUEST["author"]) && ($_REQUEST["price"]))
  {  
    $filename=$_FILES['image']['name'];
    $filetmp=$_FILES['image']['tmp_name'];
	$folder="book_image/";
	$image_nameForDB=uniqid();
	//$_FILES["image"];
	move_uploaded_file($filetmp,$folder."$image_nameForDB.jpg");
	
    $name=$_REQUEST["name"];
    $author=$_REQUEST["author"];
	$price=$_REQUEST["price"];
	
	$insertQuery="INSERT INTO book_details (image,name,author,price) VALUES ('$image_nameForDB.jpg','$name','$author','$price')";
	//$insertQuery="INSERT INTO customer_booking (customer_name,customer_email,customer_phone,customer_addr,book_name,author) VALUES ('$fname','$lname','$cname','$dname','$gname','$bname')";
	$runQuery=mysqli_query($connect,$insertQuery);
	
	if($runQuery==true)
	{
	  header("location:book_details_add.php?action=true");
	}
    else
	{
	   header("location:book_details_add.php?action=false");
	}
  }
  

?>
	

  </body>

</html>

