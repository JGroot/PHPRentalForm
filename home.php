    <div class="content">
   		<div><h1>Welcome to Eclipse Rentals</h1></div>
       <form>
		<div class="form_settings">
			<p><span>Search Customers</span><input type="text" name="cSearch" /></p>
			<input type="submit" name="Search"/>
			<p>
			<?php
			if(isset($_Post['cSearch']))
			{
				$searchTXT = $_REQUEST['cSearch'];
				$searchQuery = 'SELECT * FROM rentals WHERE CustomerName like %$searchTXT%';
				$result = mysql_query($searchQuery, $conn);
				
				if (!$result)
						die("Could not get results: " . mysql_error());
					while($records = mysql_fetch_array($result, MYSQL_ASSOC))
					{
					echo "Rental ID: {$records[0]} &nbsp;"
						."Rental Type: {$records[1]} &nbsp;"
						."Customer Name: {$records[2]} &nbsp;"
						."Number of Days: {$records[3]} <br />";
					}
			}
			?>
			</p>
		</div>
       </form>
		
     </div>
	