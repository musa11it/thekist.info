<?php
// Enable error reporting for debugging purposes
error_reporting(E_ALL);
ini_set('display_errors', E_ALL);

include "connection.php"; // Include the database connection file

// Prepare the SQL query to fetch data from the announcement table in descending order by ID
$sql = "SELECT ID, description_pdf, pdf FROM announcement";
$result = $conn->query($sql);

// Check if there are any records in the result set
if ($result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr><th>Description</th><th>PDF</th><th>Action</th></tr>"; // Table header
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row['description_pdf']) . "</td>";
        echo "<td><a href='uploads/" . urlencode($row['pdf']) . "' target='_blank'>" . htmlspecialchars($row['pdf']) . "</a></td>";
        // Add a delete button, passing the ID of the row to delete
        echo "<td>
                <form action='delete.php' method='post' onsubmit='return confirm(\"Are you sure you want to delete this item?\");'>
                    <input type='hidden' name='id' value='" . $row['ID'] . "'>
                    <input type='submit' name='delete' value='Delete'>
                </form>
              </td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No records found.";
}

$conn->close(); // Close the database connection
?>
