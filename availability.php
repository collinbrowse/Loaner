<?php // A Controller to retrieve cars from the database based on the users request
  session_start();
  
  // Grab the required database info
  require_once('models/database.php');
  $cs332db = databaseConnection();
  
  // Check to make sure we are connected to DB
  if (!isset($cs332db)) {
    header('Location: ./views/error.php');   // Send back to error page
    exit();
  }
  // Get proper information from post/db
  else {
    
    // Retrieve values from POST
    $state = trim($_POST['state']);
    $city = trim($_POST['city']);
    $start_rental = trim($_POST['start_rental']);
    $end_rental = trim($_POST['end_rental']);
    $seats = trim($_POST['seats']);
    $username = $_SESSION['user_id'];     // Username of the person who is logged in
 
    // Create a new model to get all of the available cars based on the users request
    require_once('models/car.php');
    $model = new Car($cs332db);
    $query = $model->retrieve($state, $city, $start_rental, $end_rental, $seats);
    
    // This query should return 0 if the user is not currently renting or 1 if the user is currently renting
    $isRenting = $model->isRenting($username);
  
    // If the user is logged in show the apropriate header
    if (!isset($_SESSION['user_id'])) {
      require_once('views/header.php');
      require_once('views/availableCars.php');
      require_once('views/modal.php');
      require_once('views/footer.php');
    }
    else {
      require_once('views/headerLoggedIn.php');
      require_once('views/availableCars.php');
      require_once('views/modal.php');
      require_once('views/footer.php');
    }
  }