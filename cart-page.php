<?php
    session_start();
?>
<?php include_once 'includes/dbh.inc.php' ?>

<!doctype html>
<html>
	<?php include 'includes/head.php';?>
	<body class="cart">
		<?php include 'includes/nav.php';?>
		<div class="main__content cart__page">
            <h1 class="page__title">Your cart</h1>
            <?php 
                $subtotal = 0; 
                $cookie_key = 0;
                $empty_elements_cart = 0; 
                if (isset($_COOKIE[strval($cookie_key)])) {
                    while(isset($_COOKIE[strval($cookie_key)])) {   
                        if ($_COOKIE[strval($cookie_key)] == "[\"NULL\"]") {
                            $empty_elements_cart = $empty_elements_cart + 1; 
                        }
                        $cookie_key = $cookie_key + 1; 
                    }
                    $cookie_length = $cookie_key; 
                    $cookie_key = 0;
                    if ($cookie_length == $empty_elements_cart) {
                        $items_in_cart = false; 
                    }
                    else {
                        $items_in_cart = true;
                    }
                    if ($items_in_cart) {
            ?>
            <table class="cart__table">
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Total</th>
                </tr>
                <?php
                    while(isset($_COOKIE[strval($cookie_key)])) {
                        $cookie_value = $_COOKIE[strval($cookie_key)]; 
                        $cookie_array = explode('"',$cookie_value, 9);
                        $title = $cookie_array[1];
                        if ($title == "NULL") {
                            $cookie_key = $cookie_key + 1; 
                            continue;  
                        }
                        if (str_contains($title, "__")) {
                            $title = str_replace("__","&",$title);
                        }
                        $price = $cookie_array[3];
                        $size = $cookie_array[5];
                        $quantity = $cookie_array[7];
                        $sql = "SELECT * FROM Products WHERE UPPER(title) = UPPER('$title');";
                        $result = mysqli_query($conn, $sql);
                        $resultCheck = mysqli_num_rows($result); 
                        
                        $image = ""; 
                        if ($resultCheck > 0) {
                            $row = mysqli_fetch_assoc($result);
                            $image = $row['image1']; 
                        } 
                        $row_price = (float)$price * (float)$quantity;
                        $subtotal = $subtotal + $row_price; 
                        $link = 'product-page.php?title='.urlencode($title);
                ?>
                <tr>
                    <td>
                        <div>
                            <a href="<?php echo $link?>"><img class="cart__product" src="<?php echo $image?>"></a>
                            <span>
                                <a href="<?php echo $link?>"><h4><?php echo $title?></h4></a>
                                <p>$<?php echo $price?> CAD</p>
                                <p>Size: <?php echo $size?></p>
                                <span class="quantity__cart__tablet">
                                    <div class="selection__quantity">
                                        <input type="button" value="-" class="button minus" data-field="quantity">
                                        <input type="number" value="<?php echo $quantity?>" class="quantity__field" step="1" min="1" max="" name="quantity" oninput="validity.valid||(value='');">
                                        <input type="button" value="+" class="button plus" data-field="quantity">
                                    </div>
                                    <img class="cart__icon" src="images/cart/delete.png">
                                </span>
                            </span>
                            <span class="quantity__cart__mobile">
                                <div class="selection__quantity">
                                    <input type="button" value="-" class="button minus" data-field="quantity">
                                    <input type="number" value="<?php echo $quantity?>" class="quantity__field" step="1" min="1" max="" name="quantity" oninput="validity.valid||(value='');">
                                    <input type="button" value="+" class="button plus" data-field="quantity">
                                </div>
                                <img class="cart__icon" src="images/cart/delete.png">
                            </span>
                        <div>
                    </td>
                    <td>
                        <span class="quantity__cart__desktop">
                            <div class="selection__quantity">
                                <input type="button" value="-" class="button minus" data-field="quantity">
                                <input type="number" value="<?php echo $quantity?>" class="quantity__field" step="1" min="1" max="" name="quantity" oninput="validity.valid||(value='');">
                                <input type="button" value="+" class="button plus" data-field="quantity">
                                <img class="cart__icon" src="images/cart/delete.png">
                            </div>
                        </span>
                    </td>
                    <td class="row__price">
                        $<?php echo number_format($row_price, 2);?> CAD
                    </td>
                </tr>
                <?php
                        $cookie_key = $cookie_key + 1; 
                    }
                ?>
            </table>
            <?php 
                    }
                }
                if ($cookie_key == 0) {
            ?>
            <style>
                .empty__cart {
                    display: flex; 
                }
            </style>
            <?php 
                }
                else {
            ?>
            <div class="subtotal">
                <h4>Subtotal</h4>
                <p>$<?php echo number_format($subtotal, 2);?> CAD</p> 
            </div>
            <?php
                }
            ?>
            <div class="empty__cart">
                <div>
                    <p class="empty__message">Your cart is empty</p>
                    <p class="empty__shopping"><a href="index.php">CONTINUE SHOPPING</a></p>
                </div>
            </div>

        </div>
		<?php include 'includes/footer.php';?>
		<?php include 'includes/scripts.php';?>
	</body>
</html>