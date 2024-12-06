<?php
require_once 'connection.php';

if (isset($_GET['token'])) {
    $token = $_GET['token'];

    // Check if the token is valid and not expired
    $query = "SELECT id, token_expiry FROM registration WHERE reset_token = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('s', $token);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        $user_id = $user['id'];
        $token_expiry = $user['token_expiry'];

        // Check if the token has expired
        if (new DateTime() > new DateTime($token_expiry)) {
            echo "This token has expired. Please request a new password reset.";
            exit();
        }
    } else {
        echo "Invalid token. Please request a new password reset.";
        exit();
    }
} else {
    echo "No token provided.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css">
    <title>Document</title>
    <style>
        .login{
    position: relative;
    width: 380px;
    height: 260px;
    margin: auto;
    background-color: white;
    border-radius: 20px;
    top:150px;
}
h1{
    text-align: center;
    margin-top: 0;
}
h4{
    text-align: center;
    margin-top: 15px;
}
form{
    width: 300px;
    margin-left: 20px;
}
form label{
    display: flex;
    margin-top: 20px;
    font-size: 18px;

}
form input{
    width: 100%;
    padding: 7px;
    border: none;
    border: 1px solid gray;
   border-radius: 6px;
   outline: none;
}
input[type="submit"]{
    width: 320px;
    height: 35px;
    border: none;
    margin-top: 20px;
    background-color: #ff7200;
    font-size: 18px;
    cursor: pointer;
}
input[type="submit"]:hover{
    color: white;
    background: rgb(13,211,247);
}
p{
    text-align: center;
    padding-top: 20px;
    font-size: 15px;
}
    </style>
</head>
<body>
    <div class="login">
        <h1>Enter your E-mail to reset password</h1>
        <form action="reset_password.php" method="post">
    <input type="hidden" name="token" value="<?php echo htmlspecialchars($token); ?>">
    <label for="new_password">New Password:</label>
    <input type="password" name="new_password" id="new_password" required>
    <label for="confirm_password">Confirm Password:</label>
    <input type="password" name="confirm_password" id="confirm_password" required>
    <input type="submit" value="Reset Password">
</form>

</body>
</html>