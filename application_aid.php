<?php
// Include the database connection file
include 'connection.php';

// Check if the form was submitted via the submit button
if (isset($_POST['submit'])) {
    // Capture and sanitize form data
    $childName = htmlspecialchars(trim($_POST['childName']));
    $age = (int)$_POST['age'];
    $nationality = htmlspecialchars(trim($_POST['nationality']));
    $status = htmlspecialchars(trim($_POST['status']));
    $disability = htmlspecialchars(trim($_POST['disability']));
    $guardianName = htmlspecialchars(trim($_POST['guardianName']));
    $relationship = htmlspecialchars(trim($_POST['relationship']));
    $guardianPhone = htmlspecialchars(trim($_POST['guardianPhone']));
    $guardianEmail = htmlspecialchars(trim($_POST['guardianEmail']));
    $familyIncome = (int)$_POST['familyIncome'];
    $address = htmlspecialchars(trim($_POST['address']));
    $supportReason = htmlspecialchars(trim($_POST['supportReason']));

    // Prepare the SQL statement to insert data
    $query = "INSERT INTO app_aid (childName, age, nationality, status, disability, guardianName, relationship, guardianPhone, guardianEmail, familyIncome, address, supportReason) 
              VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    
    if ($stmt = $conn->prepare($query)) {
        // Bind parameters to the prepared statement
        $stmt->bind_param("sissssssisss", $childName, $age, $nationality, $status, $disability, $guardianName, $relationship, $guardianPhone, $guardianEmail, $familyIncome, $address, $supportReason);

        // Execute the statement
        if ($stmt->execute()) {
            echo "<div style='background-color: #d4edda; color: #155724; padding: 15px; border-radius: 5px; text-align: center; font-size: 18px; width: 80%; margin: 20px auto; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);'>
            Application submitted successfully!
          </div>";
        } else {
            echo "<p>Error submitting application: " . $stmt->error . "</p>";
        }

        // Close the statement
        $stmt->close();
    } else {
        echo "<p>Error preparing statement: " . $conn->error . "</p>";
    }

    // Close the database connection
    $conn->close();
} else {
    echo "<p>Form was not submitted correctly.</p>";
}
?>
