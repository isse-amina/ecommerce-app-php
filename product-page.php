<?php
    session_start();
?>
<?php include_once 'includes/dbh.inc.php' ?>
<!doctype html>
<html>
	<?php include 'includes/head.php';?>
	<body>
		<?php include 'includes/nav.php';?>
		<div class="main__content product__page">
			<?php 
				$title = $_GET['title']; 
                $sql = "SELECT * FROM Products WHERE UPPER(title) = UPPER('$title');";
				$result = mysqli_query($conn, $sql);
				$resultCheck = mysqli_num_rows($result); 

				if ($resultCheck > 0) {
					$row = mysqli_fetch_assoc($result); 
					if ($row['category'] == "Glow Recipe") {
            ?>
			<style>
				.product__page .product__image .main__image img {
					object-fit: cover;
					object-position: 50% 10%;
				}
			</style>
			<?php
					}
					else if ($row['category'] == "Glossier") {
			?>
			<style>
				.product__page .product__image .main__image img {
					object-fit: cover;
					object-position: 50% 25%;
				}
			</style>
			<?php
					}
					else {
			?>
			<style>
				.product__page .product__image .main__image img {
					object-fit: cover;
					object-position: bottom center;
				}
			</style>
			<?php

					}
			?>
			<div class="product__image">
				<div class="main__image">
					<img src="<?php echo $row['image1'];?>">
				</div>
				<div class="sub__image">
					<img src="<?php echo $row['image1'];?>">
					<img src="<?php echo $row['image2'];?>">
					<?php 
						if ($row['image3'] != NULL) { 
					?>
					<img src="<?php echo $row['image3'];?>">
					<?php 
						}
					?>
				</div>
			</div>
			<div class="product__details">
				<p class="brand__name"><?php echo strtoupper($row['category']);?></p>
				<h1 class="product__name"><?php echo $row['title'];?></h1>
				<p class="product__price price1">$<?php echo $row['price1'];?> CAD</p>
				<p class="product__price price2">$<?php echo $row['price2'];?> CAD</p>
				<p class="selection__title">SIZE</p>
				<div class="selection__size">
					<p><?php echo $row['size1'];?>mL</p>
					<?php 
						if ($row['size2'] != NULL) { 
					?>
					<p><?php echo $row['size2'];?>mL</p>
					<?php 
						}
					?>
				</div>
				<p class="selection__title">QUANTITY</p>
				<div class="selection__quantity">
					<input type="button" value="-" class="button minus" data-field="quantity">
					<input type="number" value="1" class="quantity__field" step="1" min="1" max="" name="quantity" oninput="validity.valid||(value='');">
					<input type="button" value="+" class="button plus" data-field="quantity">
				</div>
				<div class="product__actions">
					<input type="button" value="Add to cart" class="button add__cart">
					<input type="button" value="Buy it now" class="button buy__now">
				</div>
				<p class="product__disclaimer">
					This is a demonstration store. This product cannot be purchased.
				</p>
				<div class="product__more__information">
					<div class="product__section__title" data-index="0" data-tag="product">
						<h4><img src="images/product-page/shipped.png"></h4>
						<h4>SHIPPING</h4>
						<h4>
							<span class="downwards__arrow"></span>
							<span class="upwards__arrow"></span>
						</h4>
					</div>
					<span class="dropdown__wrapper">
						<p>
							Shipping cost and timing depends on the shipping method you choose at checkout. 
							Customers residing in Canada are eligible for next day shipping. 
						</p>
					</span>
					<div class="product__section__title" data-index="1" data-tag="product">
						<h4><img src="images/product-page/return.png"></h4>
						<h4>RETURNS</h4>
						<h4>
							<span class="downwards__arrow"></span>
							<span class="upwards__arrow"></span>
						</h4>
					</div>
					<span class="dropdown__wrapper">
						<p>Returns are always easy and free! To return an item, please message our customer service team.</p>
					</span>
				</div>
			</div>
			<?php 
				}
            ?>
		</div>
		<?php include 'includes/footer.php';?>
		<?php include 'includes/scripts.php';?>
	</body>
</html>