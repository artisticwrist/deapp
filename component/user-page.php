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
      <!--main page  -->
      <section class="main-page">
          <section class="explore" id="explore">
              <div class="header">
                  <h1>Deapp</h1>
                  <ul>
                      <li><a href="../auth/logout.php">log out</a></li>
                  </ul>
              </div>
              <div class="img-box">
                  <img src="../images/dollar.jpg" alt=""
                      onclick="showModal('/images/dollar.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nonummy tincidunt sapien, euismod euismod purus cursus et.')" />
              </div>
              <div class="img-box">
                  <img src="../images/dollar.jpg"
                      onclick="showModal('/images/dollar.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nonummy tincidunt sapien, euismod euismod purus cursus et.')"
                      alt="" />
              </div>
              <div class="img-box">
                  <img src="../images/dollar.jpg"
                      onclick="showModal('/images/dollar.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nonummy tincidunt sapien, euismod euismod purus cursus et.')"
                      alt="" />
              </div>
              <div class="img-box">
                  <img src="../images/dollar.jpg"
                      onclick="showModal('/images/dollar.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nonummy tincidunt sapien, euismod euismod purus cursus et.')"
                      alt="" />
              </div>
              <div class="img-box">
                  <img src="../images/dollar.jpg"
                      onclick="showModal('/images/dollar.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nonummy tincidunt sapien, euismod euismod purus cursus et.')"
                      alt="" />
              </div>
              <div class="img-box">
                  <img src="../images/dollar.jpg"
                      onclick="showModal('/images/dollar.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nonummy tincidunt sapien, euismod euismod purus cursus et.')"
                      alt="" />
              </div>
          </section>
          <section class="user-section" id="user-page">

              <!--USER PAGE  -->
              <div id="user-section">
                  <!-- HEADER PROFILE -->
                  <header class="profile ">
                      <!-- PROFILE PICTURE -->
                      <img src="" alt="" />

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
                          <h1><?php echo $_SESSION['username'] ?></h1>
                          <p>| <?php echo $_SESSION['pronoun'] ?></p>
                      </span>
                      <p><?php echo $_SESSION['description'] ?></p>
                      <div class="btn-upload-edit">
                          <button onclick="showUploadForm()">upload</button>
                          <button>edit profile</button>
                      </div>
                  </section>
                  <!-- USER UPLOADS -->
                  <div class="user-uploads ">
                      <img src="../images/dollar.jpg"
                          onclick="showModal('../images/dollar.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nonummy tincidunt sapien, euismod euismod purus cursus et.')"
                          alt="" />
                      <img src="../images/dollar.jpg"
                          onclick="showModal('../images/dollar.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nonummy tincidunt sapien, euismod euismod purus cursus et.')"
                          alt="" />
                      <img src="../images/dollar.jpg"
                          onclick="showModal('../images/dollar.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nonummy tincidunt sapien, euismod euismod purus cursus et.')"
                          alt="" />
                      <img src="../images/dollar.jpg"
                          onclick="showModal('../images/dollar.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nonummy tincidunt sapien, euismod euismod purus cursus et.')"
                          alt="" />
                      <img src="../images/dollar.jpg"
                          onclick="showModal('../images/dollar.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nonummy tincidunt sapien, euismod euismod purus cursus et.')"
                          alt="" />
                      <img src="../images/dollar.jpg"
                          onclick="showModal('../images/dollar.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nonummy tincidunt sapien, euismod euismod purus cursus et.')"
                          alt="" />
                      <img src="../images/dollar.jpg"
                          onclick="showModal('../images/dollar.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nonummy tincidunt sapien, euismod euismod purus cursus et.')"
                          alt="" />
                      <img src="../images/dollar.jpg"
                          onclick="showModal('../images/dollar.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nonummy tincidunt sapien, euismod euismod purus cursus et.')"
                          alt="" />
                      <img src="../images/dollar.jpg"
                          onclick="showModal('../images/dollar.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nonummy tincidunt sapien, euismod euismod purus cursus et.')"
                          alt="" />
                      <img src="../images/dollar.jpg"
                          onclick="showModal('../images/dollar.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nonummy tincidunt sapien, euismod euismod purus cursus et.')"
                          alt="" />
                      <img src="../images/dollar.jpg"
                          onclick="showModal('../images/dollar.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nonummy tincidunt sapien, euismod euismod purus cursus et.')"
                          alt="" />
                      <img src="../images/dollar.jpg"
                          onclick="showModal('../images/dollar.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nonummy tincidunt sapien, euismod euismod purus cursus et.')"
                          alt="" />
                      <img src="../images/dollar.jpg"
                          onclick="showModal('../images/dollar.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nonummy tincidunt sapien, euismod euismod purus cursus et.')"
                          alt="" />
                      <img src="../images/dollar.jpg"
                          onclick="showModal('../images/dollar.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nonummy tincidunt sapien, euismod euismod purus cursus et.')"
                          alt="" />
                      <img src="../images/dollar.jpg"
                          onclick="showModal('../images/dollar.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nonummy tincidunt sapien, euismod euismod purus cursus et.')"
                          alt="" />
                      <img src="../images/dollar.jpg"
                          onclick="showModal('../images/dollar.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nonummy tincidunt sapien, euismod euismod purus cursus et.')"
                          alt="" />
                  </div>

                  <div class="bottom-padding  ">
                      <p>copyrights @theblackwrist</p>
                  </div>
              </div>

              <!-- UPLOAD NEW POST -->
              <div class="upload-post display-none" id="upload-form">
                  <form action="../pages/user.php" method="post" enctype="multipart/form-data">
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

          <!-- FOOTER TOGGLE -->
          <footer>
              <ul>
                  <li onclick="showHome()">Home</li>
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

      </section>


      <script src="../js/web.js"></script>
  </body>

  </html>