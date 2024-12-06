<?php
include "connection.php";
error_reporting(E_ALL);
ini_set("Display_errors",1);

session_start();

if(isset($_POST["send"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    
    $sql = "SELECT * FROM registration WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);

    if($count == 1) {
        // Fetch the user ID and other details
        $user_id = $row['ID']; // Assuming 'id' is the primary key in the 'registration' table
        $_SESSION['user_id'] = $user_id; // Store the user's ID in session
        $_SESSION['login_user'] = $email; // Store email in session (optional)

        // Check if the logged-in user is an admin
        if($email == 'adminapply1@gmail.com' && $password == 'Admin@123Musa') {
            header("Location: adminpanel.php");
        } else {
            header("Location: dashboard.php");
        }
    } else {
        echo '
        <script>
        window.location.href="login.php";
        alert("Login failed! Invalid email or password");
        </script>
        ';
    }
}
?>
