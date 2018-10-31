<?php
@session_start();
include('../functions/mainfunctions.php');
$cart=u_cart_list();
$check_cart=mysqli_num_rows($cart);
if($check_cart != 0)
{
$invoice_no=mt_rand();
$status='Pending';

$u_id=$_SESSION['u_id'] ;
#$_SESSION['u_first'] 
#$_SESSION['u_last'] 
#$_SESSION['u_email'] 
#$_SESSION['u_country']
#$_SESSION['u_contact']    
$u_uid=$_SESSION['u_uid'];
$d_address=$_SESSION['u_address'];
$total_amount=t_price();
$total_pro=items();
$u_ip=get_ip();
 
    $insert_order = "insert into u_orders(u_id, u_uid, due_amount, invoice_no, total_product, order_date, order_status,u_ip,d_address) values ('$u_id','$u_uid','$total_amount','$invoice_no','$total_pro',NOW(),'$status','$u_ip','$d_address')";

    $run_order = mysqli_query($con, $insert_order); 

    echo "<script>alert('Order successfully submitted, Thanks!')</script>";

$order_id=(int)get_order_id($invoice_no);

$insert_to_pending_orders = "insert into pending_orders (u_id,u_uid, invoice_no, order_id, t_qty, order_status) values ('$u_id','$u_uid','$invoice_no','$order_id','$total_pro','$status')";

$run_pending_order = mysqli_query($con, $insert_to_pending_orders);



   while($row=mysqli_fetch_array($cart))
	{
		$p_id=$row['p_id'];
		$qty=$row['qty'];
        $insert_to_order_details = "insert into order_details (order_id,p_id,qty,date) values ('$order_id','$p_id','$qty',NOW())";

        $run_order_details = mysqli_query($con, $insert_to_order_details);
    }


$empty_cart = "delete from u_cart where $u_id='$u_id'";
$run_empty = mysqli_query($con, $empty_cart); 
header("Location: myorders.php");
}
?>




		
		
		
			
			
			
			
			
			
			
