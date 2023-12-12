# Website-Project

## Group Number: 
34

## Group Members: 
Mitchell Froelich
Brendan Harrington

## Overview: 
Final Project for CSCI 331- Web Development. The following project is also a project for a GTA community, Code4PD, that requested a webpage for their community.
I used a generic template created by a Melm and heavily modified for the needs of the community to include SQL, images, and funtionality for the menu system. We learned most of the 
SQL from Carson Gross while taking CSCI 440 - Databases.

## URLs: 
Mitchell Froelich's Course Server: https://csci331.cs.montana.edu/~q16c274/Final/ 
Brendan Harrington's Course Server: https://csci331.cs.montana.edu/~q74q931/Web-Dev-Final-Project/ 
Actual Running Site: https://zap598145-1.plesk05.zap-webspace.com 

## PowerPoint Presentation: 
The presentation is in this same github repo.
/Final Presentation.pptx

## Creative Objective: 
The goal of this website is to be a central hub for the players on the roleplay server we designed it for. The community of Code4PD needed a website to review reports, view online players, and store documents related to the game organizations. We created this site to meet those requirements from the community owner, John P.

## Tech Summary
The site works using a MariaDB that is connected to the site itself, which will then query the DB for info relating to the fields appropriate per the page. For instance, 
```
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
```

This bit of code combined with headers creates the amount of registered players on the front page of the site. The SELECT statement retrieves all players from the database and then the count(query) below it returns the number of players total.

This site also uses a json file grab to retrieve the current online players for the online players page.

Finally, the rest is mostly a combination of CSS, CSS transitions and HTML to generate the images, blocks and navigation bar for the header and information sections.

## Individual Member Notes

### Mitchell Froelich: Handled the creation of the main page under index.php, selection of images, and development of the mobile display of the webpage. 

Mitchell generated a template for the site, made the working information blocks for the main page, the different department image sections, and he created the internal parts of the information section of the homepage to the community owner's standards and wishse. From there, he created the tables for reports to be displayed into, and the display blocks for the users on the Online Player page. He also generated the menu that is displayed with the user views the site from a mobile viewport (The hamburger lines to X transition). He did so using HTML, CSS and a few pieces of JavaScript in order to make the working part interact properly. He also implemented the slideshow section that is currently greyed out due to the request of the community owner.

### Brendan Harrington: Handled the coding of the generation of SQL code, created the players.php and the search pages working parts within the HTML and CSS.

Brendan accomplished the tasks of generating SQL queries to retrieve the data. He did so by using the knowledge developed from our Databases course under Carson Gross. We tested the result of the queries and made sure everything was up to par with what the owner wanted before coming to a final draft as presented. For the Online Players page, he integrated with the servers json file in order to retrieve the online players and their info to make the display of who is actually online at the time the individual looks at the page. 

## Conclusion 

We learned about integrating different information sources, taking information and displaying it in a meaningful way, and how to change with the requests from the individuals you are developing for. Overall, we feel much more confident with web development after we performed a working model for an actual individual(s) that will use this site as needed in the near future. We are still going to be implementing changes as time progresses, as this is just a working draft at the moment, but we are confident that we have the skills now to make a very well made webpage.

## References

https://web.dev/learn/css/transitions
https://www.w3schools.com/css/css3_transitions.asp 
https://freefrontend.com/css-page-transitions/ 
https://www.w3schools.com
https://stackoverflow.com
