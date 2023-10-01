<html lang="en">
<head>
    <title>plans</title>
</head>
<body style="background:#E1E1E1">
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap/latest/css/bootstrap.css" />
<style type="text/css">
		.price.panel-red>.panel-heading {
			color: #fff;
			background-color: #D04E50;
			border-color: #FF6062;
			border-bottom: 1px solid #FF6062;
		}	
		.price.panel-red>.panel-body {
			color: #fff;
			background-color: #EF5A5C;
		}
		.price .list-group-product{
			border-bottom-:1px solid rgba(250,250,250, .5);
		}
		.panel.price .list-group-product:last-child {
			border-bottom-right-radius: 0px;
			border-bottom-left-radius: 0px;
		}
		.panel.price .list-group-product:first-child {
			border-top-right-radius: 0px;
			border-top-left-radius: 0px;
		}
		.price .panel-footer {
			color: #fff;
			border-bottom:0px;
			background-color:  rgba(0,0,0, .1);
			box-shadow: 0px 3px 0px rgba(0,0,0, .3);
		}
		.panel.price .btn{
			box-shadow: 0 -1px 0px rgba(50,50,50, .2) inset;
			border:0px;
		}
		.col-lg-3 {

			flex: 0 0 32%;
		}
</style>
<?php
	$paypalUrl='https://www.sandbox.paypal.com/cgi-bin/webscr';
	$paypalId='jaspreetsusshane@gmail.com';
?>
 
<div class="container text-center">
	<br/>
	<h2><strong></strong></h2>
	<br/>
	<div class="row">
		<div class="col-xs-6 col-sm-6 col-md-3 col-md-offset-4 col-lg-3">
		
    			<form action="<?php echo $paypalUrl; ?>" method="post" name="frmPayPal1">
					<div class="panel price panel-red">
						    <input type="hidden" name="business" value="<?php echo $paypalId; ?>">
						    <input type="hidden" name="cmd" value="_xclick">
						    <input type="hidden" name="product_name" value="Pakainfo website">
						    <input type="hidden" name="product_number" value="2">
						    <input type="hidden" name="amount" value="20">
						    <input type="hidden" name="no_shipping" value="1">
						    <input type="hidden" name="currency_code" value="USD">
						    <input type="hidden" name="cancel_return" value="http://demo.pakainfo.com/paypal/cancel.php">
						    <input type="hidden" name="return" value="http://demo.pakainfo.com/paypal/success.php">  
						    
						<div class="panel-heading  text-center">
						<h3>PRO PLAN</h3>
						</div>
						<div class="panel-body text-center">
						<h4>plans<h4>
							<p class="lead" style="font-size:40px"><strong>$1.99</strong></p>
						</div>
														<div class="columns">
								  <ul class="price">
									<li>unlimited Connect</li>
									<li>Unlimited Emails</li>
									<li>Unlimited Chat</li>
									<li></li> 
								  </ul>
								</div>
						<div class="panel-footer">
							<button class="btn btn-lg btn-block btn-danger" href="">BUY NOW!</button>
						</div>
					</div>
    			</form>
			
		</div>
	</div>
</div>
</body>
</html>