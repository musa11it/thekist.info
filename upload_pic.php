<?php
session_start();
require_once 'connection.php';

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Handle file upload
if (isset($_POST['upload']) && isset($_FILES['profile_picture'])) {
    $user_id = $_SESSION['user_id'];
    $file_name = $_FILES['profile_picture']['name'];
    $file_tmp = $_FILES['profile_picture']['tmp_name'];
    $file_size = $_FILES['profile_picture']['size'];
    $file_error = $_FILES['profile_picture']['error'];

    // Validate file (e.g., file size, type)
    $allowed_extensions = ['jpg', 'jpeg', 'png', 'gif'];
    $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

    if (in_array($file_ext, $allowed_extensions) && $file_error === 0 && $file_size <= 5000000) {
        // File upload path
        $upload_dir = 'uploads/';
        $new_file_name = uniqid('', true) . "." . $file_ext;
        $upload_path = $upload_dir . $new_file_name;

        // Move uploaded file to destination folder
        if (move_uploaded_file($file_tmp, $upload_path)) {
            // Update profile picture in the database
            $query = "UPDATE registration SET profile_picture = ? WHERE id = ?";
            $stmt = $conn->prepare($query);
            $stmt->bind_param('si', $new_file_name, $user_id);
            $stmt->execute();

            // Redirect to the profile page after successful upload
            header("Location: dashboard.php");
        } else {
            echo "File upload failed!";
        }
    } else {
        echo "Invalid file type or size too large!";
    }
} else {
    echo "No file uploaded!";
}
?>
