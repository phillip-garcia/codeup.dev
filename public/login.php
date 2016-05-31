<?php
  var_dump($_GET);
  var_dump($_POST);
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<link rel="stylesheet" href="css/personal-site.css ">
	</head>
	<body class="background">
		<nav class="navbar-default">
		  <div class="container-fluid">
			<div class="navbar-header">
			  <a class="navbar-brand" href="welcom.php">Phillip Thomas Garcia</a>
			</div>
			<ul class="nav navbar-nav">
				<li><a href="resume.html">Resume</a></li> 
				<li><a href="portfolio.html">Portfolio</a></li> 
				<li><a href="login-2.0.php">Login</a></li> 
				<li><a href="register.php">Register</a></li>
				<li><a href="contact.php">Contact</a></li>			
			</ul>
			<div class="placement">
				<form class="navbar-form navbar-left" role="search">
			  	<div class="form-group">
					<input type="text" class="form-control" placeholder="Search">
				</div>
			  	<button type="submit" class="btn btn-default">Submit</button>
				</form>
			</div>
		  </div>
		</nav>
	<div id="fullscreen_bg" class="fullscreen_bg"/>

	<div class="container">

   		<form class="form-signin">
			<h1 class="form-signin-heading text-muted">Sign In</h1>
			<input type="text" class="form-control" placeholder="Email address" required="" autofocus="">
			<input type="password" class="form-control" placeholder="Password" required="">
			<button class="btn btn-lg btn-primary btn-block" type="submit">
				Sign In
			</button>
		</form>
	</div>
	</body>
</html>