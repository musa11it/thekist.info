<?php
include "connection.php";



if(isset($_POST['submit'])){
    $title=$_POST['title'];
    $title1=$_POST['title1'];
    $required=$_POST['required'];
    $title2=$_POST['title2'];
    $details=$_POST['details'];
 //proceed with registration logic
 $insertQuery="INSERT INTO universitydetails (title,title1,required,title2,details) VALUES ('$title','$title1','$required','$title2','$details')";
 $store= mysqli_query($conn,$insertQuery);

 if(!$store){
     echo "Submission error:".mysqli_error($conn);
 }else{
    
    //header("Location:index.php");
     echo 'Submitted successfully, wait a little bit while
      redirecting to index page after some time (5000 ,seconds)';
     echo '<script>
             setTimeout(function(){
                 window.location.href="universitydetails.php";
            },2000); 
           </script>';
     exit();
 }







}






?>