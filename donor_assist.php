<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Empowering Futures Through Education</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f9;
      margin: 0;
      padding: 0;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

  /* Main Image Styling */
  .main-image {
      width: 100vw;
      height: 70vh;
      background-size: cover;
      background-position: center;
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 20px;
    }
    /* Text Overlay Styling */
    .main-image h1 {
      font-size: 36px;
      color: white;
      background-color: rgba(0, 0, 0, 0.5);
      padding: 15px 30px;
      border-radius: 10px;
    }
    /* Horizontal Scrolling Gallery Styling */
    .gallery-container {
      width: 100vw;
      height: 200px;
      overflow: hidden;
      display: flex;
      align-items: center;
      background-color: #eef5ff;
    }
    /* Image Styling and Animation */
    .gallery-container img {
      height: 180px;
      width: auto;
      border-radius: 10px;
      margin-right: 20px;
      animation: scroll 10s linear infinite;
    }
    /* Animation Keyframes */
    @keyframes scroll {
      0% { transform: translateX(100%); }
      100% { transform: translateX(-100%); }
    }

    .container {
      text-align: center;
      margin-top: 50px;
      padding: 20px;
      width: 80%;
      max-width: 800px;
    }
    h1 {
      font-size: 32px;
      color: #333;
      margin-bottom: 20px;
    }
    p {
      font-size: 18px;
      color: #555;
      line-height: 1.6;
    }
    .button {
      display: inline-block;
      background-color: #4e8481;
      color: #fff;
      padding: 15px 30px;
      font-size: 18px;
      margin-top: 20px;
      border-radius: 5px;
      text-decoration: none;
      transition: background-color 0.3s ease;
    }
    .button:hover {
      background-color: #0056b3;
    }
    .section {
      margin: 40px 0;
      padding: 20px;
      background-color: #ffffff;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .section h2 {
      font-size: 26px;      color: #4e8481;

      margin-bottom: 15px;
    }
    .donate-section {
      background-color: #4e8481;
      color: #fff;
      padding: 30px;
      border-radius: 10px;
      margin-top: 40px;
    }
    .donate-section h2 {
      font-size: 24px;
      margin-bottom: 20px;
    }
    .donate-section .button {
      background-color: #ffaa33;
      color: #333;
      font-weight: bold;
    }
    .donate-section .button:hover {
      background-color: #e89a2d;
    }

    .modal {
      display: none;
      position: fixed;
      z-index: 1000;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.5);
      justify-content: center;
      align-items: center;
    }
    .modal-content {
      background-color: #fff;
      padding: 20px;
      border-radius: 10px;
      width: 90%;
      max-width: 500px;
      text-align: center;
    }
    .modal-content h2 {
      font-size: 24px;
      color: #007bff;
    }
    .modal-content p {
      font-size: 18px;
      color: #333;
      margin-bottom: 20px;
    }
    .close-btn {
      display: inline-block;
      background-color: #ffaa33;
      color: #333;
      padding: 10px 20px;
      font-size: 16px;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }
    .close-btn:hover {
      background-color: #e89a2d;
    }


  </style>
</head>
<body>
      <!-- Image Gallery Section -->
  <div class="gallery-container">
  <?php
require 'connection.php';

$sql = "SELECT image_path, alt_text FROM picture_of_our_children ORDER BY id DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<img src='" . $row['image_path'] . "' alt='" . htmlspecialchars($row['alt_text']) . "'>";
    }
} else {
    echo "No images found.";
}

$conn->close();
?>

   
  </div>

  <div class="container">
    <h1>Empowering Futures Through Education</h1>
    <p>Join us in making a lasting impact by supporting children from underprivileged backgrounds to receive the education they deserve. Together, we can create opportunities and empower the next generation to reach their full potential.</p>

    <div class="section">
      <h2>Our Vision</h2>
      <p>We envision a world where every child, regardless of their background, has access to quality education and the opportunity to succeed. Through our initiatives, we strive to break the cycle of poverty and build brighter futures.</p>
    </div>

    <div class="section">
      <h2>Our Mission</h2>
      <p>Our mission is to provide educational support and resources to children from low-income families. By partnering with communities, donors, and educators, we aim to make education accessible and empowering for those who need it most.</p>
    </div>

    <div class="donate-section">
      <h2>Assist Our Mission</h2>
      <p>Your support is invaluable in helping us continue our work. By donating, you’re directly contributing to the education and empowerment of children from underprivileged communities.</p>
      <a  class="button" onclick="openModal()">Become a Donor</a>
    </div>
  </div>

  <div id="donorModal" class="modal">
    <div class="modal-content">
      <h2>Donate via MTN or Airtel Money</h2>
      <p>To support our cause, please use the following instructions:</p>
      <p><strong>For MTN or Airtel Money:</strong></p>
      <p>Dial: <strong>*182*8*1*1032817*amount#</strong> and follow the instructions.</p>
      <p>Enter the donation amount you wish to contribute to complete the process.</p>
      <span class="close-btn" onclick="closeModal()">Close</span>
    </div>
  </div>

  <script>
    // Function to open the modal
    function openModal() {
      document.getElementById("donorModal").style.display = "flex";
    }

    // Function to close the modal
    function closeModal() {
      document.getElementById("donorModal").style.display = "none";
    }

    // Close the modal if the user clicks outside the modal content
    window.onclick = function(event) {
      const modal = document.getElementById("donorModal");
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
  </script>
</body>
</html>
