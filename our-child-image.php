<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Upload and Display Image</title>
  <style>
    .gallery-container {
      display: flex;
      gap: 20px;
      flex-wrap: wrap;
    }
    .gallery-container img {
      width: 200px;
      height: 150px;
      object-fit: cover;
      border-radius: 10px;
      transition: transform 0.3s ease;
    }
    .gallery-container img:hover {
      transform: scale(1.1);
    }
  </style>
</head>
<body>

  <h1>Upload Picture of Our Children</h1>
  <form action="our-child-imagelogic.php" method="POST" enctype="multipart/form-data">
    <label for="image">Choose an image:</label>
    <input type="file" name="image" id="image" required>
    <input type="text" name="alt_text" placeholder="Enter alt text (optional)">
    <button type="submit" name="upload">Upload Image</button>
  </form>

</body>
</html>
