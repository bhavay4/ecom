<!doctype html>
<?php
include("basiclayout.php");
@session_start();

?>
 
		
			
			<div id="product_view">
			
			  <?php
			   get_pro();
			  ?>
			 </div>
			 <?php
			 $e=get_ip();
			 
			  cart($e);
			 
			
		include('footer.php');
?>
	



</div>