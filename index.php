<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<script src="assets/javascript/jquery-3.3.1.min.js"></script>
	<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
	<title>Antony' Personal Web Page on the Internet</title>
	<meta name="description" content="This is Antony Agnel's personal web page on the World Wide Web.">
	<!--I Love WordPress-->
	<nav class="nav navbar-expand-lg navbar-dark bg-dark">
		<a class="nav-link active" href="index.html">Home</a>
		<a class="nav-link" href="about.html">About</a>
		<a class="nav-link" href="contact.html">Contact</a>
		<a class="nav-link" href="gallery.html">Gallery</a>
	</nav>
</head>
<body>
	<div class="jumbotron">
		<h1 class="display-4">Hey there! Welcome to my online home.</h1>
		<p>The SHA256 hash of "Antony Agnel" is
			<?php
			print hash('sha256', 'Antony Agnel');
			?>
		</p>
		<br>
		<img src="assets/images/antony-agnel.jpg" class="rounded float-right" width="350px" height="350px" alt="Antony Agnel">
		<p class="lead">I like-</p>
		<ul class="lead">
			<li>Blogging</li>
			<li>Designing websites</li>
			<li>Helping people with take their blog to the next level</li>
		</ul>
		<a class="btn btn-primary btn-large" href="https://antonyagnel.com" role="button" target="_blank">Visit my blog</a>
		<br>
		<p>Find the RGB color code for any color of your choicd -</p>
		<input type="color" onchange="alert(this.value);">
		<br clear="all">
		<hr class="my-4">
		<footer class="container my-4">
			<div class="float-left">
				<p onclick="noReason();">Click here for no reason</p>
				<p id="jstest" onclick="$('#jstest').html('Poof! Here I am!!');">If you click me, I will change!</p>
				<a href="https://twitter.com/thewpfan?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-dnt="true" data-show-count="false">Follow @thewpfan</a>
			</div>
			<br>
			<div class="float-right">
				<script type="text/javascript">
					document.write("Today is " + Date() );
				</script>
				<br>
				<p>Copyright &copy; 2019 Antony Agnel</p>
			</div>
		</footer>
	</div>
</body>
<script type="text/javascript">
function noReason(){alert('You clicked here for no reason!');};
</script>
</html>