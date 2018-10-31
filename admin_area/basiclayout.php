<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="UTF-8">
	<title>E_Comm Project</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" href="../styles/style2.css">
  	<!-- fonts -->
  	<link href="https://fonts.googleapis.com/css?family=Raleway:300" rel="stylesheet">
  	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<style>
	table{
	width:100%;
   	padding:20px;
  	text-align:center;
	}
	
	th {
		width:200px;
	    height: 350px;
	    margin: 0px auto;
	    padding: 40px;
	    border: 1px solid #DBDBDB;
	}

    
</style>
	
	
</head>
<body> 
	<div class="main_wrap">
<header>
		 

   <div class="cus_header">
   		<div class="container">
   			<div class="row">
   				<div class="col-md-2">
   					<img style="margin-top:-15px;" width="150px" height="100p" src="../images/logo.png"/>
   				</div>
   				<div class="col-md-8">
   					<div class="search_div">
   						<form method="get" action="index.php" style="border:none; margin-top:-5px;" enctype="multipart/form-data" id="form">
				      		<input type="text" id="search_bar" name="user_query" placeholder="Search for products, brands and more">
					  		<button type="submit" style="font-size:8px; background-color:#fff;" name="Search" value="Search" class="btn">
							    <span class="glyphicon glyphicon-search"></span>
							 </button>
					  	</form>
   					</div>
   				</div>
   				<div class="col-md-2">
   					<div class="right_btn_grp">
   						<?php 
		                   if(isset($_SESSION['u_id']))
		                   {
					   			echo'<a type="buttton" class="btn" style="background-color:#6A1B9A; color:#fff;" href="customer/includes/logout.inc.php?u_id=$_SESSION["u_id"]">Logout</a>';
		                   }
		                   else{
		                        echo'<a type="buttton" class="btn" style="background-color:#6A1B9A; color:#fff;" href="customer/login.php?location=index">Log in</a>';
		                   }
		                ?>
   					<!-- 	<a type="buttton" class="btn btn-info" href="customer/login.php?location=index">Log in</a> -->
   					</div>
   				</div>
   			</div>
   		</div>

   		<div class="cus_header_sub">
	   		<div class="container">
	   			<div class="row" style="margin-top:16px;">
	   				<div class="col-md-6">
			   			<nav>
						    <ul class="nav_list">
						      <li><a href="http://localhost/ecom/index.php">Home</a></li>
						      <li><a href="all_products.php">All Products</a></li>
						      <li><a href="contact.php">Contact Us</a></li>
						    </ul>
						</nav>
					</div>
					<div class="col-md-6">
						<nav>
						    <ul class="nav_list" style="float:right;">
						    	<div class="row">
						    		<div class="col-md-7">
						    			<li><a href="cart.php">Shopping Cart</a></li>
						    		</div>
						    		<div class="col-md-5">
						    			<li>
								    		<div class="dropdown">
										    <button class="btn dropdown-toggle" type="button" data-toggle="dropdown" style="margin-top:-8px;">My Account
										    <span class="caret"></span></button>
										    <ul class="dropdown-menu">
										    	<?php 
		                   if(isset($_SESSION['u_id']))
		                   {
					   			echo'
					   				<li><a href="myorders.php">My Orders</a></li>
									<li><a href="edit_account.php">Edit Account</a></li>
				                    <li><a href="changePassword.php">Change Password</a></li>
				                    <li><a href="delete_account.php">Delete Account</a></li>
				                    <li><a href="customer/includes/logout.inc.php?u_id=$_SESSION["u_id"]">Logout</a></li>
					   			';
		                   }
		                   else{
		                        echo'<li><a href="customer/login.php?location=index">Login</a></li>';
		                   }
		                ?>
										    </ul>
										    </div>
								    	</li>
						    		</div>
						    	</div>
						    </ul>
						</nav>
					</div>
				</div>
	   		</div>
	   	</div>

   </div>


		
</header>	 
			
		 </body>