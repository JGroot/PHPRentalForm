 <div class="content">
 <?php
		// Check if the submit button has been pressed
		if(isset($_POST['submit'])){
			$firstName = $_POST['fname'];
			$lastName = $_POST['lname'];
			$phoneNumber = $_POST['phonenumber'];
			$numDaysToRent = $_POST['numDaysToRent'];
			$isValid =  Validation($firstName, $lastName, $phoneNumber, $numDaysToRent);
			
			// Check if the data is valid before trying to insert it into the database
			if ($isValid == true){
				// Get the price of the car type that the person chose
				$selectedVehicleType = $_POST['vehicleType'];
				$pricePerDaySQL = "SELECT pricePerDay FROM CARS WHERE rentalType = '{$selectedVehicleType}'";
				$selectedPricePerDay = 0.0;
				$result = mysql_query($pricePerDaySQL, $conn);
				if (!$result)
					die("Could not get results: " . mysql_error());
            	if($records = mysql_fetch_array($result, MYSQL_ASSOC))
            	{
            		$selectedPricePerDay = $records['pricePerDay'];
            	}
				
				// Calculate the total cost of renting the car
				$totalCost = $selectedPricePerDay * $numDaysToRent;
				
				$insertRentalSQL = "INSERT INTO rentals (rentalType, CustomerName, numOfDays, priceTotal) VALUES ('" . $selectedVehicleType . "', '" . $firstName . " " . $lastName . "', " . $numDaysToRent . ", " . $totalCost . ")";
				$result = mysql_query( $insertRentalSQL, $conn );
				if (!$result)
					die("Could not rent car: " . mysql_error());
				else
					$updateCarInformationSQL = "UPDATE Cars SET quantity = quantity - 1 WHERE rentalType = '" . $selectedVehicleType . "'";
					mysql_query($updateCarInformationSQL, $conn);
					echo "<h3>Car rented successfully!</h3>";
					echo "Name: " . $firstName . " " . $lastName . "<br />";
					echo "Rental Type: " . $selectedVehicleType . "<br />";
					echo "# of Days: " . $numDaysToRent . "<br />";
					echo "Total Price: $" . $totalCost . "<br />";
			}
		}
			
	
		//Validate form data
		function Validation($firstName, $lastName, $phoneNumber, $numDaysToRent){
			//check if all fields have values
			if ($notEmpty = NotEmpty($firstName, $lastName, $phoneNumber, $numDaysToRent)){
				$isFirstName = ValidateName($firstName);
				$isLastName = ValidateName($lastName);
				$isPhoneNumber = ValidatePhone($phoneNumber);
				$isNumDaysToRent = ValidateNumDays($numDaysToRent);
				if ($notEmpty === true && $isFirstName === true && $isLastName === true && $isPhoneNumber === true && $isNumDaysToRent == true)
					return true;
				else 
					return false;
			}
			else 
				return false;
		}
		
		//checks if form fields are empty
		function NotEmpty($firstName, $lastName, $phoneNumber, $numDaysToRent) {
			if ($firstName == '' || $lastName == '' || $phoneNumber == '' || $numDaysToRent == ''){
				echo '<p><font color="red">Please complete all fields.</font></p></br>';
				return false;
			}
			else {
				return true;
			}
		}
		
		//Makes sure name doesn't have crazy symbols (some might still slip through)
		function ValidateName($name){
			if (@preg_match('/^.+$/', $name))
				return true;
			else {
				echo "<p><font color='red'>" . $name . " is not a valid name. Please enter a valid name.</font></p></br>";
				return false;
			}
		}
		
		//validates the phone number
		function ValidatePhone($phone){
			if (@preg_match('/\b\d{3}[-.]?\d{3}[-.]?\d{4}\b/', $phone))
				return true;
			else { 
				echo "<p><font color='red'>" . $phone . " is not a valid phone number. Please enter a valid phone number.</font></p></br>";
				return false;
			}
		}
		
		// validates if the number of days entered is a number
		function ValidateNumDays($numDays){
			if (is_numeric($numDays))
				return true;
			else {
				echo "<p><font color='red'>" . $numDays . " is not a valid number of days. Please enter a valid number.</font></p></br>";
				return false;
			}
		}
		
		
	?>
</div>