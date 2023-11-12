<?php
ini_set('memory_limit', '256M');
error_reporting(E_ALL);
ini_set('display_errors', 1);
include "../connect/connect.php";
session_start();



if (isset($_SESSION['email']) && isset($_SESSION['password']) ) {
     $userid = $_SESSION['id'];

?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" media="screen" href="../css/explore.css" />
</head>

<body>

    <!--main page  -->
    <?php

    $InitialDescription = $_SESSION['description'];

    if($InitialDescription == 0){
        include "../component/user-profile-form.php";
    }else{
        header("Location: ../component/user-main.php");
    }
    
    ?>
    <script src="../js/web.js"></script>
</body>

</html>
<?php
}else{
    header('location: ../pages/login.php');
};
?>