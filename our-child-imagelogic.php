<?php
require 'connection.php';

if (isset($_POST['upload'])) {
    // Handle file upload
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Validate image type and size
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if ($check === false) {
        echo "File is not an image.";
        exit();
    }

    if ($_FILES["image"]["size"] > 5000000) {
        echo "File is too large.";
        exit();
    }

    // Allow only certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        echo "Only JPG, JPEG, PNG & GIF files are allowed.";
        exit();
    }

    // Upload the file
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        // Insert image path and alt text into the database
        $alt_text = isset($_POST['alt_text']) ? $_POST['alt_text'] : '';
        $sql = "INSERT INTO picture_of_our_children (image_path, alt_text) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $target_file, $alt_text);

        if ($stmt->execute()) {
            echo "Image uploaded and saved successfully.";
            echo '<script>
            setTimeout(function(){
                window.location.href="adminpanel.php";
            }, 2000); 
        </script>';
        } else {
            echo "Error saving image information to the database.";
        }
        $stmt->close();
    } else {
        echo "Error uploading file.";
    }
}
?>
