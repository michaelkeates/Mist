<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--=============== FAVICON ===============-->
    <link rel="shortcut icon" href="assets/img/favicon.png">

    <!--=============== BOXICONS ===============-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

    <!--=============== AWESOME FONTS ===============-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--=============== SWIPER CSS ===============-->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">

    <!--=============== MIST CSS ===============-->
    <link rel="stylesheet" href="assets/css/styles.css">
    </script>

    <title>Mist</title>
</head>

<body>
    <section class="showcase">
        <!----This is where we load the background video. We can apply effects via CSS as overlay----->
        <video src="https://steamcdn-a.akamaihd.net/steam/clusters/sale_autumn2019_assets/54b5034d397baccb93181cc6/mp4_page_bg_dutch.mp4" muted loop autoplay playsinline></video>
        <div class="overlay"></div>
        <div class="login-page">
            <div class="discount__img" id="discount__img">
                <div class="form" id="form">
                    <!----Registration form section----->
                    <form class="register-form" action="assets/includes/signup.inc.php" method="post" id="registration">
                        <h2>Register</h2>
                        <div class="form-control">
                            <input type="text" placeholder="first name" name="firstname" id="firstname" />
                            <!---validation-->
                            <?php
                            if (!isset($_GET['signup'])) {
                                //echo "<i class=\"fas fa fa-check-circle\></i>";
                                //exit();
                            } else {
                                $signupCheck = $_GET['signup'];

                                if ($signupCheck == 'emptyinput') {
                                    echo "<i class=\"fas fa fa-exclamation-circle\"></i>";
                                    echo "<small>First Name cannot be blank</small>";
                                    //exit();
                                }
                            }
                            ?>
                        </div>
                        <div class="form-control">
                            <input type="text" placeholder="surname" name="lastname" id="lastname" />
                            <!---validation-->
                            <?php
                            if (!isset($_GET['signup'])) {
                                //echo "<i class=\"fas fa fa-check-circle\></i>";
                                //exit();
                            } else {
                                $signupCheck = $_GET['signup'];

                                if ($signupCheck == 'emptyinput') {
                                    echo "<i class=\"fas fa fa-exclamation-circle\"></i>";
                                    echo "<small>Last Name cannot be blank</small>";
                                    //exit();
                                }
                            }
                            ?>
                        </div>
                        <div class="form-control">
                            <input type="text" placeholder="username" name="uid" id="uid" />
                            <!---validation-->
                            <?php
                            if (!isset($_GET['signup'])) {
                                //echo "<i class=\"fas fa fa-check-circle\></i>";
                                //exit();
                            } else {
                                $signupCheck = $_GET['signup'];

                                if ($signupCheck == 'emptyinput') {
                                    echo "<i class=\"fas fa fa-exclamation-circle\"></i>";
                                    echo "<small>Username cannot be blank</small>";
                                    //exit();
                                } elseif ($signupCheck == 'usernametaken') {
                                    echo "<i class=\"fas fa fa-exclamation-circle\"></i>";
                                    echo "<small>Username is not available</small>";
                                    //exit();
                                }
                            }
                            ?>
                        </div>
                        <div class="form-control">
                            <input type="text" placeholder="email address" name="email" id="email" />
                            <!---validation-->
                            <?php
                            if (!isset($_GET['signup'])) {
                                //echo "<i class=\"fas fa fa-check-circle\></i>";
                                //exit();
                            } else {
                                $signupCheck = $_GET['signup'];

                                if ($signupCheck == 'emptyinput') {
                                    echo "<i class=\"fas fa fa-exclamation-circle\"></i>";
                                    echo "<small>Email cannot be blank</small>";
                                    //exit();
                                } elseif ($signupCheck == 'invalidemail') {
                                    echo "<i class=\"fas fa fa-exclamation-circle\"></i>";
                                    echo "<small>Email is not correct</small>";
                                    //exit();
                                }
                            }
                            ?>
                        </div>
                        <div class="form-control">
                            <input type="password" placeholder="password" name="pwd" id="pwd" />
                            <!---validation-->
                            <?php
                            if (!isset($_GET['signup'])) {
                                //echo "<i class=\"fas fa fa-check-circle\></i>";
                                //exit();
                            } else {
                                $signupCheck = $_GET['signup'];

                                if ($signupCheck == 'emptyinput') {
                                    echo "<i class=\"fas fa fa-exclamation-circle\"></i>";
                                    echo "<small>Password cannot be blank</small>";
                                    //exit();
                                } elseif ($signupCheck == 'passwordsdontmatch') {
                                    echo "<i class=\"fas fa fa-exclamation-circle\"></i>";
                                    echo "<small>Password does not match</small>";
                                    //exit();
                                }
                            }
                            ?>
                        </div>
                        <div class="form-control">
                            <input type="password" placeholder="password check" name="pwdrepeat" id="pwdrepeat" />
                            <!---validation-->
                            <?php
                            if (!isset($_GET['signup'])) {
                                //echo "<i class=\"fas fa fa-check-circle\></i>";
                                //exit();
                            } else {
                                $signupCheck = $_GET['signup'];

                                if ($signupCheck == 'emptyinput') {
                                    echo "<i class=\"fas fa fa-exclamation-circle\"></i>";
                                    echo "<small>Password Check cannot be blank</small>";
                                    //exit();
                                }
                            }
                            ?>
                        </div>
                        <button class="button" type="submit" name="register">Submit</button>
                        <p class="message">Already registered? <a href="#">Sign In</a></p>
                    </form>

                    <!----Login form section----->
                    <form class="login-form" action="assets/includes/login.inc.php" method="post" id="logginging">
                        <h2>Login</h2>
                        <div class="form-control">
                            <input type="text" placeholder="username" name="uidlogin" id="uidlogin" />
                            <!---validation-->
                            <?php
                            if (!isset($_GET['error'])) {
                                //echo "<i class=\"fas fa fa-check-circle\></i>";
                                //exit();
                            } else {
                                $signupCheck = $_GET['error'];

                                if ($signupCheck == 'emptyinput') {
                                    echo "<i class=\"fas fa fa-exclamation-circle\"></i>";
                                    echo "<small>Username cannot be blank</small>";
                                    //exit();
                                }
                            }
                            ?>
                        </div>
                        <div class="form-control">
                            <input type="password" placeholder="password" name="pwdlogin" id="pwdlogin" />
                            <!---validation-->
                            <?php
                            if (!isset($_GET['error'])) {
                                //echo "<i class=\"fas fa fa-check-circle\></i>";
                                //exit();
                            } else {
                                $signupCheck = $_GET['error'];

                                if ($signupCheck == 'emptyinput') {
                                    echo "<i class=\"fas fa fa-exclamation-circle\"></i>";
                                    echo "<small>Password cannot be blank</small>";
                                    //exit();
                                }
                            }
                            ?>
                        </div>
                        <button class="button" type="submit" name="submit">Submit</button>
                        <p class="message">Not registered? <a href="#">Create an account</a></p>
                        <p class="adminmessage">Login as <a href="#">Admin</a></p>
                    </form>

                    <!----Admin login form section----->
                    <form class="admin-form" action="assets/includes/admin.inc.php" method="post" id="admin">
                        <h2>Admin</h2>
                        <br>
                        <div class="form-control">
                            <input type="text" placeholder="admin username" name="adminuidlogin" id="adminuidlogin" />
                            <!---validation-->
                            <?php
                            if (!isset($_GET['error'])) {
                                //echo "<i class=\"fas fa fa-check-circle\></i>";
                                //exit();
                            } else {
                                $signupCheck = $_GET['error'];

                                if ($signupCheck == 'adminemptyinput') {
                                    echo "<i class=\"fas fa fa-exclamation-circle\"></i>";
                                    echo "<small>Admin username cannot be blank</small>";
                                    //exit();
                                }
                            }
                            ?>
                        </div>
                        <div class="form-control">
                            <input type="password" placeholder="admin password" name="adminpwdlogin" id="adminpwdlogin" />
                            <!---validation-->
                            <?php
                            if (!isset($_GET['error'])) {
                                //echo "<i class=\"fas fa fa-check-circle\></i>";
                                //exit();
                            } else {
                                $signupCheck = $_GET['error'];

                                if ($signupCheck == 'adminemptyinput') {
                                    echo "<i class=\"fas fa fa-exclamation-circle\"></i>";
                                    echo "<small>Admin password cannot be blank</small>";
                                    //exit();
                                }
                            }
                            ?>
                        </div>
                        <button type="submit" name="adminsubmit">Submit</button>
                        <p class="loginmessage">Not an admin? <a href="#">Click here</a></p>
                    </form>
                </div>
            </div>
    </section>

    <!--=============== SCROLL REVEAL ===============-->
    <script src="assets/js/scrollreveal.min.js"></script>

    <!--=============== SWIPER JS ===============-->
    <script src="assets/js/swiper-bundle.min.js"></script>

    <!--=============== MAIN JS ===============-->
    <script src="assets/js/main.js"></script>

    <!--=============== DEPRECATED ========================-->
    <!--========= LOGIN/REGISTER VALIDATION ===============-->
    <!--<script src="assets/js/validation.js"></script>--->

    <!--=============== SWEETALERT JS ===============-->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!--======= LOGIN/REGISTER/ADMIN TOGGLE SLIDE ===============-->
    <script src='https://code.jquery.com/jquery-3.2.1.min.js'></script>
    <script>
        $('.message a').click(function() {
            $('form').animate({
                height: "toggle",
                opacity: "toggle"
            }, "slow");
            $("#admin").hide();
            $("#registration").show();
            $("#loggingin").show();
        });
    </script>
    <script>
        $('.adminmessage a').click(function() {
            $('form').animate({
                height: "toggle",
                opacity: "toggle"
            }, "slow");
            $("#admin").show();
            $("#registration").hide();
            $("#loggingin").hide();
        });
    </script>
    <script>
        $('.loginmessage a').click(function() {
            $('form').animate({
                height: "toggle",
                opacity: "toggle"
            }, "slow");
            $("#admin").hide();
            $("#registration").hide();
            $("#loggingin").show();
        });
    </script>
</body>

</html>