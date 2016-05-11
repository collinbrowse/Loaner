<?php // Controller for logging out

session_start();

// End login session
$_SESSION = array();
setcookie(session_name(), FALSE);
session_destroy();

// Return to home page
header('Location: ./');
exit();