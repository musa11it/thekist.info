<?php
include "connection.php";
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:title" content="thekist|" />
<meta property="og:description" content="Find Global Scholarships, Grants & Aid Opportunities" />
<meta property="og:image" content="https://thekist.info/images/logo.jpg" />
<meta property="og:url" content="https://thekist.info/" />
<meta property="og:type" content="website" />

    <title></title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/png" href="images/logo.jpg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
    <style>
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

@media(max-width: 700px){
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
    z-index: 1;
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





.container {
            display: flex;
            max-width: 1200px;
            margin: 20px auto;
            padding: 0 20px;
            gap: 20px;
        }

        .main-content {
            flex: 2;
        }

        .main-content p {
            margin-bottom: 20px;
            line-height: 1.8;
        }

        .social-icons {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
        }

        .social-icons a {
            text-decoration: none;
            color: #fff;
            font-size: 18px;
            width: 40px;
            height: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
        }

        .social-icons .facebook { background: #3b5998; }
        .social-icons .twitter { background: #00acee; }
        .social-icons .pinterest { background: #bd081c; }
        .social-icons .whatsapp { background: #25d366; }
        .social-icons .youtube { background: #c4302b; }

        .right-sidebar {
            flex: 1;
        }

        .update-section {
            margin-bottom: 20px;
        }

        .update-section h3 {
            font-size: 18px;
            margin-bottom: 15px;
            color: gray;
        }

        .update-item {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .update-item img {
            width: 100px;
            height: 100px;
            border-radius: 50%; /* Makes the image circular */
            margin-right: 10px;
        }

        .update-item p {
            margin: 0;
            font-size: 14px;
            color: #333;
        }

       


        .gallery-container {
            position: relative;
            max-width: 100%;
            overflow: hidden;
            margin: 20px auto;
        }

        .gallery {
            display: flex;
            flex-wrap: nowrap;
            transition: transform 0.5s ease-in-out;
        }

        .gallery-item {
            flex: 0 0 auto;
            width: 300px;
            margin: 0 10px;
            position: relative;
        }

        .gallery-item img {
            width: 100%;
            height: auto;
            border-radius: 8px;
        }

        .gallery-item .overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: rgba(0, 0, 0, 0.6); /* Semi-transparent background */
            color: white;
            padding: 15px;
            text-align: left;
            border-radius: 0 0 8px 8px;
        }

        .overlay h3 {
            font-size: 16px;
            margin: 0 0 5px;
        }

        .overlay p {
            font-size: 14px;
            margin: 0;
        }

        .controls {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 10px;
        }

        .social-icons {
            display: flex;
            gap: 15px;
            margin-bottom: 10px;
        }

        .social-icons a {
            text-decoration: none;
            font-size: 24px;
            color: #000;
            transition: color 0.3s;
        }

        .social-icons a:hover {
            color: #007bff;
        }

        .control-button {
            background-color: gray;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
            font-size: 16px;
        }

        .control-button:hover{
           background-color: #0056b3;
        }

        .control-button:disabled {
            background-color: #ccc;
            cursor: not-allowed;
        }

        .updates-container::-webkit-scrollbar {
            height: 8px;
        }

        .updates-container::-webkit-scrollbar-thumb {
            background-color: #ccc;
            border-radius: 4px;
        }

        .updates-container::-webkit-scrollbar-track {
            background-color: #f0f0f0;
        }


          /* Hides the last two items */
          .update-item:nth-last-child(-n+2) {
            display: none;
        }


        .update-item.hidden {
            display: none;
        }


        .show-more-btn {
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 14px;
            color: #fff;
            background-color: gray;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-left: 900px;
        }

        .show-more-btn:hover {
            background-color: #0056b3;
        }


        .thekist-section {
            font-family: Arial, sans-serif;
            background: #ffffff;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            max-width: 600px;
            margin: 0 auto;
            text-align: center;
        }
        .thekist-section h1 {
            font-size: 2.5rem;
            color: gray;
            margin-bottom: 1rem;
        }
        .thekist-section p {
            font-size: 1.2rem;
            line-height: 1.8;
            margin-bottom: 2rem;
        }
        .thekist-section .social-icons {
            display: flex;
            justify-content: center;
            gap: 1rem;
        }
        .thekist-section .social-icons a {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: #f0f0f0;
            text-decoration: none;
            color: #333;
            font-size: 1.5rem;
            transition: background-color 0.3s, transform 0.3s;
        }
        .thekist-section .social-icons a:hover {
            background-color: #0056b3;
            color: #ffffff;
            transform: scale(1.1);
        }


        .thekist-section .social-icons .facebook {
            background-color: #4267B2;
        }
        .thekist-section .social-icons .facebook:hover {
            background-color: #365899;
        }
        .thekist-section .social-icons .twitter {
            background-color: #1DA1F2;
        }
        .thekist-section .social-icons .twitter:hover {
            background-color: #0d95e8;
        }
        .thekist-section .social-icons .whatsapp {
            background-color: #25D366;
        }
        .thekist-section .social-icons .whatsapp:hover {
            background-color: #1ebe57;
        }
        .thekist-section .social-icons .youtube {
            background-color: #FF0000;
        }
        .thekist-section .social-icons .youtube:hover {
            background-color: #cc0000;
        }


        @media (max-width: 768px) {
    .container {
        flex-direction: column;
    }

    .main-content, .right-sidebar {
        width: 100%; /* Full width for smaller devices */
    }

    .gallery-item {
        max-width: 100%; /* Adjust images for smaller devices */
    }

    .show-more-btn {
        margin-left: 0; /* Align button properly */
        display: block;
        margin: 20px auto;
    }
}

/* Media Query for Mobile */
@media (max-width: 480px) {
    .social-icons a {
        font-size: 14px;
        width: 30px;
        height: 30px;
    }

    .gallery-item {
        margin: 10px auto;
    }

    .control-button {
        font-size: 14px;
        padding: 8px 16px;
    }

    .gallery-container{
        flex-direction: column;
    }
    #gallery{
        flex-direction: column;
    }
    .gallery{
        flex-direction: column;
    }
}

.info{
    color: #000;
}
.info1{
    color: gray;
}

#it{
    background-color: gray;
    position: relative;
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
            <li><a href="#open">Updates</a>
            <ul class="dropdown-content">
                    <li><a href="#open">Open application</a></li>
                    <li><a href="#announce">Announcement</a></li>
                </ul>
            </li>
             <li><a href="#Service">Services</a></li>
            <li> <a href="contact.php">Contact Us</a></li>
        </ul>
        <form class="example" action="search.php" method="GET">
            <input type="text" placeholder="Search.." name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
          </form>
        
       <ul >
            <li class="list2"><a href="login.php" >Log In</a></li>
            <li ><a href="form.php" >Register</a></li>
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
            <li>We assist people in applying <br>
            for scholarships both in<br> Rwanda and globally.
            </li>
        </ul>
        <ul class="Service1">
            <li>We publish scholarships,internships,<br> 
            events, and technology-related<br> services for growth.
            </li>
        </ul>
        <ul class="Service1" id="reviewer">
            <li>We sponsor children <br>
            from poor families for <br>educational opportunities.
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
  <div class="image-container" >
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




<header1>
        <div class="container">
            <div class="thekist-section">
                <h1>Welcome to <a href="https://thekist.info/">thekist.info</a></h1>
                <p class="info">
                We provide news and updates related to universities in Rwanda and abroad. Our main goal is to help countless students secure places in their preferred universities and pursue their dream careers.
                </p>
                <div class="social-icons">
                    <a href="https://www.facebook.com/itangishatse.musa" class="facebook" title="Share on Facebook">F</a>
                    <a href="https://x.com/ikiryango" class="twitter" title="Share on Twitter">X</a>
                    <a href="https://chat.whatsapp.com/CqDsEthJK3AC1qjuogVjcP" class="whatsapp" title="Share on WhatsApp">W</a>
                    <a href="https://www.youtube.com/@thekist111?sub_confirmation=1" target="_blank" class="youtube" title="Visit YouTube">Y</a>
                </div>
            </div>
            <aside class="right-sidebar">
                <div class="update-section">
                    <h3>Latest Updates</h3>
                    <div class="update-item">
                        <a href="hungary.php"><img src="images/hec.png" alt="Update 1"></a>
                        <a href="hungary.php"><p class="info1">Call for application Hungaricum stipendium in partnership with HEC Rwanda</p></a>
                    </div>
                    <div class="update-item">
                        <a href="iprc.php"><img src="images/RP.png" alt="Update 2"></a>
                        <a href="iprc.php"> <p class="info1">Call for Applications: Short-Term Training in Image Editing and Filmmaking at Rwanda Polytechnic</p></a>
                    </div>
                    <div class="update-item">
                        <img src="https://via.placeholder.com/60" alt="Update 3">
                        <p>Call for Applications to Study Bachelor of Technology Programs at Rwanda Polytechnic</p>
                    </div>
                    <div class="update-item">
                        <img src="https://via.placeholder.com/60" alt="Update 4">
                        <p>Rwanda Polytechnic Application Process 2024/2025 for BTech Applicants</p>
                    </div>
                </div>
                <div class="update-item">
            <img src="https://via.placeholder.com/60" alt="Update 5">
            <p>Scholarships for Rwandan Students Available for 2024</p>
        </div>
    </div>
    <button class="show-more-btn" id="toggleUpdatesBtn">Show More</button>
            </aside>
        </div>
    </header1>


    <header id="it">
        <h1 style="text-align: center;">Helpful Guides</h1>
    </header>

    <div class="gallery-container">
        <div class="gallery" id="gallery">
            <div class="gallery-item">
                <a href="iprc.php"><img src="images/RP.png" alt="Image 1"></a>
                <div class="overlay">
                    <h3>Announcements</h3>
                    <p>Rwanda Polytechnic Training Opportunity</p>
                </div>
            </div>
            <div class="gallery-item">
               <a href="hungary.php"> <img src="images/hec.png" alt="Image 2"></a>
                <div class="overlay">
                    <h3>Announcements</h3>
                    <p>call for application to study in Hungary in partnership with HEC Rwanda</p>
                </div>
            </div>
            <div class="gallery-item">
                <a href="hungary.php"><img src="images/hec.png" alt="Image 3"></a>
                <div class="overlay">
                    <h3>Scholarships for Rwandans</h3>
                    <p>apply now to study in Hungary</p>
                </div>
            </div>
        </div>
    </div>

    <div class="controls">
        <!-- Social Media Icons -->
        <div class="social-icons">
            <a href="https://chat.whatsapp.com/CqDsEthJK3AC1qjuogVjcP" target="_blank" title="WhatsApp">
                <img src="https://img.icons8.com/color/48/whatsapp.png" alt="WhatsApp Icon" width="40" height="40">
            </a>
            <a href="https://www.youtube.com/@thekist111?sub_confirmation=1" target="_blank">
                <img src="https://img.icons8.com/color/48/youtube-play.png" alt="YouTube Icon" width="40" height="40">
            </a>
        </div>

        <!-- Navigation Buttons -->
        <button class="control-button" id="prevBtn" onclick="scrollGallery(-1)">Previous</button>
        <button class="control-button" id="nextBtn" onclick="scrollGallery(1)">Next</button>
    </div>

    <script>
        const gallery = document.getElementById('gallery');
        const galleryItems = document.querySelectorAll('.gallery-item');
        let currentIndex = 0;

        function scrollGallery(direction) {
            const maxIndex = galleryItems.length - 1;

            // Update the current index
            currentIndex += direction;

            // Ensure the index stays within bounds
            if (currentIndex < 0) {
                currentIndex = 0;
            } else if (currentIndex > maxIndex) {
                currentIndex = maxIndex;
            }

            // Scroll the gallery
            const scrollAmount = currentIndex * (galleryItems[0].offsetWidth + 20); // Include margin
            gallery.style.transform = `translateX(-${scrollAmount}px)`;

            // Disable buttons when at the edges
            document.getElementById('prevBtn').disabled = currentIndex === 0;
            document.getElementById('nextBtn').disabled = currentIndex === maxIndex;
        }
    </script>

<script>
    const swiper = new Swiper('.swiper-container', {
        slidesPerView: 4,
        spaceBetween: 10,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
</script>

<script>
        const toggleBtn = document.getElementById("toggleUpdatesBtn");
        const hiddenItems = document.querySelectorAll(".update-item.hidden");
        let isShowingMore = false;

        toggleBtn.addEventListener("click", () => {
            isShowingMore = !isShowingMore; // Toggle state

            hiddenItems.forEach(item => {
                item.style.display = isShowingMore ? "block" : "none";
            });

            // Update button text
            toggleBtn.textContent = isShowingMore ? "Show Less" : "Show More";
        });
    </script>






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
                       <li><a href="#open">Apply now</a></li>
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