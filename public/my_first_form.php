<?php
  var_dump($_GET);
  var_dump($_POST);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>My first HTML Form</title>
	</head>
	<body>
		<h2>User Login</h2>
			<form method="POST" action="/my_first_form.php">
				<div>
					<label for="username">Username</label>
					<input id="username" name="username" type="text" placeholder="Enter username here.">
				</div>
				<div>
					<label for="password">Password</label>
					<input id="password" name="password" type="password" placeholder="Enter your password.">
				</div>
				<div>
					<button type="submit" value="name">Click Me...</button>
				</div>
			</form>
		<h2>Compose an Email</h2>
			<form method="POST" action="/my_first_form.php">
				<div>
					<label for="email">To</label>
					<input id="email" name="email" type="text" autofocus>
				</div>
				<div>
					<label for="email">From</label>
					<input id="email" name="email" type="text">
				</div>
				<div>
					<label for="Subject">Subject</label>
					<input id="Subject" name="Subject" type="text">
				</div>
					<textarea id="body" name="body" rows="5" cols="40">Body</textarea>
				<div>
					<input type="checkbox" name="Save copy to server" value="yes" checked="">
					<label> Do you want to save a copy to the server?</label>
				</div>
				<div>
					<button type="submit">Send</button>
				</div>
		<h2>Multiple Choice Test</h2>
			<form method="POST" action="/my_first_form.php">
				<div>
					<h2>What is the city with the largest population?</h2>
					<label>
						 <input type="radio" name="q1" value="Tokyo">
						Tokyo
					</label>
					<label>
						<input type="radio" name="q1" value="New York City">
						New York City
					</label>
					<label>
						<input type="radio" name="q1" value="Beijing">
						Beijing
					</label>
					<label>
						<input type="radio" name="q1" value="Shanghai">
						Shanghai
					</label>
					<h2>What is the answer to life, the unvierse and everything?</h2>
						<label>
							 <input type="radio" name="q2" value="To Walk the most roads.">
							To Walk the most roads.
						</label>
						<label>
							<input type="radio" name="q2" value="42">
							42
						</label>
						<label>
							<input type="radio" name="q2" value="Game of Thrones">
							Game of Thrones
						</label>
						<label>
							<input type="radio" name="q2" value="Wealth">
							Wealth
						</label>
					<h2>What type of movies do you like?</h2>
						<label><input type="checkbox" id="genre1" name="genre[]" value="Scifi"> Scifi</label>
						<label><input type="checkbox" id="genre2" name="genre[]" value="Action"> Action</label>
						<label><input type="checkbox" id="genre3" name="genre[]" value="Romantic Comedy"> Romantic Comedy</label>
						<label><input type="checkbox" id="genre4" name="genre[]" value="Horror"> Horror</label>
						<label><input type="checkbox" id="genre5" name="genre[]" value="Comedy"> Comedy</label>
						<label><input type="checkbox" id="genre6" name="genre[]" value="Thriller"> Thriller</label>
						<label><input type="checkbox" id="genre7" name="genre[]" value="Drama"> Drama</label>
				</div>
				<div>	
					<label for="favorite music">What is your favorite type of music?</label>
						<select id="favorite music" name="favorite music">
							<option>Country</option>
							<option selected="Rock">Rock</option>
							<option>Pop</option>
							<option>Hip hop</option>
						</select>
				<div>
					<button type="submit">Submit</button>
				</div>
			</form>
			<form>
					<h2>Select Testing</h2>
					<label for="Pasta">Do you like pasta?</label>
					<select id="Pasta" name="Pasta">
						<option value="1">Yes</option>
						<option value="0">No</option>
					</select>
					</div>
					<div>
					<button type="submit">Submit</button>
					</div>
			</form>
	</body>
</html>