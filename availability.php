<?php // A Controller to retrieve cars from the database based on the users request
  session_start();
  
  require_once('models/database.php');
  $cs332db = databaseConnection();
  
  if (!isset($cs332db)) {
    $error = "Could not connect to the database.";
  }
  else {
    // Retrieve values from the POST array
    $state = trim($_POST['state']);
    $city = trim($_POST['city']);
    $start_rental = trim($_POST['start_rental']);
    $end_rental = trim($_POST['end_rental']);
    $seats = trim($_POST['seats']);
    // Create a new model to insert a new car
    require_once('models/car.php');
    $model = new Car($cs332db);
    $query = $model->retrieve($state, $city, $start_rental, $end_rental, $seats);
  }
  
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