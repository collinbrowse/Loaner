<?php // Controller for renting ability

session_start();

// Must be logged in
if (!isset($_SESSION['user_id'])) {
    header('Location: ./');
    exit();
}

if($_SESSION['type'] == 'renter') {
    require('views/headerLoggedIn.php');
    require('views/renterMenu.php');
    require('views/rentalSearchBar.php');
    require('views/footer.php');
}
