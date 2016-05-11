<?php // Controller to handle inserting a new car by the renter

session_start();
  
  require_once('models/database.php');
  $cs332db = databaseConnection();
  
  if (!isset($cs332db)) {
    header('Location: ./views/error.php');   // Send back to error page
    exit();
  }
  else {
    // Retrieve values from POST 
    $model = trim($_POST['model']);
    $make = trim($_POST['make']);
    $year = trim($_POST['year']);
    $seats = trim($_POST['seats']);
    $mileage = trim($_POST['mileage']);
    $description = trim($_POST['description']);
    $status = trim($_POST['status']);
    $username = trim($_SESSION['user_id']);
    $startRental = trim($_POST['start_rental']);
    $endRental = trim($_POST['end_rental']);
    $city = trim($_POST['city']);
    $state = trim($_POST['state']);
    
    // Create a new model to insert a new car
    require_once('models/car.php');
    $add = new Car($cs332db);
    $add->insert($model, $make, $year, $seats, $mileage, $description, $username);
    // Make the Car available to rent
    $add->newCar($status, $city, $state, $startRental, $endRental);
  }
  // Return to profile if logged in
  if (isset($_SESSION['user_id'])) {
      header('Location: profile.php');
      exit();
  } 
  else { // Return Home
      header('Location: ./');
      exit();
  }