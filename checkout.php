<?php
session_start();
if(!isset($_SESSION['u_id']))
   {
       header("Location: customer/login.php?location=checkout"); #if not log in send to log in page
   }
else{
    include("payment_options.php");
}


?>