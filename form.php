<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        body{
    background: url(ground.jpg);
    height: 100%;
    width: 100%;
    font-family: sans-serif;
    margin-top: 10px;
}
.signup{
    width: 380px;
    height: 610px;
    margin: auto;
    margin-top: 0;
    background-color: white;
    border-radius: 20px;
}
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
    <div class="signup">
        <h1>Sign Up</h1>
        <h4>It's Freely And Only Take a Litle Time</h4>
        <form action="formlogic.php" method="post">
        <label>Full Names</label>
        <input type="text" name="fullname" placeholder="Your Full Name" required>
        <label>Gende</label>
        <select name="gender">
        <option> Male </option>
        <option> Female </option>
        </select>
        <label>Phone Number</label>
        <input type="tel" name="phone" placeholder="your phone" required>
        <label>Email</label>
        <input type="email" name="email" placeholder="Input E-mail" required>
        <label>password</label>
        <input type="password" name="password" placeholder="password" required>
        <label>Confirm_password</label>
        <input type="password" name="confirm_password" placeholder="Confirm_password" required>
        <input type="submit" name="submit" value="submit" >
        </form>

        <p>Already Have an Account?? <a href="login.html">Login Here</a></p>

    </div>
    
</body>
</html>