<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        h1{
            text-align: center;
            color: white;
            background: black;
            padding: 20px 20px;
            margin-bottom: 0;
        }
        a{
            text-decoration: none;
        }
        ul li{
            margin: 40px;
            list-style-type: none;
        }
        #navbar1{
            background: rgb(217,217,217);
            
        }
        .list1{
            margin-top: 0;
            padding-top: 10px;
        }
        .list2{
            margin-bottom: 0;
            padding-bottom: 10px;
        }
        .container{
            width: fit-content;
        }
        .navbar{
            display: inline-flex;
            
        }
        .navbar h3{
            margin-left: 400px;
            font-size: larger;
        }

        form{
            display:block;
            margin-top: 40px;
            margin-right: 40px;
        }



    </style>
</head>
<body>
<h1>Welcome Admin</h1>
<div class="container">
    <div class="navbar" id="navbar1">
        <ul>
            <li class="list1"><a href="#"> Open Application</a></li>
            <li><a href="#"> Apply now</a></li>
            <li><a href="message.php"> Message sent</a></li>
            <li><a href="#"> Apply now</a></li>
            <li><a href="#">Add User</a></li>
            <li><a href="#"> Settings</a></li>
            <li class="list2"><a href="#"> Log out</a></li>
        </ul>
    </div>
    <div class="navbar">
        <h3>Add open Appliction</h3>


        <form action="upload.php" method="POST" enctype="multipart/form-data">
       
        <label for="file">Choose File to Upload:</label><br>
        <input type="file" name="file" id="file" required><br><br>
        <label for="description">File Description:</label><br>
        <textarea id="description" name="description" rows="4" cols="50" placeholder="Enter file description here..."></textarea><br><br>


        <input type="submit" name = "submit" value="Upload File">
    </form>
    </div>
    
</div>
</body>
</html>