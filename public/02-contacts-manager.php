<?php 
session_start();
	require 'model.php';
	require 'validation.php';
	require 'middleware.php';
	require 'controller.php';
	require 'view.php'; 
function pageController() {
	$data = [];
	$data['contacts'] = loadContacts();
	if (isset($_GET['search-name'])) {
		$data['contacts'] = searchContact($data['contacts'], $_GET['search-name']);
	} 
	if (isset($_POST['inputName'])) {
		newContact($data['contacts'], $_POST['inputName'], $_POST['inputNumber']);
	}
	if (isset($_REQUEST['name'])) {
		deleteContacts($data['contacts'], $_REQUEST['name']);
	}
	return $data;
}
extract(pageController());
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link
			rel="stylesheet"
			href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
			integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7"
			crossorigin="anonymous"
		>
		<title>Contacts manager</title>
	</head>
	<body>
		<div class="container">
			<section class="row">
				<div class="col-md-8">
					<header class="page-header">
						<h1>Contacts Manager</h1>
					</header>
				</div>
				<div class="col-md-4" style="padding-top: 3.5em">
					<form class="form-inline" method="get">
						<div class="form-group">
							<input
								type="text"
								class="form-control"
								id="search-name"
								name="search-name"
								placeholder="John Doe">
						</div>
						<button type="submit" class="btn btn-default">
							<span class="glyphicon glyphicon-search" aria-hidden="true">
							</span>
							Search
						</button>
					</form>
				</div>
			</section>
			<article class="row contacts">
				<section class="col-md-6">
					<table class="table table-striped table-bordered table-hover">
						<thead>
							<tr>
								<th>Name</th>
								<th>Number</th>
								<th>Delete</th>
							</tr>
						</thead>
						<tbody>
							<!-- Your contacts should be here -->
							<?php foreach ($contacts as $contact):  ?>
							<tr>
								<td><?= $contact['name'] ?></td>
								<td><?= formatNumber($contact['number']) ?></td>
								<td>
									<!-- The query string for this one should contain the contact name -->
									<a class="btn btn-danger" href="?name=<?= $contact['name'] ?>">
										<span class="glyphicon glyphicon-trash" aria-hidden="true">
										</span>
										Delete
									</a>
								</td>
							</tr>
							<?php endforeach ?>
						</tbody>
					</table>
				</section>
				<section class="col-md-6">
					<form method="post" class="form-horizontal" action="02-contacts-manager.php">
						<div class="form-group">
							<label for="name" class="col-sm-2 control-label">
								Name
							</label>
							<div class="col-sm-10">
								<input
									type="text"
									class="form-control"
									name="inputName"
									id="name"
									required>
							</div>
						</div>
						<div class="form-group">
							<label for="number" class="col-sm-2 control-label">
								Number
							</label>
							<div class="col-sm-10">
								<input
									type="number"
									class="form-control"
									name="inputNumber"
									id="number"
									required>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<button type="submit" class="btn btn-primary">
									<span class="glyphicon glyphicon-floppy-disk" aria-hidden="true">
									</span>
									Save
								</button>
							</div>
						</div>
					</form>
				</section>
			</article>
		</div>
		<script
			src="https://code.jquery.com/jquery-2.2.4.min.js"
			integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
			crossorigin="anonymous"
		></script>
		<script
			src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
			integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
			crossorigin="anonymous"
		></script>
	</body>
</html>