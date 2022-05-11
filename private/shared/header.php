<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

	<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;300;400&family=Lato:wght@100&family=Raleway:wght@100;300;400&family=Ubuntu:wght@100;300;400&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo PUBLIC_PATH . '/stylesheets/styles.css'; ?>">
	<script src="https://kit.fontawesome.com/0d7e4138be.js" crossorigin="anonymous"></script>
<body>
<header class="main-header not-active">
	<a class="ribbon">
		<div class="ribbon-wrapper">
			<div class="ribbon-content">
				<p id="new-count" ><span id="recent-num"></span> Recently Released Photograpic Works</p>
			</div>
			<div class="ribbon-content">
				<p id="award-count"><span id="award-num"></span> Awards Gained </p>
			</div>
			<div class="ribbon-content">
				<p id="city-count"><span id="city-num"></span> Cities Visited</p>
			</div>
		</div>

	</a>
	<nav class="menu-bar">
		<div class="nav-container">
			<div class="menu-control">
				<div class="control">
					<button class="nav-toggle" id="menu-toggle" title="Menu Toggle" aria-controls="main-nav-menu" aria-expanded="false">
						<span class="toggle-icon">
							<span class="icon-line toggle-icon-top"></span>
							<span class="icon-line toggle-icon-bottom"></span>
						</span>
					</button>
				</div>
			</div>
			<div id="logo">
				<a href="/home"><span class="logo-img"></span></a>
			</div>
		</div>
		<div class="menu" id="main-nav-menu">
			<ul class="menu-list" aria-labelledby="menu-toggle">
				<li class="nav-item">
				<a href="/photographer" class="nav-item-link">Photographer</a>
				</li>
				<li class="nav-item">
				<a href="/awards" class="nav-item-link">Awards</a>
				</li>
				<li class="nav-item">
					<div class="dropdown">
						<a type="button" href="#" class="nav-item-link" id="about-btn">About <i class="fa-solid fa-angle-down"></i></a>
						<div class="dropdown-content">
							<div id="us"><p>test</p></div>
							<div id="contact"><p>test</p></div>
							<div id="drop-blank"></div>
						</div>
					</div>
				
				</li>
			</ul>
		</div>
	</nav>
</header>
