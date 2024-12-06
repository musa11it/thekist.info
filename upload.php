<?php
error_reporting(E_ALL);
ini_set('display_errors',E_ALL );

include "connection.php";
if(isset($_POST['submit'])){
    // Check if the file is uploaded
    if(isset($_FILES['file'])){
        // Get image name
        $file = $_FILES['file']['name'];
        // Get text
        $description = $_POST['description']; // Fixed the array key
        
        // Image file path in the directory
        $target = "images/" . basename($file);
        
        // Prepare the SQL query to prevent SQL injection
        $sql = "INSERT INTO add_image(file, description) VALUES ('$file','$description') ";
        $store = mysqli_query($conn,$sql);
        
        // Execute the query
        if($store){
            // Move the uploaded file to the target directory
            if(move_uploaded_file($_FILES['file']['tmp_name'], $target)){
                echo "Image uploaded and data inserted successfully!";
                echo '<script>
                setTimeout(function(){
                    window.location.href="adminpanel.php";
                },2000); 
              </script>';
                
            } else {
                echo "Image uploading failed, try again.";
            }
        } else {
            echo "Failed to insert data into database." . mysqli_error($conn);
        }
        
      
    } else {
        echo "no file uploaded";
    }

}
?>
