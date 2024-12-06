<?php
include("connection.php");
include("usercheck.php");
//check weather user is logged in or not

if(!isset($_SESSION['login_user'])){
    header("location:login.php");
    exit();
}
?>
<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once 'connection.php';

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php"); // Redirect to login if not logged in
    exit();
}

// Fetch the logged-in user's profile picture
$user_id = $_SESSION['user_id'];
$query = "SELECT profile_picture FROM registration WHERE id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param('i', $user_id);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

// Set default profile picture if none is uploaded
$profile_picture = !empty($user['profile_picture']) ? 'uploads/' . $user['profile_picture'] : 'uploads/default-avatar.png';
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>dashboard|Worldwide Scholarship, Grant & Financial Aid News</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <style>
        

body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

header {
    background-color: #333;
    color: #fff;
    padding: 10px 0;
    
    position: sticky ;
    top:0;
    width: 100%;
    z-index: 1000;
    
    
    
}


.logo {
    font-size: 24px;
    font-weight: bold;
}

nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.nav_link ul {

    list-style-type: none;
    margin: 0;
    padding: 0;
}

.nav_link ul li {
    display: inline-block;
    margin-right: 25px;
    padding: 13px ;
    margin-left: 13px;
}



.nav_link ul li a {
    text-decoration: none;
    color: #fff;
    transition: color 0.3s ease;
}

.nav_link ul li a:hover {
    color: #ffc107; /* change color on hover */
}

.search-container {
    display: flex;
    align-items: center;
}

.search-box {
    padding: 8px 12px;
    border-radius: 5px;
    border: none;
    background-color: #555;
    color: #fff;
    transition: background-color 0.3s ease, color 0.3s ease;
    margin-right: 5px;
}

.search-box:focus {
    outline: none;
    background-color: #777;
}


.fas {
    margin-right: 5px;
    color: #fff;
    transition: color 0.3s ease;
}
.fas:hover{
    color: #ffc107;
}
/*    body     */


ul li{
    list-style-type: none;
   
}
.work_with ul{
   align-items: center;
}
h1,h2{
    text-align: center;
}
.popular{
    display: inline-flex;
    flex-direction: column;
    font-size: larger;
    padding-top: 20px;
    padding-right: 60px;
    padding-left: 50px;
    padding-bottom: 20px;
    border: 3px unset;
    border-radius: 3px;
    background: #d9d9d9;
    margin: 30px 65px;
    cursor: pointer;
}
.work_with{
    background-color: #858383;
    
}
.popular button{
    background: #4e8481;
    border: none;
    border-radius: 2px;
    width: 100px;
    height: 30px;
    color: white;
    margin-top: 15px;
    cursor: pointer;
    margin-left: 50px;

}
.logo-2{
    margin-bottom: 15px;
    margin-left: -150px
   
}
.open{
    background: #ffffff;   
}
.popular1{
    display: inline-flex;
    flex-direction: column;
    font-size: larger;
    padding-top: 50px;
    padding-right: 50px;
    padding-left: 50px;
    padding-bottom: 20px;
    border: 3px unset;
    border-radius: 3px;
    background: #938484;
    margin: 30px 65px;
    cursor: pointer;
  
}
.work_with{
    margin: opx auto;
}
.popular1 button{
    background: #4e8481;
    border: none;
    border-radius: 2px;
    width: 100px;
    height: 30px;
    color: white;
    margin-top: 15px;
    cursor: pointer;
}
.Service1,.review{
    display: inline-flex;
    flex-direction: column;
    font-size: larger;
    padding-top: 50px;
    padding-right: 50px;
    padding-left: 50px;
    padding-bottom: 20px;
    border: 3px unset;
    border-radius: 3px;
    margin: 30px;
    cursor: pointer;
}

.review{
    display: inline-flex;
    flex-direction: column;
    font-size: larger;
    padding-top: 10px;
    padding-right: 5px;
    padding-left: 5px;
    padding-bottom: 20px;
    border: 3px unset;
    border-radius: 3px;
    cursor: pointer;
}
.services,.Reviews{
    background: white;
}


/*    footer */

.footer{
    background-color: #24262b;
    padding: 70px 0;
}
*{
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
}
.row{
    display: flex;
    flex-wrap: wrap;
  
}
.footer-col{
    width: 25%;
    padding: 0 15px;
}
h4{
    color: white;
}
.footer-col h4{
    font-size: 15px;
    color: #ffffff;
    text-transform: capitalize;
    margin-bottom: 30px;
    font-weight: 500;
    position: relative;
}
.footer-col h4::before{
    content: '';
    position: absolute;
    left: 0;
    bottom: -10px;
    background-color: #e91e63;
    height: 2px;
    box-sizing: border-box;
    width: 50px;
}
.footer-col ul li:not(:last-child){
    margin-bottom: 10px;
}
.footer-col li a{
    font-size: 16px;
    text-transform: capitalize;
    color: #ffffff;
    text-decoration: none;
    font-weight: 300;
    display: block;
    color: #bbbbbb;
    transition: all 0.3s ease;
}
.footer-col li a:hover{
    color: #ffc107;
    padding-left: 8px;

}
.footer-col .social-link a{
    display: inline-block;
    height: 40px;
    width: 40px;
    background-color: rgba(255,255,255,0.2);
    margin: 0 10px 10px 0;
    text-align: center;
    border-radius: 50%;
    line-height: 40px;
    color: #ffffff;
    transition: all 0.3s ease;
}
.footer-col .social-link a:hover{
    color: gray;
}
@media(max-width: 767px){
    .footer-col{
        width: 50%;
        margin-bottom: 30px;
    }
}
@media(max-width: 574px){
    .footer-col{
        width: 100%;
    }
}
@media(max-width: 574px){
    h1{
        font-size: 25px;
        margin-right: 60px;
    }
}
@media(max-width: 500px){
    .botton{
        margin-right: 200px;
        max-height: 12px 20px;
    }
}


.dropdown-content {
    display: none;
    position: absolute;
    background-color: #333;
    width: auto;
   padding: 12px 16px;
   
}

        .dropdown-content li a {
            color: #fff;
            padding: 12px;
            display: block;
            text-align: left;
        }

.list1 li:hover .dropdown-content {
    display: block;
}

.dropdown-content li {
    display: block;
    
}

.dropdown-content li a {
    color: #fff;
    padding: 10px;
}

.dropdown-content li a:hover {
    background-color: #555;
}

.fas{
    display: none;
}

.profile-icon {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        object-fit: cover; 
        cursor: pointer;
    }

    .list2 {
        list-style: none;
    }

    button {
    padding: 5px 10px;
    font-size: 14px;
    align-items: center;
}
.logo {
        width: 200px; 
        height: 105px; 
        margin-top: -40px;

    }
    .logo img {
        width: 150px; 
        height: 150px; 
    }
    .upload_pdf{
        margin-left: 20px;
        padding: 10px;
    }
    .marge{
        display: flex;
        justify-content: space-between;
        padding: 20px;
    }
    

    .container {
        flex: 1;
        margin-left: 20px;
        padding: 10px;
        border-radius: 5px;  
      text-align: center;
    }
    h1 {
      font-size: 24px;
      margin-bottom: 20px;
    }
    .button {
      display: block;
      width: 300px;
      padding: 15px;
      font-size: 16px;
      font-weight: bold;
      color: #ffffff;
      text-decoration: none;
      margin: 10px auto;
      border-radius: 5px;
      cursor: pointer;
      border: none;
    }
    .add-ngo {
      background-color: #4e8481;
    }
    .code-supporters {
      background-color: #ffaa33;
    }
    .a{
      text-decoration: none;
    }

    .description {
    font-size: 14px;
    color: #333;
    white-space: namespace;        
    overflow: hidden;         
    text-overflow: ellipsis;    
    width: 150px;               
}

.item-list {
    list-style-type: none; 
    padding: 0;
    margin: 0;
    display: flex; 
    align-items: center; 
}

.item-list li {
    margin-right: 15px; 
}

.item-list img {
    display: block; 
}

button {
    padding: 5px 10px;
    font-size: 14px;
    align-items: center;
}
.logo {
        width: 200px; 
        height: 105px; 
        margin-top: -40px;

    }
    .logo img {
        width: 150px; 
        height: 150px; 
    }
    .upload_pdf{
        margin-left: 20px;
        padding: 10px;
    }
    .marge{
        display: flex;
        justify-content: space-between;
        padding: 20px;
    }
    


.gallery {
  display: flex;
  gap: 20px;
  margin-left: 50px;
  justify-content: space-around;
}

.image-container {
  position: relative;
  overflow: hidden;
  width: 300px;
  height: 200px;
  border-radius: 8px;
  transition: transform 0.3s ease;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

.image-container img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.3s ease;
}

.image-container:hover img {
  transform: scale(1.1);
}

.advert-label {
  position: absolute;
  top: 10px;
  left: 10px;
  background-color: #FFD700;
  color: #fff;
  padding: 5px 10px;
  border-radius: 3px;
  font-weight: bold;
}

.bookmark-icon {
  position: absolute;
  top: 10px;
  right: 10px;
  font-size: 24px;
  color: yellow;
  transition: color 0.3s ease;
  cursor: pointer;
}

.image-container:hover .bookmark-icon {
  color: #FFD700;
}
.opp {
    text-align: center;
    padding-bottom: 15px;
}

@media(max-width: 650px){
    header .nav_link {
                display: none;
                position: absolute;
                background: #333;
                height: 360px;
                width: 100%;
                top: 100%;
                /*right: -200px;*/
                text-align: left;
                z-index: 2;
            }

            .text-box h1 {
                font-size: 20px;
            }

            .nav_link ul li {
                display: block;
            }
            nav {
  
               flex-direction: column;
                }
            .fas{
            display: block;
            color: #fff;
            margin: 10px;
            font-size: 30px;
            cursor: pointer;
            margin-left: 300px;
            margin-top: -40px; 

            }

            .marge{
                flex-direction: column;
                margin-left: 0;
            }

            .container {
        flex: 1;
        margin-left: -20px;
        padding: 10px;
        border-radius: 5px;  
      text-align: center;
    }
    h1 {
      font-size: 24px;
      margin-bottom: 20px;
    }

    header {
    background-color: #333;
    color: #fff;
    padding: 10px 0;
    height: 100px;
    
    position: sticky ;
    top:0;
    width: 100%;
    z-index: 1000;
}
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
    width: 100%;
}
nav .fas{
        display: block;
        color: #fff;
        margin: 10px;
        font-size: 30px;
        cursor: pointer;
    }

    .logo {
        width: 200px; 
        height: 105px; 
        margin-top: -40px;

    }
    .logo img {
        width: 150px; 
        height: 150px; 
    }

    .gallery {
  flex-direction: column;
  gap: 20px;
  margin-left: 50px;
  
}
.image-container {
  position: relative;
  overflow: hidden;
  width: 300px;
  height: 200px;
  border-radius: 8px;
  transition: transform 0.3s ease;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}
.opp {
    text-align: center;
}


}
    </style>
</head>
<body>
    <header>
    <div class="logo"><img src="images/logobg.png"><span ></span></div>
        
        <div class="nav_link" id="navLink" >
        <nav>
        <i class="fas fa-times" onclick="hideMenu()"></i>
            <ul class="list1">
            <li><a href="#">scholarship</a>
            <ul class="dropdown-content">
                    <li><a href="#open">Bachelor's</a></li>
                    <li><a href="#">Master's</a></li>
                    <li><a href="#">PHDs</a></li>
                </ul>
               </li> 
            <li><a href="#">Updates</a>
            <ul class="dropdown-content">
                    <li><a href="#open">Open</a></li>
                    <li><a href="#announce">Announcement</a></li>
                </ul>
            </li>
             <li><a href="#Service">Services</a></li>
            <li> <a href="contact.php">Contact Us</a></li>
        </ul>
        <form class="example" action="search.php">
            <input type="text" placeholder="Search.." name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
          </form>
        
       <ul >
            <li class="list2"><a href="user_page.php" ><img src="<?php echo $profile_picture; ?>" alt="Profile" class="profile-icon"></a></li>
            <li > <form action="logout.php" method="post">
                    <button name="logout">Logout</button>
                    </form>
</li>
        </ul>
        
    </nav>
    </div>
    <i class="fas fa-bars" onclick="showMenu()"></i>
    </header>

    <div class="work_with">
        <ul class="popular">
        <?php 
            $sql = "SELECT * FROM add_image where ID=5";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);

            if ($resultCheck > 0){
                while ($row = mysqli_fetch_assoc($result)){
                    ?>
                    <ul class="item_list">
                     <li> <img src="images/<?php echo $row['file'];?>" height="100px" width="100px"  /> </li>
                     <li> <p class="description"><?php echo $row['description']; ?></p>   </li>    
<?php
   }
}
   ?>
            <li><a href="readmore.php"> <button>Read more</button></a></li>
            </ul>
        </ul>
        <ul class="popular">
        <?php 
            $sql = "SELECT * FROM add_image where ID=6";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);

            if ($resultCheck > 0){
                while ($row = mysqli_fetch_assoc($result)){
                    ?>
                     <ul class="item_list">
                     <li><img src="images/<?php echo $row['file'];?>" height="100px" width="100px"  /> </li> 
                      <p class="description"><?php echo $row['description']; ?></p>
<?php
   }
}
   ?>
            <li><a href="readmore1.php"> <button>Read more</button></a></li>
        </ul>
        </ul>
        <ul class="popular">
        <?php 
            $sql = "SELECT * FROM add_image where ID=7";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);

            if ($resultCheck > 0){
                while ($row = mysqli_fetch_assoc($result)){
                    ?>
                    <ul class="item_list">
                    <li>  <img src="images/<?php echo $row['file'];?>" height="100px" width="100px"  /></li>  
                      <p class="description"><?php echo $row['description']; ?></p>       
<?php
   }
}
   ?>
            <li><a href="readmore2.php" id="open"> <button>Read more</button></a></li>
        </ul>
      </ul> 
    </div>
<div>
    <div class="open" >
        <h1>Open applications</h1>          
            <ul class="popular1">

            <?php 
            $sql = "SELECT * FROM add_image where ID=2";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);

            if ($resultCheck > 0){
                while ($row = mysqli_fetch_assoc($result)){
                    ?>
                      <img src="images/<?php echo $row['file'];?>" height="100px" width="100px"  /> 
                      <p class="description"><?php echo $row['description']; ?></p>      
<?php
   }
}
   ?>
            <li><a href="apply.php"> <button>Apply now</button></a></li>
        </ul>
        <ul class="popular1">
        <?php 
            $sql = "SELECT * FROM add_image where ID=3";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);

            if ($resultCheck > 0){
                while ($row = mysqli_fetch_assoc($result)){
                    ?>
                      <img src="images/<?php echo $row['file'];?>" height="100px" width="100px"  /> 
                      <p class="description"><?php echo $row['description']; ?></p>       
<?php
   }
}
   ?>
            <li><a href="apply1.php"> <button>Apply now</button></a></li>
        </ul>
        <ul class="popular1" id="Service">
        <?php 
            $sql = "SELECT * FROM add_image where ID=4";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
            if ($resultCheck > 0){
                while ($row = mysqli_fetch_assoc($result)){
                    ?>
                       
                      <img src="images/<?php echo $row['file'];?>" height="100px" width="100px"  />  
                      <p class="description"><?php echo $row['description']; ?></p>
<?php
   }
}
   ?>

            <li><a href="apply2.php" > <button>Apply now</button></a></li>
        </ul>
    </div>
    <div class="services" >
        <h2>Our Services</h2>
        <hr>
        <ul class="Service1" >
            <li>
            We assist people in applying <br>for scholarships both in<br> Rwanda and globally.
            </li>
        </ul>
        <ul class="Service1">
            <li>We publish scholarships,internships,<br> events, and technology-related<br> services for growth.
            </li>
        </ul>
        <ul class="Service1" id="reviewer">
            <li>We sponsor children <br>from poor families for <br>educational opportunities.
            </li>
        </ul>
    </div>
   

    <div class="opp">
            <h3> Other opportunities</h3>
        </div>
    <div class="gallery">
        
  <!-- Image 1 -->
  <div class="image-container">
  <?php 
            $sql = "SELECT * FROM add_image where ID=8";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);

            if ($resultCheck > 0){
                while ($row = mysqli_fetch_assoc($result)){
                    ?>
                    <a href="apply4.php?id=<?php echo $row['ID']; ?>">
                      <img src="images/<?php echo $row['file'];?>" height="100px" width="100px"  /> 
                      <p class="description"><?php echo $row['description']; ?></p>  
                    </a>     
<?php
   }
}
   ?>
   <div class="bookmark-icon">🔖</div>
  </div>

  <!-- Image 2 -->
  <div class="image-container">
  <?php 
            $sql = "SELECT * FROM add_image where ID=9";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);

            if ($resultCheck > 0){
                while ($row = mysqli_fetch_assoc($result)){
                    ?>
                    <a href="apply5.php?id=<?php echo $row['ID']; ?>">
                      <img src="images/<?php echo $row['file'];?>" height="100px" width="100px"  /> 
                      <p class="description"><?php echo $row['description']; ?></p>  
                    </a>     
<?php
   }
}
   ?>
    <div class="bookmark-icon">🔖</div>
  </div>

  <!-- Image 3 -->
  <div class="image-container">
  <?php 
            $sql = "SELECT * FROM add_image where ID=10";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);

            if ($resultCheck > 0){
                while ($row = mysqli_fetch_assoc($result)){
                    ?>
                    <a href="apply6.php?id=<?php echo $row['ID']; ?>">
                      <img src="images/<?php echo $row['file'];?>" height="100px" width="100px"  /> 
                      <p class="description"><?php echo $row['description']; ?></p> 
                    </a>      
<?php
   }
}
   ?>
    <div class="bookmark-icon" id="announce">🔖</div>
  </div>
</div>

    <div class="marge">
    <div class="upload_pdf">

    <?php

error_reporting(E_ALL);
ini_set('display_errors', E_ALL);

include "connection.php"; 


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT ID, description_pdf, pdf FROM announcement ORDER BY ID DESC";
$result = $conn->query($sql);

if (!$result) {
    die("Error executing query: " . $conn->error);
}

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<div>";
        echo "<h3> Don't Miss: " . htmlspecialchars($row['description_pdf']) . "</h3>";
        
        // Generate the URL-encoded PDF path
        $pdfPath = "uploads/" . rawurlencode($row['pdf']);
        
        // Display the link to the PDF file
        echo "<p>View: <a href='" . $pdfPath . "' target='_blank'>" . htmlspecialchars($row['pdf']) . "</a></p>";
        echo "</div><hr>";
    }
} else {
    echo "No records found.";
}

$conn->close(); // Close the database connection

?>
</div>
<div class="container">
    <h1>Empowering Futures Through Education</h1>
    <button class="button add-ngo"><a href="donor_assist.php">DONOR</a></button>
    <button class="button code-supporters"><a href="donor_apply.php" >Apply for Aid</a></button>

</div>
</div>

    <footer class="footer">
        <div class="ontainer">
            <div class="row">
                <div class="footer-col">
                    <h4>Useful Links</h4>
                    <lu>
                       <li><a href="https://www.alueducation.com/">Alu.apply </a></li>
                       <li><a href="https://ur.ac.rw/">UR.apply</a></li>
                       <li><a href="https://www.iprckigali.rp.ac.rw/">RP/IPRC.apply</a></li>
                       <li><a href="https://keplercollege.ac.rw/">Kepler university</a></li> 
                    </lu>
                </div>
                <div class="footer-col">
                    <h4>Get Help</h4>
                    <lu>
                       <li><a href="FAQ.php">FAQ</a></li> 
                       <li><a href="#open">How to apply</a></li>
                       <li><a href="contact.php">Contact us</a></li>
                    </lu>
                </div>
                <div class="footer-col">
                    <h4>Service we offer</h4>
                    <lu>
                       <li><a href="#open">Online application</a></li> 
                       <li><a href="#open">Updates</a></li>
                    </lu>
                </div>
                <div class="footer-col">
                    <h4>Follow Us</h4>
                    <div class="social-link">
                     <a href="https://www.youtube.com/@thekist111?sub_confirmation=1" target="_blank"><i class="fa-brands fa-youtube"></i></a>
                     <a href="https://chat.whatsapp.com/CqDsEthJK3AC1qjuogVjcP"><i class="fa-brands fa-whatsapp"></i></a>
                     <a href="https://www.instagram.com/n_j_croix_250/"><i class="fa-brands fa-instagram"></i></a>
                     <a href="https://www.linkedin.com/in/itangishatse-musa-384596288/"><i class="fa-brands fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>




    <script>
    var navLink=document.getElementById("navLink");
    function showMenu(){
        navLink.style.right="0";
    }
    function hideMenu(){
        navLink.style.right="-200px";
    }
   </script>

<!-- <script>
    // When the file input changes (i.e., when the user selects an image)
    document.getElementById('fileInput').addEventListener('change', function(event) {
        const file = event.target.files[0];
        if (file) {
            // Create a URL for the uploaded image and set it as the src of the profile picture
            const imageUrl = URL.createObjectURL(file);
            document.getElementById('profileIcon').src = imageUrl;
        }
    });
</script>
-->

<script>
    // Function to show the menu
    function showMenu() {
        const navLink = document.getElementById("navLink");
        navLink.style.display = "block";

        // Add an event listener to close the menu when clicking outside
        document.addEventListener("click", closeOnOutsideClick);
    }

    // Function to hide the menu
    function hideMenu() {
        document.getElementById("navLink").style.display = "none";

        // Remove the event listener after hiding the menu
        document.removeEventListener("click", closeOnOutsideClick);
    }

    // Function to close menu when clicking outside
    function closeOnOutsideClick(event) {
        const navLink = document.getElementById("navLink");
        const barsIcon = document.querySelector(".fas.fa-bars");

        // Close if the click is outside navLink and not on the showMenu button
        if (!navLink.contains(event.target) && !barsIcon.contains(event.target)) {
            hideMenu();
        }
    }

    // Apply functionality only for screens below 768px (mobile devices)
    if (window.innerWidth < 768) {
        // Hide menu on link click for mobile devices
        document.querySelectorAll('.nav_link a').forEach(link => {
            link.addEventListener('click', hideMenu);
        });

        // Show menu on clicking the bars icon for mobile devices
        document.querySelector(".fas.fa-bars").addEventListener("click", showMenu);
    }

    // Optionally, listen to window resize events to toggle functionality dynamically
    window.addEventListener("resize", () => {
        if (window.innerWidth >= 768) {
            // Remove mobile-specific event listeners if the screen is resized to desktop size
            document.querySelectorAll('.nav_link a').forEach(link => {
                link.removeEventListener('click', hideMenu);
            });
            document.querySelector(".fas.fa-bars").removeEventListener("click", showMenu);
        } else {
            // Reapply mobile-specific event listeners if resized back to mobile size
            document.querySelectorAll('.nav_link a').forEach(link => {
                link.addEventListener('click', hideMenu);
            });
            document.querySelector(".fas.fa-bars").addEventListener("click", showMenu);
        }
    });
</script>

</body>
</html>