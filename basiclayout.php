<!doctype html>
<?php
@session_start();
include("header.php");
?>
	<div class="content_wrap">
		     <div id="left_sidebar">
			   <h5 style="padding: 15px 24px;"><b>CATEGORIES</b></h5>
				<ul class="col">
                    <?php
                    get_cat();

                    ?>

				</ul>
				<br><hr>
			  <h5 style="padding: 15px 24px;"><b>BRANDS</b></h5>
				<ul class="col">
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
    echo'<div id="headline"><b>Welcome Guest! <b>';
}  ?><a href="cart.php" style="text-decoration:none"><b>CART</b></a>
			   
			   <span> -Items:<?php $items=items();echo $items;?> -Price:<?php $price=t_price();echo $price;?></span>
			   
			   <?php
			   $ip=get_ip();
			  
			   ?>
			   </div>
			
			
	
