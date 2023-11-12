<?php

//force display errors
error_reporting(E_ALL);
ini_set('display_errors', 1);

//include connection
include '../connect/connect.php';


    //initial error mesages
    $errFullname = "";
    $errUsername = "";
    $errEmail = "";
    $errPassword = "";
    $error = "";  


if(isset($_POST['submit'])){

    // check if the inputs are empty, doesn't submit the inputs to database if one of the inputs is empty
    if(empty($_POST['fullname'])){
        
        $errFullname = 'please input your full name';
        
    }elseif (empty($_POST['username'])) {
        
        $errUsername = 'please input a username';
        
    }elseif (empty($_POST['email'])) {
        
        $errEmail = 'please input an email';
        
    }elseif (empty($_POST['password'])) {    
        $errPassword = 'please input a password';
    }else{
        
        //stores input data in a variable
        $fullname=$_POST['fullname'];
        $username=$_POST['username'];
        $email=$_POST['email'];
        $description= 0;
        $pronouns=0;
        $gender=0;
        $pfp = 0;
        $mobile=0;
        $link = 0;
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        //check is email exist already
        $checkEmail = "SELECT * from `users` where email='$email'";
        $result=mysqli_query($con,$checkEmail);
        $count = mysqli_num_rows($result);


        //check if username exist already
        $checkUsername = "SELECT * from `users` where username='$username'";
        $resultUsername=mysqli_query($con,$checkUsername);
        $countUser = mysqli_num_rows($resultUsername);


        if($count>0){
            
            header("Location: ../pages/signup.php?error=Email already exist"); 
                             
        }elseif ($countUser > 0) {
            
            header("Location: ../pages/signup.php?error=Username already exist");
            
        }else{
            
            //if email or username doesnt exist, this inserts the new user to the users table
            $sql="insert into `users` (fullname,username,email,password,pronoun,description,gender,pfp,link,mobile)
            values('$fullname','$username','$email','$password', '$pronouns', '$description','$gender','$pfp','$link','$mobile')";
            if($con->query($sql)){
                
            echo "<script>alert('Sign up successful. Please login with your details.');</script>";
            echo "<script>setTimeout(function(){window.location.href='../pages/login.php'},500);</script>";
            
            }else{
                
                die(mysqli_error($con));
                
            }
        }
    }

    

}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../css/signup.css'>
</head>

<body>

    <form action="../pages/signup.php" method="POST" class="form-css">
        <?php
        include "../php/logo.php";
        ?>

        <p>Signup to join us</p>

        <?php if(isset($_GET['error'])){ ?>
        <p class='error' style='color: #A94442;'>
            <?php  echo $_GET['error']; ?></p>
        <?php }   ?>
        <p class="error-input"> <?php echo $errFullname; ?></p>
        <div class="form-box">
            <label for="">Full name</label>
            <input type="text" placeholder="Full name" name="fullname">
        </div>


        <p class="error-input"> <?php echo $errUsername; ?></p>
        <div class="form-box">
            <label for="">Username</label>
            <input type="text" placeholder="Username" name="username">
        </div>


        <p class="error-input"> <?php echo $errEmail; ?></p>
        <div class="form-box">
            <label for="">Email</label>
            <input type="email" placeholder="abc@xyz.com" name="email">
        </div>


        <p class="error-input"> <?php echo $errPassword; ?></p>
        <div class="form-box">
            <label for="">Password</label>
            <input type="password" placeholder="Secure password" name="password">
        </div>

        <button name="submit" type="submit">Sign up</button>

    </form>

    <p class="signin-login">Already have an account ? <a href="../pages/login.php">log in</a></p>


</body>

</html>