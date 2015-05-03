
	<div class="content">
      <h2>Please complete the form below:</h2>
         <form name="rentalform" action="index.php?page=rentalform" method="post">
          <div class="form_settings">
         	<p><span>First Name</span><input type="text" name="fname" /></p>
            <p><span>Last Name</span><input type="text" name="lname" /></p>
            <p><span>Phone Number</span><input type="text" name="phonenumber" value="###-###-####" /></p>
			<p><span># of Days to Rent</span><input type="text" name="numDaysToRent" /></p>
			
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
            		echo "<option value='{$records['rentalType']}'>{$records['rentalType']} - {$records['quantity']} Available</option>";
            	}
            ?>
     		</select></p>
            <p><span>Purchase insurance?</span>
            <span>yes  <input class="checkbox" type="checkbox" name="insuranceYes" value="yes" /></span>
            <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="submit" value="submit" /></p>
          </div>
        </form>
      
    
        <?php 
        include ('processRental.php');
		?>


  </div>
  