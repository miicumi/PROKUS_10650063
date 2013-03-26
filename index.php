<?php
session_start ();
include "koneksi.php";
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Kumpulan Resep Makanan</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<script type="text/javascript" src="jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="jquery.slidertron-1.1.js"></script>
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600|Archivo+Narrow:400,700" rel="stylesheet" type="text/css" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<!--[if IE 6]>
<link href="default_ie6.css" rel="stylesheet" type="text/css" />
<![endif]-->
</head>
<body>
<div id="header-wrapper">
	<div id="header" class="container">
		<div id="logo">
			<h1><a href="#">Resep Masakan</a></h1>
		</div>
		<div id="menu">
			<ul>
				<li class="first active"><a href="#" accesskey="1" title="">Homepage</a></li>
				<li><a href="member.php" accesskey="2" title="">Member</a></li>
				<li><a href="about.php" accesskey="3" title="">About Us</a></li>
				<li><a href="resep.php" accesskey="4" title="">Resep</a></li>
				<li><a href="contact.php" accesskey="5" title="">Contact Us</a></li>
			</ul>
		</div>
	</div>
</div>
<div id="banner">
	<div id="slider">
		<div class="viewer">
			<div class="reel">
				<div class="slide">
					<a class="link" href="http://nodethirtythree.com/#slidertron-slide-1">Full story ...</a> <img src="images/palawija.jpg" alt="" /> </div>
				<div class="slide">
					<a class="link" href="http://nodethirtythree.com/#slidertron-slide-2">Full story ...</a> <img src="images/sayurbuah.jpg" alt="" /> </div>
			</div>
		</div>
		<div class="indicator">
			<ul>
				<li class="active">1</li>
				<li>2</li>
			</ul>
		</div>
	</div>
	<script type="text/javascript">
		$('#slider').slidertron({
			viewerSelector: '.viewer',
			reelSelector: '.viewer .reel',
			slidesSelector: '.viewer .reel .slide',
			advanceDelay: 3000,
			speed: 'slow',
			navPreviousSelector: '.previous-button',
			navNextSelector: '.next-button',
			indicatorSelector: '.indicator ul li',
			slideLinkSelector: '.link'
		});
	</script> 
</div>
<div id="wrapper">
	<div id="page" class="container">
		<div id="content1"> <img src="images/pic08.jpg" width="235" height="235" alt="" />
			<h2>Nulla luctus eleifend</h2>
			<p>This is <strong>Refreshen</strong>, a free, fully standards-compliant CSS template designed by <a href="http://www.freecsstemplates.org">FCT</a>.   The photos in this template are from <a href="http://fotogrph.com/"> Fotogrph</a>. This free template is released under a <a href="http://creativecommons.org/licenses/by/3.0/">Creative Commons Attributions 3.0</a> license, so you are pretty much free to do whatever you want with it (even use it commercially) provided you keep the links in the footer intact. Aside from that, have fun with it :)</p>
		</div>
		<div id="sidebar">
			<div>
				<h2>Categories</h2>
				<ul class="style1">
					<li class="first">
						<p><a href="#">Ipsum ante vivamus semper faucibus varius. Nam risus nibh, commodo vulputate.</a></p>
						<span class="posted">8 hours ago</span> </li>
					<li>
						<p><a href="#">Sed amet consequat lorem ipsum dolor sit amet blandit feugiat lorem ipsum sed ante nibh.</a></p>
						<span class="posted">1 day ago</span> </li>
				</ul>
			</div>
		</div>
	</div>
	<div id="featured" class="container">
		<h2 class="title">Resep Makanan Favorit</h2>
		<div id="fbox1"> <img src="images/pic04.jpg" width="235" height="235" alt="" />
			<h2>Fusce ultrices fringilla</h2>
			<p>In posuere eleifend quisque semper augue mattis wisi maecenas ligula.</p>
		</div>
		<div id="fbox2"> <img src="images/pic05.jpg" width="235" height="235" alt="" />
			<h2>Fusce ultrices fringilla</h2>
			<p>Maecenas ligula. Pellentesque viverra vulputate Aliquam erat volutpat.</p>
		</div>
		<div id="fbox3"> <img src="images/pic06.jpg" width="235" height="235" alt="" />
			<h2>Fusce ultrices fringilla</h2>
			<p>Donec fermentum nibh in augue a lacus at urna congue rutrum.</p>
		</div>
		<div id="fbox4"> <img src="images/pic07.jpg" width="235" height="235" alt="" />
			<h2>Fusce ultrices fringilla</h2>
			<p>Suspendisse sit amet tellus eros bibendum volutpat nulla.</p>
		</div>
	</div>
</div>
<div id="footer">
	<p>Copyright (c) 2012 Sitename.com. All rights reserved. Design by <a href="http://www.freecsstemplates.org">FCT</a>. Photos by <a href="http://fotogrph.com/">Fotogrph</a>.</p>
</div>
</body>
</html>
