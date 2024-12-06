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
        <form action="forgot_password.php" method="POST">
        <input type="email" name="email" placeholder="Input E-mail" required>
        <input type="submit" name="send" value="send" >
        </form>

</body>
</html>