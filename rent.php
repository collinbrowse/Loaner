<?php

session_start();

require_once('models/database.php');
$cs332db = databaseConnection();

if (!isset($cs332db)) {
  $error = "Could not connect to the database.";
}
else {
    $username = trim($_SESSION['user_id']);
    $car_id = trim($_POST['car_id']);
    $start_rental = trim($_POST['start_rental']);
    $end_rental = trim($_POST['end_rental']);  
    $location = trim($_POST['location']);

    require_once('models/car.php');
    $car = new Car($cs332db);
    $query = $car->rent($username, $car_id, $start_rental, $end_rental, $location);
}

// Return home
header('Location: ./renterHistory.php');
exit();