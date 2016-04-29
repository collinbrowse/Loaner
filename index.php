<?php // Controller for the home page
session_start();

  // Show the home page
  if(!isset($_SESSION['user_id'])){
    require_once('views/header.php');
    require_once('views/home.php');
    require_once('views/modal.php');
    require_once('views/footer.php');
  }
  else {
    require_once('views/headerLoggedIn.php');
    require_once('views/home.php');
    require_once('views/modal.php');
    require_once('views/footer.php');
  }
