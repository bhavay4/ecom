<!doctype html>
<?php
@session_start();
include("inclues/db.php");
include("functions/mainfunctions.php");
?>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
	    
		<nav>
		   <div  id="navbar_wrap">
		    <ul id="menu">
		    	<li><a href="http://localhost/ecom/index.php">Home</a></li>
		    	<li><a href="all_products.php">All Products</a></li>
		    	<li>
		    	<a href="customer/myaccount.php">My Account</a>
		    	</li>
		    	<li><a href="customer/signup.php">Sign Up</a></li>
		    	<li><a href="cart.php">Shopping Cart</a></li>
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
		
</header>	 
