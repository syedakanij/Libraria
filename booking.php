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
		  echo "<font color='green'>Booking is Successful</font>";
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
	<form action="" method="POST">
	<div class="form-group">
    <label>Customer Name</label>
    
      <input type="text" class="form-control book_control" style="width:%" name="customer_name" required>  
  </div>

  <div class="form-group">
         <label>Email</label>
         <input type="email" class="form-control book_control" style="width:%" name="customer_email" 
		 <?php 
			require_once("connect.php");
		if(isset($_REQUEST["booking.php"]))
		{
		$showDataQuery="SELECT customer_email FROM customer_booking WHERE id=2";
		$runDataQuery=mysqli_query($connect,$showDataQuery);
		if($runDataQuery==true)
		{
		 echo 'true';
		}
		else
		{
		  echo 'false';
		}
		}
		 ?>
		 >
   </div>

  

  <div class="form-group">
    <label>Phone Number</label>
    <input type="text" class="form-control book_control" style="width:%" name="customer_phone" required>
      

  </div>

<div class="form-group">
    <label>Address</label>
    <input type="text" class="form-control book_control" style="width:%" name="customer_addr" required/>
  </div>

  <div class="form-group">
    <label class="">Book Name</label>
    <input type="text" class="form-control book_control" style="width:%" name="book_name" required/>
  </div>

  <div class="form-group">
    <label class="">Author</label> 
    <input type="text" class="form-control book_control" style="width:%" name="author" required/>
  </div>
  
    <label class="col-sm-1 col-form-label"></label>
    <div class="col-sm-4">
      <button type="submit" class="btn btn-success">Submit</button>
    </div>
	</form>
	
	</div>
	</div>
	
	<?php 

  require_once("connect.php");
  
  if(isset($_REQUEST["customer_name"]) && ($_REQUEST["customer_email"]) && ($_REQUEST["customer_phone"]) && ($_REQUEST["customer_addr"]) && ($_REQUEST["book_name"]) && ($_REQUEST["author"]))
  {
    $customer_name=$_REQUEST["customer_name"];
    $cemail=$_REQUEST["customer_email"];
    $ccontact=$_REQUEST["customer_phone"];
	$caddr=$_REQUEST["customer_addr"];
	$bname=$_REQUEST["book_name"];
	$author=$_REQUEST["author"];
    //$usr_pwd=$_REQUEST["usr_pwd"];
	
	$insertQuery="INSERT INTO customer_booking (customer_name,customer_email,customer_phone,customer_addr,book_name,author) VALUES ('$customer_name','$cemail','$ccontact','$caddr','$bname','$author')";
	//$insertQuery="INSERT INTO customer_booking (customer_name,customer_email,customer_phone,customer_addr,book_name,author) VALUES ('$fname','$lname','$cname','$dname','$gname','$bname')";
	$runQuery=mysqli_query($connect,$insertQuery);
	
	if($runQuery==true)
	{
	  header("location:booking.php?action=true");
	}
    else
	{
	   header("location:booking.php?action=false");
	}
  }

?>
	

  </body>

</html>

