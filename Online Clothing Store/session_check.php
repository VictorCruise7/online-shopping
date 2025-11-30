<?php
session_start();

// Check if user is logged in
if (isset($_SESSION['UserType'])) {
    // Check for session timeout (5 minutes = 300 seconds)
    if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 300)) {
        // Last request was more than 5 minutes ago
        session_unset();     // unset $_SESSION variable for the run-time 
        session_destroy();   // destroy session data in storage
        header("Location: login.php?timeout=1");
        exit();
    }
    
    // Update last activity time stamp
    $_SESSION['LAST_ACTIVITY'] = time();
} else {
    // If not logged in, redirect to login page
    header("Location: login.php");
    exit();
}
?>
