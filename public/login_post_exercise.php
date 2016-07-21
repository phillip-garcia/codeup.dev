<?php
function pageController () {
	session_start();
	$data ['username'] = isset($_POST['username']) ? $_POST['username'] : '';
	$data ['password'] = isset($_POST['password']) ? $_POST['password'] : '';
	if (isset($_SESSION['logged_in_user'])) {
		header('Location: authorized.php');
	    exit();
	} elseif ($data['username'] === 'guest' && $data['password'] === 'password') {
		$_SESSION['logged_in_user'] = $data ['username'];
	    header('Location: authorized.php');
	    exit();
	}
	return $data;
}
extract(pageController());
?>
<!DOCTYPE html>
<html>
<head>
    <title>POST Example</title>
    <meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="/login-page.css">
</head>
<body>
	<div id="container">
    <form method="POST">
    	<div id="login">
        <label>Username</label>
        <input type="text" name="username"><br>
        <label>Password</label>
        <input type="text" name="password"><br>
        <input type="submit">
        </div>
    </form>
    </div>
</body>
</html>