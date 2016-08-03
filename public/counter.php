<?php 
	function pagecontroller() {
		$data = [];
		if(isset($_GET['counter'])) { 
		    $data ['counter'] = $_GET['counter'];
		} else {
			$data ['counter'] = 0;
		}
		return $data;
	}
	extract(pagecontroller());
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Counter</title>
		<style type="text/css">
			.buttons {
				height:50px; 
				width:50px;
				font-size: 40px;
				font-weight: bold;
				margin: 5px;
			}
			#counter {
				float: left;
				border: black solid 1px;
				margin-top: 5%;
				margin-left: 1%;
				font-size: 20px;
			}
			#buttonsDiv {
				float: left;
			}
			h1{
				font-size: 75px;
			}
		</style>
	</head>
	<body>
	<h1>Let's Count!</h1>
	<div id="container">
		<div id= "buttonsDiv">
			<div>
			<a href="/counter.php?counter=<?= $counter +1 ?>"> <button class="buttons">&uarr;</button></a>
			</div>
			<div>
			<a href="/counter.php?counter=<?= $counter -1 ?>"><button class="buttons">&darr;</button></a>
			</div>
		</div>
		<div id="counter"> 
		<p>You have clicked this: <?=$counter;?> times... Go get a life!</p>
		</div>
	</div>
	</body>
</html>