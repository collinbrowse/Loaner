<?php

session_start();

// ---------------------------
// Handle inserting a new car
// ---------------------------
require_once('models/database.php');
$cs332db = databaseConnection();

if (!isset($cs332db)) {
  // Update this to show an error page
  echo "error";
}
else {
  // Retrieve values from the POST array
  $model = trim($_POST['model']);
  $make = trim($_POST['make']);
  $year = trim($_POST['year']);
  $seats = trim($_POST['seats']);
  $mileage = trim($_POST['mileage']);
  $rating = null;
  $description = trim($_POST['description']);
  $username = trim($_SESSION['user_id']);
  $startRental = trim($_POST['start_rental']);
  $endRental = trim($_POST['end_rental']);
  $location = trim($_POST['location']);
  
  // Create a new model to insert a new car
  require_once('models/car.php');
  $add = new Car($cs332db);
  $add->insert($model, $make, $year, $seats, $mileage, $rating, $description);
  $result = $add->newCar($username, $startRental, $endRental, $location);
}
// Return home
if (isset($_SESSION['user_id'])) {
    header('Location: profile.php');
    exit();
}
else {
    header('Location: ./');
    exit();
}