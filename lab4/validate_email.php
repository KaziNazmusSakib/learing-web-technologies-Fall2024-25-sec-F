<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST['email']);
    $errors = [];
 
    // Rule A: Cannot be empty
    if (empty($email)) {
        $errors[] = "Email cannot be empty.";
    }
 
    // Rule B: Must be a valid email address
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Email must be a valid email address (e.g., anything@example.com).";
        header('location: Email.html');
    }
 
    // Display errors or success message
    if (!empty($errors)) {
        echo "<h3>Validation Errors:</h3>";
        echo "<ul>";
        header('location: Email.html');
        foreach ($errors as $error) {
            echo "<li>$error</li>";
            
        }
        echo "</ul>";
    } else {
        echo "<h3>Email is valid!</h3>";
        header('location: Email.html');
    }
}
?>