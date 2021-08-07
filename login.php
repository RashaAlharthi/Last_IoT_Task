<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login To The Control Panel</title>

    <!-- Font Icon -->
<link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <div class="main">
        <!-- Login  Form -->
        <section class="login">
            <div class="container">
                <div class="login-content">
                    <div class="login-image">
                       <figure><img src="SMs.png" alt="organization image" height="90%" width="70%"></figure>
                    </div>

                    <div class="login-form">
                        <h2 class="form-title">Login</h2>
                        <form method="POST" class="register-form" id="login-form" action="handle_login.php">
                          <?php if (isset($_GET['error'])) {
                              echo "<p class='error'> ";
                              echo $_GET['error'];
                              echo "</p>";
                          } ?>
                            <div class="form-group">
                                <label for="ssid"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="ssid" id="ssid" placeholder="SSID" value="<?php if (isset($_COOKIE["ssid"])) {
                                                                                                                    echo $_COOKIE["ssid"];
                                                                                                                } ?>" />
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="your_pass" placeholder="Password" value="<?php if (isset($_COOKIE["password"])) {
                                                                                                                    echo $_COOKIE["password"];
                                                                                                                } ?>" />
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" <?php if (isset($_COOKIE["ssid"])) { ?> checked <?php } ?> />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember
                                    me</label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="login" id="login" class="form-submit" value="Login" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="jquery.min.js"></script>

</body>

</html>
