<?php
session_start();

// Unset the current user's info but keep the session alive
unset($_SESSION['username']);
unset($_SESSION['email']);
unset($_SESSION['flag']);

header('Location: login.html');
exit();
?>
