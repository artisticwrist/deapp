<?php
ini_set('memory_limit', '256M');
error_reporting(E_ALL);
ini_set('display_errors', 1);
include "../connect/connect.php";


$id = $_GET['id'];

$sql = "SELECT * FROM `users` WHERE id = $id";
$result = mysqli_query($con, $sql);

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $username = $row['username'];
        $pfp = $row['pfp'];
        $fullname = $row['fullname'];
        $pronoun = $row['pronoun'];
        $description = $row['description'];
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
    <section class="user-profile">
        <!-- HEADER PROFILE -->
        <header class="profile ">
            <!-- PROFILE PICTURE -->
            <img src="../images/" alt="" />

            <!-- CONTAINERS FOLLOWERS, FOLLOWING, POST.... -->
            <div class="followers__post">
                <div class="flex">
                    <h2>12k</h2>
                    <p>Followers</p>
                </div>
                <div class="flex">
                    <h2>1k</h2>
                    <p>Following</p>
                </div>
                <div class="flex">
                    <h2>12</h2>
                    <p>Post</p>
                </div>
            </div>
        </header>
        <!-- USER PROFILE DESCRIPTION -->
        <section class="description ">
            <span>
                <h1><?php echo $username ?></h1>
                <p>| <?php echo $pronoun ?></p>
            </span>
            <p><?php echo $description ?></p>
        </section>
        <!-- USER UPLOADS -->
        <div class="user-uploads ">
            <?php


            $sql = "SELECT * FROM `user_upload` WHERE user_id = $id";
            $result = mysqli_query($con, $sql);

            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $image = $row['image'];
                    $img_description = $row['img_description'];
                    echo '
                        <img src="../images/' . $image . '" alt=""
                            onclick="showModal(\'../images/' . $image . '\', \'' . $img_description . '\')" />
                    ';
                }
            }

            ?>
        </div>
    </section>

</body>

</html>
<?php

}
}

?>