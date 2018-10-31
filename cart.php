
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Shopping Cart</title>
	<style>	
		td{
			height: 80px;
			vertical-align:middle;
		}
	</style>

	
</head>
<body>
	
</body>
</html>

<?php 

include("inclues/db.php");
include("basiclayout.php");
$u_ip=get_ip();

	global $con;
   
	?>
   <div id="product_view">
   <form action='cart.php' method='post' enctype='multipart/form-data'>
	   <table  class="table table-striped" cellpadding="10px">
	     <tr>
	      <td></td>
	      <td>Product</td>
		  <td>Quantity</td>
		  <td>Price</td>
		  <td>Remove</td>
		 </tr>
		 <?php
		 	$price=0;
	$cart_r= u_cart_list();
	while($row=mysqli_fetch_array($cart_r))
	{
		$p_id=$row['p_id'];
		$qty=$row['qty'];
		$q="select * from products where product_id='$p_id'";
		$r=mysqli_query($con,$q);
		$rr=mysqli_fetch_array($r);
		$pro_title=$rr['product_title'];
		$pro_image=$rr['product_img1'];
		$price_c=$rr['product_price'];
		$price_ct=$price_c*$qty;//column total
		$price+=$price_ct;//total bill
			echo"
		<tr >
			<td><a href='details.php?pro_id=$p_id'><img src='admin_area/products/$pro_image'  hight='80'width='80'></a></td>
		    <td ><a href='details.php?pro_id=$p_id' style='color:black; text-decoration:none;'>$pro_title</a></td>
		    <td style='width:2;height:2'><SPACER TYPE='block' HEIGHT='1' WIDTH='1'><a href='functions/quantity.inc.php?u_id=$p_id&m=2'><button type='button' class='btn btn-default' name'remove' style='width:2;height:2'>-</button></a> $qty <a href='functions/quantity.inc.php?u_id=$p_id &m=1'><button type='button' class='btn btn-default' name='add' style='width:2;height:2' onclick='qty_increment($u_ip,$p_id)'> + </button></a>
		    </td>
		    <td >$price_ct</td> 
		  <td><input type='checkbox' name='remove[]' value='$p_id'> </td>		
		</tr>
		<tr >
		 
		 
		 ";
		
		
	}	echo" 
	<tr>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		 <tr><td></td>
		 <td></td>

		  <td align='center'>Sub Total</td>
      		  <td>$price</td>
      		  <td></td>
		 </tr>
		 
		 <tr>
		 <td></td>";
		 if($price>0){
		 echo"
		  <td><br /><input type='submit' name='update' value='Update Cart' class='btn btn-default'></td>";
		}
		else{
			echo"<td></td>";
		}
		  echo"
		  <td><br /><input type='submit' name='continue' value='Continue Shopping' class='btn btn-default'></td>";

		  if($price>0){
		  	echo"
		  <td><br /><a type='button' href='checkout.php' style='text-decoration:none' class='btn btn-info'>Checkout</a></td>
		  <td></td>";
		  }
		  else{
		  	echo"
			  <td></td>
			  <td></td>
			 </tr>
		  </table>
	  </form>";
		  }



 

       echo"</table>";

        if(isset($_POST['update']))
        {
            foreach($_POST['remove'] as $remove_id)
            {
                @session_start();
                if(isset($_SESSION['u_uid']))
                {
                $delete="delete from u_cart where  p_id='$remove_id' and u_id='".$_SESSION['u_id']."'";
                }
                else
                {
                    $delete="delete from cart where  p_id='$remove_id' and ip_add='$u_ip'";
                }
                $run= mysqli_query($con,$delete);
                if($run)
                {echo'<script> window.open("cart.php","_self")</script>';}
                    
            }
        }
        
        if(isset($_POST['continue']))
        {
            echo'<script> window.open("index.php","_self")</script>';
        }

echo'</div>';
include('footer.php');           
?>        
       
      