
	<div class="content">
      <h2>Please complete the form below:</h2>
      
         <form name="rentalform" action="processRental.php" method="post">
          <div class="form_settings">
         	<p><span>First Name</span><input type="text" name="fname" /></p>
            <p><span>Last Name</span><input type="text" name="lname" /></p>
            <p><span>Phone Number</span><input type="text" name="phonenumber" value="###-###-####" /></p>
          	
           <!-- populate the dropdown list from db on load if possible -->
            <p><span>Vehicle</span><select id="vehicletype" name="vehicleType"><option value="1"></option><option value="2"></option><option value="3"></option></select></p>
            <p><span>Purchase insurance?</span>
            <span>yes  <input class="checkbox" type="checkbox" name="insuranceYes" value="yes" /></span>
            <span>no  <input class="checkbox" type="checkbox" name="insuranceNo" value="no" /></span></p>
            <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="submit" value="submit" /></p>
          </div>
        </form>
        </div>

	

  
  