
<?php
if(isset($_POST['submit'])){
	/* Set e-mail recipient */
	$myemail = "jg105@zips.uakron.edu";
	echo $myemail;
	/* Check all form inputs using check_input function */
	$name = check_input($_POST['name'], "Enter your name");
	$subject = check_input($_POST['subject'], "Enter a subject");
	$email = check_input($_POST['email']);
	$message = check_input($_POST['message'], "Write your message");
	
	/* If e-mail is not valid show error message */
	if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email)){
		show_error("E-mail address not valid");
	}
	/* message for the e-mail */
	$message = "
		Name: $name
		E-mail: $email
		Subject: $subject
		Message: $message
	";
	
	
	mail($myemail, $subject, $message);
	if($mail){
		echo "Thank you for submission.  A representative will contact you shortly";
	}else{
		echo "Mail sending failed.";
	}
	
	
	/* Functions */
	function check_input($data, $problem=''){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		if ($problem && strlen($data) == 0){
			show_error($problem);
		}
			return $data;
		}
	
	function show_error($myError){
		?>
			<p>Please correct the following error:</p>
			<strong><?php echo $myError; ?></strong>
			<p>Hit the back button and try again</p>
		<?php
		exit();
	}
}
?>

