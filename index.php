<?php // Controller for the home page

session_start();

// Connect to database
require_once('models/database.php');
$cs332db = databaseConnection();

if (!isset($cs332db)) {
  echo "Could not connect to the database.";
}
else {
  require_once("models/car.php");
  $model = new Car($cs332db);
  $query = $model->retrieve();  
}
// Show the home page only if logged in
require_once('views/header.php');
require_once('views/home.php');
require_once('views/footer.php');