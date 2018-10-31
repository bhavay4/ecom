<?php
@session_start();
include("../basiclayout.php");

if(!empty($_SESSION['$u_id']))
{
    header("Location:login.php?location=customer/myaccount");
}
?>
                   

                   
                    <li><a href="myorders.php">My Orders</a></li>
                    <li><a href="edit_account.php">Edit Account</a></li>
                    <li><a href="changePassword.php">Change Password</a></li>
                    <li><a href="delete_account.php">Delete Account</a></li>
                    <li><a href="includes/logout.inc.php?u_id=$_SESSION['u_id']">Logout</a></li>