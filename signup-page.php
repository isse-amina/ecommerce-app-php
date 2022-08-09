<?php
    session_start();
?>
<?php include_once 'includes/dbh.inc.php' ?>

<!doctype html>
<html>
	<?php include 'includes/head.php';?>
	<body>
		<?php include 'includes/nav.php';?>
		<div class="main__content signup__page">
            <h1 class="page__title">Create Account</h1>
            <form class="signup__form" action="includes/signup.inc.php" method="post">
                <input type="text" id="signupfname" name="fname" placeholder="First name">
                <input type="text" id="signuplname" name="lname" placeholder="Last name">
                <input type="text" id="signupemail" name="email" placeholder="Email">
                <input type="password" class="user__password" id="signuppassword" name="password" placeholder="Password">
                <span>
                        <input type="checkbox" class="show__password" name="showpassword" value="showpassword">
                        <label for="showpassword">Show password</label><br>
                </span>
                <div class="additional__details">
                    <input type="submit" id="sendsignup" name="submit" value="SIGN UP">
                    <div>
                        <p>Returning customer? <a href="<?php echo 'login-page.php'?>">Sign in</a></p>
                    </div> 
                </div>
            </form>
            <?php 
                if (isset($_GET["error"])) {
                    if ($_GET["error"] == "emptyinput") {
                        echo "<p class='error__message'>** Fields cannot be left empty.</p>"; 
                    }
                    else if ($_GET["error"] == "invalidemail") {
                        echo "<p class='error__message'>** Email is invalid.</p>";  
                    }
                    else if ($_GET["error"] == "emailtaken") {
                        echo "<p class='error__message'>** Email is taken.</p>";  
                    }
                    else if ($_GET["error"] == "stmtfailed") {
                        echo "<p class='error__message'>** Something went wrong. Try again</p>";  
                    }
                }
            ?>
        </div>
		<?php include 'includes/footer.php';?>
		<?php include 'includes/scripts.php';?>
	</body>
</html>