<?php
// Include the database connection file
include 'connection.php';

if (!isset($conn)) {
    die("Database connection failed. Please check your connection settings.");
}

// Check if a delete request has been made
if (isset($_GET['delete'])) {
    $id = intval($_GET['delete']);

    // Prepare the delete query
    $deleteQuery = "DELETE FROM picture_of_our_children WHERE id = ?";
    $stmt = $conn->prepare($deleteQuery);
    $stmt->bind_param('i', $id);
    $stmt->execute();

    // Check if delete was successful
    if ($stmt->affected_rows > 0) {
        echo "<script>alert('Image deleted successfully!');</script>";
    } else {
        echo "<script>alert('Error deleting image.');</script>";
    }

    $stmt->close();
}

// Fetch all images from the database
$query = "SELECT id, image_path, alt_text FROM picture_of_our_children";
$result = $conn->query($query);

if (!$result) {
    die("Error fetching images: " . $conn->error);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel - Manage Images</title>
    <style>
        /* Basic styling for the page */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 900px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h1 {
            font-size: 24px;
            color: #333;
        }
        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }
        .gallery-item {
            position: relative;
            text-align: center;
        }
        .gallery-item img {
            width: 100%;
            height: auto;
            border-radius: 10px;
        }
        .delete-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: #ff4d4d;
            color: #fff;
            border: none;
            padding: 8px;
            cursor: pointer;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Manage Images</h1>

    <?php if ($result->num_rows > 0): ?>
        <div class="gallery">
            <?php while ($row = $result->fetch_assoc()): ?>
                <div class="gallery-item">
                    <!-- Display Image -->
                    <img src="<?= htmlspecialchars($row['image_path']) ?>" alt="<?= htmlspecialchars($row['alt_text']) ?>">
                    
                    <!-- Delete Button -->
                    <form method="GET" style="display:inline;">
                        <input type="hidden" name="delete" value="<?= $row['id'] ?>">
                        <button type="submit" class="delete-btn" onclick="return confirm('Are you sure you want to delete this image?');">Delete</button>
                    </form>
                </div>
            <?php endwhile; ?>
        </div>
    <?php else: ?>
        <p>No images found in the database.</p>
    <?php endif; ?>

</div>

</body>
</html>

<?php
// Close database connection
if (isset($conn)) {
    $conn->close();
}
?>
