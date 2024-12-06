<?php
// Include the connection file to connect to the database
include('connection.php');

// SQL query to fetch all records from the 'status' table
$query = "SELECT id, sponsor, category, app_status FROM status";
$result = $conn->query($query);

// Check if the form for updating the data is submitted
if (isset($_POST['update'])) {
    // Get the updated values from the form
    $id = $_POST['id'];
    $sponsor = $_POST['sponsor'];
    $category = $_POST['category'];
    $app_status = $_POST['app_status'];

    // SQL query to update the record
    $update_query = "UPDATE status SET sponsor = ?, category = ?, app_status = ? WHERE id = ?";
    $stmt = $conn->prepare($update_query);
    $stmt->bind_param('sssi', $sponsor, $category, $app_status, $id);

    // Execute the query and check if the update was successful
    if ($stmt->execute()) {
        echo "Record updated successfully!";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

// Start HTML and output the table
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Manage Sponsorship Status</title>
    <style>
        /* Add some basic styling for the table */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: center;
        }
        .update-btn {
            background-color: #4CAF50;
            color: white;
            padding: 5px 10px;
            cursor: pointer;
            border: none;
        }
        .update-btn:hover {
            background-color: #45a049;
        }
        .app-status{
            color: red;
        }
    </style>
</head>
<body>

    <h1>Admin Panel - Manage Sponsorship Status</h1>

    <!-- Table to display all the records from the database -->
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Sponsorship</th>
                <th>Category</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Check if there are any records returned by the query
            if ($result->num_rows > 0) {
                // Display each record in a table row
                while ($row = $result->fetch_assoc()) {
                    echo '<tr>';
                    echo '<td>' . htmlspecialchars($row['id']) . '</td>';
                    echo '<td>' . htmlspecialchars($row['sponsor']) . '</td>';
                    echo '<td>' . htmlspecialchars($row['category']) . '</td>';
                    echo '<td class="app-status">' . htmlspecialchars($row['app_status']) . '</td>';
                    echo '<td>
                        <form method="POST" action="">
                            <input type="hidden" name="id" value="' . $row['id'] . '">
                            <input type="text" name="sponsor" value="' . htmlspecialchars($row['sponsor']) . '" required>
                            <input type="text" name="category" value="' . htmlspecialchars($row['category']) . '" required>
                            <input type="text" name="app_status" value="' . htmlspecialchars($row['app_status']) . '" required class="app-status">

                            <button type="submit" name="update" class="update-btn">Update</button>
                        </form>
                    </td>';
                    echo '</tr>';
                }
            } else {
                echo '<tr><td colspan="5">No data found</td></tr>';
            }
            ?>
        </tbody>
    </table>

    <!-- Close the database connection -->
    <?php $conn->close(); ?>

</body>
</html>