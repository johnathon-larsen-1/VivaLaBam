<html>
<head>
	<title>Viva La Bam! - Locate Facility</title>
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
			<form action="." method="POST">
				Zip Code: <input type="text" id="zip" size="5" maxlength="5" value="" />
				<br />
				<button id="search">Search</button>
			</form>
			<button id="close">Close</button>
			<br />
			<span id="thanks">
				&nbsp;
			</span>
		</div>
		<div id="content">
			<p id="popshow">Is there a local Viva La Bam near you, use this <a id="find" href="#">Search</a> and find out</p>
		</div>
			<hr />
		<div id="footer">Viva La Bam!</div>
	</div>
</body>
</html>



