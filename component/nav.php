            <div class="header">
                <?php
                    include "../php/logo.php";
                ?>
                <ul>
                    <?php
                    if(isset($_SESSION)){
                        echo '<li><a href="../auth/logout.php">logout</a></li>';
                    }else{
                    echo '<li><a href="../pages/signup.php">sign up</a></li>';
                    echo '<li><a href="../pages/login.php">log in</a></li>';
                    }
                    ?>

                </ul>
            </div>