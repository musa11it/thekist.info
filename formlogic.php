<?php
// Set error reporting to report all errors
error_reporting(E_ALL);
ini_set('error_reporting', E_ALL);


include("connection.php");

if(isset($_POST['submit'])){
    $names=$_POST['fullname'];
    $gender=$_POST['gender'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password_confirmation=$_POST['confirm_password'];

    //check if password match
    if($password !== $password_confirmation){
        echo 'Password mismatch';
    }else if(strlen($password) < 6){
        echo 'Password must be at least 6 characters long';
    }else{
        //check if email or phone number already exists
        $checkQuery="SELECT * FROM registration WHERE email='$email' OR phone='$phone'";
        $checkResult= mysqli_query($conn,$checkQuery);

        if(mysqli_num_rows($checkResult)> 0){
            echo "Email or Phone already exists!! Try using different ones or login if you already have an account";
        }
        else{
            //proceed with registration logic
            $insertQuery="INSERT INTO registration (fullnames,gender,phone,email,password) VALUES ('$names','$gender','$phone','$email','$password')";
            $store= mysqli_query($conn,$insertQuery);

            if(!$store){
                echo "Submission error:".mysqli_error($conn);
            }else{
                echo 'Submitted successfully. Redirecting to login page...';
                //redirect to login page after some time (2 seconds)
                echo '<script>
                        setTimeout(function(){
                            window.location.href="login.php";
                        },2000); 
                      </script>';
                exit();
            }
        }
    }
}
