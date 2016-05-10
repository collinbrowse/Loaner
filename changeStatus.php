<?php

session_start();

// ---------------------------
// 
// ---------------------------
require_once('models/database.php');
$cs332db = databaseConnection();

if (!isset($cs332db)) {
  // Update this to show an error page
  echo "error";
}
else {
  // Retrieve values from the POST array
  $car_id = trim($_POST['car_id']);
  $status = trim($_POST['status']);
  // Create a new model to insert a new car
  require_once('models/car.php');
  $change = new Car($cs332db);
  $change->changeStatus($car_id, $status);
  

}
// Return home

    header('Location: carInventory.php');
    exit();
