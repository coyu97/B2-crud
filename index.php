<?php require_once "./error_reporting.php"; ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
			integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
			crossorigin="anonymous" />
	</head>
	<body>
		<div class="container">

			<h1>B2 crud system</h1>

			<table class="table">
				<tbody>
					<?php include "read.php"; ?>
				</tbody>
			</table>

			<form class="form-inline m-2" action="create.php" method="POST">
				<label for="name">Naam:</label>
				<input type="text" class="form-control m-2" id="name" name="name">
				<label for="lastname">Achternaam:</label>
				<input type="text" class="form-control m-2" id="lastname" name="lastname">
				<label for="dateofbirth">Geboortedatum:</label>
				<input type="date" class="form-control m-2" id="dateofbirth" name="dateofbirth">
				<button type="submit" name="submit" class="btn btn-primary">Add</button>
			</form>

		</div>
	</body>
</html>