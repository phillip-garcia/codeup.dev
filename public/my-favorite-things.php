<?php
function pageController () {
	$data['faves'] = ['fender benders', 'when people fall', 'when hunters get mawled', "when it's all ogre", "when people staring at phones fall"];
	$randoriteThings = $data['faves'][mt_rand(0, count($data['faves']) - 1)];
	return $data;
}

extract(pageController());
?>
<!DOCTYPE html>
<html>
<head>
	<title>My Favorite things...</title>
	<style type="text/css">
		table#t01 tr:nth-child(even) {
    		background-color: #eee;
		}
		table#t01 th tr {
			border: solid black 3px;
		}
	</style>
</head>
<body>
<table id="t01" style="width:40% border:solid black 3px;">
  <tr>
    <th>I enjoy:</th>
  </tr>
  <tr>
	<?php foreach ($faves as $fave): ?>
    	<td><?= $fave; ?></td>
    	</tr>
	<?php endforeach; ?>
</table>
</body>
</html>