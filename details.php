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
			   <div id="headline"><b>Welcome Gust! <b><b style="color:yellow">CART</b>
			   <span> -Items: -Price:</span>
			   </div>
			
			<div id="product_view">
			
			  <?php
			  
			if (
			isset($_GET['pro_id']))
		{ $pro_id=$_GET['pro_id'];

	echo"<table>";
	 $get_products="select * from products where product_id=$pro_id";
			  $run_product=mysqli_query($con,$get_products);
			  
			  
			  
			  echo"<tr>";	  
			  while($row_product=mysqli_fetch_array($run_product))
			  {
				 $pro_id=$row_product['product_id'];
				 $pro_title=$row_product['product_title'];
				 $pro_cat=$row_product['cat_id'];
				 $pro_brand=$row_product['brand_id'];
				 $pro_desc=$row_product['product_desc'];
				 $pro_price=$row_product['product_price'];
				 $pro_image1=$row_product['product_img1'];
			     $pro_image2=$row_product['product_img2'];
				 $pro_image3=$row_product['product_img3'];
				
				 
			  echo"<th><h2>$pro_title</h2><br />
			       <img style='width:180px;height:150px;border:1px solid #e6e7ea; box-shadow:0px 1px 2px #888888;' src='admin_area/products/$pro_image1' />";
				   if(isset($pro_image2)){echo"<img style='width:180px;height:150px;border:1px solid #e6e7ea; box-shadow:0px 1px 2px #888888;' src='admin_area/products/$pro_image2' />";}
				   if(isset($pro_image2)){echo"<img style='width:180px;height:150px;border:1px solid #e6e7ea; box-shadow:0px 1px 2px #888888;' src='admin_area/products/$pro_image3' />";}
			       echo"<br /><br />
				   <p><h3>Price: ₹ $pro_price</h3></P>
				   <p><h3>Category: "; get_cat_title($pro_cat);echo"</h3></P>
				   <p><h3>Brands: "; get_brand_title($pro_brand);echo"</h3></P>
				   <br /><h2>Product information</h2>
				   <p>$pro_desc</p><br />
				   <a href='http://localhost/ecom/index.php' >Go Back</a>
				   <a href='index.php?add_cart=$pro_id'><button >Add to Cart</a>
				   </h4>
			  </th>";
			   echo" </tr>
		</table>";
		}}
			  ?>
			 </div>
			  
			</div>
		</div>
	</div>
		<footer>
		    <div class="footer">
			</div>
		</footer>
	</div>
</body>
</html>

