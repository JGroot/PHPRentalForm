------------------------------------------------------------------
				CONTENTS OF THIS FILE
------------------------------------------------------------------
	Introduction
	Requirements
	Configuration
	Execution
	Troubleshooting
	Maintainers
------------------------------------------------------------------
 * Introduction
		
		updated 05/05/2015
		
		Eclipse Rentals is a car rental website that provides 
		information about currently rented vehicles and the 
		ability to search through them on the Home page. It 
		also allows you to rent a new vehicle while displaying 
		rental availability on the Car Rentals page.
		
------------------------------------------------------------------		
 * Requirements
 
		A webserver
		PHP 5.4.19
		MySQL
		a browser

------------------------------------------------------------------		
 * Configuration
 
		Unzip the folder contents into the webserver's htdoc
		folder. Open the dbconn.php file into a text editor and 
		change lines 7, 8, and 9 into your localhost, sql user
		name, and password respectively.
		
			Example:
			//*************************************//
			//Change this to your localhost settings
			$Server = "127.0.0.1";
			$User = "root";
			$Pass = "password";
			//************************************//

------------------------------------------------------------------			
 * Execution
		
		--Home Page:
		In the web browser, type the path to index.php
		i.e. http://localhost:8090/PHPRentalForm/index.php
		
		The dbconn.php file is set up to auto create a database
		named 'phpfinalproject' and two populated tables, 'cars'
		and 'rentals', automatically. Each record is searchable 
		by entering the customer name and clicking search.
		
		--Car Rentals
		Completing the form on the Car Rental page will insert 
		a new record into the database which can be search for 
		by customer name on the Home page. Validation and 
		submission are ran through the processRental.php file.  
		
		--Contact
		The Contact Form's submit button will open up your 
		computer's mail client and populate the fields 
		specified in the form.  
		
------------------------------------------------------------------		
 * Troubleshooting
	
		Database connection errors: check the localhost settings 
		in the dbconn.php.  
		
		Unable to add a new record in the database on the Car
		Rental page:  Open up MySQL and drop the 'cars' and 
		'rentals' tables from the 'phpfinalproject' database.
		
------------------------------------------------------------------		
 * Maintainers
 
		Jessica Groot - jg105@zips.uakron.edu
		Malek Matar - mam359@zips.uakron.edu
		Alex Lux - anl35@zips.uakron.edu
		
		Source control at https://github.com/JGroot/PHPRentalForm

------------------------------------------------------------------