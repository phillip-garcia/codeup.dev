<?php
  var_dump($_GET);
  var_dump($_POST);
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Contact</title>
		<<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
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
		<div class="container">
		<div class="col-md-5">
		<div class="form-area">  
			<form role="form">
				<br style="clear:both">
					<h3 style="margin-bottom: 25px; text-align: center;">Contact Me</h3>
					<div class="form-group">
						<input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile Number" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
					</div>
					<div class="form-group">
					<textarea class="form-control" type="textarea" id="message" placeholder="Message" maxlength="140" rows="7"></textarea>
						<span class="help-block"><p id="characterLeft" class="help-block ">You have reached the limit</p></span>
					</div>
			
		<button type="button" id="submit" name="submit" class="btn btn-primary pull-right">Submit Form</button>
		</form>
	</div>
</div>
</div>
	</body>
</html>