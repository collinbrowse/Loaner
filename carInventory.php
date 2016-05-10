<?php // Controller for some internal activity

session_start();

// Must be logged in
if (!isset($_SESSION['user_id'])) {
    header('Location: ./');
    exit();
}

require_once('models/database.php');
  $cs332db = databaseConnection();
  
  if (!isset($cs332db)) {
    $error = "Could not connect to the database.";
  }
  else {
    // Retrieve values from the POST array
    $username = trim($_SESSION['user_id']);
    
    require_once('models/car.php');
    $model = new Car($cs332db);
    $query = $model->getOwnerCars($username);
  }




// Show whatever this activity is
require('views/headerLoggedIn.php');
require('views/carInventory.php');
require('views/footer.php');