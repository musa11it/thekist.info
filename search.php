<?php
include "connection.php";

if (isset($_GET['search'])) {
    $searchTerm = strtolower(trim($_GET['search']));

    // Redirect to different pages based on search input
    switch ($searchTerm) {
        case 'sign up':
            header("Location: form.php");
            break;
        case 'contact':
            header("Location: contact.php");
            break;
        case 'login':
            header("Location: login.php");
            break;
        case 'services':
            header("Location: #service");
            break;
        default:
            header("Location: no_results.php");
            break;
    }
    exit(); // Make sure to exit after the redirect
}
?>
