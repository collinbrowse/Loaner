<?php

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
  
  // Create a new model to insert a new car
  require_once('models/car.php');
  $add = new Car($cs332db);
  $add->insert($model, $make, $year, $seats, $mileage, $rating, $description);
}
// Return home
header('Location: ./');
exit();