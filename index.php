<?php
    session_start();
?>
<!doctype html>
<html>
	<?php include 'includes/head.php';?>
	<body>
		<?php include 'includes/nav.php';?>
		<div class="main__content">
			<div class="banner__container">
				<div class="banner__text">
					<div class="typewriter__effect">
						<h1>
							<span class="text__type" data-wait="1000" data-main="Formulated for " data-words='["oily skin", "dry skin", "sensitive skin", "every skin. "]'></span>
						</h1>
					</div>
					<div><p><a href="<?php echo 'product-page.php?title='.urlencode('Intrasdala Lotion');?>">SHOP INTRASDALA</a></p></div>
				</div>
				<div class="banner">
					<img src="images/homepage/banner.jpg">
				</div>
			</div>
			<div class="homepage__icons">
				<h3>Our lotion proves that quality can be affordable.</h3>
				<div class="homepage__icons__images">
					<div>
						<img src="images/homepage/animal.png">
						<h4>CRUELTY-FREE</h4>
						<p>
							At Intrasdala, we care about creating the best product possible 
							without harming any animals.
						</p>
					</div>
					<div>
						<img src="images/homepage/skin-care.png">
						<h4>NON-IRRITATING</h4>
						<p>
							Our product is free of all irritating ingredients, such as 
							sulfates, synthetic dyes and fragrance. 
						</p>
					</div>
					<div>
						<img src="images/homepage/badge.png">
						<h4>HAPPINESS GUARANTEED</h4>
						<p>
							We are so confident that our product will work for you, that we will
							give you a full refund if you are not satisfied with your purchase. 
						</p>
					</div>
				</div>
			</div>
			<div>
				<div class="homepage__section">
					<div>
						<h3>The Ordinary</h3>
						<p>
							"The Ordinary is an evolving collection of treatments offering familiar, 
							effective clinical technologies positioned to raise pricing and 
							communication integrity in skincare. The brand was created to celebrate 
							integrity in its most humble and true form. Its offering is pioneering, 
							not in the familiar technologies it uses, but in its honesty and integrity. 
							The Ordinary is born to disallow commodity to be disguised as ingenuity."
						</p>
						<p>
							<a href="https://www.deciem.com/en-us/about-us.html">- The Ordinary</a>
						</p>
					</div>
					<a class="homepage__section__link" href="<?php echo 'aisle-page.php?category='.urlencode('The Ordinary');?>"><img src="images/homepage/the_ordinary.jpg"></a>
				</div>
				<div class="homepage__section">
					<a class="homepage__section__link" href="<?php echo 'aisle-page.php?category='.urlencode('Glow Recipe');?>"><img src="images/homepage/glow_recipe.jpg"></a>
					<div>
						<h3>Glow Recipe</h3>
						<p>
							"We're your go-to brand for efficacious skincare innovations that deliver 
							clinical results & sensorial self-care moments. We make fruit-forward, clean 
							formulas for glowing skin. We believe we glow even brighter together & that's 
							why we're so excited to welcome you to our community that believes in inclusivity, 
							individuality & sustainability."
						</p>
						<p>
							<a href="https://www.glowrecipe.com/pages/about-us">- Glow Recipe</a>
						</p>
					</div>
				</div>
				<div class="homepage__section">
					<div>
						<h3>Glossier</h3>
						<p>
							"We make products designed with your real beauty routine in mind. Here you will 
							find skincare, makeup, body care, and fragrance, all painstakingly perfected to 
							be worthy of your bathroom shelf.  We create the products you tell us you wish 
							existed. We believe in thoughtful design, and enabling conversation (which is where 
							it all starts)."
						</p>
						<p>
							<a href="https://www.glossier.com/about">- Glossier</a>
						</p>
					</div>
					<a class="homepage__section__link" href="<?php echo 'aisle-page.php?category='.urlencode('Glossier');?>"><img src="images/homepage/glossier.jpg"></a>
				</div>
			</div>
		</div>
		<?php include 'includes/footer.php';?>
		<?php include 'includes/scripts.php';?>
	</body>
</html>