 <?php
		
		if(isset($_POST['submit'])){
				$firstName = $_POST['fname'];
				$lastName = $_POST['lname'];
				$phoneNumber = $_POST['phonenumber'];
				$isValid =  Validation($firstName, $lastName, $phoneNumber);
				//enter data into database
			}
			
			
		//Validate form data
		function Validation($firstName, $lastName, $phoneNumber){
			//check if all fields have values
			if ($notEmpty = NotEmpty($firstName, $lastName, $phoneNumber)){
				$isFirstName = ValidateName($firstName);
				$isLastName = ValidateName($lastName);
				$isPhoneNumber = ValidatePhone($phoneNumber);
				
				if ($notEmpty === true && $isFirstName === true && $isLastName === true && $isPhoneNumber === true)
					return true;
				
				else 
					return false;
			}
			else 
				return false;
			
}
		
		//checks if form fields are empty
		function NotEmpty($firstName, $lastName, $phoneNumber) {
			if ($firstName == '' || $lastName == '' || $phoneNumber == ''){
						echo '<p><font color="red">Please complete all fields.</font></p>';
						return false;
					} else {
						return true;
					}
		}
		
		//Makes sure name doesn't have crazy symbols
		function ValidateName($name){
			
			If (@preg_match(['^.+$'], $name))
				return true;
			else {
				echo "font color='red'>" . $name . " is not a valid name. Please enter a valid name.";
				return false;
			}
		}
		
		//validate the phone number
		function ValidatePhone($phone){
			if (@preg_match(['\b\d{3}[-.]?\d{3}[-.]?\d{4}\b'], $phone))
				return true;
			else{ 
				echo "font color='red'>" . $phone . " is not a valid phone number. Please enter a valid phone number.";
				return false;
			}
		}
	?>