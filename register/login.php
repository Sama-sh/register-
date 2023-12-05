<?php
// Perform login logic here
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['loginEmail'];
    $password = $_POST['loginPassword'];

    // Add your login validation logic here

    // For simplicity, just redirect to a welcome page on successful login
    header('Location: welcom.php');
    exit;
}
?>
