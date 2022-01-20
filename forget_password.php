<html>

    <head>
        <title>Create Account</title>
        <link rel="stylesheet" href="style.css">
        <?php
            session_start();
            echo '<link rel="shortcut icon" href="gg.png" type="image/x-icon" />';
        ?>
    </head>
    
    <body>
        <div class="">
            <div class="">
                <h2>Check Your Account</h2>

                    <form action="valid_account_check.php" method="post">

                        <?php if (isset($_GET['error'])) { ?>

                            <p class="error"><?php echo $_GET['error']; ?></p>

                        <?php } ?>

                        <p>
                            <input type="text" id="username" name="username" placeholder="Username" required>
                        </p>
                        <p>
                            <input type="email" id="password" name="email" placeholder="Email" required>
                        </p>
                        <p>
                            <input type="submit" id="login" value="Check Account">
                        </p>
                    </form>
                <div id='#'>
                    <p><a href="login.php">Login</a><p>
                    <p><a href="index.php">Back to home page</a><p>
                </div><!--create-account-wrap-->
            </div><!--login-form-wrap-->
        </div>
    </body>

</html>