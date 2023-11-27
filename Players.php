<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Code4PD</title> <!-- < set your community's name here -->
	<link rel="stylesheet" href="./backend/css/players.css"> <!-- do not touch this, unless you know what u are doing.. -->
	<link rel="stylesheet" href="./backend/css/main.css">
	<link rel="stylesheet" href="./backend/css/menu.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://kit.fontawesome.com/af48d48999.js" crossorigin="anonymous"></script>
    <meta property="og:title" content="Code4PD"> <!-- meta if u send links on discord etc includes this -->
    <meta property="og:description" content="Go patrol or get fired.."> <!-- meta if u send links on discord etc includes this -->
    <meta property="og:image" content="https://fivepd.online/assets/img/promo.png"> <!-- meta if u send links on discord etc includes this -->
    <meta property="og:url" content="http://fivepd.online"> <!-- meta if u send links on discord etc includes this -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script>
		function copyToClipboard(element) {
		var $temp = $("<input>");
		$("body").append($temp);
		$temp.val($(element).text()).select();
		document.execCommand("copy");
		$temp.remove();
		}
	</script>
</head>
<body>
	<!--Navigation Bar -->
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
	</header>
	<main>
	<center><h2>Players</h2></center>
	<div class="wrapper-global-stats">
		<?php require_once 'backend/conn.php'; ?>
		<div class="section-global-stats">
			<?php
				$json = file_get_contents('http://154.16.67.167:30100/players.json');
				$data = json_decode($json, true);
				foreach($data as $player){
					echo "<div class='player-card'>
							<p>{$player['name']}</p>
						  </div>";
				}
			?>
		</div>
	</div>
</main>
</body>
</html>