<?php
session_start();
require_once 'connection.php';

// Check if user is logged in by checking the session
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php"); 
    exit();
}

// Fetch user details from the database using the session's user_id
$user_id = $_SESSION['user_id'];
$query = "SELECT * FROM registration WHERE ID = ?";
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
    <title>Welcome Back,<?php echo $user['fullnames']; ?> !</title>
    <style >
    	
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}

body {
    background-color: #f4f7fc;
    color: #333;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
}

.header {
    text-align: center;
    padding: 40px 0;
    background-color: #1e90ff;
    color: white;
}

.header h1 {
    font-size: 3em;
}

.header p {
    font-size: 1.2em;
    margin-top: 10px;
}

.content {
    display: flex;
    justify-content: space-between;
    margin-top: 40px;
}

.card {
    background-color: white;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    width: 30%;
    text-align: center;
    transition: transform 0.3s ease;
}

.card:hover {
    transform: translateY(-10px);
}

.card h2 {
    font-size: 1.8em;
    color: #333;
}

.card p {
    font-size: 1.1em;
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


    </style>
</head>
<body>
    <div class="container">
        <header class="header">
            <h1>Welcome Back, <?php echo $user['fullnames']; ?> !</h1>
            <p>Your journey with us continues!</p>
        </header>

        <section class="content">
            <div class="card">
                <h2>Your Profile</h2>
                <p>Update your personal details and preferences.</p>
               <a href="profile.php" class="button">upload your picture</a>

            </div>

            <div class="card">
                <h2>Explore New Features</h2>
                <p>Discover what's new and stay updated.</p>
                <a href="features.php" class="button">See Features</a>
            </div>

            <div class="card">
                <h2>Your Recent Activity</h2>
                <p>Track your recent actions and interactions.</p>
                <a href="activity.php" class="button">View Activity</a>
            </div>
        </section>

        <footer class="footer">
            <p>Need help? <a href="contact.php">Contact Us</a> | <a href="logout.php">Log Out</a></p>
        </footer>
    </div>
</body>
</html>
