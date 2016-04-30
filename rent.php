<?php

session_start();

require_once('models/database.php');
$cs332db = databaseConnection();

if (!isset($cs332db)) {
  $error = "Could not connect to the database.";
}
else {
  
    $car_id = $_POST['car_id'];
    // Create a new model to remove a car
    require_once('models/car.php');
    $model = new Car($cs332db);
    $query = $model->rent($car_id);
}

// Return home
header('Location: ./');
exit();