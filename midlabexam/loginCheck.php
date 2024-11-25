<?php
session_start();

if (isset($_POST['submit'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    // Check if the users are registered in the session
    if (isset($_SESSION['users'])) {
        $userFound = false;

        // Search for matching user credentials
        foreach ($_SESSION['users'] as $user) {
            if ($user['email'] == $username && $user['password'] == $password) {
                // Valid user, create session for logged in user
                $_SESSION['flag'] = true;
                $_SESSION['username'] = $user['name'];  // Store user's name
                $_SESSION['email'] = $user['email'];    // Store user's email
                header('Location: home.php');
                exit();
            }
        }

        echo "Invalid username or password!";
    } else {
        echo "No users registered!";
    }
} else {
    header('Location: login.html');
}
?>
