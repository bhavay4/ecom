
<?php
include("includes/db.php");

include("basiclayout.php")

?>

<!doctype html>
<html lang="en">
<head>
 <script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
						
	<meta charset="UTF-8">
	<title>Product management</title>
	<link rel="stylesheet" href="styles/main.css" media="all">
<style>	
tr:nth-child(even) {
background-color: #cccccc;}
	</style>
</head>
<body>
	<form method="POST" action="product_insert.php" enctype="multipart/form-data" >
	   <table width="700"  style="align:center">
	     <tr>
	     	<td colspan="2" align="center">
	     		<h2>Insert New Product</h2>
	     	</td>
	     </tr>
	     <tr>
		     <td align="right"></td>
	     	<td>
	     		<input type="text" name="product_title" placeholder="Product Title">
	     	</td>
	     </tr>
		 <tr>
		 
		 	<td align="right"></td>
			<td>
			
			<select name="product_cat" >
			  <option value="">Select a Category</option>
			  <?php
			     $get_cat="select * from categories";
                    $run_cat= mysqli_query($con,$get_cat);
                    while($row_cat=mysqli_fetch_array($run_cat)){
                        $cat_id=$row_cat['cat_id'];
                        $cat_title=$row_cat["cat_title"];
					echo"<option value='$cat_id'>$cat_title</option>";}
			  
			  ?>
			</select>
			</td>
		 </tr>
		 <tr>
		 <td align="right"></td>
		 	<td>
			  <select name="product_brand" >
			    <option >Select a Brand</option>
			      <?php
                    $get_brand="select * from brands";
                    $run_brand= mysqli_query($con,$get_brand);
                    while($row_brand=mysqli_fetch_array($run_brand)){
                        $brand_id=$row_brand['brand_id'];
                        $brand_title=$row_brand["brand_title"];
					echo"<option value='$brand_id'>$brand_title</option>";}
			    ?>		
			  </select>
			
			</td>
		 </tr>
		 <tr>
		 	<td >Product image 1</td>
			<td><input type="file" name="product_img1"></td>
			
		 </tr>
		 <tr>
		 	<td >Product image 2</td>
			<td><input type="file" name="product_img2"></td>
		 </tr>
		 <tr>
		 	<td >Product image 3</td>
			<td><input type="file" name="product_img3"></td>
		 </tr>
		 <tr>
		 	<td align="right"></td>
			<td><input type="text" name="product_price" placeholder="Product Price"></td>
		 </tr>
		 
		 <tr>
		 	<td ></td>
			<td><input type="text" name="product_keyword" placeholder="Product Keyword"></td>
		 </tr>
		 <tr>
		 	<td >Product desc</td>
			<td><textarea name="desc" cols="50" rows="10" ></textarea></td>
		 </tr>
		 <tr  align="center">
		 	<td colspan="2"><input type="submit" name="add_product"></td>
		 </tr>
	   
	   </table>
	
	</form>
</body>
</html>
<?php
if(isset($_POST['product_brand']))
{$product_brand=$_POST['product_brand'];
echo $product_brand;}
if(isset($_POST['add_product']))
{
	$product_title=$_POST['product_title'];
	$product_brand=$_POST['product_brand'];
	$product_price=$_POST['product_price'];
	$desc=$_POST['desc'];
	$product_keyword=$_POST['product_keyword'];
	$product_cat=$_POST['product_cat'];
	
	//image
	$product_img1=$_FILES['product_img1']['name'];
	$product_img2=$_FILES['product_img2']['name'];
	$product_img3=$_FILES['product_img3']['name'];
	//temp image name
	$temp_img1=$_FILES['product_img1']['tmp_name'];
	$temp_img2=$_FILES['product_img2']['tmp_name'];
	$temp_img3=$_FILES['product_img3']['tmp_name'];
	
if(!empty($product_cat)&& !empty($product_brand)&&!empty($desc)&&!empty($product_img1)&&!empty($product_price)&&!empty($product_title))
{move_uploaded_file($temp_img1,"products/$product_img1");
	
	move_uploaded_file($temp_img2,"products/$product_img2");
	
	move_uploaded_file($temp_img3,"products/$product_img3");
	
	$insert_query="insert into products(cat_id,brand_id,product_title,product_img1,product_img2,product_img3,product_price,product_desc,product_status)values('$product_cat','$product_brand','$product_title','$product_img1','$product_img2','$product_img3','$product_price','$desc','')";
    mysqli_query($con,$insert_query);
	echo"Product is added";
}
else{
	echo "<script>alert('please fill all the fields')</script>";
exit();
	
	}
	}



?>
