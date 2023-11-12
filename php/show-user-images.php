<?php

$userID = $_SESSION['id'];


$sql = "SELECT * FROM `user_upload` WHERE user_id = $userID";
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