<?php

	//All the pre-processing before the page is displayed on client side
	$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
	$date = date("Y-m-d H:i:s");
    $tireqty = $_POST['tireqty'];
	$oilqty = $_POST['oilqty'];
	$sparkqty = $_POST['sparkqty'];
	$address = $_POST['address'];
	$totalqty = $tireqty + $oilqty + $sparkqty;
	define("TIRECOST",99.99);
	define("OILCOST",79.99);
	define("SPARKCOST",69.99);
	$totalcost = $tireqty*TIRECOST + $oilqty*OILCOST + $sparkqty*SPARKCOST;
	$fp = @fopen("orders.txt",'ab');
	$outputstring = $date."\t".$tireqty." tires \t".$oilqty." oil \t".
					$sparkqty." spark plugs \t\$".$totalcost." \t". $address."\n";
?>
<html>
	<head>
		<title>Bob's Auto Parts - Order Results</title>
	</head>
	<body>
		<h1>Bob's Auto Parts</h1>
		<h2>Order Results</h2>
		<?php 
			echo "<p>Order processed at ".$date.".</p>";
			echo "<p>Your order is as follows:</p>";
		?>
		<table border=1>
			<tr bgcolor="#cccccc">
				<td width="150">Items</td>
				<td width="150">Quantity</td>
				<td width="150">Individual costs</td>
			</tr>
			<tr>
				<td width="150">Tires</td>
				<td width="150"><?php echo $tireqty; ?></td>
				<td width="150"><?php echo $tireqty*TIRECOST;?></td>
			</tr>
			<tr>
				<td width="150">Bottles of oil</td>
				<td width="150"><?php echo $oilqty; ?></td>
				<td width="150"><?php echo $oilqty*OILCOST;?></td>
			</tr>
			<tr>
				<td width="150">Spark plugs</td>
				<td width="150"><?php echo $sparkqty; ?></td>
				<td width="150"><?php echo $sparkqty*SPARKCOST;?></td>
			</tr>
			<tr bgcolor="#cccccc">
				<td width="150">Total</td>
				<td width="150"><?php echo $totalqty; ?></td>
				<td width="150"><?php echo $totalcost; ?></td>
			</tr>
		</table>
		<p>Address to ship to is <?php echo $address; ?></p>
		<p>Writing to server file...</p>
		<?php
		if(!$fp){
			echo "<p><strong>Your order coult not be processed at this time.".
				"Please try again later.</strong></p></body></html>";
			exit;
		}
		else{
			fwrite($fp,$outputstring,strlen($outputstring));
			echo "<p><strong>Write succeeded.</strong></p>";
			fclose($fp);
		}
		?>
	</body>
	
</html>