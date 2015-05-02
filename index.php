<?php
	//this is the master page
	
	include 'includes/header.html';
	include 'includes/sidebar.html';
	include 'dbconn.php';
	//When adding a new page, include it here if the page parameter is set
	if(isset($_GET['page']))
	{
		if($_GET['page'] == "rentalform"){
			include 'rentalform.php';
		}
		else if($_GET['page'] == "home"){
			include 'home.html';
		}
		else if($_GET['page'] == "contact"){
			include 'contact.php';
		}
	}
	else{
		include 'home.html';
	}
	
	
	include 'includes/footer.html';
?>