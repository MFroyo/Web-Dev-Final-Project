<!DOCTYPE html>
<html>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Code4PD</title> <!-- < set your community's name here -->
	<script src="https://kit.fontawesome.com/af48d48999.js" crossorigin="anonymous"></script>
    <meta property="og:title" content="Code4PD"> <!-- meta if u send links on discord etc includes this -->
    <meta property="og:description" content="Go patrol or get fired.."> <!-- meta if u send links on discord etc includes this -->
    <meta property="og:image" content="https://fivepd.online/assets/img/promo.png"> <!-- meta if u send links on discord etc includes this -->
    <meta property="og:url" content="http://fivepd.online"> <!-- meta if u send links on discord etc includes this -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<link rel="stylesheet" href="./backend/css/search.css">
	<link rel="stylesheet" href="./backend/css/main.css">
	<link rel="stylesheet" href="./backend/css/menu.css"
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<head>
    <title>Reports Search</title>
</head>
<body>
	<header>
		<div class="wrapper">
			<nav>
				<div class="navbar">
					<div class="container nav-container">
						<input class="checkbox" type="checkbox" name="" id="" />
						<div class="hamburger-lines">
						  <span class="line line1"></span>
						  <span class="line line2"></span>
						  <span class="line line3"></span>
						</div>  
						<div class="menu-items">
							<li><a href="index.php">Home</a></li>
							<li><a href="https://discord.gg/g6cNWB7Knc">Discord</a></li>
							<li><a href="Search.php">Reports</a></li>
							<li><a href="Players.php">Online Players</a></li>
			  			</div>
					</div>
				</div>
				<a href="index.php"><h2>Code4 <span>PD</span></h2></a> <!-- set your community name here --> 
				<div class="right">
					<div class = "dropdown">
						<button class = "dropbtn">Departments</button>
						<div class="dropdown-content">
							<a href="#">Blaine County Sheriff's Office</a>
							<a href="#">Los Santos Police Department</a>
							<a href="#">San Andreas State Troopers</a>
							<a href="https://sites.google.com/view/code4fd/home?authuser=1">San Andreas Fire Department</a>
							<a href="#">Los Santos Port Authority</a>
						</div>
					</div>  <!-- change the discord link to your discord's server link -->
					<a href="https://discord.gg/g6cNWB7Knc">Discord</a> 
					<!-- <a href="#">Updates</a> to be added to next update -->
					<a href="Search.php">Reports</a>
					<a href="Players.php">Online Players</a>
				</div>
			</nav>
		</div>
		<h1>Reports Search</h1>
    	<form method="GET" action="">
        	<div class="search-container">
				<select name="search_type" class="search-select">
					<option value="arrest_reports">Arrest Reports (By Officer)</option>
					<option value="default_reports">Incident Reports (By Officer)</option>
					<option value="ped_citations">Ped Citations (By Officer)</option>
					<option value="FD_reports">FD Reports (By Name)</option>
				</select>
				<input type="text" name="search_query" placeholder="Enter search query" class="search-input">
				<button type="submit" class="search-button">Search</button>
				</div>
		</form>
	</header>
	<div class="results-container">
		<?php
		// Check if a search query has been submitted
		if (isset($_GET['search_query'])) {
			$searchType = $_GET['search_type'];
			$searchQuery = $_GET['search_query'];

			// DB Connection Info
			$dbHost = 'mysql-mariadb17-dal-104.zap-hosting.com';
			$dbName = 'zap598145-2';
			$dbUser = 'zap598145-2';
			$dbPass = 'bLzIPP63Lo6j5gIR';

			// Connect with DB
			$conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);

			// Check if the connection was successful
			if ($conn->connect_error) {
				die("Database connection failed: " . $conn->connect_error);
			}

			// Sanitize the search query to prevent SQL injection
			$searchQuery = $conn->real_escape_string($searchQuery);

			// Construct the SQL query based on the selected search type
			$query = '';
			$tableHeading = '';
			$noResultsMessage = '';

			if ($searchType === 'arrest_reports') {
				$query = "SELECT a.caseID, a.date, u.gameName, a.factsOfArrest
						  FROM arrestreports a
						  INNER JOIN users u ON a.userID = u.id
						  WHERE u.gameName LIKE '%$searchQuery%'";
				$tableHeading = 'Arrest Reports';
				$noResultsMessage = 'No matching Arrest Reports found.';
			} elseif ($searchType === 'default_reports') {
				$query = "SELECT d.caseID, d.date, u.gameName, d.callName, d.location, d.report
						  FROM defaultreports d
						  INNER JOIN users u ON d.userID = u.id
						  WHERE u.gameName LIKE '%$searchQuery%'";
				$tableHeading = 'Incident Reports';
				$noResultsMessage = 'No matching Incident Reports found.';
			} elseif ($searchType === 'ped_citations') {
				$query = "SELECT p.citationID, p.date, u.gameName, p.location, p.name, p.address, p.reason, p.amount
						  FROM pedcitations p
						  INNER JOIN users u ON p.userID = u.id
						  WHERE u.gameName LIKE '%$searchQuery%'";
				$tableHeading = 'Ped Citations';
				$noResultsMessage = 'No matching Ped Citations found.';
			} elseif ($searchType === 'FD_reports') {
				$query = "SELECT f.location, f.name, f.date, f.time, f.command, f.involved, f.patients, f.report
						  FROM fdreport f
						  WHERE f.name LIKE '%$searchQuery%'";
				$tableHeading = 'FD Reports';
				$noResultsMessage = 'No matching FD Reports found.';
			}

			// Execute the query
			$result = $conn->query($query);

			// Check if the query was successful
			if ($result && $result->num_rows > 0) {
				echo "<h2>Search Results ($tableHeading)</h2>";
				echo "<table>";

				// Add columns specific to each search type
				if ($searchType === 'arrest_reports') {
					echo "<tr><th>Case ID</th><th>Date</th><th>Officer</th><th>Facts of Arrest</th>";
				} elseif ($searchType === 'default_reports') {
					echo "<tr><th>Case ID</th><th>Date</th><th>Officer</th><th>Call Name</th><th>Location</th><th>Report</th>";
				} elseif ($searchType === 'ped_citations') {
					echo "<tr><th>Citation ID</th><th>Date</th><th>Officer</th><th>Location</th><th>Name</th><th>Address</th><th>Reason</th><th>Amount</th>";
				} elseif ($searchType === 'FD_reports') {
					echo "<tr><th>Location</th><th>Name</th><th>Date</th><th>Time</th><th>Command</th><th>Involved</th><th>Patients</th><th>Report</th>";
				}

				echo "</tr>";

				// Fetch and display the search results
				while ($row = $result->fetch_assoc()) {
					echo "<tr>";
					foreach ($row as $key => $value) {
						if ($key === 'gameName') {
							echo "<td>" . $value . "</td>";
						} else {
							echo "<td>" . $value . "</td>";
						}
					}
					echo "</tr>";
				}

				echo "</table>";
			} else {
				echo "<p class='no-results'>$noResultsMessage</p>";
			}

			// Close the database connection
			$conn->close();
		}
		?>
	</div>
</body>
</html>
