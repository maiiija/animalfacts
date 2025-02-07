<?php
	include 'fact_database.php';
	$query = "SELECT * FROM animalfacts ORDER BY id";
	$facts = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<title>Animal Facts</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body class="fs-5 lh-3">
<div class="container py-4">

<h1 class="text-center p-1 mt-2">Animal Facts</h1>
<p class="text-center p-1 "><a class="link-dark" href="new_animal_fact.php">Add your own animal fact!</a></p>

<table class="table table-hover">
<thead>
	<tr>
	<th scope="row"></th>
	  <th>Fact</th>
	  <th>Category of animal</th>
	  <th>Native to</th>
	  <th>Date entered</th>
	</tr>
	</thead>

<?php while ($row = mysqli_fetch_assoc($facts)) :  ?>
<tbody>
<tr>
<th scope="row"></th>
  <td><?php echo stripslashes($row["fact"]); ?></td>
  <td><?php echo stripslashes($row["animal"]); ?></td>
  <td><?php echo $row["location"]; ?></td>
  <td><?php echo $row["date"]; ?></td>
</tr>
</tbody>

<?php endwhile;  ?>
</table>

</div>
</body>
</html>