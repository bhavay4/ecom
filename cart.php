
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Shopping Cart</title>
	<style>	
tr:nth-child(even) {
background-color: #cccccc;}
	</style>

	
</head>
<body>
	
</body>
</html>

<?php 

include("inclues/db.php");
include("basiclayout.php");
$u_ip=get_ip();
function content()
{
	global $con;
   
	?>
	<form action='cart.php' method='post' enctype='multipart/form-data'>
	   <table   cellpadding="10px" border='2px' >
	     <tr >
		  <td>Remove</td>
		  <td>Product</td>
		  <td>Quantity</td>
		  <td>Total price</td>
		 </tr>
		 <?php
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
		$pro_title=$rr['product_title'];
		$pro_image=$rr['product_img1'];
		$price_c=$rr['product_price'];
		$price_ct=$price_c*$qty;//column total
		$price+=$price_ct;//total bill
			echo"
		<tr >
		  <td rowspan='2'><input type='checkbox' name='remove[]' value='$p_id'> </td>
		  <td >$pro_title</td>
		   <td style='width:2;height:2'><SPACER TYPE='block' HEIGHT='1' WIDTH='1'> $qty <a href='quantity.inc.php?u_id=$p_id &m=1'><button type='button' name='add' style='width:2;height:2' onclick='qty_increment($u_ip,$p_id)'><p > + </p></button></a>
		 </td>
		  <td rowspan='2'>$price_ct</td> 		
		</tr>
		<tr >
		 <td><img src='admin_area/products/$pro_image'  hight='80'width='80'></a></td>
		 <td style='width:2;height:2'><SPACER TYPE='block' HEIGHT='1' WIDTH='1'>&nbsp; <a href='quantity.inc.php?u_id=$p_id&m=2'><button type='button' name'remove' style='width:2;height:2'><p>-</p></button></a></td>
		 ";
		
		
	}	echo" </tr>
		 <tr><td></td>
		 <td></td>
		  <td align='center'>Sub Totle</td>
		  <td>$price</td>
		 </tr>
		 
		 <tr>
		 <td></td>
		  <td><br /><input type='submit' name='update' value='Update Cart'></td>
		  <td><br /><input type='submit' name='continue' value='Continue Shopping'></td>
		  <td><br /><button><a href='checkout.php' style='text-decoration:none'>Checkout</a></button></td>
		 </tr>
	  </table>
  </form>";

}
 

       echo"</table>";

        if(isset($_POST['update']))
        {
            foreach($_POST['remove'] as $remove_id)
            {
                $delete="delete from cart where  p_id='$remove_id' and ip_add='$u_ip'";
                $run= mysqli_query($con,$delete);
                if($run)
                {echo'<script> window.open("cart.php","_self")</script>';}
                    
            }
        }
        
        if(isset($_POST['continue']))
        {
            echo'<script> window.open("index.php","_self")</script>';
        }
?>        
       
      