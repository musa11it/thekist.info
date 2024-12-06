<?php
// Enable error reporting for debugging purposes
error_reporting(E_ALL);
ini_set('display_errors', E_ALL);

include "connection.php"; // Include the database connection file

if (isset($_POST['delete'])) {
    // Get the ID of the record to delete
    $idToDelete = $_POST['id'];
    
    // Prepare the SQL query to delete the record
    $stmt = $conn->prepare("DELETE FROM announcement WHERE ID = ?");
    $stmt->bind_param("i", $idToDelete);
    
    // Execute the query
    if ($stmt->execute()) {
        echo "Record deleted successfully.";
        echo '<script>
                setTimeout(function(){
                    window.location.href="adminpanel.php";
                }, 2000); 
              </script>';
    } else {
        echo "Error deleting record: " . $stmt->error;
    }

    // Close the prepared statement
    $stmt->close();
}

$conn->close(); // Close the database connection
?>
