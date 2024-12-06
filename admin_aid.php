<?php
include 'connection.php'; // Ensure the connection.php file is correctly set up for database connection

// Check if a delete request has been made
if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];
    $delete_query = "DELETE FROM app_aid WHERE id = ?";
    $stmt = $conn->prepare($delete_query);
    $stmt->bind_param("i", $delete_id);
    $stmt->execute();
    
    if ($stmt->affected_rows > 0) {
        echo "<div style='background-color: #d4edda; color: #155724; padding: 10px; border-radius: 5px; text-align: center; font-size: 16px;'>
                Application deleted successfully!
              </div>";
    } else {
        echo "<div style='background-color: #f8d7da; color: #721c24; padding: 10px; border-radius: 5px; text-align: center; font-size: 16px;'>
                Error deleting application.
              </div>";
    }
}

// Fetch all records from the app_aid table
$query = "SELECT * FROM app_aid";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Panel - Applications</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f9;
    }
    .container {
      width: 90%;
      max-width: 1200px;
      margin: 40px auto;
      background-color: #ffffff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }
    h1 {
      text-align: center;
      color: #333;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }
    table, th, td {
      border: 1px solid #ddd;
    }
    th, td {
      padding: 12px;
      text-align: left;
    }
    th {
      background-color: #007bff;
      color: #fff;
    }
    .delete-button {
      background-color: #dc3545;
      color: #fff;
      border: none;
      padding: 8px 12px;
      border-radius: 4px;
      cursor: pointer;
    }
    .delete-button:hover {
      background-color: #c82333;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Scholarship Aid Applications</h1>

    <table>
      <tr>
        <th>ID</th>
        <th>Child Name</th>
        <th>Age</th>
        <th>Nationality</th>
        <th>Status</th>
        <th>Disability</th>
        <th>Guardian Name</th>
        <th>Relationship</th>
        <th>Guardian Phone</th>
        <th>Guardian Email</th>
        <th>Family Income</th>
        <th>Address</th>
        <th>Reason for Support</th>
        <th>Action</th>
      </tr>

      <?php
      if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
              echo "<tr>";
              echo "<td>" . $row['id'] . "</td>";
              echo "<td>" . $row['childName'] . "</td>";
              echo "<td>" . $row['age'] . "</td>";
              echo "<td>" . $row['nationality'] . "</td>";
              echo "<td>" . $row['status'] . "</td>";
              echo "<td>" . $row['disability'] . "</td>";
              echo "<td>" . $row['guardianName'] . "</td>";
              echo "<td>" . $row['relationship'] . "</td>";
              echo "<td>" . $row['guardianPhone'] . "</td>";
              echo "<td>" . $row['guardianEmail'] . "</td>";
              echo "<td>" . $row['familyIncome'] . "</td>";
              echo "<td>" . $row['address'] . "</td>";
              echo "<td>" . $row['supportReason'] . "</td>";
              echo "<td><a href='admin_aid.php?delete_id=" . $row['id'] . "' onclick='return confirm(\"Are you sure you want to delete this application?\");'>
                      <button class='delete-button'>Delete</button>
                    </a></td>";
              echo "</tr>";
          }
      } else {
          echo "<tr><td colspan='14' style='text-align:center;'>No applications found</td></tr>";
      }
      ?>

    </table>
  </div>
</body>
</html>

<?php
// Close the database connection
$conn->close();
?>
