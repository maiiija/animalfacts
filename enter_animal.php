<?php

include 'fact_database.php';

function sanitizeMySQL($conn, $var) {
    $var = strip_tags($var);
    $var = mysqli_real_escape_string($conn, $var);
    return $var;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title>Enter A New Animal Fact</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body class="fs-5 lh-3">
<div class="py-4" id="container">

<h1 class="text-center p-1 mt-2">New Animal Fact</h1>

<div id="response">
  <p class="text-center">

<?php
if (isset($_POST["fact"]) && isset($_POST["animal"])) {

    $fact = sanitizeMySQL($conn, $_POST["fact"]);
    $animal = sanitizeMySQL($conn, $_POST["animal"]);
    $location = sanitizeMySQL($conn, $_POST["location"]);

    date_default_timezone_set("America/New_York");
    $date = date('m-d-Y', time());

    $query = "INSERT INTO animalfacts (fact, animal, location)
    VALUES (?, ?, ?)";

    if ( $stmt = mysqli_prepare($conn, $query) ) {

        mysqli_stmt_bind_param($stmt, "sss",
        $fact,
        $animal,
        $location,
        );

        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
    }
    echo "Your animal fact was recorded successfully! Enter another fact or return to the list of facts using the links below.";
} else {
    echo "Your record was unsuccessful! Try again or return to the list of facts using the links below.";
}

?>

<p class="text-center p-1"><a class="link-dark" href="new_animal_fact.php">Enter a new animal fact</a></p>
<p class="text-center p-1"><a class="link-dark" href="animal_fact_list.php">View all animal facts</a></p>
</p>
</div>
</div>


</body>
</html>