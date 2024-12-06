<?php
// Include the connection file
include('connection.php');

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get data from the form
    $sponsor = $_POST['sponsor'];
    $category = $_POST['category'];
    $app_status = $_POST['app_status'];

    // Create SQL query to insert data
    $query = "INSERT INTO status (sponsor, category, app_status) VALUES (?, ?, ?)";

    // Prepare statement
    if ($stmt = $conn->prepare($query)) {
        // Bind parameters to the query
        $stmt->bind_param("sss", $sponsor, $category, $app_status);

        // Execute the query
        if ($stmt->execute()) {
            echo "Data inserted successfully!";
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close the statement
        $stmt->close();
    } else {
        echo "Error preparing the query: " . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>