<?php
session_start();

if (isset($_POST['register'])) {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $dob = $_POST['dob'];
    $country = $_POST['country'];

    // Initialize 'users' session array if not set
    if (!isset($_SESSION['users'])) {
        $_SESSION['users'] = [];
    }

    // Check if the email already exists in the session
    foreach ($_SESSION['users'] as $user) {
        if ($user['email'] == $email) {
            //echo "This email is already registered. Please <a href='login.html'>login</a>.";
            header('Location: login.html');
            exit();
        }
    }

    // Store the new user in the session
    $_SESSION['users'][] = [
        'name' => $name,
        'email' => $email,
        'password' => $password,
        'dob' => $dob,
        'country' => $country
    ];

    echo "Registration successful! <br><a href='login.html'>Go to Login</a>";
}
?>
