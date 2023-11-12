<?php

ini_set('memory_limit', '256M');
error_reporting(E_ALL);
ini_set('display_errors', 1);
include "../connect/connect.php";

if (isset($_SESSION['email']) && isset($_SESSION['password']) ) {
     $userid = $_SESSION['id'];    

?>



<!DOCTYPE html>
<html lang="en">

<?php

    if(isset($_POST['submit'])){

        $fullname = $_SESSION['fullname'];
        $username = $_SESSION['username'];
        $email = $_SESSION['email'];
        $password = $_SESSION['password'];

        // New user profile input
        $description = $_POST['description'];
        $pronouns = $_POST['pronoun'];
        $gender = $_POST['gender'];
        $pfp = $_POST['pfp'];
        $mobile = $_POST['mobile'];
        $link = $_POST['link'];
        // Assuming $userid is the id of the user you want to update
        $sql = "UPDATE `users` SET fullname='$fullname', username='$username', email='$email', password='$password', pronoun='$pronouns', description='$description', gender='$gender',pfp='$pfp',link='$link', mobile='$mobile' WHERE id=$userid";
        
        if($con->query($sql)){
            echo "<script>alert('Successful. kindly login in again');</script>";
            header("Location: ../pages/login.php?message=profile completed. Login again");
        } else{
            die(mysqli_error($con));
        }
    }

   
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" media="screen" href="../css/explore.css" />
    <link rel='stylesheet' type='text/css' media='screen' href='../css/user-form.css'>
</head>

<body>
    <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>" id="complete-form">

        <h2>Hello <?php echo $_SESSION['fullname']; ?>, please kindly fill in more details</h2>

        <!-- gender -->
        <div class="form-box gender-input">
            <label for="">Gender</label>
            <input type="text" placeholder="non-binary" name="gender">
            <div class="btn-box">
                <button onclick="showPronounForm()" type="button">next</button>
            </div>
        </div>

        <!-- pronouns -->
        <div class="form-box pronoun-input display-none">
            <label for="">Pronouns</label>
            <input type="text" placeholder="they/them" name="pronoun">
            <div class="btn-box">
                <button type="button" onclick="showMobileForm()">next</button>
            </div>
        </div>

        <!-- mobile -->
        <div class="form-box mobile-input display-none">
            <label for="">Mobile</label>
            <input type="number" placeholder="+44 012 273 22" name="mobile">
            <div class="btn-box">
                <button type="button" onclick="showLinkForm()">next</button>
            </div>
        </div>

        <!-- link -->
        <div class="form-box link-input display-none">
            <label for="">Links</label>
            <input type="text" placeholder="Portfolio / social media link" name="link">
            <div class="btn-box">
                <button type="button" onclick="showDescriptionForm()">next</button>
            </div>
        </div>

        <!-- description -->
        <div class="form-box description-input display-none">
            <label for="">Description</label>
            <textarea id="" cols="30" name="description" rows=" 10" placeholder="add a profile description"></textarea>
            <div class="btn-box">
                <button type="button" onclick="showPfpForm()">next</button>
            </div>
        </div>

        <!-- pfp -->
        <div class="form-box pfp-input display-none">
            <label for="">Set a profile picture</label>
            <input type="text" name="pfp" placeholder="pfp link">
        </div>

        <button class="display-none btn-finish" name="submit" type="submit" onclick="closeForm()">Finish</button>

    </form>

    <script src="../js/web.js"></script>
</body>

</html>

<?php
}else{
    header('location: ../pages/login.php');
};
?>