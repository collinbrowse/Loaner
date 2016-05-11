<?php

session_start();
  
  // Grab the required database info
  require_once('models/database.php');
  $cs332db = databaseConnection();
  
  if (!isset($cs332db)) {
    header('Location: ./views/error.php');   // Send back to error page
    exit();
  }
  else {
    // Grab info from POST
    $username = trim($_SESSION['user_id']);
    $car_id = trim($_POST['car_id']);
    $start_rental = trim($_POST['start_rental']);
    $end_rental = trim($_POST['end_rental']);  
    $state = trim($_POST['state']);
    $city = trim($_POST['city']);

    // Create a new model to allow a renter to select a car for rental
    require_once('models/car.php');
    $car = new Car($cs332db);
    $query = $car->rent($username, $car_id, $start_rental, $end_rental, $state, $city);
  }
  
// Return home
header('Location: ./renterHistory.php');
exit();