<?php
	//this is the master page
	include 'dbconn.php';
	include 'includes/header.html';
	include 'includes/sidebar.html';
	
	//When adding a new page, include it here
	if($_GET['page'] == "rentalform"){
		include 'rentalform.php';
	}
	else if($_GET['page'] == "home"){
		include 'home.html';
	}
	else if($_GET['page'] == "contact"){
		include 'contact.php';
	}
	else{
		include 'home.html';
	}
	
	include 'includes/footer.html';
?>