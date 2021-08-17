
<!DOCTYPE html>
	<html>
	<?php
		require_once('pages/head.php');
	?>
	<body>
	<!-- ====================Header=======================  -->
	<?php
		require_once('pages/header.php');
	?>	
	<!-- ===========Scroll button================ -->
		<a href="#" class="scrollToTop"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
	<!-- =========================Banner=================== -->
	<section class="banner-section owl-carousel owl-theme fix" >
		<div class="banner_item1 fix" style="margin-top:px">
			<p class="animated wow slideInLeft" data-wow-duration="1.5s">You only have to know one thing</p>
			<h2 class="animated wow slideInRight" data-wow-duration="1.5s">You can learn anything</h2>
			<a href="" class="animated wow bounceInDown">SEE MORE</a>
		</div>
		<div class="banner_item2 fix" style="margin-top:px">
			<p class="animated wow slideInLeft">We can help get your</p>
			<h2 class="animated wow slideInRight">Books  in order</h2>
			<a href="" >SEE MORE</a> 
		</div>
		<div class="banner_item3 fix" style="margin-top:px">
			<p class="animated wow slideInLeft">Are you searching a book...?</p>
			<h2 class="animated wow slideInRight">Biggest Library</h2>
			<a href="">SEE MORE</a>
		</div>
	</section>
	<!-- ====================Service======================== -->
	<section class="service_back fix">
		<div class="service main fix">
		<?php 
	  
	    require_once("connect.php");
		
		$showDataQuery="SELECT * FROM book_type_top";
		$runDataQuery=mysqli_query($connect,$showDataQuery);
		
		if($runDataQuery==true)
		{
		  while($mydata = mysqli_fetch_array($runDataQuery))
          {?>
			<article class="service_heading">
			
				<h2><?php echo $mydata["title"]?></h2>
				<p><?php echo $mydata["subtitle"]?></p>
			</article>
			 <?php }} ?>
			<?php 
	  
		$showDataQuery="SELECT * FROM book_type_bottom";
		$runDataQuery=mysqli_query($connect,$showDataQuery);
		
		if($runDataQuery==true)
		{
		  while($mydata = mysqli_fetch_array($runDataQuery))
          {?>
			<article class="single_service fix animated wow slideInUp">
				<i class="fa fa-book" aria-hidden="true"></i>
				<h2><?php echo $mydata["title"]?></h2>
				<p><?php echo $mydata["description"]?></p>
				<a href="">Read More</a>
			</article>
			<?php }} ?>
			
		</div>
	</section>
	<!--<section class="service_back fix">
		<div class="service main fix">
			<article class="service_heading">
				<h2>WELCOME TO THE LIBRARY</h2>
				<p>Welcome to the Most Popular Library Today</p>
			</article>
			<article class="single_service fix animated wow slideInUp">
				<i class="fa fa-book" aria-hidden="true"></i>
				<h2>EBOOKS</h2>
				<p>an electronic version of a printed book that can be read on a computer.</p>
				<a href="">Read More</a>
			</article>
			<article class="single_service fix animated wow slideInUp">
				<i class="fa fa-file-audio-o" aria-hidden="true"></i>
				<h2>AUDIOBOOKS</h2>
				<p>an audiocassette or CD recording of a reading of a book, typically a novel.</p>
				<a href="">Read More</a>
			</article>
			<article class="single_service fix animated wow slideInUp">
				<i class="fa fa-th-large" aria-hidden="true"></i>
				<h2>MAGAZINE</h2>
				<p>a periodical publication containing articles and illustrations information.</p>
				<a href="">Read More</a>
			</article>
			<article class="single_service fix animated wow slideInUp">
				<i class="fa fa-gg" aria-hidden="true"></i>
				<h2>TEANS & KIDS</h2>
				<p>the years of a person's age from 13 to 19 and are the kids and <br/>teens.</p>
				<a href="">Read More</a>
			</article>
		</div>
	</section> -->
	<!-- ===============Best Seller Books=================== -->
	<section class="best_seller_back fix">
		<div class="best_seller main fix">
		<?php 
	  
		$showDataQuery="SELECT * FROM best_selling_top";
		$runDataQuery=mysqli_query($connect,$showDataQuery);
		
		if($runDataQuery==true)
		{
		  while($mydata = mysqli_fetch_array($runDataQuery))
          {?>
			<article class="books_heading">
				<h2><?php echo $mydata["title"]?></h2>
				<p><?php echo $mydata["subtitle"]?></p>
			</article>
			<?php }} ?>
			
			<?php 
	  	    
	  $selectInfo="SELECT * FROM best_selling_bottom";
	  $runInfo=mysqli_query($connect,$selectInfo);
	  
	  while($getData=mysqli_fetch_array($runInfo))
	  { ?>
			<article class="books fix">
				<?php echo '<img alt="image" src="data:image;base64,'.base64_encode($getData['image']).' "/>'; ?>
				<h3><?php echo $getData["name"]?></h3>
				<h4><?php echo $getData["author"]?></h4>
				<p>Price: <?php echo $getData["price"]?></p>
			</article>
			<?php } ?>
			
		</div>
		</section>
	<!--<section class="best_seller_back fix">
		<div class="best_seller main fix">
			<article class="books_heading">
				<h2>BEST SELLER BOOKS</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
			</article>
			<article class="books fix">
				<img src="img/best1.jpg" alt=""/>
				<h3>The Desabled Workforce</h3>
				<h4>Racel Shaw</h4>
				<p>Price: Tk 1150</p>
			</article>
			<article class="books">
				<img src="img/best2.jpg" alt=""/>
				<h3>Quareia Adept</h3>
				<h4>Josephine Mccarthy</h4>
				<p>Price: Tk 1270</p>
			</article>
			<article class="books">
				<img src="img/best3.jpg" alt=""/>
				<h3>The Winter Travelers</h3>
				<h4>Don j. Sydar</h4>
				<p>Price: Tk 770</p>
			</article>
			<article class="books">
				<img src="img/best4.jpg" alt=""/>
				<h3>Disney</h3>
				<h4>Helly Corb</h4>
				<p>Price: Tk 800</p>
			</article>
		</div>
		</section>-->
	
	<!-- ====================Team======================== -->
	<section class="team_background fix">
		<div class="team main fix wow animated bounce">
		<?php 
	  
		$showDataQuery="SELECT * FROM team_top";
		$runDataQuery=mysqli_query($connect,$showDataQuery);
		
		if($runDataQuery==true)
		{
		  while($mydata = mysqli_fetch_array($runDataQuery))
          {?>
			<article class="team_heading fix">
				<h2><?php echo $mydata["title"]?></h2>
				<p><?php echo $mydata["subtitle"]?></p>
			</article>
			<?php }} ?>
			
			<?php 
	  
		$showDataQuery="SELECT * FROM team_bottom";
		$runDataQuery=mysqli_query($connect,$showDataQuery);
		
		if($runDataQuery==true)
		{
		  while($mydata = mysqli_fetch_array($runDataQuery))
          {?>
			<article class="team_item fix">
				<?php echo '<img alt="image" src="data:image;base64,'.base64_encode($mydata['image']).' "/>' ?>
			</article>
			<article class="team_item fix">
				<h3><?php echo $mydata["name"]?></h3>
				<h5><?php echo $mydata["position"]?></h5>
				<i class="fa fa-linkedin" aria-hidden="true"></i>
				<i class="fa fa-facebook" aria-hidden="true"></i>
				<i class="fa fa-twitter" aria-hidden="true"></i>
				<i class="fa fa-skype" aria-hidden="true"></i>
				<p><?php echo $mydata["description"]?></p>
				<a href="">READ MORE</a>
			</article>
			<?php }} ?>
			
		</div>
	</section>
	
	
	<!-- ===================Footer================ -->
	<?php
		require_once('pages/footer.php');
	?>
	</body>
</html>