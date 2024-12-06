<?php
session_start();
require_once 'connection.php';


if (!isset($_SESSION['user_id'])) {
    header("Location: login.php"); // 
    exit();
}

// Fetch user details from the database
$user_id = $_SESSION['user_id'];
$query = "SELECT * FROM registration WHERE id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param('i', $user_id);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <style>


         /* General styles */
         body {
            background-color: #f4f7fc;
            color: #333;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .header {
            text-align: center;
            padding: 20px 0;
            background-color: #1e90ff;
            color: white;
        }

        .header h1 {
            font-size: 3em;
        }

        .content {
            margin-top: 40px;
        }

        .card {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 50%;
            margin: 0 auto;
            text-align: center;
        }

        .card h2 {
            font-size: 2em;
            color: #333;
        }

        .card p {
            font-size: 1.2em;
            margin: 15px 0;
        }

        .button {
            background-color: #1e90ff;
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background-color: #0056b3;
        }

        .footer {
            text-align: center;
            margin-top: 40px;
            padding: 20px 0;
            background-color: #333;
            color: white;
        }

        .footer a {
            color: #1e90ff;
            text-decoration: none;
            font-weight: bold;
        }

        .footer a:hover {
            color: #ff6347;
        }

        /* Styles for profile picture */
        .profile-picture {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            border: 2px solid #1e90ff;
            margin-bottom: 20px;
        }

        .upload-section {
            margin-top: 20px;
        }

        .upload-section input[type="file"] {
            display: block;
            margin: 10px auto;
        }

        .upload-section input[type="submit"] {
            background-color: #1e90ff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .upload-section input[type="submit"]:hover {
            background-color: #0056b3;
        }
        
    </style>
</head>
<body>
    <div class="container">
        <header class="header">
            <h1>Your Profile</h1>
        </header>

        <section class="content">
            <div class="card">
                <h2>Personal Information</h2>
                <p><strong>Names:</strong> <?php echo $user['fullnames']; ?></p>
                <p><strong>Gender:</strong> <?php echo $user['gender']; ?></p>
                <p><strong>Phone:</strong> <?php echo $user['phone']; ?></p>
                <p><strong>Address:</strong> <?php echo $user['email']; ?></p>
                

                  <!-- Upload profile picture form -->
                  <div class="upload-section">
                    <form action="upload_pic.php" method="POST" enctype="multipart/form-data">
                        <input type="file" name="profile_picture" required>
                        <input type="submit" name="upload" value="Upload Picture">
                    </form>
                </div>
            </div>
        </section>

        <footer class="footer">
            <p>Need help? <a href="contact.php">Contact Us</a> | <a href="logout.php">Log Out</a></p>
        </footer>
    </div>
</body>
</html>
