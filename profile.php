<?php // Controller for profile pages

session_start();

  // Must be logged in
  if (!isset($_SESSION['user_id'])) {
      header('Location: ./');
      exit();
  }
  
  require('views/headerLoggedIn.php');
  
  // Send to the proper profile page
  if($_SESSION['type'] == 'renter') {   
    require('views/renterProfile.php');     //Renter's profile
  }
  else {
      require('views/ownerProfile.php');    // Owner's profile
  }
  require('views/footer.php');