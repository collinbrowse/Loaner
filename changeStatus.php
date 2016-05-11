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
    // Retrieve values from POST
    $car_id = trim($_POST['car_id']);
    $status = trim($_POST['status']);
    
    // Create a new model to change the status of a car
    require_once('models/car.php');
    $change = new Car($cs332db);
    $change->changeStatus($car_id, $status);
  }
  
// Return to the cars the owner has posted on the website
header('Location: carInventory.php');
exit();
