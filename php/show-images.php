<?php
$sql = "SELECT * FROM `user_upload` ORDER BY RAND()";
$result = mysqli_query($con, $sql);

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $image = $row['image'];
        $img_description = $row['img_description'];
        echo '
        <div class="img-box">
            <img src="../images/' . $image . '" alt=""
                onclick="showModal(\'../images/' . $image . '\', \'' . $img_description . '\')" />
        </div>
        ';
    }
}
?>