<?php
    session_start();
?>
<?php include_once 'includes/dbh.inc.php' ?>

<!doctype html>
<html>
	<?php include 'includes/head.php';?>
	<body>
		<?php include 'includes/nav.php';?>
		<div class="main__content shipping__page">
            <h1 class="page__title">Shipping Details</h1>
            <p>
                All orders are processed in 2-3 business days. For large parcels, processing time may extend up to 4 days. Orders are not processed during holidays or weekends.
            </p>
            <p>
                The estimated delivery time of your order depends on the shipping method that you choose during checkout. 
            </p>
            <p>
                Here are the shipping charges and speed of delivery for domestic deliveries:
            </p>
            <table>
                <tr>
                    <th>Shipping Method</th>
                    <th>Shipping Cost</th> 
                    <th>Delivery Estimate</th>
                </tr>
                <tr>
                    <td>FedEx Standard / UPS Ground</td>
                    <td>Free</td>
                    <td>3-5 business days</td>
                </tr>
                <tr>
                    <td>FedEx 2 Days / UPS 2nd Day AM</td>
                    <td>$15.85 CAD</td>
                    <td>2 business days</td>
                </tr>
                <tr>
                    <td>FedEx Overnight / UPS Next Day</td>
                    <td>$23.45 CAD</td>
                    <td>1 business day</td>
                </tr>
            </table>
            <h2>
                How do I check the status of my order?
            </h2>
            <p>
                You will receive email notifications from time to time. You may also track your order status on our Order tracking page.
            </p>
            <h2>
                What should I do if the tracking number I receive is not working? 
            </h2>
            <p>
                We ensure our delivery alerts help you stay on top of orders. If the tracking number does not work, we recommend you try tracking with order number. Alternatively, you may contact our customer service team.
            </p>
            <h2>
                What can I do if I don’t receive my order?
            </h2>
            <p>
                If you don’t receive your order at the estimated time, it could mean either your order is delayed or is lost. You may contact our support team to know the exact location of your order.
            </p>
            <h2>
                What should I do if I receive a damaged item?
            </h2>
            <p>
                You may log into our dispute management portal, mark the item as damaged and upload a picture of the damaged item. Once your request is received, our delivery agent will pick up your package. Alternately, you could contact our customer service team.
            </p>
            <h2>
                What are the shipping timelines for international delivery?
            </h2>
            <p>
                International orders will arrive in 5-14 business days from the receipt of your order. You will receive shipping estimates at the time of checkout. 
            </p>
            <h2>
                What duties and taxes apply?
            </h2>
            <p>
                Shipping costs for international orders will include international taxes, duties and value-added tax. At the time of checkout, the final order cost will reflect these charges.
            </p>
        </div>
		<?php include 'includes/footer.php';?>
		<?php include 'includes/scripts.php';?>
	</body>
</html>