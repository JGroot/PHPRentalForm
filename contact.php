    <div class="content">
   		<div><h1>Contact Us</h1></div>
   		<div class='form_settings'>
	       <form class="email" action="index.php?page=contact" method="post">
				<p>Name:</p>
				<input type="text" name="name" />
				<p>E-mail:</p>
				<input type="text" name="email" />
				<p>Subject:</p>
				<input type="text" name="subject" />
				<p>Message:</p>
				<textarea name="message"></textarea></p>
				<p style="padding-top: 15px"><input class="submit" type="submit" value="submit"></p>
			</form>
		</div>
		<?php include ('mailer.php'); ?>
     </div>
