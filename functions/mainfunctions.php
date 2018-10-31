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
				
				 
			  echo"<th>
					  <div class='item' style='margin: 0px auto;'>
					      <img style='width:100%;height:200px; margin: 0px auto;' src='admin_area/products/$pro_image' /><br>
					      <br><h4>$pro_title</h4>
					      <div class='row' style='margin-top:-12px;'>
					      	<div class='col-md-2'>
					      		<h4><b>₹$pro_price</b></h4>
					      	</div>
					      	<div class='col-md-10' style='margin-top:8px; padding-left:25px;'>
					      		<a href='details.php?pro_id=$pro_id' style='text-decoration:none; font-size:12px; color: green;'>View Details</a>
					      	</div>
					      </div><br>
					   
					      		 <a type='button' class='btn btn-success' href='index.php?add_cart=$pro_id' style='width:100%;'>Add to Cart</a>
					      	
					  </div>
				  </th>";
			   if($x%4==0)
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
				
				 
			  echo"<th>
					  <div class='item' style='margin: 0px auto;'>
					      <img style='width:100%;height:200px; margin: 0px auto;' src='admin_area/products/$pro_image' /><br>
					      <br><h4>$pro_title</h4>
					      <div class='row' style='margin-top:-12px;'>
					      	<div class='col-md-2'>
					      		<h4><b>₹$pro_price</b></h4>
					      	</div>
					      	<div class='col-md-10' style='margin-top:8px; padding-left:25px;'>
					      		<a href='details.php?pro_id=$pro_id' style='text-decoration:none; font-size:12px; color: green;'>View Details</a>
					      	</div>
					      </div><br>
					   
					      		 <a type='button' class='btn btn-success' href='index.php?add_cart=$pro_id' style='width:100%;'>Add to Cart</a>
					      	
					  </div>
				  </th>";
			   if($x%4==0)
				 { 
					 echo"</tr><tr>";
				 }
			  }
			echo"</tr>
			  </table>";
}
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
				
				 
			  echo"<th>
					  <div class='item' style='margin: 0px auto;'>
					      <img style='width:100%;height:200px; margin: 0px auto;' src='admin_area/products/$pro_image' /><br>
					      <br><h4>$pro_title</h4>
					      <div class='row' style='margin-top:-12px;'>
					      	<div class='col-md-2'>
					      		<h4><b>₹$pro_price</b></h4>
					      	</div>
					      	<div class='col-md-10' style='margin-top:8px; padding-left:25px;'>
					      		<a href='details.php?pro_id=$pro_id' style='text-decoration:none; font-size:12px; color: green;'>View Details</a>
					      	</div>
					      </div><br>
					   
					      		 <a type='button' class='btn btn-success' href='index.php?add_cart=$pro_id' style='width:100%;'>Add to Cart</a>
					      	
					  </div>
				  </th>";
			   if($x%4==0)
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
</table>";
}}

function get_cat()
{global $con;
	$get_cat="select * from categories";
                    $run_cat= mysqli_query($con,$get_cat);
                    while($row_cat=mysqli_fetch_array($run_cat)){
                        $cat_id=$row_cat['cat_id'];
                        $cat_title=$row_cat["cat_title"];
                        echo"<li><h5><a href='index.php?cat=$cat_id'>$cat_title</a></h5></li>";
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
                        echo"<li><h5><a href='index.php?brand=$brand_id'>$brand_title</a></h5></li>";
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

function get_ip()#returns ip add of user
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

function u_cart_list()#returns list with all values in cart
{
    @session_start();
    global $con;
    if(isset($_SESSION['u_id']))
    {
        $u_uid=$_SESSION['u_uid'];
        $cart_q="select * from u_cart where u_uid='$u_uid'";
        $cart_r=mysqli_query($con,$cart_q);
        return $cart_r;
    }
    else
    {
        $u_ip=get_ip();
        $cart_q="select * from cart where ip_add='$u_ip'";
        $cart_r=mysqli_query($con,$cart_q);
        return $cart_r;
    }
}

function get_product_qty($up_id)#returns qty of particular product from cart
{
    @session_start();
    global $con;
    $ip=get_ip();
    if(isset($_SESSION['u_id']))
        {  
    

        $u_id=$_SESSION['u_id'];
        $q="select qty from u_cart where u_id='$u_id' and p_id='$up_id'";
        $r=mysqli_query($con,$q);
        return $r;
 }
    if(!isset($_SESSION['u_id'])){
        $q="select qty from cart where ip_add='$ip' and p_id='$up_id'";
        $r=mysqli_query($con,$q);
        return $r;
}
}

function cart($p_id)#add product to cart 
{
    $ip=get_ip();
  global $con;
  if(isset($_GET['add_cart']))
  {
      $p_id=$_GET['add_cart'];
      $check_r=get_product_qty($p_id);
      $check_t=mysqli_num_rows($check_r);	
	if($check_t>0)
	{
		qty_increment($p_id);
	}
   else
    {
       @session_start();
       if(isset($_SESSION['u_uid'])){
	       $insert_q="insert into u_cart values('$p_id','$ip',1,'".$_SESSION['u_id']."','".$_SESSION['u_uid']."') ";
        }
       else{
           $insert_q="insert into cart(p_id,ip_add,qty)values('$p_id','$ip',1) ";
       }
    $insert_r=mysqli_query($con,$insert_q);
	echo "<script>window.open('index.php','_self')</script>";

	}
  }
}

function items()#return count of number of product in cart
{
	global $con;
	$items=0;
	$count_r=u_cart_list();
	while($count=mysqli_fetch_array($count_r))
	{
		$item_c=$count['qty'];
		$items+=$item_c;
	}
   return $items;
}


function t_price()#returns total price of products in cart 
{
	global $con;
	$price=0;
	$u_ip=get_ip();
	$price_r= u_cart_list();
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

function pro_id_arr()#array of product id in cart
{
	global $con;
	$items=0;
	$count_r=u_cart_list();
	while($count=mysqli_fetch_array($count_r))
	{
		$item_c=$count['p_id'];
		$items+=$item_c;
	}
   return $items;
}

function qty_increment($up_id)#increase qty of product by 1 unit
{ 
    @session_start();
    global $con;
    $ip= get_ip();
    if(isset($_SESSION['u_id']))
    {
        $u_uid=$_SESSION['u_uid'];
        $update_q="UPDATE u_cart SET qty = qty+1 where u_uid='$u_uid' and p_id='$up_id'"; mysqli_query($con,$update_q);
    }
    else
    {
	   $update_q="UPDATE cart SET qty = qty+1 where ip_add='$ip' and p_id='$up_id'"; mysqli_query($con,$update_q);
    }
	
}

function qty_decrement($up_id)
{ 
    @session_start();
    global $con;
    $ip= get_ip();
    if(isset($_SESSION['u_id']))
    {
        $u_id=$_SESSION['u_id'];
        $update_q="UPDATE u_cart SET qty = qty-1 where u_id='$u_id' and p_id='$up_id'"; mysqli_query($con,$update_q);
    }
    else
    {
	   $update_q="UPDATE cart SET qty = qty-1 where ip_add='$ip' and p_id='$up_id'"; mysqli_query($con,$update_q);
    }
	
}

function gust_info()#to display cart details
{
echo'<div id="headline"><b>Welcome Gust! <b><a href="cart.php" style="text-decoration:none"><b style="color:yellow">CART</b></a>';
			   
			 echo'<span>-Items:';$items=items();echo $items;echo'-Price:';$price=t_price();echo $price;echo'</span>';

}

function update_cart()#pass cart data to U_cart table after login
{
    @session_start();
    
    $ip=get_ip();
    global $con;
    if(isset($_SESSION['u_id']))
    {
        $q1="select * from cart where ip_add='$ip'";
        $r1=mysqli_query($con,$q1);
        $check1=mysqli_num_rows($r1);
        if($check1>0)
        {
            while($row=mysqli_fetch_array($r1))
            {
                $p_id=$row['p_id'];
                $u_ip_add=$row['ip_add'];
                $qty=$row['qty'];
                $u_id=$_SESSION['u_id'];
                $u_uid=$_SESSION['u_uid'];
                $q2="INSERT INTO u_cart VALUES('$p_id','$u_ip_add','$qty','$u_id','$u_uid')";
                $r2=mysqli_query($con,$q2);
                $q3="DELETE FROM cart WHERE ip_add='$ip'";
                $r3=mysqli_query($con,$q3);
            }
        }
    }
}

function get_order_id($invoice_no)
{
     @session_start();
    global $con;
    if(isset($_SESSION['u_id']))
        {  
    
    $u_id=$_SESSION['u_id'];
        $q="select order_id from u_orders where u_id='$u_id' and invoice_no='$invoice_no'";
        $r=mysqli_query($con,$q);
        $order_id=mysqli_fetch_array($r);
        $order_id=$order_id['order_id'];
        return $order_id;
}
}
?>