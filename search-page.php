<?php
    session_start();
?>
<?php include_once 'includes/dbh.inc.php' ?>

<!doctype html>
<html>
	<?php include 'includes/head.php';?>
	<body>
		<?php include 'includes/nav.php';?>
		<div class="main__content search__page">
            <?php
                $substring = $_GET['search'];
                $sql = "SELECT * FROM Products WHERE title LIKE '%$substring%' OR category LIKE '%$substring%';";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);
            ?>
            <div class="search__title">
                <h1>Your results</h1>
                <?php
                    if ($resultCheck == 0) {
                ?>
                <p>We couldn't find any match for "<?php echo $substring?>". Please try another search.</p>
                <?php
                    } 
                    else {
                ?>
                <p>Search results for: <?php echo $substring?></p>
                <?php
                    }
                ?>
            </div>
            <div class="search__images">
                <?php 
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