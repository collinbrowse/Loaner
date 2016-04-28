<?php // Controller for the home page

session_start();

// Show the home page only if logged in
if(!isset($_SESSION['user_id'])){
require_once('views/header.php');
require_once('views/signup.php');
require_once('views/modal.php');
require_once('views/footer.php');
}else{
header('Location: ./account.php');
exit();
}