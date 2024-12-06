<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" action="application_statuslogic.php">
    <label for="sponsor">Sponsor:</label>
    <input type="text" name="sponsor" id="sponsor" required><br><br>
    
    <label for="category">Category:</label>
    <input type="text" name="category" id="category" required><br><br>
    
    <label for="app_status">Application Status:</label>
    <input type="text" name="app_status" id="app_status" required><br><br>
    
    <button type="submit">Insert Data</button>
</form>
</body>
</html>