<?php

include("mainfunctions.php");
if(isset($_GET['m']))
{
    echo'<script>alert("c");</script>';
    $m=$_GET['m'];
if(isset($_GET['u_id']))
{
    $up_id=$_GET['u_id'];

    if($m==1)
    {
    qty_increment($up_id);
	header("Location: ../cart.php");
    }
    if($m==2)
    {
        
        $r=get_product_qty($up_id);       
        $rr=mysqli_fetch_array($r);
		$qty=$rr['qty']; 
        if($qty>1)
        {        
	   qty_decrement($up_id);
        }    
        }
       
	
}
header("Location: ../cart.php");

}

?>