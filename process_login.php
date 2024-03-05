<?php
session_start();

// Check if form submitted
if (isset($_POST['login'])) {
    // Retrieve username and password from form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Normally, you would validate the username and password against a database
    // For simplicity, let's just check if they match a predefined value
    if ($username === 'admin' && $password === 'password') {
        // Set session variables
        $_SESSION['username'] = $username;

        // Redirect to dashboard or any other page
        header('Location: dashboard.php');
        exit();
    } else {
        // If username or password is incorrect, redirect back to login page
        header('Location: login.php');
        exit();
    }
} else {
    // If user tries to access this page directly without submitting the form, redirect to login page
    header('Location: login.php');
    exit();
}
?>
