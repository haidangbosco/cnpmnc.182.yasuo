<!DOCTYPE html>
<html>
<head>
	<title>List of Books</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<?php 
	for($i=0;$i<10;++$i){
	?>
	<div class="container border">
		<div class="row">
		<img class="image col-3" src="https://via.placeholder.com/150x150">
		<div class="col-9">
			<span class="h4">Name of The Book</span>
			<div class="row">
				<p class="col-10"> Abstraction: Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<div class="col-2">
					<div class="btn btn-success">Available</div>
				</div>
			</div>
			<div class="row">
				<span class="col-6">Name of Provider</span>
				<span class="col-6">6.7/10</span>
			</div>
		</div>
		</div>
	</div>
	<?php
	}
	?>
</body>
</html>