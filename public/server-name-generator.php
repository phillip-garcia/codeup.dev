<?php 
function pageController() {
$data['array1'] = ['desolate', 'miserable', 'dejected', 'gloomy', 'downcast', 'crestfallen', 'downhearted', 'morose', 'melancholy', 'miserable'];
$data['array2'] = ['cat', 'puppy', 'panda', 'monkey', 'elephant', 'dolphin', 'whale', 'octopus', 'platypus', 'ocelot'];
$data['randimal'] = $data['array1'][mt_rand(0, count($data['array1']) - 1)]. " " . $data['array2'][mt_rand(0, count($data['array2']) - 1)];
return $data;
}
extract(pageController());
?>
<!DOCTYPE html>
<html>
<head>
	<title>name gen.</title>
</head>
<body>
<div style="border: solid black 3px; text-align: center; background-color: aquamarine">
<h1 style="font-size: 75px; color: pink">Everybody loves a:</h1>
<h3 style="font-size: 50px; color: pink"><?= "$randimal";?></h3>
</div>
</body>
</html>