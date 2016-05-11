<?php // Controller for renting ability

session_start();
  
  // Grab the required database info
  require_once('models/database.php');
  $cs332db = databaseConnection();
  
  // Must be logged in
  if (!isset($_SESSION['user_id'])) {
      header('Location: ./');
      exit();
  }
  
  // Only if they are a renter can they proceed
  if($_SESSION['type'] == 'renter') {
      
      // Grab the current users username
      $username = $_SESSION['user_id'];
  
      // Create a new model to get all of the cars that a renter has once rented
      require_once('models/car.php');
      $car = new Car($cs332db);
      $query = $car->getRentalHistory($username);
      
      require('views/headerLoggedIn.php');
      require('views/renterMenu.php');
      require('views/renterHistory.php');
      require('views/footer.php');
      
  }
