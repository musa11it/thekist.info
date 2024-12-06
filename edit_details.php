<?php
require_once('connection.php');

if(isset($_GET['ID']));{
    $ID = $_GET['ID'];
    // $delete = mysqli_query($conn, "DELETE FROM `contact` where `ID`='$ID'");
}


$query = "select * from universitydetails";
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
                Title
                </b>
            </td>
            <td><b>
                Title1
                </b>
            </td>
            <td><b>
                Required
                </b>
            </td>
            <td><b>
                Title2
                </b>
            </td>
            <td><b>
                Details
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
            <td><?php  echo $row['title'];?></td>
            <td><?php  echo $row['title1'];?></td>
            <td><?php  echo $row['required'];?></td>
            <td><?php  echo $row['title2'];?></td>
            <td><?php  echo $row['details'];?></td>

            <td>
            <!-- Edit Button -->
            <a href='edit1.php?ID=<?php echo $row['ID']; ?>' class="btn">Edit</a>
        </td>
        </tr>
            <!-- <td><form>
                 <a href='message.php?ID=<?php  echo $row['ID'];?>' name="delete" class="btn"> Delete </a> </td>
                </form>
                </tr> -->
            <?php
            }
            ?>
        
    </table>
</body>
</html>