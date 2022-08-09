<?php
    session_start();
?>
<?php include_once 'includes/dbh.inc.php' ?>

<!doctype html>
<html>
	<?php include 'includes/head.php';?>
	<body>
		<?php include 'includes/nav.php';?>
		<div class="main__content contact__page">
            <h1 class="page__title">Contact Us</h1>
            <p class="mailing__address">
                Mailing address: 362 Rue de la Commune E, <br> Montréal, QC H2Y 0B4
            <p>
            <form class="contact__form" action="/contactform.php" method="post">
                <input type="text" id="contactname" name="name" placeholder="Name">
                <input type="text" id="contactemail" name="email" placeholder="Email">
                <input type="text" id="contactsubject" name="subject" placeholder="Subject">
                <textarea id="contactmessage" name="message" form="contact__form" placeholder="Message"></textarea>
                <input type="submit" id="sendmail" value="SEND">
            </form>
        </div>
		<?php include 'includes/footer.php';?>
		<?php include 'includes/scripts.php';?>
	</body>
</html>