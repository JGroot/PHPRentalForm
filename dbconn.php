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
			
			$insertDefaultCarsSQL = "INSERT INTO Cars (rentalType, pricePerDay, quantity) VALUES ('Small Size', 10, 20), ('Mid Size', 15, 20), ('Full Size', 20, 20);";
			mysql_select_db('PHPFinalProject');
			mysql_query( $insertDefaultCarsSQL, $conn );
			
			$insertDefaultRentalsSQL = "INSERT INTO rentals (rentalID, rentalType, CustomerName, numOfDays, priceTotal) VALUES 
			(1, 'Small Size', 'Mark Johnson', 5, 50), 
			(2, 'Small Size', 'John Adams', 6, 60), 
			(3, 'Small Size', 'George Washington', 4, 40), 
			(4, 'Mid Size', 'Mark Quincy', 7, 105), 
			(5, 'Mid Size', 'Angelina Jolie', 5, 75), 
			(6, 'Mid Size', 'Brad Pitt', 14, 210), 
			(7, 'Mid Size', 'Barack Obama', 18, 270), 
			(8, 'Full Size', 'Alex Lux', 3, 60), 
			(9, 'Full Size', 'Malik Matar', 2, 40), 
			(10, 'Full Size', 'Jessica Groot', 5, 100)";
			mysql_select_db('PHPFinalProject');
			mysql_query( $insertDefaultRentalsSQL, $conn );
		?>
	</body>
</html>