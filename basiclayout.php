<!doctype html>
<?php
@session_start();
include("header.php");
?>
	<div class="content_wrap">
		     <div id="left_sidebar">
			   <div id="sidebar_title">CATEGORIES</div>
				<ul id="col">
                    <?php
                    get_cat();

                    ?>

				</ul>
				<hr>
			  <div id="sidebar_title">BRANDS</div>
				<ul id="col">
					 <?php
                    get_brands();
                    ?>
					
				</ul>
			 </div>
			 
			<div id="right_content">
			<?php if(isset($_SESSION['u_uid'])){
    $u_uid=$_SESSION['u_uid'];
    echo'<div id="headline"><b>Welcome '.$u_uid.' <b>';
}else{
    echo'<div id="headline"><b>Welcome Gust! <b>';
}  ?><a href="cart.php" style="text-decoration:none"><b style="color:yellow">CART</b></a>
			   
			   <span> -Items:<?php $items=items();echo $items;?> -Price:<?php $price=t_price();echo $price;?></span>
			   <?php 
                   if(isset($_SESSION['u_id']))
                   {

			   echo'<a href="customer/includes/logout.inc.php?u_id=$_SESSION["u_id"]">Logout</a>';
                   }
                   else{
                        echo'<a href="customer/login.php?location=index">Login</a>';
                   }
                ?>
			   <?php
			   $ip=get_ip();
			  
			   ?>
			   </div>
			
			
	
