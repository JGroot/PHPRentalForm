<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
		<?php
			include('dbconn.php');
		
			$sql = 'Select * from Cars';
			
			$sqlresults = mysql_query($sql, $conn);
			
			if (! $sqlresults)
				die('Could not get results: ' . mysql_error());
			
			while ($records = mysql_fetch_array($sqlresults, MYSQL_ASSOC))
			{
				echo "Rental Type: {$records['rentalType']} <br />" . 
				"Price Per Day: {$records['pricePerDay']} <br />" . 
				"Qty Available: {$records['quantity']} <br /><br />";
			}
			
			mysql_close($conn);
		?>
	</body>
</html>