<html>
<head>
	<title>Viva La Bam! - Order Meal</title>
</head>
<link rel="stylesheet" type="text/css" href="main.css">
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="main.js"></script>
<body>
	<div id="wrapper">
		<div id="header"><img alt="Logo" src="logo.png" width="90%" height="25%" /></div>
		<hr />
		<div id="nav"><a href="index.php">Home</a> | <a href="order.php">Order</a> | <a href="locate.php">Find Store</a> | <a href="contact.php">Contact Us</a></div>
		<div id="popup">
			Item: 	<select id="prices" name="Item">
						<option value="0.00" selected="selected">Select an Item</option>
						<option value="7.99">Pepperoni Pizza</option>
						<option value="8.99">Sausage Pizza</option>
						<option value="6.99">Cheese Pizza</option>
						<option value="9.99">BBQ Pizza</option>
						<option value="2.99">Bread Sticks</option>
						<option value="3.50">Cheese Sticks</option>
						<option value="5.99">Pasta Marinara</option>
						<option value="5.99">Pasta Alfredo</option>
					</select>
			<br />
			Amount: <input id="amount" type="text" size="5" maxlength="5" value="0" />
			<br />
			Total: $<input id="total" type="text" size="5" maxlength="10" value="0.00" disabled>
			<br />
			<button id="placeorder">Order</button>
			<br />
			<button id="close">Close</button>
			<br />
			<span id="thanks">Thank you for your Order!</span>
		</div>
		<div id="content">
			<p id="popshow">Hungry?, <a id="order" href="#">Place An Order!</a></p>
		</div>
		<hr />
		<div id="footer">Viva La Bam!</div>
	</div>
</body>
</html>