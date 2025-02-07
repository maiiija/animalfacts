<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title>Enter Your Animal Fact</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

</head>

<body class="fs-5 lh-3">
<div class="row justify-content-center py-4 mx-auto" id="container">

<h1 class="text-center p-1 mt-2">Enter Your Animal Fact</h1>

<p class="text-center p-1"><a class="link-dark" href="animal_fact_list.php">View all animal facts!</a></p>

<div class="col-md-6" id="animalfacts">

<form id="factsform" method="post" action="enter_animal.php" autocomplete="off">

  <label class="form-label fw-bold p-1 mt-2" for="fact">Fact </label>
	<input class="form-control mx-auto p-2" type="text" name="fact" id="fact" maxlength="140" required>

    <label class="form-label fw-bold p-1 mt-2" for="animal">Category of animal</label>
	<input class="form-control mx-auto p-2" type="text" name="animal" id="animal" maxlength="30" required>

    <label class="form-label fw-bold p-1 mt-2" for="location">Native to</label>
	<input class="form-control mx-auto p-2" type="text" name="location" id="location" maxlength="50" required>
    
	<input class="btn btn-warning mt-3" type="submit" id="submit" value="Submit">
</form>
</div>
</div> 
</body>
</html>
