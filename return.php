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
    
    // Create a new model to allow a user to return a car
    require_once('models/car.php');
    $change = new Car($cs332db);
    $change->changeStatus($car_id, $status);
    
  }

// Return the renterHistory
header('Location: ./renterHistory.php');
exit();