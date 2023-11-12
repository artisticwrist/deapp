<?php

ini_set('memory_limit', '256M');
error_reporting(E_ALL);
ini_set('display_errors', 1);
include "../connect/connect.php";

session_start();

// if(isset($_POST['submit'])){
//     $imgPost = $_FILES['image']['name'];
//     $imageTmp = $_FILES['image']['tmp_name'];

//     // Sanitize the file name (remove spaces and special characters)
//     $imgPost = preg_replace("/[^A-Za-z0-9._-]/", "", $imgPost);
                    
//     // Move the uploaded image to the designated directory
//     $uploadPath = '/opt/lampp/htdocs/deapp/uploads/' . $imgPost;
//     move_uploaded_file($imageTmp, $uploadPath);

//     $description = $_POST["img-description"];
            
//     // Insert data into the user_upload table
                
//     $sql = "INSERT INTO `user_upload` (user_id, image, img_description) VALUES ('$userid', '$imgPost', '$description')";
                
//     $query = mysqli_query($con, $sql);
                
//     if($query){
//         echo "<script>alert('Post uploaded successfully');</script>";
//     } else {
//         echo "Error trying to submit the application. Please try again later.";
//     }    
// }


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

    <div class="content">
        <!--main page  -->
        <div class="main-page">
            <section class="explore" id="explore">
                <?php
                include "../component/nav.php";
                include "../php/show-images.php";
                ?>

            </section>

            <!-- users page -->
            <section class="user-section" id="user-page">

                <!--USER PAGE  -->
                <div id="user-section">

                    <div class="display-none-large">
                        <?php
                        include "../component/search-box.php";
                        ?>
                    </div>


                    <div class="header " id="header-display">
                        <?php
                        include "../php/logo.php";
                        ?>
                        <ul>
                            <li><a href="../auth/logout.php">log out</a></li>
                        </ul>
                    </div>

                    <div class="box">
                        <?php
                        include "../component/user-profile.php";
                        ?>

                        <!-- USER UPLOADS -->
                        <div class="user-uploads ">
                            <?php
                            include "../php/show-user-images.php";
                            ?>
                        </div>
                    </div>


                    <div class="bottom-padding  ">
                        <p>copyrights @theblackwrist</p>
                    </div>
                </div>

                <!-- UPLOAD NEW POST -->
                <div class="upload-post display-none" id="upload-form">
                    <form action="../component/user-main.php" method="post" enctype="multipart/form-data">
                        <h2>Upload new post</h2>
                        <div class="input-form">
                            <input type="file" name="image" id="">
                        </div>
                        <div class="input-form">
                            <textarea name="img-description" placeholder="post caption" id="" cols="30"
                                rows="7"></textarea>
                        </div>
                        <button name="submit" type="submit">Submit</button>
                    </form>
                    <button onclick="closeUploadForm()">back</button>
                </div>
            </section>

            <!-- Edit users prfile form -->
            <div class="upload-post display-none" id="profile-form">
                <form action="../component/user-main.php" method="post" enctype="multipart/form-data">
                    <h2>Edit your profile</h2>
                    <div class="input-form">
                        <input type="text" name="full name" placeholder="full name">
                    </div>
                    <div class="input-form">
                        <input type="text" name="email" placeholder="email">
                    </div>
                    <div class="input-form">
                        <input type="text" name="mobile" placeholder="full name">
                    </div>
                    <button name="submit" type="submit">Submit</button>
                </form>
                <button onclick="closeUploadForm()">back</button>
            </div>
            </section>

            <!-- users list && search -->

            <section class="users-list" id="users-list">

                <?php
                    include "../component/nav.php";    
                    include "../component/search-box.php";
                ?>
            </section>

            <!-- FOOTER TOGGLE -->
            <footer>
                <ul>
                    <li onclick="showHome()">Home</li>
                    <li onclick="showUsers()">Users</li>
                    <li onclick="showProfile()">Profile</li>
                </ul>
            </footer>

            <!-- view full image modal -->
            <section class="modal">
                <div class="modal-post">
                    <img src="" id="modalImage" alt="" />
                    <div class="modal-post-description">
                        <p id="modal-description"></p>
                    </div>
                </div>
            </section>

        </div>
    </div>

    <div class="onload-screen">
        <h1 class="logo-app">Deapp</h1>
    </div>

    <script src="../js/web.js"></script>
    <script src="../js/onload.js"></script>
</body>

</html>