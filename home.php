    <div class="content">
   		<div><h1>Welcome to Eclipse Rentals</h1></div>
       <form action="index.php?page=home" method="post">
		<div class="form_settings">
				<p><span>Search Customers</span><input type="text" name="cSearch" /></p>
				<p style="padding-top: 15px; float: right"><input type="submit" value="Search" class="submit"/></p>
			
			<p>
			<table style="width:100%">
				<tr>
					<td>Rental ID</td>
					<td>Rental Type</td>
					<td>Customer Name</td>
					<td>Number of Days</td>
				</tr>
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
					echo "<tr>
					<td>{$records['rentalID']}</td>
					<td>{$records['rentalType']}</td>
					<td>{$records['CustomerName']}</td>
					<td>{$records['numOfDays']}</td>
					</tr>";
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
					echo "<tr>
					<td>{$records['rentalID']}</td>
					<td>{$records['rentalType']}</td>
					<td>{$records['CustomerName']}</td>
					<td>{$records['numOfDays']}</td>
					</tr>";
					}
			}
			?>
			</table>
			</p>
		</div>
       </form>
		
     </div>
	