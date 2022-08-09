<?php
    session_start();
?>
<?php include_once 'includes/dbh.inc.php' ?>

<!doctype html>
<html>
	<?php include 'includes/head.php';?>
	<body>
		<?php include 'includes/nav.php';?>
		<div class="main__content profile__page">
            <h1 class="page__title">Profile</h1>
            <?php
                if(isset($_SESSION["fname"])) {
                    echo '<p class="logout__prompt">Welcome to your profile '. $_SESSION["fname"] . '!<br>Do you wish to log out?</p>'; 
                }
            ?>
            <a class="logout__button" href="includes/logout.inc.php">
                SIGN OUT
            </a>
        </div>
		<?php include 'includes/footer.php';?>
		<?php include 'includes/scripts.php';?>
	</body>
</html>