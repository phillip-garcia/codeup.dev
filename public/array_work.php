<?php  
	$array = ['a','b','c','d','e','f','g','h','i'];
	function vowelLess ($array) {
		$vowels = ['a','e','i','o','u'];
		$string = str_replace($vowels, "", implode('', $array));
		$array = str_split($string);
	return $array;
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Array Work</title>
</head>
<body>
	<div>
	<h1>Here is an array without vowels, because nobody asked if we should, only if we can...</h1>
		<?php print_r(vowelLess($array)); ?>
	</div>
</body>
</html>



expressions
literal
$a= 5;











