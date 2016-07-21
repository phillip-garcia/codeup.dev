<?php
function pageController () {
	session_start();
	$reset = isset($_GET['reset']) ? $_GET['reset'] : 0;
	if (!isset($_SESSION['logged_in_user'])) {
	    header('Location: login_post_exercise.php');
	    exit();
	} elseif ($reset == 1) {
		session_destroy();
	   	session_unset($_SESSION['logged_in_user']);
	    session_regenerate_id(true);
		header('Location: login_post_exercise.php');
	}
	return ['reset' => $reset];
}
extract(pageController());
?>
<!DOCTYPE html>
<html>
<head>
	<title>Authorized</title>
	<meta charset="utf-8">
</head>
<body>
<h2><?=$_SESSION['logged_in_user']?>, YOU ARE AUTHORIZED!!!!!!!!!!</h2>
<a href="authorized.php?reset=1"> <button class="buttons">Log out...</button></a>
</body>
</html>