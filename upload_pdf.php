<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="upload_pdflogic.php" method="post" enctype="multipart/form-data">
    <label for="description">Description:</label>
    <input type="text" name="description_pdf" id="description" required>
    <br>
    <label for="pdf">Select PDF:</label>
    <input type="file" name="pdf" id="pdf" accept=".pdf" required>
    <br>
    <input type="submit" name="submit" value="Upload">
</form>


</body>
</html>