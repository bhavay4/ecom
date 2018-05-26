<?php
include("inclues/db.php");
include("functions/mainfunctions.php");
if(isset($_GET['m']));
{
    $m=$_GET['m'];
    if($m==1)
    {
if(isset($_GET['u_id']));
{
    $u_id=$_GET['u_id'];
}
    $ip=get_ip();
  global $con;
	$update_q="UPDATE cart SET qty = qty+1 where ip_add='$ip' and p_id='$u_id'";
		mysqli_query($con,$update_q);
	header("Location: cart.php");
    }
    if($m==2)
    {
if(isset($_GET['u_id']));
{
    $u_id=$_GET['u_id'];
}
  $ip=get_ip();
  global $con;
        $q="select qty from cart where ip_add='$ip' and p_id='$u_id'";
        $r=mysqli_query($con,$q);
        $rr=mysqli_fetch_array($r);
		$qty=$rr['qty'];
        if($qty>1)
        {
	$update_q="UPDATE cart SET qty = qty-1 where ip_add='$ip' and p_id='$u_id'";
		mysqli_query($con,$update_q);
        }
	header("Location: cart.php");
    }
    }
?>