<?php
error_reporting(E_ALL);
ini_set('error_reporting', E_ALL);


include "connection.php";
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $scholarship=$_POST['scholarship'];
    $message=$_POST['message'];
 //proceed with registration logic
 $insertQuery="INSERT INTO contact (name,phone,email,scholarships,message) VALUES ('$name','$phone','$email','$scholarship','$message')";
 $store= mysqli_query($conn,$insertQuery);

 if(!$store){
     echo "Submission error:".mysqli_error($conn);
 }else{
    
    //header("Location:index.php");
     echo 'Submitted successfully, wait a little bit while
      redirecting to index page after some time (5000 ,seconds)';
     echo '<script>
             setTimeout(function(){
                 window.location.href="index.php";
            },2000); 
           </script>';
     exit();
 }







}


?>