<?php
require_once('connection.php');

if(isset($_GET['delete']));{
    $ID = $_GET['ID'];
    $delete = mysqli_query($conn, "DELETE FROM `contact` where `ID`='$ID'");
}


$query = "select * from contact";
$result = mysqli_query($conn,$query);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fetch data from database</title>
    <style>
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
    <h2>Fetch data from database</h2>
    <table border="1">
        <tr>
            <td><b>
                User ID
                </b>
            </td>
            <td><b>
                name
                </b>
            </td>
            <td><b>
                phone
                </b>
            </td>
            <td><b>
                email
                </b>
            </td>
            <td><b>
                scholarships
                </b>
            </td>
            <td><b>
                message
                </b>
            </td>
            <td><b>
                Operation
                </b>
            </td>
        </tr>
        <tr>
        
            <?php
            while($row = mysqli_fetch_assoc($result)){
            
            ?>

            <td><?php  echo $row['ID'];?></td>
            <td><?php  echo $row['name'];?></td>
            <td><?php  echo $row['phone'];?></td>
            <td><?php  echo $row['email'];?></td>
            <td><?php  echo $row['scholarships'];?></td>
            <td><?php  echo $row['message'];?></td>
            <td><form>
                 <a href='message.php?ID=<?php  echo $row['ID'];?>' name="delete" class="btn"> Delete </a> </td>
                </form>
                </tr>
            <?php
            }
            ?>
       
    </table>
</body>
</html>