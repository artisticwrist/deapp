<section class="user-profile">
    <!-- HEADER PROFILE -->
    <header class="profile ">
        <!-- PROFILE PICTURE -->
        <img src="../images/" alt="" />

        <!-- CONTAINERS FOLLOWERS, FOLLOWING, POST.... -->
        <div class="followers__post">
            <div class="flex">
                <h2>0</h2>
                <p>Followers</p>
            </div>
            <div class="flex">
                <h2>0</h2>
                <p>Following</p>
            </div>
            <div class="flex">
                <h2>0</h2>
                <p>Post</p>
            </div>
        </div>
    </header>
    <!-- USER PROFILE DESCRIPTION -->
    <section class="description ">
        <span>
            <h1><?php echo $_SESSION['username'] ?></h1>
            <p>| <?php echo $_SESSION['pronoun'] ?></p>
        </span>
        <p><?php echo $_SESSION['description'] ?></p>
        <p><?php echo $_SESSION['link'] ?></p>
        <p><?php echo $_SESSION['mobile'] ?></p>
        <div class="btn-upload-edit">
            <button onclick="showUploadForm()">upload</button>
            <button onclick="showEditForm()">edit profile</button>
        </div>
    </section>
</section>