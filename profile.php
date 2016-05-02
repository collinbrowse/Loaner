<?php // Controller for profile pages

session_start();

// Must be logged in
if (!isset($_SESSION['user_id'])) {
    header('Location: ./');
    exit();
}
require('views/headerLoggedIn.php');
if($_SESSION['type'] == 'renter') {
    require('views/renterMenu.php');
    require('views/renterProfile.php');
}
else {
    // requre('views/ownerMenu.php');
    require('views/ownerProfile.php');
}
require('views/footer.php');