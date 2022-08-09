<?php
    session_start();
?>
<?php include_once 'includes/dbh.inc.php' ?>

<!doctype html>
<html>
	<?php include 'includes/head.php';?>
	<body>
		<?php include 'includes/nav.php';?>
		<div class="main__content login__page">
            <h1 class="page__title">Login</h1>
            <form class="login__form" action="includes/login.inc.php" method="post">
                <input type="text" id="loginemail" name="email" placeholder="Email">
                <input type="password" class="user__password" id="loginpassword" name="password" placeholder="Password">
                <span>
                        <input type="checkbox" class="show__password" name="showpassword" value="showpassword">
                        <label for="showpassword">Show password</label><br>
                </span>
                <div class="additional__details">
                    <input type="submit" id="sendlogin" name="submit" value="SIGN IN">
                    <div>
                        <p>New Customer? <a href="<?php echo 'signup-page.php'?>">Create account</a></p>
                        <p><a href="#">Forgot your password?</a></p>
                    </div> 
                </div>
            </form>
            <?php 
                if (isset($_GET["error"])) {
                    if ($_GET["error"] == "emptyinput") {
                        echo "<p class='error__message'>** Fields cannot be left empty.</p>"; 
                    }
                    else if ($_GET["error"] == "wrongemail") {
                        echo "<p class='error__message'>** Incorrect email.</p>";  
                    }
                    else if ($_GET["error"] == "wrongpassword") {
                        echo "<p class='error__message'>** Incorrect password.</p>";  
                    }
                    else if ($_GET["error"] == "stmtfailed") {
                        echo "<p class='error__message'>** Something went wrong. Try again</p>";  
                    }
                    else if ($_GET["error"] == "none") {
                        echo "<p class='error__message success'>Your account has been created successfully. Please login.</p>";  
                    } 
                }
            ?>
        </div>
		<?php include 'includes/footer.php';?>
		<?php include 'includes/scripts.php';?>
	</body>
</html>