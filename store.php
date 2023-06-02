<?php
include_once 'header.php';
include_once 'sidemenu.php';
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

    <!--=============== SWIPER CSS ===============-->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">

    <!--=============== MIST CSS ===============-->
    <link rel="stylesheet" href="assets/css/styles.css">

    <title>Mist</title>
</head>

<body>
    <!--==================== HEADER ====================-->


    <!--The side menu html starts here-->


    <!--==================== CATEGORY ====================-->
    <section class="section category">
        <div class="about__data">
            <div class="about__container container grid">
                <div class="about__data">
                    <div class="text">
                        <h2 class="section__title about__title">The Store</h2>
                    </div>
                    <p class="about__description">Browse the newest, top selling and discounted stickers on Mist.
                    </p>
                    <br>
                </div>

                <div class="about__img">
                    <img src="assets/img/header_image.png" alt="" class="about__img">
                </div>
            </div>
            <div class="showcaseitems">
                <!-- RENDER PRODUCTS ON HTML PAGE FROM ARRAY (PRODUCTS.JS)-->
                <div class="products"></div>
            </div>
        </div>
    </section>

    <?php
    include_once 'footer.php';
    ?>

    <!--=============== SCROLL UP ===============-->
    <a href="#" class="scrollup" id="scroll-up">
        <i class='bx bx-up-arrow-alt scrollup__icon'></i>
    </a>

    <!--Javascript script to show "active" page-->
    <script>
        document.getElementById('store').style.color = "grey";
    </script>

    <!---Here is the javascript for toggling light/dark mode-->
    <script>
        function enableDarkLight() {
            var element = document.body;
            element.classList.toggle("darktheme");
        }
    </script>

    <!---Javascript to toggle the side menu with transition animation-->
    <script>
        const menuToggle = document.querySelector('.toggle');
        const showcase = document.querySelector('.showcasemenu');

        menuToggle.addEventListener('click', () => {
            menuToggle.classList.toggle('active');
            showcase.classList.toggle('active');
        })
    </script>

    <script>
        const porductsListEl = document.querySelector(".products-list");
        const seeMoreBtn = document.querySelector(".see-more-btn");

        seeMoreBtn.addEventListener('click', () => {
            porductsListEl.scrollIntoView({ behavior: "smooth" })
        })
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

    <!--=============== SCROLL REVEAL ===============-->
    <script src="assets/js/scrollreveal.min.js"></script>

    <!--=============== SWIPER JS ===============-->
    <script src="assets/js/swiper-bundle.min.js"></script>

    <!--=============== MAIN JS ===============-->
    <script src="assets/js/main.js"></script>

    <!--============ SHOPPING CART ===============-->
    <script src="assets/js/products.js"></script>
    <script src="assets/js/app.js"></script>
</body>

</html>
