<?php
include "connection.php";

// Check if ID is set in the URL
if (isset($_GET['ID'])) {
    $ID = $_GET['ID'];

    // Fetch the current data for this ID
    $query = "SELECT * FROM universitydetails WHERE ID='$ID'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);

    if (isset($_POST['update'])) {
        // Get the new data from the form
        $newTitle = $_POST['title'];
        $newTitle1 = $_POST['title1'];
        $newRequired = $_POST['required'];
        $newTitle2 = $_POST['title2'];
        $newDetails = $_POST['details'];

        // Update the record in the database
        $updateQuery = "UPDATE universitydetails SET 
                        title='$newTitle', 
                        title1='$newTitle1', 
                        required='$newRequired', 
                        title2='$newTitle2', 
                        details='$newDetails' 
                        WHERE ID='$ID'";
        mysqli_query($conn, $updateQuery);

        // Redirect to the page where the table is displayed after updating
        header("Location: edit_details.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit University Details</title>
    <style>
        /* Add some basic styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 50%;
            margin: 50px auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin: 10px 0 5px;
            font-weight: bold;
        }

        input[type="text"], textarea {
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 4px;
            width: 100%;
        }

        textarea {
            height: 150px;
        }

        button {
            margin-top: 20px;
            padding: 10px;
            font-size: 16px;
            color: white;
            background-color: #5a67d8;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #434190;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .container {
                width: 90%;
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Edit University Details</h1>
        <form method="POST">
            <label for="title">Title:</label>
            <input type="text" name="title" value="<?php echo $row['title']; ?>" required>

            <label for="title1">Title 1:</label>
            <input type="text" name="title1" value="<?php echo $row['title1']; ?>" required>

            <label for="required">Required:</label>
            <input type="text" name="required" value="<?php echo $row['required']; ?>" required>

            <label for="title2">Title 2:</label>
            <input type="text" name="title2" value="<?php echo $row['title2']; ?>" required>

            <label for="details">Details:</label>
            <textarea name="details" required><?php echo $row['details']; ?></textarea>

            <button type="submit" name="update">Update</button>
        </form>
    </div>

</body>
</html>