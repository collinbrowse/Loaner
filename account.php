<?php
session_start();

if($_SESSION['type']=='renter'){
    require_once('views/headerLoggedIn.php');
    if (isset($_GET['renterRent'])) {
        require_once('views/renterRent.php');
    }
    else {
        require_once('views/renterProfile.php');
    }
    require_once('views/footer.php');
}
else {
    require_once('views/headerLoggedIn.php');
    require_once('views/ownerProfile.php');
    require_once('views/footer.php');
}