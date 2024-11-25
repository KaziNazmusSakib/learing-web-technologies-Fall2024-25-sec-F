<?php
session_start();

// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Sanitize and trim the username and password inputs
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    // Check if the session contains the users
    if (isset($_SESSION['users']) && !empty($_SESSION['users'])) {
        $userFound = false;

        // Loop through the session's users to find a match
        foreach ($_SESSION['users'] as $user) {
            // Check if the email and password match
            if ($user['email'] == $username && $user['password'] == $password) {
                // Valid user, set session variables and log them in
                $_SESSION['flag'] = true;              // User is logged in
                $_SESSION['username'] = $user['name']; // Store user's name in session
                $_SESSION['email'] = $user['email'];  // Store user's email in session
                header('Location: home.php');          // Redirect to home page
                exit();
            }
        }

        // If no matching user was found
        echo "Invalid username or password!";
    } else {
        // If no users are registered in the session
        echo "No users are registered yet!";
    }
} else {
    // If the form is not submitted, redirect to the login page
    header('Location: login.html');
}
?>
