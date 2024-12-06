<?php
// forgot_password.php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require_once 'connection.php'; // Include your database connection

    $email = $_POST['email'];
    $token = bin2hex(random_bytes(32)); // Generate a secure random token
    $token_expiry = date('Y-m-d H:i:s', strtotime('+1 hour')); // Token valid for 1 hour

    // Check if the email exists in the database
    $query = "SELECT id FROM registration WHERE email = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        $user_id = $user['id'];

        // Store the token in the database
        $query = "UPDATE registration SET reset_token = ?, token_expiry = ? WHERE id = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param('ssi', $token, $token_expiry, $user_id);
        $stmt->execute();

        // Send reset email
        $reset_link = "http://yourwebsite.com/reset_password.php?token=" . $token;
        $subject = "Password Reset Request";
        $message = "Please click the link below to reset your password:\n\n" . $reset_link;
        $headers = "From: no-reply@yourwebsite.com";

        if (mail($email, $subject, $message, $headers)) {
            echo "A password reset link has been sent to your email.";
        } else {
            echo "Failed to send reset email. Please try again later.";
        }
    } else {
        echo "No account found with that email address.";
    }
}
?>


