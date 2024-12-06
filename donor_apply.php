<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Scholarship Aid Application</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f9;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
    }
    .container {
      width: 90%;
      max-width: 800px;
      background-color: #ffffff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      margin-top: 40px;
    }
    h1 {
      text-align: center;
      color: #333;
      font-size: 28px;
      margin-bottom: 10px;
    }
    .eligibility {
      background-color: #eef5ff;
      padding: 15px;
      border-radius: 5px;
      margin-bottom: 20px;
      font-size: 16px;
    }
    .eligibility h2 {
      color: #4e8481;
      font-size: 20px;
      margin-top: 0;
    }
    form {
      display: flex;
      flex-direction: column;
    }
    label {
      font-weight: bold;
      margin-top: 10px;
    }
    input[type="text"],
    input[type="number"],
    input[type="email"],
    select,
    textarea {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      border: 1px solid #ddd;
      border-radius: 5px;
      font-size: 16px;
    }
    textarea {
      resize: vertical;
    }
    .submit-button {
      background-color: #4e8481;
      color: #fff;
      font-size: 18px;
      padding: 10px;
      margin-top: 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s;
    }
    .submit-button:hover {
      background-color: #0056b3;
    }
    .app-status{
      color: red;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Apply for Scholarship Aid</h1>
    <div class="eligibility">
    <?php

include('connection.php');


$query = "SELECT sponsor, category, app_status FROM status";

// Execute the query
$result = $conn->query($query);

// Check if there are any records
if ($result->num_rows > 0) {
    // Fetch the data and display it inside the HTML structure
    while ($row = $result->fetch_assoc()) {
        echo '
        <div class="eligibility">
            <p><b>Sponsorship:</b> ' . htmlspecialchars($row['sponsor']) . '</p>
            <p><b>Category:</b> ' . htmlspecialchars($row['category']) . '</p>
           <p><b>Status:</b> <span class="app-status">' . htmlspecialchars($row['app_status']) . '</span></p>

            <h2>Eligibility Criteria</h2>
            <ul>
                <!-- Here you can add the eligibility criteria details -->
            </ul>
        </div>';
    }
} else {
    echo '<p>No data found.</p>';
}

// Close the database connection
$conn->close();
?>

      <ul>
        <li>Age between 3-10 years</li>
        <li>Born from a low-income family</li>
        <li>Disability (optional)</li>
        <li>Refugee status (optional)</li>
        <li>Orphan (increases chance)</li>
        <li>Must be a Rwandan citizen</li>
      </ul>
    </div>

    <form action="application_aid.php" method="POST">
      <!-- Child Information -->
      <h2>Child Information</h2>
      <label for="childName">Full Name of Child</label>
      <input type="text" id="childName" name="childName" required>

      <label for="age">Age</label>
      <input type="number" id="age" name="age" min="3" max="10" required>

      <label for="nationality">Nationality</label>
      <select id="nationality" name="nationality" required>
        <option value="">Select Nationality</option>
        <option value="Rwandan">Rwandan</option>
        <option value="Other">Other</option>
      </select>

      <label for="status">Child Status</label>
      <select id="status" name="status" required>
        <option value="">Select Status</option>
        <option value="Low-income family">Low-income family</option>
        <option value="Refugee">Refugee</option>
        <option value="Orphan">Orphan</option>
      </select>

      <label for="disability">Disability (if any)</label>
      <input type="text" id="disability" name="disability" placeholder="Specify disability, if any">

      <!-- Parent/Guardian Information -->
      <h2>Parent/Guardian Information</h2>
      <label for="guardianName">Full Name of Parent/Guardian</label>
      <input type="text" id="guardianName" name="guardianName" required>

      <label for="relationship">Relationship to Child</label>
      <input type="text" id="relationship" name="relationship" placeholder="e.g., Mother, Father, Aunt" required>

      <label for="guardianPhone">Contact Number</label>
      <input type="text" id="guardianPhone" name="guardianPhone" required>

      <label for="guardianEmail">Email Address</label>
      <input type="email" id="guardianEmail" name="guardianEmail" required>

      <!-- Additional Information -->
      <h2>Additional Information</h2>
      <label for="familyIncome">Annual Family Income (in Rwandan Francs)</label>
      <input type="number" id="familyIncome" name="familyIncome" required>

      <label for="address">Home Address</label>
      <textarea id="address" name="address" rows="3" required></textarea>

      <label for="supportReason">Reason for Support</label>
      <textarea id="supportReason" name="supportReason" rows="4" placeholder="Describe why the child needs this support" required></textarea>

      <!-- Submit Button -->
      <button type="submit" name="submit" class="submit-button">Submit Application</button>
    </form>
  </div>
</body>
</html>
