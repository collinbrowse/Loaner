<?php // Controller for owner submitting cars for rent

session_start();

// Must be logged in for the owner to add a car
if (!isset($_SESSION['user_id'])) {
    header('Location: ./views/error.php');   // Send back to index
    exit();
}

// Let the user list a car for renting
require('views/headerLoggedIn.php');
require('views/addCar.php');
require('views/footer.php');