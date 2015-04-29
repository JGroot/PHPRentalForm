
	<div class="content">
      <h2>Please complete the form below:</h2>
         <form name="rentalform" action="index.php?page=rentalform" method="post">
          <div class="form_settings">
         	<p><span>First Name</span><input type="text" name="fname" /></p>
            <p><span>Last Name</span><input type="text" name="lname" /></p>
            <p><span>Phone Number</span><input type="text" name="phonenumber" value="###-###-####" /></p>
			 <!-- populate the dropdown list from db on load -->
			
            <p><span>Vehicle</span>
            <select id="vehicletype" name="vehicleType">
			<?php
				
				$queryCars = 'SELECT * FROM Cars';
				$result = mysql_query($queryCars, $conn);
				if (!$result)
					die("Could not get results: " . mysql_error());
            	while($records = mysql_fetch_array($result, MYSQL_ASSOC))
            	{
            		echo "<option value='{$records['rentalType']}'>{$records['rentalType']}</option>";
            	}
            	mysql_close($conn);
            ?>
     		</select></p>
            <p><span>Purchase insurance?</span>
            <span>yes  <input class="checkbox" type="checkbox" name="insuranceYes" value="yes" /></span>
            <span>no  <input class="checkbox" type="checkbox" name="insuranceNo" value="no" /></span></p>
            <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="submit" value="submit" /></p>
          </div>
        </form>
        
        <?php 
			if(isset($_POST['submit'])){
				$firstName = $_POST['fname'];
				$lastName = $_POST['lname'];
				$phoneNumber = $_POST['phonenumber'];
				$isComplete = FieldComplete($firstName, $lastName, $phoneNumber);
				if(!$isComplete){
						echo "<font color='red'>Please complete all fields.</font>";
				}
				
			
			}
		
		function FieldComplete($firstName, $lastName, $phoneNumber) {
			if (isset($firstName, $lastName,$phoneNumber) &&
					$firstName && $lastName && $phoneNumber == "" || " ") {
						return false;
					} else {
						return true;
					}
		}
	?>

  </div>
  