 <?php
		
		if(isset($_POST['submit'])){
			if(empty($_POST['fname']) or empty($_POST['lname'])
					or empty($_POST['phonenumber'])
					or empty($_POST['vehicletype'])){
				$errorMessage = "All fields are required";
				header('Location: index.php?page=rentalform');
			}
			else{
				$errorMessage = "";
			}
		}
	?>