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
        h2{
            margin-top: -150px
         }

    </style>
</head>
<body>
<h1>Welcome Admin</h1>
<div class="container">
    <div class="navbar" id="navbar1">
        <ul>
            <li class="list1"><a href="addapplication.php"> Add Application</a></li>
            <li><a href="openapplication.php"> Open application</a></li>
            <li><a href="message.php"> Message sent</a></li>
            <li><a href="universitydetails.php">Add university details</a></li>
            <li><a href="edit_details.php"> Edit details </a></li>
            <li class="list2"><a href="upload_pdf.php"> announcement</a></li>
            <li class="list2"><a href="deleteuploaded.php">Delete announcement</a></li>
            <li class="list2"><a href="our-child-image.php">upload_image_of_our_child</a></li>
            <li class="list2"><a href="delete-child-image.php">child-image-delete </a></li>
            <li class="list2"><a href="admin_aid.php">View chlidren application </a></li>
            <li class="list2"><a href="application_status.php"> application status</a></li>
            <li class="list2"><a href="status_update.php"> Update status</a></li>
           
        </ul>
    </div>
    <div class="navbar">
        <table border="1">
            <thead>
            <th>Total Users</th>
            <th>Total Subscribers</th>
            <th>Total Uploads</th>
            <th>Total Creators</th>
            </thead>
            <tr>
                <td>
                    <?php
                require_once "connection.php";
                $query= mysqli_query($conn,"SELECT COUNT(email) FROM registration");
                $row = mysqli_fetch_row($query);
                echo "<p>".$row[0]."</p>";
                    ?>

                </td>
                <td>
                    
                </td>
                <td>
                    
                </td>
                <td>
                    
                </td>
            </tr>

        </table>
        <?php

        ?>







    </div>
</div>
</body>
</html>