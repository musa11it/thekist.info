<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us</title>
  <link rel="stylesheet" href="contact.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  <style>

p a{
  text-decoration: none;
  color: black;
}
p a:hover{
  color: gray;
}
  </style>
</head>
<body>
  <div class="container">
    <h1>Welcome to thekist.info</h1>
    <div class="contact-form">
      <h2>Send us a message</h2>
      <form action="contactlogic.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <label for="name">whatsapp Number:</label>
        <input type="phone" id="phone" name="phone" required>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <label for="name">Type Of Scholarship:</label>
        <input type="text" name="scholarship" placeholder="Input type of scholarship you want as many as possible" required>
        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="5" required></textarea>
        <button type="submit" name="submit">Send</button>
      </form>
    </div>
    <div class="address">
      <h2>Our Address</h2>
      <p><i class="fas fa-map-marker-alt"></i><a href="#">KN3 street, Kigali-Nyarugenge, CST Nyarugenge</a></p>
      <p><i class="fas fa-envelope"></i> itangishatsemusa@gmail.com</p>
      <p><i class="fas fa-envelope"></i> jeanniyonkuru29@gmail.com</p>
      <p><i class="fas fa-phone"></i> +250787065734</p>
      <p><i class="fas fa-phone"></i> +250 782 693 724</p>

    </div>
  </div>
</body>
</html>
