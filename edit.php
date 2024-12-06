<?php
// Include database connection
include "connection.php";

// Check if ID is set in the URL
if (isset($_GET['ID'])) {
    $ID = $_GET['ID'];

    // Fetch data from the database based on the ID
    $query = "SELECT * FROM add_image WHERE ID='$ID'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        $row = mysqli_fetch_assoc($result);

        if (isset($_POST['update'])) {
            // Sanitize the description input
            $newDescription = mysqli_real_escape_string($conn, $_POST['description']);

            // Handle file upload if a new image is uploaded
            if (!empty($_FILES['file']['name'])) {
                $newFile = $_FILES['file']['name'];
                $target = "images/" . basename($newFile);
                move_uploaded_file($_FILES['file']['tmp_name'], $target);
            } else {
                // Keep the existing file if no new image is uploaded
                $newFile = $row['file'];
            }

            // Update the database with the new values
            $updateQuery = "UPDATE add_image SET description='$newDescription', file='$newFile' WHERE ID='$ID'";
            if (mysqli_query($conn, $updateQuery)) {
                // Redirect to the page where the table is displayed after updating
                header("Location: openapplication.php");
                exit();
            } else {
                echo "Error updating record: " . mysqli_error($conn);
            }
        }
    } else {
        echo "Error fetching record: " . mysqli_error($conn);
    }
} else {
    echo "No ID provided.";
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Image Details</title>
    <style>
        /* Body styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 20px;
        }

        /* Container for the form */
        .form-container {
            width: 60%;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Title styling */
        h1 {
            text-align: center;
            color: #333;
        }

        /* Form field labels */
        label {
            display: block;
            margin: 15px 0 5px;
            font-weight: bold;
            color: #555;
        }

        /* Input fields */
        input[type="text"],
        input[type="file"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        /* Image preview */
        img {
            margin-top: 10px;
            max-width: 100%;
            height: auto;
            border: 1px solid #ccc;
            border-radius: 8px;
        }

        /* Update button */
        button {
            padding: 12px 20px;
            background-color: #5a67d8;
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            display: block;
            width: 100%;
            margin-top: 20px;
        }

        button:hover {
            background-color: #434190;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .form-container {
                width: 90%;
            }
        }
    </style>
</head>
<body>

    <div class="form-container">
        <h1>Edit Image Details</h1>
        <form method="POST" enctype="multipart/form-data">
            <label for="description">Description:</label>
            <input type="text" name="description" value="<?php echo $row['description']; ?>" required>

            <label for="file">Image:</label>
            <input type="file" name="file">
            <img src="images/<?php echo $row['file']; ?>" alt="Image preview">

            <button type="submit" name="update">Update</button>
        </form>
    </div>

</body>
</html>