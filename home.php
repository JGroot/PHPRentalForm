    <div class="content">
   		<div><h1>Welcome to Eclipse Rentals</h1></div>
       <form action="index.php?page=home" method="post">
		<div class="form_settings">
			<p><span>Search Customers</span><input type="text" name="cSearch" /></p>
			<input type="submit" name="Search"/>
			<p>
			<?php
			if(isset($_POST['cSearch']))
			{
				$searchTXT = $_POST['cSearch'];
				$searchQuery = "SELECT * FROM rentals WHERE CustomerName like '%" . $searchTXT . "%'";
				$result = mysql_query($searchQuery, $conn);
				
				if (!$result){
						die("Could not get results: " . mysql_error());
						echo "No results found";
						}
					while($records = mysql_fetch_array($result, MYSQL_ASSOC))
					{
					echo "Rental ID: {$records['rentalID']} &nbsp;"
						."Rental Type: {$records['rentalType']} &nbsp;"
						."Customer Name: {$records['CustomerName']} &nbsp;"
						."Number of Days: {$records['numOfDays']} <br />";
					}
			}
			else{
				$searchQuery = "SELECT * FROM rentals";
				$result = mysql_query($searchQuery, $conn);
				
				if (!$result){
						die("Could not get results: " . mysql_error());
						}
					while($records = mysql_fetch_array($result, MYSQL_ASSOC))
					{
					echo "Rental ID: {$records['rentalID']} &nbsp;"
						."Rental Type: {$records['rentalType']} &nbsp;"
						."Customer Name: {$records['CustomerName']} &nbsp;"
						."Number of Days: {$records['numOfDays']} <br />";
					}
			}
			?>
			</p>
		</div>
       </form>
		
     </div>
	