<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Code4 Gaming Community</title>
	<link rel="stylesheet" href="backend/css/main.css"> <!-- do not touch this, unless you know what u are doing.. -->
	<link rel="stylesheet" href="backend/css/menu.css">
	<link rel="stylesheet" href="backend/css/coffee.css">
	<script src="https://kit.fontawesome.com/af48d48999.js" crossorigin="anonymous"></script>
    <meta property="og:title" content="FivePD Online"> <!-- meta if u send links on discord etc includes this -->
    <meta property="og:description" content="Go patrol or get fired.."> <!-- meta if u send links on discord etc includes this -->
    <meta property="og:image" content="https://fivepd.online/assets/img/promo.png"> <!-- meta if u send links on discord etc includes this -->
    <meta property="og:url" content="http://fivepd.online"> <!-- meta if u send links on discord etc includes this -->
	<link rel="icon" type="image/x-icon" href="favicon.ico">
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
				<h2>Code4 <span>PD</span></h2> <!-- set your community name here --> 
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
	<!--INFORMATION -->
	<main>
			<div class="wrapper">
				<div class="section-promo">
					<div class="promo-background">
					<h2>Welcome to Code4PD</h2>
					<p>CodePD is a gaming created by the players, for the players where you are able to roleplay as an assortment of emergency services. 
					 Whether you wish to play as a police officer, state trooper, sheriff deputy, or respond to fire and medical calls, we have whatever fits you.
					</p>
					<h3>Welcome to the force.</h3>
					</div>
				</div>
				<div class="section-tutorial">
					<h2>Information</h2>
					<div class="wrapper-tutorial">
						<div class="section-tutorial-container">
							<div class="rtr">
								<h3><i class="fas fa-book"></i>Read the Rules</h3>
								<h4><span class="lnumbers1">1.</span> Be Respectful</h4>
								<h4><span class="lnumbers">2.</span> No Inappropriate Language</h4>
								<h4><span class="lnumbers">3.</span> No Spamming</h4>
								<h4><span class="lnumbers">4.</span> No Pornographic/Adult/NSFW material</h4>
								<h4><span class="lnumbers">5.</span> No Advertisements</h4>
								<h4><span class="lnumbers">6.</span> No Threats</h4>
								<h4><span class="lnumbers">7.</span> Don’t Share Illegal/Pirated Content</h4>
								<h4><span class="lnumbers">8.</span> Mic Use Required</h4>
								<h4><span class="lnumbers">9.</span> No Sexual Harassment will be Tolerated.</h4>
							</div>
							<div class="jts">
								<h3><i class="fas fa-sign-in-alt"></i>Join the Server</h3>
								<h4><span class="lnumbers1">1.</span> Open FiveM</h4>
								<h4><span class="lnumbers">2.</span> Press F8 to Open Command Line</h4>
								<h4><span class="lnumbers">3.</span> Click & Join </h4> <!-- set server ip here -->
								<a href="https://cfx.re/join/pympqy"><i class="fab fa-discord"></i>Code4 Gaming</a>
								<h4><span class="lnumbers">4.</span> Connect to the Server</h4>
							</div>
							<div class="dsc">
								<h3><i class="fab fa-discord"></i>Join our Discord</h3>
								<p>Chat with fellow members and be part of the community, and receive the latest information & updates by joining our discord server!</p>
								<a href="https://discord.gg/g6cNWB7Knc"><i class="fab fa-discord"></i>Code4 Gaming</a>
							</div>
							<div class="pab">
								<h3><i class="fas fa-helicopter"></i>Patrol a beat</h3>
								<p style="font-weight: 500;">Take to the streets as any department you care to be a part of: </p>
									<ul>Tackle gang crime with <i>Los Santos Police Department.</i> 
									<br>
									<ul>Preserve the wilderness of San Andreas as <i>Blaine County Sheriff's Office.</i>
									<br>
									<ul>Protect the busy highways as <i>San Andreas State Police.</i> 							
									<br>
									<ul>Save lives and prevent fires as <i>San Andreas Fire Department.</i>  <!-- add some info about patrolling on your server -->
							</div>
						</div>
					</div>
				</div>

				<!--DEPARTMENTS -->
				<div class="section-extra">
					<h2>Our Departments</h2>
					<div class="section-extra-flex">
						<a href = '#'>
							<div class="img1"> <!-- community image 1 change image check css -->
								<h3>Blaine County Sheriff's Office</h3>
								<p>Blaine County Sheriff's Office is dedicated to the preservation of our community and resources. From our national parks and waterways, to our farming community. We Live here, We Serve here.</p>
							</div>
						</a>
						<a href = '#'>
							<div class="img2"> <!-- community image 2 change image check css -->
								<h3>Los Santos Police Department</h3>
								<p>It is the mission of the Los Santos Police Department to safeguard the lives nad property of the people we server, to reduce the incidence and fear of crime, and to enhance public saftey while working with the diverse communities to improve their quality of life. Their mandate is to do so with honor and integrity, while at all times conducting themselves with the highest ethical standards to mantain public confidence.</p>
							</div>
						</a>
						<a href = '#'>
							<div class="img3"> <!-- community image 3 change image check css -->
								<h3>San Andreas State Troopers</h3>
								<p>State Troopers are dedicated to safeguarding and enhancing community safety by upholding the law, promoting road safety, and fostering strong partnerships. We do so with unwavering professionalism, accountability, and a commitment to service beyond duty, ensuring the well-being and security of our communities.</p>
							</div>
						</a>
						<a href = 'https://sites.google.com/view/code4fd/home?authuser=1'>
							<div class="img4"> <!-- community image 4 change image check css -->
								<h3>San Andreas Fire Department</h3>
								<p>The mission of the Los Santos Fire Department is to serve the citizens of our city with courage, integrity, and compassion. Our top priority is the safety and wellbeing of our fellow citizens, and we are dedicated to responding quickly and effectively to a wide range of emergencies.</p>
							</div>
						</a>
						<a href = '#'>
							<div class="img5"> <!-- community image 4 change image check css -->
								<h3>Los Santos Port Authority</h3>
								<p>The mission of the Los Santos Fire Department is to serve the citizens of our city with courage, integrity, and compassion. Our top priority is the safety and wellbeing of our fellow citizens, and we are dedicated to responding quickly and effectively to a wide range of emergencies.</p>
							</div>
						</a>
					</div>
				</div>

				<!-- SCREENSHOT SLIDESHOW
				<div class="screenshots">
					<h2>Community Screenshots</h2>
					<div class="container">
						<!-- Full-width images with number text 
						<div class="mySlides">
							<div class="numbertext">1 / 17</div>
								<img src="backend/img/gallery/1.png" style="width:100%">
						</div>

						<div class="mySlides">
							<div class="numbertext">2 / 17</div>
								<img src="backend/img/gallery/2.png" style="width:100%">
						</div>

						<div class="mySlides">
							<div class="numbertext">3 / 17</div>
								<img src="backend/img/gallery/3.png" style="width:100%">
						</div>

						<div class="mySlides">
							<div class="numbertext">4 / 17</div>
								<img src="backend/img/gallery/4.png" style="width:100%">
						</div>

						<div class="mySlides">
							<div class="numbertext">5 / 17</div>
								<img src="backend/img/gallery/5.png" style="width:100%">
						</div>

						<div class="mySlides">
							<div class="numbertext">6 / 17</div>
								<img src="backend/img/gallery/6.png" style="width:100%">
						</div>

						<div class="mySlides">
							<div class="numbertext">7 / 17</div>
								<img src="backend/img/gallery/7.png" style="width:100%">
						</div>

						<div class="mySlides">
							<div class="numbertext">8 / 17</div>
								<img src="backend/img/gallery/8.png" style="width:100%">
						</div>

						<div class="mySlides">
							<div class="numbertext">9 / 17</div>
								<img src="backend/img/gallery/9.png" style="width:100%">
						</div>

						<div class="mySlides">
							<div class="numbertext">10 / 17</div>
								<img src="backend/img/gallery/10.png" style="width:100%">
						</div>

						<div class="mySlides">
							<div class="numbertext">11 / 17</div>
								<img src="backend/img/gallery/11.png" style="width:100%">
						</div>

						<div class="mySlides">
							<div class="numbertext">12 / 17</div>
								<img src="backend/img/gallery/12.png" style="width:100%">
						</div>

						<div class="mySlides">
							<div class="numbertext">13 / 17</div>
								<img src="backend/img/gallery/13.png" style="width:100%">
						</div>

						<div class="mySlides">
							<div class="numbertext">14 / 17</div>
								<img src="backend/img/gallery/14.png" style="width:100%">
						</div>

						<div class="mySlides">
							<div class="numbertext">15 / 17</div>
								<img src="backend/img/gallery/15.png" style="width:100%">
						</div>

						<div class="mySlides">
							<div class="numbertext">16 / 17</div>
								<img src="backend/img/gallery/16.png" style="width:100%">
						</div>

						<div class="mySlides">
							<div class="numbertext">17 / 17</div>
								<img src="backend/img/gallery/17.png" style="width:100%">
						</div>

						Next and previous buttons 
						<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
						<a class="next" onclick="plusSlides(1)">&#10095;</a>
						</div>
					</div>
				</div>
			<script>
				let slideIndex = 1;
				showSlides(slideIndex);

				// Next/previous controls
				function plusSlides(n) {
				showSlides(slideIndex += n);
				}

				// Thumbnail image controls
				function currentSlide(n) {
				showSlides(slideIndex = n);
				}

				function showSlides(n) {
					let i;
					let slides = document.getElementsByClassName("mySlides");
					let dots = document.getElementsByClassName("demo");
					let captionText = document.getElementById("caption");
					if (n > slides.length) {slideIndex = 1}
					if (n < 1) {slideIndex = slides.length}
					for (i = 0; i < slides.length; i++) {
						slides[i].style.display = "none";
					}
					for (i = 0; i < dots.length; i++) {
						dots[i].className = dots[i].className.replace(" active", "");
					}
					slides[slideIndex-1].style.display = "block";
					dots[slideIndex-1].className += " active";
					captionText.innerHTML = dots[slideIndex-1].alt;
				}
			</script> -->
			</div>
				<!--GLOBAL STATS -->
				<br>
				<h2 id = "stats_header">Statistics</h2>
				<div class="wrapper-global-stats">
					<div class="section-global-stats">
						<?php require_once 'backend/conn.php'; ?>
						<div>
							<?php
								$query = "SELECT * FROM users";
								$statement = $conn->prepare($query);
								$statement->execute();
								$query = $statement->fetchAll(PDO::FETCH_ASSOC);
							?>
							<i class="fas fa-pen"></i>
							<h1><?php echo count($query); ?></h1>
							<h3>Registered Players</h3>
						</div>
						<div>
							<?php
								$query = "SELECT * FROM arrestreports";
								$statement = $conn->prepare($query);
								$statement->execute();
								$query = $statement->fetchAll(PDO::FETCH_ASSOC);
							?>
							<i class="fas fa-balance-scale"></i>
							<h1><?php echo count($query); ?></h1>
							<h3>Arrested Suspects</h3>
						</div>
						<div>
							<?php
								$query = "SELECT * FROM defaultreports";
								$statement = $conn->prepare($query);
								$statement->execute();
								$query = $statement->fetchAll(PDO::FETCH_ASSOC);
							?>
							<i class="fas fa-laptop"></i>
							<h1><?php echo count($query); ?></h1>
							<h3>Callouts Completed</h3>
						</div>
						<div>
							<?php
								$query = "SELECT * FROM pedcitations";
								$statement = $conn->prepare($query);
								$statement->execute();
								$query = $statement->fetchAll(PDO::FETCH_ASSOC);
							?>
							<i class="fas fa-address-card"></i>
							<h1><?php echo count($query); ?></h1>
							<h3>Person Citations</h3>
						</div>
						<div>
							<?php
								$query = "SELECT * FROM arrestreports";
								$statement = $conn->prepare($query);
								$statement->execute();
								$query = $statement->fetchAll(PDO::FETCH_ASSOC);
							?>
							<i class="fas fa-address-card"></i>
							<h1><?php echo count($query); ?></h1>
							<h3>Arrest Reports</h3>
						</div>
					</div>
				</div>
			</div>		
	</main>
	<footer>
		<div class="footer"> 
				<p>Created by Mitchell Froelich and Brendan Harrington</p>
		</div>
	</footer>
</body>
</html>