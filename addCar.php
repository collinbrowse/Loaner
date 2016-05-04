<?php // Controller for some internal activity

session_start();

// Must be logged in
if (!isset($_SESSION['user_id'])) {
    header('Location: ./');
    exit();
}

// Show whatever this activity is
require('views/headerLoggedIn.php');
require('views/addCar.php');
require('views/footer.php');