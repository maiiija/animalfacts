<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    $server   = "localhost";
    $username = "root";
    $password = "";
    $database = "animalfacts";

    try {
        $conn = mysqli_connect($server, $username, $password, $database);

        if (!$conn) {
            throw new Exception();
        }
    } catch (Exception $e) {
        echo "Error: Unable to connect to database. ";
        echo " Reason: " . $e->getMessage();
        echo ". mysqli_ error number: " . mysqli_connect_errno();
        exit;
    }

?>