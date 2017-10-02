<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bio_styling.css">
	<title>Ben Ackerman</title>
</head>

<body>
	<?php
	$page = "ben";
	include "header.inc.php";
	?>
	<div class="about_us">

		<h1>Ben Ackerman</h1>
		<em>Broadcast engineer, programmer, and more</em>

		<p>Ben Ackerman is a Computer Science student and aspiring broadcast engineer
		at the University of Rochester.  Originally from Fairfax, VA, he got into
		computers at a very young age, and has been interested in all things tech
		ever since.  In addition to studying at UR, Ben also works in the engineering
		department at WXXI Public Broadcasting in Rochester.  There, he is known
		for having written a program that allowed WXXI to transmit show and song
		information to text-enabled radios.  Along the side, Ben also helps out at
		WRUR, both in engineering and by co-hosting a classic rock show, and at the
		Computer Interest Floor (CIF) as their tech maintenance director, maintaining
		their computer lab in the basement of Anderson Tower.</p>

	  <div class="para2">
		<h2>Projects:</h2>
		<h3>Composer2RDS</h3>
		<p>Wrote a script that retrieves metadata from NPR's Composer system and
		sends it to a radio station's RDS encoder to be broadcast to text-enabled
		radios.  Supports Audemat FMB80 and Pira RDS encoders, and HD Radio PAD/PSD
		too!</p>

		<h3>Speakoo:</h3>
		<p>Worked on a team to build a web application that allows ESL and EFL
		students to practice English using feedback crowdsourced from native speakers.
		Also included HTML5-based games to help students practice.</p>

		<h3>Campus Yard Sale:</h3>
		<p>Worked on a team that created a platform (using a Node.js backend) for
		buying and selling items within a college campus as a project for a web
		programming course.</p>
	  </div>
  </div>
</body>

</html>
