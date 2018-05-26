<?php
$con=mysqli_connect("localhost","root","","e_comm");

function get_pro()
{ 

$con_db=mysqli_connect("localhost","root","","e_comm");
    if(!isset($_GET['cat'])&&!isset($_GET['Search']))
	{
			if (!isset($_GET['brand']))
		{echo"<table>";
	 $get_products="select * from products order by rand() LIMIT 0,6";
			  $run_product=mysqli_query($con_db,$get_products);
			  
			  $x=0;
			  
			  echo"<tr>";	  
			  while($row_product=mysqli_fetch_array($run_product))
			  {
				 $pro_id=$row_product['product_id'];
				 $pro_title=$row_product['product_title'];
				 $pro_cat=$row_product['cat_id'];
				 $pro_brand=$row_product['brand_id'];
				 $pro_desc=$row_product['product_desc'];
				 $pro_price=$row_product['product_price'];
				 $pro_image=$row_product['product_img1'];
				 $x+=1;
				
				 
			  echo"<th><h3>$pro_title</h3><img style='width:180px;height:150px;border:1px solid #e6e7ea; box-shadow:0px 1px 2px #888888;' src='admin_area/products/$pro_image' />
			      <br /><br />
				  <p><h4>Price: $pro_price</h4></P>
				  <h4>
				  <a href='details.php?pro_id=$pro_id' >Details</a>
				   <a href='index.php?add_cart=$pro_id'><button >Add to Cart</a>
				   </h4>
			  </th>";
			   if($x%3==0)
				 { 
					 echo"</tr><tr>";
				 }
			  }
			echo" </tr>
			  </table>";
}}
if(isset ($_GET['cat']))
{$cat=$_GET['cat'];
	echo"<table>";
	 $get_products="select * from products where cat_id=$cat";
			  $run_product=mysqli_query($con_db,$get_products);
			  
			  $x=0;
			  
			  echo"<tr>";	  
			  while($row_product=mysqli_fetch_array($run_product))
			  {
				 $pro_id=$row_product['product_id'];
				 $pro_title=$row_product['product_title'];
				 $pro_cat=$row_product['cat_id'];
				 $pro_brand=$row_product['brand_id'];
				 $pro_desc=$row_product['product_desc'];
				 $pro_price=$row_product['product_price'];
				 $pro_image=$row_product['product_img1'];
				 $x+=1;
				
				 
			  echo"<th><h3>$pro_title</h3><img style='width:180px;height:150px;border:1px solid #e6e7ea; box-shadow:0px 1px 2px #888888;' src='admin_area/products/$pro_image' />
			      <br /><br />
				  <p><h4>Price: $pro_price</h4></P>
				  <h4>
				  <a href='details.php?pro_id=$pro_id' >Details</a>
				   <a href='index.php?add_cart=$pro_id'><button >Add to Cart</a>
				   </h4>
			  </th>";
			   if($x%3==0)
				 { 
					 echo"</tr><tr>";
				 }
			  }
			echo"</tr>
			  </table>";
}}
if(isset ($_GET['brand']))
{$brand=$_GET['brand'];
	echo"<table>";
	 $get_products="select * from products where brand_id=$brand";
			  $run_product=mysqli_query($con_db,$get_products);
			  
			  $x=0;
			  
			  echo"<tr>";	  
			  while($row_product=mysqli_fetch_array($run_product))
			  {
				 $pro_id=$row_product['product_id'];
				 $pro_title=$row_product['product_title'];
				 $pro_cat=$row_product['cat_id'];
				 $pro_brand=$row_product['brand_id'];
				 $pro_desc=$row_product['product_desc'];
				 $pro_price=$row_product['product_price'];
				 $pro_image=$row_product['product_img1'];
				 $x+=1;
				
				 
			  echo"<th><h3>$pro_title</h3><img style='width:180px;height:150px;border:1px solid #e6e7ea; box-shadow:0px 1px 2px #888888;' src='admin_area/products/$pro_image' />
			      <br /><br />
				  <p><h4>Price: $pro_price</h4></P>
				  <h4>
				  <a href='details.php?pro_id=$pro_id' >Details</a>
				   <a href='index.php?add_cart=$pro_id'><button >Add to Cart</a>
				   </h4>
			  </th>";
			   if($x%3==0)
				 { 
					 echo"</tr><tr>";
				 }
			  }
			echo"</tr>
			  </table>";
}
if(isset($_GET['Search']))
{
	$user_query=$_GET['user_query'];
	echo"<table>";
	 $get_products="select * from products where product_keywords like '$user_query'";
			  $run_product=mysqli_query($con_db,$get_products);
			  
			  $x=0;
			  
			  echo"<tr>";	  
			  while($row_product=mysqli_fetch_array($run_product))
			  {
				 $pro_id=$row_product['product_id'];
				 $pro_title=$row_product['product_title'];
				 $pro_cat=$row_product['cat_id'];
				 $pro_brand=$row_product['brand_id'];
				 $pro_desc=$row_product['product_desc'];
				 $pro_price=$row_product['product_price'];
				 $pro_image=$row_product['product_img1'];
				 $x+=1;
				
				 
			  echo"<th><h3>$pro_title</h3><img style='width:180px;height:150px;border:1px solid #e6e7ea; box-shadow:0px 1px 2px #888888;' src='admin_area/products/$pro_image' />
			      <br /><br />
				  <p><h4>Price: $pro_price</h4></P>
				  <h4>
				  <a href='details.php?pro_id=pro_id' >Details</a>
				   <a href='index.php?add_cart=$pro_id'><button >Add to Cart</a>
				   </h4>
			  </th>";
			   if($x%3==0)
				 { 
					 echo"</tr><tr>";
				 }
			  }
			echo" </tr>
</table>";}



function get_cat()
{global $con;
	$get_cat="select * from categories";
                    $run_cat= mysqli_query($con,$get_cat);
                    while($row_cat=mysqli_fetch_array($run_cat)){
                        $cat_id=$row_cat['cat_id'];
                        $cat_title=$row_cat["cat_title"];
                        echo"<li><a href='index.php?cat=$cat_id'>$cat_title</a></li>";
                    }
}


function get_brands()
{
	global $con;
$get_brand="select * from brands";
                    $run_brand= mysqli_query($con,$get_brand);
                    while($row_brand=mysqli_fetch_array($run_brand)){
                        $brand_id=$row_brand['brand_id'];
                        $brand_title=$row_brand["brand_title"];
                        echo"<li><a href='index.php?brand=$brand_id'>$brand_title</a></li>";
                    }

}

function get_cat_title($x)
{global $con;
	$get_cat_title="select * from categories";
                    $run_cat_title= mysqli_query($con,$get_cat_title);
                    while($row_cat_title=mysqli_fetch_array($run_cat_title)){
                        $cat_id=$row_cat_title['cat_id'];
                        $cat_title=$row_cat_title["cat_title"];
                       if($cat_id==$x){ echo"<a href='index.php?cat=$cat_id'>$cat_title</a>";
                    }}
}


function get_brand_title($z)
{global $con;
	$get_brand_title="select * from brands";
                    $run_brand_title= mysqli_query($con,$get_brand_title);
                    while($row_brand_title=mysqli_fetch_array($run_brand_title)){
                        $brand_id=$row_brand_title['brand_id'];
                        $brand_title=$row_brand_title["brand_title"];
                       if($brand_id==$z){ echo"<a href='index.php?brand=$brand_id'>$brand_title</a>";
                    }}
}

function get_ip()
{global $con;
	if (!empty($_SERVER["HTTP_CLIENT_IP"]))
{
 //check for ip from share internet
 $ip = $_SERVER["HTTP_CLIENT_IP"];
}
elseif (!empty($_SERVER["HTTP_X_FORWARDED_FOR"]))
{
 // Check for the Proxy User
 $ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
}
else
{
 $ip = $_SERVER["REMOTE_ADDR"];
}
return $ip;
}



function cart($u_ip)
{  
  global $con;
  if(isset($_GET['add_cart']))
  {
		
		$up_id=$_GET['add_cart'];
	
	$check_q="select * from cart where ip_add='$u_ip' and p_id='$up_id'";
	$check_r=mysqli_query($con,$check_q);
	$check_t=mysqli_num_rows($check_r);
	if($check_t>0)
	{
		qty_increment($u_ip,$up_id);
	}
   else
    {
	$insert_q="insert into cart(p_id,ip_add,qty)values('$up_id','$u_ip',1) ";
	$insert_r=mysqli_query($con,$insert_q);
	echo "<script>window.open('index.php','_self')</script>";

	}
  }
}

function items()
{
	global $con;
	$items=0;
	$u_ip=get_ip();
	$count_q="select * from cart where ip_add='$u_ip'";
	$count_r=mysqli_query($con,$count_q);
	while($count=mysqli_fetch_array($count_r))
	{
		$item_c=$count['qty'];
		$items+=$item_c;
	}
   return $items;
}
function t_price()
{
	global $con;
	$price=0;
	$u_ip=get_ip();
	$price_q="select * from cart where ip_add='$u_ip'";
	$price_r=mysqli_query($con,$price_q);
	while($row=mysqli_fetch_array($price_r))
	{
		$p_id=$row['p_id'];
		$qty=$row['qty'];
		$q="select * from products where product_id='$p_id'";
		$r=mysqli_query($con,$q);
		$rr=mysqli_fetch_array($r);
		
		$price_c=$rr['product_price'];
		$price+=($price_c*$qty);
		
	}
   return $price;
}
function qty_increment($up_id)
{ 
    $ip=get_ip();
  global $con;
	$update_q="UPDATE cart SET qty = qty+1 where ip_add='$ip' and p_id='$up_id'";
		mysqli_query($con,$update_q);
	
}
function qty_decrement($up_id)
{ 
   $ip=get_ip();
  global $con;
	$update_q="UPDATE cart SET qty = qty-1 where ip_add='$ip' and p_id='$up_id' and qty>0";
		mysqli_query($con,$update_q);
	
}


?>