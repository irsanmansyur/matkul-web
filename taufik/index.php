<?php
// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>

<html>

<head>
	<title>Daftar User oleh Taufik</title>
	<link rel="stylesheet" href="css/material-dashboard.min.css">
</head>

<body>
	<div class="container my-5">
		<h1>Daftar User</h1>
		<a href="add.php" class="btn btn-primary">Add New User</a>
		<table class="table">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Nama User</th>
					<th scope="col">Email</th>
					<th scope="col">No HP</th>
				</tr>
			</thead>
			<tbody>

				<?php
				$i = 1;
				while ($user_data = mysqli_fetch_array($result)) { ?>
					<tr>
						<th scope="row"><?= $i++ ?></th>
						<td><?= $user_data["name"] ?></td>
						<td><?= $user_data['email'] ?></td>
						<td><?= $user_data['mobile'] ?></td>
						<td><a href='#edit.php?id=<?= $user_data['id'] ?>' class="badge badge-primary">Update</a> | <a class="badge badge-danger" href='#delete.php?id=<?= $user_data['id'] ?>'>Delete</a></td>
					</tr>
					</tr>
				<?php }; ?>
			</tbody>
		</table>
	</div>
</body>

</html>