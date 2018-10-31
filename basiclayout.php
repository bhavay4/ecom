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
			  
			
			
	
