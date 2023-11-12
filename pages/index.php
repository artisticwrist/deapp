<?php

//force display errors
error_reporting(E_ALL);
ini_set('display_errors', 1);

//include connection
include '../connect/connect.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" media="screen" href="../css/explore.css" />
</head>

<body>

    <div class="content">
        <section class="explore" id="explore">



            <?php
             include "../component/nav.php";
             include "../php/show-images.php";
            ?>

        </section>
        <section class="user-section" id="user-page">
            <div id="not-signed-in">
                <?php
                include "../php/logo.php";
                ?>
            </div>

        </section>


        <section class="modal">
            <div class="modal-post">
                <img src="" id="modalImage" alt="" />
                <div class="modal-post-description">
                    <p id="modal-description"></p>
                </div>
            </div>
        </section>
    </div>

    <section class="onload-screen">
        <?php
            include "../php/logo.php";
        ?>
    </section>


    <script src="../js/web.js"></script>
    <script src="../js/onload.js"></script>
</body>

</html>