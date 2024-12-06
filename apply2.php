<?php

include "connection.php";



?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scholarship Eligibility Criteria</title>
    <style>
    
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            margin-bottom: 30px;
        }
        .criteria {
            margin-bottom: 20px;
            line-height: 1.5;
        }
        .criteria p {
            margin-bottom: 10px;
        }
        .contact-button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            display: block;
            margin: 0 auto;
            text-decoration: none;

        }
        .contact-button:hover{
            background-color: gray;
            color: green;
        }
    </style>
</head>
<body>
    <div class="container">
    <?php
// Query the database once
$sql = "SELECT * FROM universitydetails WHERE ID=3";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

// Check if the result exists
if ($row) {
?>

<h1><?php echo $row['title']; ?></h1>

<div class="criteria">
    <h2><?php echo $row['title1']; ?></h2>
    <p><?php echo $row['required']; ?></p>
</div>

<div class="criteria">
    <h2><?php echo $row['title2']; ?></h2>
    <p><?php echo $row['details']; ?></p>
</div>

<?php
}
?>

            
        </div>
        <button class="contact-button"><a href="contact.php">Contact Us for Application Assistance</a></button>
    </div>
</body>
</html>
