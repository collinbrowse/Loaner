<?php // Controller for renting ability

session_start();

require_once('models/database.php');
$cs332db = databaseConnection();
// Must be logged in
if (!isset($_SESSION['user_id'])) {
    header('Location: ./');
    exit();
}

if($_SESSION['type'] == 'renter') {

    $username = $_SESSION['user_id'];

    require_once('models/car.php');
    $car = new Car($cs332db);
    $query = $car->getRentalHistory($username);
    
    require('views/headerLoggedIn.php');
    require('views/renterMenu.php');
    require('views/renterHistory.php');
    require('views/footer.php');
    
}
