<?php
	include('connection.php');
?>
<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<title>Book An Event - Restaurant Website Template</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="Menu.css">
	<!--[if IE 7]>
		<link rel="stylesheet" type="text/css" href="css/ie7.css">	
	<![endif]-->
	<!--[if IE 6]>
		<link rel="stylesheet" type="text/css" href="css/ie6.css">		ss
	<![endif]-->
</head>
<body>
	<div id="header"> <!-- start of header -->
		<span class="signboard"></span>
		<ul id="infos">
			<li class="home"> 
				<a href="HomePage.html">HOME</a> 
			</li>
			
		</ul>
		<a href="index.html" id="logo"></a>
			<ul id="navigation">
		<li><a href="Appetizer.html"><span>Snacks</span></a></li>
			<li class="Menu.html"><a href="Menu.html"><span>Main Course</span></a></li>
			<li><a href="Dessert.html"><span>Desserts</span></a></li>
			<li><a href="Drinks.html"><span>Drinks</span></a></li>
		</ul><!-- /#navigation -->
	</div> <!-- end of header -->
	<div id="contents"> <!-- start of contents --> 
		<h2 class="booking"><span>Book an Event</span></h2>
		<div id="booking">
			<form action="connection.php" method="post">
				<table>
					<tbody>
						<tr>
							<td colspan="2"><span>Your Name</span><input type="text" class="name" name="name" ></td>
							<td><span>Your Email</span><input type="text" name="email"></td>
						</tr>
						<tr>
							<td><span>Date</span><input type="text" class="date" name="date"></td>
							<td><span>No. of people</span><input type="text"  class="number" name="no_of_people"></td>
							
						</tr>
						<tr>
							<td colspan="3">
								<span>Is this a special occasion? Please tell us here?</span>
								<textarea name="special"></textarea>
								<input type="submit" value="Submit" class="button">
							</td>
						</tr>
					</tbody>
				</table>
			</form>
	
		</div>
	</div> <!-- end of contents -->
	<div id="footer"> <!-- start of footer -->
		<ul class="advertise">
			<li class="delivery">
				<h2>Hungry? We Deliver</h2>
				<a href="menu.html">Download our Menu</a>
			</li>
			<li class="event">
				<h2>Party! Party!</h2>
				<p>Celebrate your</p>
				<p>Special Events with Us</p>
			</li>
			<li class="connect">
				<h2>Let's Keep in Touch</h2>
				<a href="http://facebook.com/freewebsitetemplates" target="_blank" class="fb" title="Facebook"></a> 
				<a href="http://twitter.com/fwtemplates" target="_blank" class="twitr" title="Twitter"></a>
			</li>
		</ul>
		<div>
			<ul class="navigation">
				<li><a href="Menu.html">Home</a></li>
				<li><a href="Reservations.html">Book an event</a></li>
				<li><a href="Aboutus.html">About</a></li>
				<li class="last selected"><a href="contact.html">Contact</a></li>
			</ul>
			<span>&copy; Copyright 2018. All Rights Reserved.</span>
		</div>
	</div> <!-- end of footer -->
</body>
</html>