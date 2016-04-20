<?php // A Controller to retrieve cars from the database based on the users request

require_once('models/database.php');
$cs332db = databaseConnection();

if (!isset($cs332db)) {
  $error = "Could not connect to the database.";
}
else {
  // Retrieve values from the POST array
  $seats = trim($_POST['seats']);

  // Create a new model to insert a new car
  require_once('models/car.php');
  $model = new Car($cs332db);
  $query = $model->retrieve($seats);
}
require_once('views/header.php');
require_once('views/availableCars.php');
require_once('views/footer.php');