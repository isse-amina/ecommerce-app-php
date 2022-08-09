<?php
    session_start();
?>
<?php include_once 'includes/dbh.inc.php' ?>

<!doctype html>
<html>
	<?php include 'includes/head.php';?>
	<body>
		<?php include 'includes/nav.php';?>
		<div class="main__content aisle__page">
            <?php 
                $category = $_GET['category'];
            ?>
            <div class="aisle__title">
                <h1><?php echo ucwords($category)?></h1>
                <?php 
                    if ($category == "Shop All") {
                ?>
                <p>Shop all the most popular skincare products from Intrasdala, The Ordinary, Glow Recipe and Glossier</p>
                <?php 
                    }
                    else {
                        $link = "#"; 
                        if ($category == "The Ordinary") {
                            $link = "https://theordinary.com/en-ca"; 
                        }
                        else if ($category == "Glow Recipe") {
                            $link = "https://www.glowrecipe.com/"; 
                        }  
                        else if ($category == "Glossier") {
                            $link = "https://www.glossier.com/?locale=en-CA"; 
                        }
                ?>
                <p>For more products, visit <a href="<?php echo $link?>"><?php echo $category?></a> website</p>
                <?php
                    }
                ?>
            </div>
            <div class="aisle__images">
                <?php 
                    if ($category == "Shop All") {
                        $sql = "SELECT * FROM Products;";
                    }
                    else {
                        $sql = "SELECT * FROM Products WHERE UPPER(category) = UPPER('$category');";
                    }
                    $result = mysqli_query($conn, $sql);
                    $resultCheck = mysqli_num_rows($result);

                    if ($resultCheck > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $link = 'product-page.php?title='.urlencode($row['title']);
                ?>
                <div class="image__details">
                    <a class="main__image" href="<?php echo $link;?>"><img src="<?php echo $row['image1'];?>"></a>
                    <a class="sub__image" href="<?php echo $link;?>"><img src="<?php echo $row['image2'];?>"></a>
                    <p class="product__name"><a href="<?php echo $link;?>"><?php echo $row['title'];?></a></p>
                    <p class="product__price">$<?php echo $row['price1'];?> CAD</p>
                </div>       
                <?php
                        }
                    }
                ?>
                </div>
            </div>
            <style>
                
            </style>
		</div>
		<?php include 'includes/footer.php';?>
		<?php include 'includes/scripts.php';?>
	</body>
</html>