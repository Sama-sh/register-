<?php
// Perform registration logic here
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phoneNumber'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];

    // Add your registration validation logic here

    // For simplicity, just redirect to a welcome page on successful registration
    header('Location: welcom.php');
    exit;
}
?>
