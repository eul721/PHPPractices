<?php
	//create variables
	$tireqty = $_POST['tireqty'];
	$oilqty = $_POST['oilqty'];
	$sparkqty = $_POST['sparkqty'];
?>

<html>
	<head>
		<title>Bob's Auto Parts - Order Results</title>
	</head>
	<body>
		<h1>Bob's Auto Parts</h1>
		<h2>Order Results</h2>
		<?php
			echo "<p>Order processed on " . date('H:i, jS F Y') . "</p>";
			echo "<p>Your order is as follows: </p>";
			echo $tireqty." tires<br />";
			echo $oilqty." bottles of oil<br />";
			echo $sparkqty." spark plugs<br />";
		?>
	</body>
</html>