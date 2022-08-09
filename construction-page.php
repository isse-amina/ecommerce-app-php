<?php
    session_start();
?>
<!doctype html>
<html>
	<?php include 'includes/head.php';?>
	<body>
		<?php include 'includes/nav.php';?>
		<div class="main__content construction__page">
			<div class="banner__container">
				<div class="banner__text">
					<div>
						<h1>
							<span><p>COMING SOON</p></span>
						</h1>
					</div>
					<div>
                        <p class="banner__details">We're currently working on something fantastic.<br>We'll be here soon.</p>
						<div class="timer">
							<div id="days">
								<p>00</p>
								<p>days</p>
							</div>
							<div id="hrs">
								<p>00</p>
								<p>hrs</p>
							</div>
							<div id="mins">
								<p>00</p>
								<p>mins</p>
							</div>
							<div id="secs">
								<p>00</p>
								<p>secs</p>
							</div>
						</div>
                    </div>
				</div>
				<div class="banner">
					<img src="images/construction/coming-soon.png">
				</div>
			</div>
		</div>
		<?php include 'includes/footer.php';?>
		<?php include 'includes/scripts.php';?>
	</body>
</html>