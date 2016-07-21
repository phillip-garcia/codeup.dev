<?php 
//function pageController() {
//	$ball = $_GET[1];
//	$counter = isset($_GET['counter']) ? $_GET['counter'] :0;
//	$randomNumber = isset($_GET['randomNumber']) ? $_GET['randomNumber'] : //mt_rand(1, 30);
//	$_GET['randomNumber'] = $randomNumber;
//
//}
//extract(pageController());
?>
<!DOCTYPE html>
<html>
<head>
	<title>PING 乓</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="ping_pong.css">
	<style type="text/css">
		body {
			background-image: url(img/america.png);
			background-repeat: no-repeat;
			background-size: contain;
			background-position: center;
			height: 100vh;
			width: 100vmax;
			background-color: white;
		}
	</style>
</head>
<body>
<h1 id="pingPong">Ping-Pong!</h1>
	<div id="scoreBox">
		Score: <br>
		USA: <br>
		China: 
	</div>
	<div id="playingField">
		<div>		
			<div id="table"></div>
			<div id="net">
				<div id="net_rail1"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns"></div>
				<div class="net_columns" id="lastCollumn"></div>
				<div id="netRow1"></div>
				<div id="netRow2"></div>
				<div id="netRow3"></div>
				<div id="netRow4"></div>
				<div id="netRow5"></div>
				<div id="netRow6"></div>
				<div id="netRow7"></div>
				<div id="netRow8"></div>
				<div id="net_rail2"></div>
			</div>
		</div>
		<div id="grid">
			<div class="col1 collumns">
				<div class="possibleFields" value= 1></div>
				<div class="possibleFields" value= 2></div>	
				<div class="possibleFields" value= 3></div>	
				<div class="possibleFields" value= 4></div>
				<div class="possibleFields" value= 5></div>	
			</div>
			<div class="col2 collumns">
				<div class="possibleFields" value= 6></div>
				<div class="possibleFields" value= 7></div>	
				<div class="possibleFields" value= 8></div>	
				<div class="possibleFields" value= 9></div>
				<div class="possibleFields" value= 10></div>	
			</div>
			<div class="col3 collumns">
				<div class="possibleFields" value= 11></div>
				<div class="possibleFields" value= 12></div>	
				<div class="possibleFields" value= 13></div>	
				<div class="possibleFields" value= 14></div>
				<div class="possibleFields" value= 15></div>
			</div>
			<div class="col4 collumns">
				<div class="possibleFields" value= 16></div>	
				<div class="possibleFields" value= 17></div>
				<div class="possibleFields" value= 18></div>	
				<div class="possibleFields" value= 19></div>
				<div class="possibleFields" value= 20></div>	
			</div>
			<div class="col5 collumns">
				<div class="possibleFields" value= 21></div>
				<div class="possibleFields" value= 22></div>	
				<div class="possibleFields" value= 23></div>	
				<div class="possibleFields" value= 24></div>
				<div class="possibleFields" value= 25></div>
			</div>
			<div class="col6 collumns">
				<div class="possibleFields" value= 26>26</div>	
				<div class="possibleFields" value= 27>27</div>
				<div class="possibleFields" value= 28>28</div>	
				<div class="possibleFields" value= 29>29</div>
				<div class="possibleFields" value= 30>30</div>	
			</div>
		</div>
	</div>
	<script type="text/javascript">
		var randomNumber = Math.floor((Math.random() * 30) + 1);
		$('value').attr('src', 'my_image_path/' + number + '.jpg')
	</script>
</body>
</html>











