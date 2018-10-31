<!doctype html>
<?php
include("basiclayout.php");


?>
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
			       <img style='width:180px;height:150px;border:1px solid #e6e7ea;' src='admin_area/products/$pro_image1' />";
				   if(isset($pro_image2)){echo"<img style='width:180px;height:150px;border:1px solid #e6e7ea;' src='admin_area/products/$pro_image2' />";}
				   if(isset($pro_image2)){echo"<img style='width:180px;height:150px;border:1px solid #e6e7ea;' src='admin_area/products/$pro_image3' />";}
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
			include('footer.php');
                ?>
			 
	</div>

