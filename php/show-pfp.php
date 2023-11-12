<?php

include "../connect/connect.php";

// Modify your SQL query to retrieve only the relevant records
$sql = "SELECT image FROM `user_upload` ORDER BY RAND()";
$result = mysqli_query($con, $sql);

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $username = $row['username'];
        $pfp = $row['pfp'];
        echo '
            <li class="users-box"> <img src="../images/'.$pfp.'" alt="">
                <p>'.$username.'</p>
            </li>
        ';
    }
}

?>