<!DOCTYPE html>

<html>

  <body>
  <header>
	<link rel="stylesheet" type="text/css" href="css/grid.css"/>
	<link rel="stylesheet" type="text/css" href="css/style.css"-/>
  </header>
  <?php
    include_once('pages/header.php');
  ?>
    
	<section class="books_back fix">
		<div class="new_books main fix">
	<?php 
	
	  require_once("connect.php");
	  	  
	  $selectInfo="SELECT * FROM book_details";
	  $runInfo=mysqli_query($connect,$selectInfo);
	  
	  while($getData=mysqli_fetch_array($runInfo))
	  { ?>
	    
			<div class=" single_book">
				<img width="" src="book_image/<?php echo $getData["image"]?>"/>
				<h3><?php echo $getData["name"]?></h3>
				<h4><?php echo $getData["author"]?></h4>
				<p><?php echo $getData["price"]?></p>
				<a href="booking.php">Order</a>
			</div> 
		
	  <?php } ?>
	  </div>
		</section>
		<?php
		  include_once('footer.php');
		?>

	  
  </body>

</html>
	

