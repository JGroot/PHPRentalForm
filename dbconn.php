<!DOCTYPE html>
<html>
	<body>
		<?php
			$Server = "localhost:3306";
			$User = "root";
			$Pass = "root";
			global $conn;
			$conn = mysql_connect($Server, $User, $Pass);
			
			$createDBSQL = "CREATE DATABASE PHPFinalProject";
			mysql_query( $createDBSQL, $conn );
			mysql_select_db('PHPFinalProject');
			
			$createTblSQL = "CREATE TABLE Cars (rentalType char(50) PRIMARY KEY, pricePerDay decimal(5,2), quantity int)";
			mysql_query( $createTblSQL, $conn );
			
			$createTblSQL2 = "CREATE TABLE Rentals (rentalID int PRIMARY KEY AUTO_INCREMENT, rentalType char(50), CustomerName char(255), numOfDays int, priceTotal decimal(5,2))";
			mysql_query( $createTblSQL2, $conn );
			
			$insertSQL = "INSERT INTO Cars (rentalType, pricePerDay, quantity) VALUES ('Small Size', 10, 20), ('Mid Size', 15, 20), ('Full Size', 20, 20);";
			mysql_select_db('PHPFinalProject');
			mysql_query( $insertSQL, $conn );
			//mysql_close($conn);
		?>
	</body>
</html>