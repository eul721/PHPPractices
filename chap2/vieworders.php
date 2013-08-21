<html>
	<head>
		<title>Bob's Auto Parts- Customer Orders</title>
	</head>
	<body>
		<h1>Bob's Auto Parts</h1>
		<h2>Customer Orders</h2>
		<?php
		$orders = file("orders.txt");
		$numberOfOrders = count($orders);
		if($numberOfOrders == 0)
			echo "<p><strong>No orders pending. Please try again later.</strong></p></body></html>";
		?>
		<table border=1>
			<tr>
				<th bgcolor="#CCCCFF">Order Date</th>
				<th bgcolor="#CCCCFF">Tires</th>
				<th bgcolor="#CCCCFF">Oil</th>
				<th bgcolor="#CCCCFF">Spark Plugs</th>
				<th bgcolor="#CCCCFF">Total</th>
				<th bgcolor="#CCCCFF">Address</th>
			</tr>
		<?php
			for ($i=0;$i<$numberOfOrders;$i++){
				$line = explode("\t",$orders[$i]);
				$line[1] = intval($line[1]);
				$line[2] = intval($line[2]);
				$line[3] = intval($line[3]);
		?>
			<tr>
				<td><?php echo $line[0]; ?></td>
				<td align="right"><?php echo $line[1]; ?></td>
				<td align="right"><?php echo $line[2]; ?></td>
				<td align="right"><?php echo $line[3]; ?></td>
				<td align="right"><?php echo $line[4]; ?></td>
				<td><?php echo $line[5]; ?></td>
			</tr> 
		<?php
				
			}
		echo mail("euleriepsilon@gmail.com","Hi!","test mail","shiorahijukae@gmail.com");
		?>
		</table>
			
		
		
	</body>
</html>