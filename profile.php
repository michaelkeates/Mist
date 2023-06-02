<?php
include_once 'header.php';
?>
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

    <!--=============== BOOTSTRAP ===============-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <title>Mist</title>
</head>

<body>
    <!--==================== HEADER ====================-->

    <!--==================== CATEGORY ====================-->
    <section class="section category">
        <div class="about__data">
            <div class="text">
                <h2 class="section__title ">Profile</h2>
            </div>
        </div>
        <div class="category__container container grid">
            <div class="profile">
                <div class="category__data">
                    <div class="container bg-glass mt-5 mb-5">
                        <div class="row">
                            <div class="col-md-3 border-right">
                                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img id="testimage" width="150px" src="">
                                </div>
                            </div>
                            <div class="col-md-5 border-right">
                                <div class="p-3 py-5">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <h2 class="text-right">Profile Settings</h2>
                                    </div>
                                    <form class="profile-form" action="assets/includes/admin.update.inc.php" method="post" id="admin">
                                        <div class="row mt-3">
                                            <?php
                                            if (isset($_SESSION["useruid"])) {
                                                //echo "<div class=\"col-md-12\"><label class=\"labels\">id</label><input type=\"text\" name=\"id\" placeholder=\"\" . $_SESSION[$id] . \"\"  value=\"" . $_SESSION[$id] . "\"></div>";
                                                //echo $id;
                                                echo "<div class=\"col-md-12\"><label class=\"labels\">ID</label><input type=\"text\" name=\"id\" placeholder=\"\" . $_SESSION[wtf]  . \"\"  value=\"" . $_SESSION["wtf"]  . "\"></div>";
                                            } else {
                                                echo "<div class=\"col-md-12\"><label class=\"labels\">Username</label><input type=\"text\" placeholder=\"username\" value=\"\" name=\"username\" id=\"usernamedisabled\" disabled></div>";
                                            }
                                            ?>
                                        </div>
                                        <div class="row mt-3">
                                            <?php
                                            if (isset($_SESSION["useruid"])) {
                                                echo "<div class=\"col-md-12\"><label class=\"labels\">Username</label><input type=\"text\" name=\"username\" placeholder=\"\" . $_SESSION[useruid] . \"\"  value=\"" . $_SESSION["useruid"] . "\"></div>";
                                            } else {
                                                echo "<div class=\"col-md-12\"><label class=\"labels\">Username</label><input type=\"text\" placeholder=\"username\" value=\"\" name=\"username\" id=\"usernamedisabled\" disabled></div>";
                                            }
                                            ?>
                                        </div>
                                        <div class="row mt-3">
                                            <?php
                                            if (isset($_SESSION["useruid"])) {
                                                echo "<div class=\"col-md-12\"><label class=\"labels\">Password</label><input type=\"text\" name=\"password\" placeholder=\"\" . $_SESSION[userpwd] . \"\"  value=\"" . $_SESSION["userpwd"] . "\"></div>";
                                            } else {
                                                echo "<div class=\"col-md-12\"><label class=\"labels\">Password</label><input type=\"text\" placeholder=\"username\" value=\"\" name=\"username\" id=\"usernamedisabled\" disabled></div>";
                                            }
                                            ?>
                                        </div>
                                        <div class="row mt-2">
                                            <?php
                                            if (isset($_SESSION["useruid"])) {
                                                echo "<div class=\"col-md-12\"><label class=\"labels\">First Name</label><input type=\"text\" name=\"firstname\" placeholder=\"\" . $_SESSION[userfirstname] . \"\"  value=\"" . $_SESSION["userfirstname"] . "\"></div>";
                                                echo "<div class=\"col-md-12\"><label class=\"labels\">Surname</label><input type=\"text\" name=\"lastname\" placeholder=\"\" . $_SESSION[userlastname] . \"\"  value=\"" . $_SESSION["userlastname"] . "\"></div>";
                                            } else {
                                                echo "<div class=\"col-md-6\"><label class=\"labels\">First Name</label><input type=\"text\" class=\"viewInfo\" placeholder=\"first name\" value=\"\" name=\"first name\" id=\"usernamedisabled\" disabled></div>";
                                                echo "<div class=\"col-md-6\"><label class=\"labels\">Surname</label><input type=\"text\" class=\"viewInfo\" placeholder=\"last name\" value=\"\" name=\"last name\" id=\"usernamedisabled\" disabled></div>";
                                            }
                                            ?>
                                        </div>
                                        <div class="row mt-3">
                                            <?php
                                            if (isset($_SESSION["useruid"])) {
                                                echo "<div class=\"col-md-12\"><label class=\"labels\">Email</label><input type=\"text\" name=\"email\" placeholder=\"\" . $_SESSION[useremail] . \"\"  value=\"" . $_SESSION["useremail"] . "\"></div>";
                                            } else {
                                                echo "<div class=\"col-md-12\"><label class=\"labels\">Email</label><input type=\"text\" class=\"viewInfo\" name=\"email\" placeholder=\"email\" value=\"\" id=\"usernamedisabled\"></div>";
                                            }
                                            ?>
                                            <?php
                                            if (isset($_SESSION["useruid"])) {
                                                echo "<div class=\"col-md-12\"><label class=\"labels\">Mobile Number</label><input type=\"text\" name=\"mobile\" placeholder=\"\" . $_SESSION[usermobile] . \"\"  value=\"" . $_SESSION["usermobile"] . "\"></div>";
                                                echo "<div class=\"col-md-12\"><label class=\"labels\">Address 1</label><input type=\"text\" name=\"address1\" placeholder=\"\" . $_SESSION[useraddress1] . \"\"  value=\"" . $_SESSION["useraddress1"] . "\"></div>";
                                                echo "<div class=\"col-md-12\"><label class=\"labels\">Address 2</label><input type=\"text\" name=\"address2\" placeholder=\"\" . $_SESSION[useraddress2] . \"\"  value=\"" . $_SESSION["useraddress2"] . "\"></div>";
                                            } else {
                                                echo "<div class=\"col-md-12\"><label class=\"labels\">Mobile Number</label><input type=\"text\" class=\"viewInfo\" placeholder=\"mobile number\" value=\"\" name=\"mobile\" id=\"usermobiledisabled\"></div>";
                                                echo "<div class=\"col-md-12\"><label class=\"labels\">Address Line 1</label><input type=\"text\" class=\"viewInfo\" name=\"address line 1\" placeholder=\"address line 1\" value=\"\"></div>";
                                                echo "<div class=\"col-md-12\"><label class=\"labels\">Address Line 2</label><input type=\"text\" class=\"viewInfo\" name=\"address line 2\" placeholder=\"address line 2\" value=\"\"></div>";
                                            }
                                            ?>
                                        </div>
                                        <div class="row mt-3">

                                            <?php
                                            if (isset($_SESSION["useruid"])) {
                                                echo "<div class=\"col-md-6\"><label class=\"labels\">Postcode</label><input type=\"text\" name=\"postcode\" placeholder=\"\" . $_SESSION[userpostcode] . \"\"  value=\"" . $_SESSION["userpostcode"] . "\"></div>";
                                                echo "<div class=\"col-md-6\"><label class=\"labels\">Country</label><input type=\"text\" name=\"country\" placeholder=\"\" . $_SESSION[usercountry] . \"\"  value=\"" . $_SESSION["usercountry"] . "\"></div>";
                                            } else {
                                                echo "<div class=\"col-md-6\"><label class=\"labels\">Post Code</label><input type=\"text\" class=\"viewInfo\" name=\"post code\" placeholder=\"post code\" value=\"\"></div>";
                                                echo "<div class=\"col-md-6\"><label class=\"labels\">Country</label><input type=\"text\" class=\"viewInfo\" name=\"country\" placeholder=\"country\" value=\"\"></div>";
                                            }
                                            ?>
                                        </div>
                                        <br>
                                        <button class="button" type="submit" name="adminsubmit" onclick="setMessageSubmitted();">Update Profile</button>
                                </div>
                                </form>
                            </div>
                            <div class="col-md-4">
                                <div class="p-3 py-5">
                                    <div class="d-flex justify-content-between align-items-center experience">
                                        <h2><span>Mist Level</span></h2>
                                    </div><br>
                                    <div class="row mt-2">
                                        <div class="col-md-6"><label class="labels">Level</label><input type="text" class="viewInfo" placeholder="level" value="" name="level" id="leveldisabled"></div>
                                        <div class="col-md-6"><label class="labels">Mist Points</label><input type="text" class="viewInfo" value="" placeholder="mist points" name="mistpoints" id="mistpointsdisabled"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <form>
        <input type="hidden" id="viewUserId" value="result">
    </form>

    <!--==================== SEARCH ====================-->
    <section class="section search">
        <div class="search__container container">
            <h2 class="section__title">Search</h2>
            <p class="search__description">
                Search for what you would like to read on.
            </p>

            <form action="" class="search__form" role="search" id="form">
                <input type="text" placeholder="Type what you like to search for" type="search" id="query" name="q" class="search__input">
                <button class="button" type="submit">
                    Search</button>
            </form>
        </div>
    </section>
    </main>

    <?php
    include_once 'footer.php';
    ?>

    <!--=============== SCROLL UP ===============-->
    <a href="#" class="scrollup" id="scroll-up">
        <i class='bx bx-up-arrow-alt scrollup__icon'></i>
    </a>

    <!--Jquery script to show "active" page-->
    <script>
        document.getElementById('profile').style.color = "grey";
    </script>

    <!---Here is the javascript for toggling light/dark mode-->
    <script>
        function enableDarkLight() {
            var element = document.body;
            element.classList.toggle("darktheme");
        }
    </script>

    <script>
        const porductsListEl = document.querySelector(".products-list");
        const seeMoreBtn = document.querySelector(".see-more-btn");

        seeMoreBtn.addEventListener('click', () => {
            porductsListEl.scrollIntoView({
                behavior: "smooth"
            })
        })
    </script>

    <script>
        //fetch profile information depending onClick id
        document.getElementById("viewUserId").value = localStorage.getItem("profileid")

        //hide save profile button if viewing another persons profile. button appears if value is 0
        document.getElementById('leveldisabled').disabled = true;
        document.getElementById('mistpointsdisabled').disabled = true;

        if (document.getElementById("viewUserId").value >= 1) {
            document.getElementById("hideshow").style.visibility = "hidden";
            document.getElementById('usernamedisabled').disabled = true;
            document.getElementById('firstnamedisabled').disabled = true;
            document.getElementById('lastnamedisabled').disabled = true;
            document.getElementById('emaildisabled').disabled = true;
            document.getElementById('mobiledisabled').disabled = true;
            document.getElementById('address.address1disabled').disabled = true;
            document.getElementById('address.address2disabled').disabled = true;
            document.getElementById('address.postcodedisabled').disabled = true;
            document.getElementById('address.countrydisabled').disabled = true;
        }
    </script>

    <script>
        //fetch profile picture depending onClick id
        if (typeof(Storage) !== "undefined") {
            var name = localStorage.getItem('testimage');
            var dataImage = localStorage.getItem('imgData');
            var imageName = localStorage.getItem("testimage");
            var imageEl = document.getElementById("testimage");
            imageEl.src = imageName
        } else {
            document.getElementById("msg").innerHTML = "Sorry, your browser does not support Web Storage...";
        }
    </script>

    <!--Different profiles that is taken from an array in profiles.js. This saves me time having to do 5 different html profile pages-->
    <script>
        function profile0() {
            localStorage.setItem("profileid", "0");
            localStorage.setItem("testimage", "assets/img/avatar.png");
        }

        function profile1() {
            localStorage.setItem("profileid", "1");
            localStorage.setItem("testimage", "assets/img/st,small,507x507-pad,600x600,f8f8f8.png");
        }

        function profile2() {
            localStorage.setItem("profileid", "2");
            localStorage.setItem("testimage", "assets/img/b69ddcefb7d8d1de7f2554cae900fe9c0bf08a99.png");
        }

        function profile3() {
            localStorage.setItem("profileid", "3");
            localStorage.setItem("testimage", "assets/img/30ff6f7e96e70a85203199de03d0acadbd5c14f7.png");
        }

        function profile4() {
            localStorage.setItem("profileid", "4");
            localStorage.setItem("testimage", "assets/img/65d2fcb6c26c155851eb08b5fe4a07a0cca1f5c9.png");
        }

        function profile5() {
            localStorage.setItem("profileid", "5");
            localStorage.setItem("testimage", "assets/img/ab7c0f533fdb0af001f6aae589074eae396a7257.png");
        }

        function profile6() {
            localStorage.setItem("profileid", "6");
            localStorage.setItem("testimage", "assets/img/979bb2133de5a89a3f7a0524f8a1d27163301f6d.png");
        }
    </script>

    <script>
        function setMessageSubmitted() {
            Swal.fire({
                title: 'Account Updated!',
                text: "You have successfully updated your account. Click Ok to continue.",
                icon: 'success',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Ok'
            }).then((result) => {
                if (result.isConfirmed) {
                    if (isConfirm) form.submit();
                    self.location = "assets/includes/admin.update.inc.php";
                }
            })
        }
    </script>

    <!--=============== SCROLL REVEAL ===============-->
    <script src="assets/js/scrollreveal.min.js"></script>

    <!--=============== SWIPER JS ===============-->
    <script src="assets/js/swiper-bundle.min.js"></script>

    <!--=============== MAIN JS ===============-->
    <script src="assets/js/main.js"></script>

    <!--=============== PROFILES ===============-->
    <script src="assets/js/profiles.js"></script>

    <!--=============== SHOPPING CART ===============-->
    <script src="assets/js/products.js"></script>
    <script src="assets/js/app.js"></script>

    <!--=============== SEARCH BOX ===============-->
    <script src="assets/js/search.js"></script>

    <!--=============== SWEETALERT JS ===============-->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
