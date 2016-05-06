<?php // Controller for registration/login

session_start();

// Should have form inputs
if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['task'])) {

    // Connect to database
    require_once('models/database.php');
    $db = databaseConnection();
    
    if (!isset($db)) {
        $_SESSION['message'] = "Could not connect to the database.";
    } else {
        
        // Create user model
        require_once('models/user.php');
        $user = new User($db, $_POST['username'], $_POST['password']);
        
        // Attempt registration
        if ($_POST['task'] == 'register') {
            $success = $user->register( $_POST['type']);
           
            if ($success) {
                $_SESSION['message'] = 'Registered! You can now log in.';
                 $success = $user->registerAdditional($_POST['firstName'], $_POST['lastName'], $_POST['age']);
            } else {
                $_SESSION['message'] = 'Sorry, that username is unavailable.';
            }
        }
        
        // Or attempt login
        elseif ($_POST['task'] == 'login') {
            $user_info = $user->login();
            
            if (isset($user_info)) {
                session_regenerate_id(true); // New session for login
                $_SESSION['user_id'] = $user_info[0];
                $_SESSION['type'] = $user_info[1];
                $profile_info = $user-> getProfileInfo($user_info[1]);
                $_SESSION['firstName'] = $profile_info[0];
                $_SESSION['lastName'] = $profile_info[1];
                $_SESSION['age'] = $profile_info[2];
                
            } else {
                $_SESSION['message'] = 'Wrong username or password.';
            }
        }
    }
}

// Return home
header('Location: ./register.php');
exit();