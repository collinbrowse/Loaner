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
  $brand = trim($_POST['brand']);
  $model = trim($_POST['model']);
  $year = trim($_POST['year']);
  $mileage = trim($_POST['mileage']);
  $rating = trim($_POST['rating ']);
  
  // Create a new model to insert a new car
  require_once('models/car.php');
  $model = new Roster($cs332db);
  $model->insert($brand, $model, $year, $mileage, $rating);
}

exit();