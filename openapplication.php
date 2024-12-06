<?php
include "connection.php";

if(isset($_GET['delete']));{
    $ID = $_GET['ID'];
    $delete = mysqli_query($conn, "DELETE FROM `contact` where `ID`='$ID'");
}

$query="select * from add_image";

$result=mysqli_query($conn,$query);




?>










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
        table{
            margin-top: 40px;
        }

        h2{
            text-align: center;
            font-size: large;
            font-weight: 3000;
        }
        table{
            width: 100%;

        }
        table td{
            padding: 10px;
        }
        .btn{
            background-color: #fff;
            text-decoration: none;
            font-weight: 300;
            padding: 5px 30px;
            color: darkred;
            font-size: 1.2em;
        }
        .btn:hover{
            background-color: darkred;
            color: #fff;
        }



    </style>
</head>
<body>
<h1>Welcome Open application</h1>
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
        <h3>open application</h3>

         <table boader="1">

         <tr> 
            <td><b>
                Id
               </b> 
            </td>
            <td><b>
                file
               </b> 
            </td>
            <td><b>
            description
               </b> 
            </td>
         </tr>
         <tr>
         <?php
            while($row = mysqli_fetch_assoc($result)){
            
            ?>

            <td><?php  echo $row['ID'];?></td>
            <td><img src="images/<?php echo $row['file']; ?>" style="width: 150px; height: 200px; border: 2px solid black;" /></td>
            <td><?php  echo $row['description'];?></td>
           
            <td>
                 
        <td>
            <!-- Edit Button -->
            <a href='edit.php?ID=<?php echo $row['ID']; ?>' class="btn">Edit</a>
        </td>
                
           <!---- <form>
                 <a href='openapplication.php?ID=<?php  echo $row['ID'];?>' name="delete" class="btn"> Delete </a> </td>
                </form>--->
                </tr>
            <?php
            }
            ?>

         </tr>

         </table>


    </div>
</div>
</body>
</html>