<?php 
function pageController() {
	$data = [];
	if(isset($_GET['points'])) { 
	    $data ['points'] = $_GET['points'];
	} else {
		$data ['points'] = 0;
	}
    $randomNumber = isset($_SESSION['randomNumber']) ? $_SESSION['randomNumber'] : mt_rand(1, 30);
    $_SESSION['randomNumber'] = $randomNumber;

	return $data;
}
extract(pageController());
?>
<!DOCTYPE html>
<html>
<head>
	<title>乒 PANG!</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="ping_pong.css">
	<style type="text/css">
		body {
			background-image: url(img/china.png);
			background-repeat: no-repeat;
			background-size: contain;
			background-position: center;
			height: 100vh;
			width: 100vmax;
			background-color: #DE2910;
		}
	</style>
</head>
<body>
<h1 id="pingPang">乒乓</h1>
	<div id="scoreBox">
		Score: <br>
		USA: <br>
		China: <?=$points;?> 
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
				<div class="possibleFields ball" value= 1></div>
				<div class="possibleFields ball" value= 2></div>	
				<div class="possibleFields ball" value= 3></div>	
				<div class="possibleFields ball" value= 4></div>
				<div class="possibleFields ball" value= 5></div>	
			</div>
			<div class="col2 collumns">
				<div class="possibleFields ball" value= 6></div>
				<div class="possibleFields ball" value= 7></div>	
				<div class="possibleFields ball" value= 8></div>	
				<div class="possibleFields ball" value= 9></div>
				<div class="possibleFields ball" value= 10></div>	
			</div>
			<div class="col3 collumns">
				<div class="possibleFields ball" value= 11></div>
				<div class="possibleFields ball" value= 12></div>	
				<div class="possibleFields ball" value= 13></div>	
				<div class="possibleFields ball" value= 14></div>
				<div class="possibleFields ball" value= 15></div>
			</div>
			<div class="col4 collumns">
				<div class="possibleFields ball" value= 16></div>	
				<div class="possibleFields ball" value= 17></div>
				<div class="possibleFields ball" value= 18></div>	
				<div class="possibleFields ball" value= 19></div>
				<div class="possibleFields ball" value= 20></div>	
			</div>
			<div class="col5 collumns">
				<div class="possibleFields ball" value= 21></div>
				<div class="possibleFields ball" value= 22></div>	
				<div class="possibleFields ball" value= 23></div>	
				<div class="possibleFields ball" value= 24></div>
				<div class="possibleFields ball" value= 25></div>
			</div>
			<div class="col6 collumns">
				<div class="possibleFields ball" value= 26></div>	
				<div class="possibleFields ball" value= 27></div>
				<div class="possibleFields ball" value= 28></div>	
				<div class="possibleFields ball" value= 29></div>
				<div class="possibleFields ball" value= 30></div>	
			</div>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
	<script type="text/javascript">
	 var number = <?= $randomNumber ?>;
	 $(this).is(':visible');
	</script>

</body>
</html>











