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
			include 'home.php';
		}
		else if($_GET['page'] == "contact"){
			include 'contact.php';
		}
		else if($_GET['page'] == "about"){
			include 'about.html';
		}
	}
	else{
		include 'home.php';
	}
	
	
	include 'includes/footer.html';
?>