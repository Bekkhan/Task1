<?php
$productDescription = filter_input(INPUT_POST, "product_discription");
$realPrice = filter_input(INPUT_POST, "real_price");
$discountPercent = filter_input(INPUT_POST, "discount_percent");
$discountAmount = $realPrice * ($discountPercent / 100 );
$finalPrice = $realPrice - $discountAmount ;
?> 


<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
	<div>
	<h1>Product Discount Calculator</h1>
		<div>
			<label>Product Description: </label>
			<span><?php echo $productDescription ?></span><br>
			

			<label>Real Price:  </label>
			<span><?php echo  "$".$realPrice ?></span><br>
			
			
			<label>Discount Percent: </label>
			<span><?php echo  $discountPercent."%" ?></span><br>

			<label>Discount Amount: </label>
			<span><?php echo  "$".$discountAmount ?></span><br>


			<label>Final Price: </label>
			<span><?php echo  "$".$finalPrice ?></span>

		</div>
		
	</div>
</body>
</html>