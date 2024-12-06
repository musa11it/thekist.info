<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css">
    <title>LOGIN</title>
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
h2 a{
    text-decoration: none;
    color: #ff7200;
}
h2 a:hover{
    text-decoration: none;
    color: rgb(13,211,247);
}
    </style>
</head>
<body>
    <div class="login">
        <h1>Login</h1>
        <form action="loginlogic.php" method="post">
        <label>Email</label>
        <input type="email" name="email" placeholder="Input E-mail" required>
        <label>Password</label>
        <input type="password" name="password" placeholder="password" required>
        <h2><a href="reset_page.php">forgot password</a></h2>
        <input type="submit" name="send" value="send" >
        </form>
        <p>If you Don't Have an account click here<a href="form.php">Sign Up</a></p>

</body>
</html>