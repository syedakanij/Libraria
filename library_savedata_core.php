<html>
<header>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
  <link rel="stylesheet" type="text/css" href="css/style.css"/>
</header>
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
	  header("location:admin.php?action=true");
	}
    else
	{
	   header("location:admin.php?action=false");
	}
  }
  ///----------BOOK DETAILS INSERTION------------///
  
  if(isset($_REQUEST["image"]) && ($_REQUEST["name"]) && ($_REQUEST["author"]) && ($_REQUEST["price"]) )
  {
    $image=$_FILES["image"];
    $name=$_REQUEST["name"];
    $author=$_REQUEST["author"];
	$price=$_REQUEST["price"];
	
	$insertQuery="INSERT INTO book_details (image,name,author,price) VALUES ('$image','$name','$author','$price')";
	//$insertQuery="INSERT INTO customer_booking (customer_name,customer_email,customer_phone,customer_addr,book_name,author) VALUES ('$fname','$lname','$cname','$dname','$gname','$bname')";
	$runQuery=mysqli_query($connect,$insertQuery);

?>
</html>