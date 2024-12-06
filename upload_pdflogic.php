<?php
error_reporting(E_ALL);
ini_set('display_errors', E_ALL);

include "connection.php"; 

if (isset($_POST['submit'])) {
    if (isset($_FILES['pdf'])) {
        $pdfFileName = $_FILES['pdf']['name'];
        $description = $_POST['description_pdf'];
        $targetDirectory = "uploads/";

        if (!is_dir($targetDirectory)) {
            mkdir($targetDirectory, 0777, true);
        }

        $targetFilePath = $targetDirectory . basename($pdfFileName);
        $stmt = $conn->prepare("INSERT INTO announcement (description_pdf, pdf) VALUES (?, ?)");
        $stmt->bind_param("ss", $description, $pdfFileName);

        if ($stmt->execute()) {
            if (move_uploaded_file($_FILES['pdf']['tmp_name'], $targetFilePath)) {
                echo "PDF uploaded and data inserted successfully!";
                echo '<script>
                    setTimeout(function(){
                        window.location.href="adminpanel.php";
                    }, 2000); 
                </script>';
                echo "Stored file path: " . $targetFilePath; // Debug: check file path
            } else {
                echo "PDF upload failed. Please try again.";
            }
        } else {
            echo "Failed to insert data into database: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "No file uploaded.";
    }
}

$conn->close();
?>
