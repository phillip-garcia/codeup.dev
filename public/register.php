<?php
  var_dump($_GET);
  var_dump($_POST);
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Register</title>
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

		<div class="container">

		<div class="row">
			<div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
				<form role="form">
					<h2 align="center">Register <small>It's free.</small></h2>
					<hr class="colorgraph">
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-6">
							<div class="form-group">
								<input type="text" name="first_name" id="first_name" class="form-control input-lg" placeholder="First Name" tabindex="1">
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-6">
							<div class="form-group">
								<input type="text" name="last_name" id="last_name" class="form-control input-lg" placeholder="Last Name" tabindex="2">
							</div>
						</div>
					</div>
					<div class="form-group">
						<input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email" tabindex="4">
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-6">
							<div class="form-group">
								<input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="5">
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-6">
							<div class="form-group">
								<input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="Confirm Password" tabindex="6">
							</div>
						</div>
					</div>
					<div class="row">

					</div>
					
					<hr class="colorgraph">
					<div class="row">
						<div class="col-xs-12 col-md-6"><a href="login.php" class="btn btn-success btn-block btn-lg">Existing Account</a></div>
						<div class="col-xs-12 col-md-6"><input type="submit" value="Register" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
					</div>
				</form>
			</div>
		</div>
		<!-- Modal -->
		<div class="modal fade" id="t_and_c_m" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
						<h4 class="modal-title" id="myModalLabel">Termos e condições</h4>
					</div>
					<div class="modal-body">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-primary" data-dismiss="modal">Eu concordo</button>
					</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
		</div>
	</body>
</html>