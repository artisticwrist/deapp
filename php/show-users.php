<?php

include "../connect/connect.php";

// Modify your SQL query to retrieve only the relevant records
$sql = "SELECT * FROM `users` ORDER BY RAND()";
$result = mysqli_query($con, $sql);

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $username = $row['username'];
        $pfp = $row['pfp'];
        echo '
            <a href="../php/show-user-profile.php?id='.$id.'">
                <li class="users-box" onclick="showUserProfile()"> 
                    <img src="../images/'.$pfp.'" alt="">
                    <p>'.$username.'</p>
                </li>
            </a>
        ';
    }
}

?>