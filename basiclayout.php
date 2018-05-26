<!doctype html>
<?php
include("inclues/db.php");
include("functions/mainfunctions.php");
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>E_Comm Project</title>
	<style>
	table{
		align:center; 
	width:1000px;
   padding:20px;
  text-align:center;
	}
	
th {
	text-align:center;
	width:200px;
    height: 350px;
}

    
</style>
	<link rel="stylesheet" href="styles/main.css" media="all">
	
</head>
<body> 
	<div class="main_wrap">
		<header>
		 <div id="header_col">
		  <div id="header_wrap">
		     <div class="logo_wrap">
			   <img src="images\logo.jpg" alt="logo" style="float:left">
			
			   <img src="images\ad.jpg" alt="ad" style="float:right">
			  
			 </div>
			</div>
			</div>
	    </header>
		<nav>
		   <div  id="navbar_wrap">
		    <ul id="menu">
		    	<li><a href="http://localhost/ecom/index.php">Home</a></li>
		    	<li><a href="all_products.php">All Products</a></li>
		    	<li><a href="">My Account</a></li>
		    	<li><a href="">Sign Up</a></li>
		    	<li><a href="">Shopping Cart</a></li>
				<li><a href="">Contact Us</a></li>
		    </ul>
			<div>
			   <form method="get" action="index.php" enctype="multipart/form-data" id="form">
			      <input type="text" name="user_query" placeholder="Search a Product,Brand">
				  <input type="submit" name="Search" value="Search">
			   </form>
			</div>
		 
		   </div>
		</nav>
		<div class="content_wrap">
		     <div id="left_sidebar">
			   <div id="sidebar_title">CATEGORIES</div>
				<ul id="col">
                    <?php
                    get_cat();

                    ?>

				</ul>
				<hr>
			  <div id="sidebar_title">BRANDS</div>
				<ul id="col">
					 <?php
                    get_brands();
                    ?>
					
				</ul>
			 </div>
			 
			<div id="right_content">
			<div id="headline"><b>Welcome Gust! <b><a href="cart.php" style="text-decoration:none"><b style="color:yellow">CART</b></a>
			   
			   <span> -Items:<?php $items=items();echo $items;?> -Price:<?php $price=t_price();echo $price;?></span>
			   <?php
			   $ip=get_ip();
			  
			   ?>
			   </div>
			
			<div id="product_view">
				<?php content(); ?>
			
		</div>
	</div>
		<footer>
		    <div class="footer">
			</div>
		</footer>
	</div>
</body>
</html>

