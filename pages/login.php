<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../css/signup.css'>
</head>

<body>

    <?php
      echo $_GET['message'];
    ?>
    <form action="../auth/loginscript.php" method="POST" class="form-css">

        <?php
        include "../php/logo.php";
        ?>
        <p>Login your account</p>

        <div class="form-box">
            <label for="">Email</label>
            <input type="email" placeholder="abc@xyz.com" name="email">
        </div>

        <div class="form-box">
            <label for="">Password</label>
            <input type="password" placeholder="Secure password" name="password">
        </div>

        <button>Sign up</button>

    </form>

    <p class="signin-login">Don't have an account ? <a href="../pages/signup.php">sign up</a></p>

</body>

</html>