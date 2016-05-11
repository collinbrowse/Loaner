<?php // Controller for some internal activity

session_start();

// Must be logged in
if (!isset($_SESSION['user_id'])) {
    header('Location: ./views/error.php');    // Send to error page
    exit();
}

  require_once('models/database.php');
  $cs332db = databaseConnection();
  // Make sure we are connected to the database
  if (!isset($cs332db)) {
    header('Location: ./');   // Send back to index
    exit();
  }
  else {
    // Grab the username of the person currently signed in
    $username = trim($_SESSION['user_id']);
    
    // Create a new model to view the cars that the user has posted on the website
    require_once('models/car.php');
    $model = new Car($cs332db);
    $query = $model->getOwnerCars($username);
             
    // Show the table with the cars and the correct header
    require('views/headerLoggedIn.php');
    require('views/carInventory.php');
    require('views/footer.php');
    
  }



