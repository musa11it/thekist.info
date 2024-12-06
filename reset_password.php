<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require_once 'connection.php';

    $token = $_POST['token'];
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];

    if ($new_password !== $confirm_password) {
        echo "Passwords do not match.";
        exit();
    }

    // Check if the token is still valid
    $query = "SELECT id FROM registration WHERE reset_token = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('s', $token);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        $user_id = $user['id'];

        // Hash the new password and update the database
        $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

        $query = "UPDATE registration SET password = ?, reset_token = NULL, token_expiry = NULL WHERE id = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param('si', $hashed_password, $user_id);
        $stmt->execute();

        echo "Your password has been reset successfully.";
    } else {
        echo "Invalid or expired token.";
    }
}
?>
