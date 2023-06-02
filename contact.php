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

    <title>Mist</title>
</head>

<body>
    <section class="showcase">
        <!--==================== HEADER ====================-->
        <!----This is where we load the background video. We can apply effects via CSS as overlay----->
        <video src="https://steamcdn-a.akamaihd.net/steam/clusters/sale_autumn2019_assets/54b5034d397baccb93181cc6/mp4_page_bg_dutch.mp4" muted loop autoplay playsinline></video>
        <div class="overlay"></div>
        <div class="discount__container container grid">
            <div class="form-contact" id="form-contact">
                <form class="login-form" enctype="multipart/form-data" method="post" action='assets/php/send.php' target="_blank" accept-charset="UTF-8">
                    <h2>Contact</h2>
                    <div class="form-control">
                        <input type="text" placeholder="name" id="name" name="name" size="40" value="" />
                        <i class="fas fa fa-check-circle"></i>
                        <i class="fas fa fa-exclamation-circle"></i>
                        <small>Error message</small>
                    </div>
                    <div class="form-control">
                        <input type="text" placeholder="your email address" id="email" name="email" size="40" value="" required />
                        <i class="fas fa fa-check-circle"></i>
                        <i class="fas fa fa-exclamation-circle"></i>
                        <small>Error message</small>
                    </div>
                    <div class="form-control">
                        <textarea rows="10" cols="100" class="textarea-control" id="message" name="message" placeholder="message" aria-describedby="messageHelp" name="message"></textarea>
                        <i class="fas fa fa-check-circle"></i>
                        <i class="fas fa fa-exclamation-circle"></i>
                        <small>Error message</small>
                    </div>
                    <!--value=" Submit Form "-->
                    <button type="submit" id="submitmessage" class="button" type="submit" value="" name="submit" onclick=checkContactInputs()>Submit</button>
                </form>
            </div>
            <div class="discount__img">
                <!--OLD GOOGLE MAPS IFRAME-->
                <!--<iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2479.7127101580513!2d-2.9553710479361097!3d51.573499979546!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4871e662bc08751f%3A0x37c1b497c5b725c8!2sColeg%20Gwent%20City%20of%20Newport%20Campus!5e0!3m2!1sen!2suk!4v1635421871928!5m2!1sen!2suk"
                    width="500" height="545" style="border:0;" allowfullscreen="" loading="lazy"></iframe>-->
                <div id="map"></div>
            </div>
        </div>
    </section>

    <?php
    include_once 'footer.php';
    ?>

    <!---Here is the javascript for toggling light/dark mode-->
    <script>
        function enableDarkLight() {
            var element = document.body;
            element.classList.toggle("darktheme");
        }
    </script>

    <!--Script to show "active" or page being viewed by changing the menu link to another color-->
    <script>
        document.getElementById('contact').style.color = "grey";
    </script>

    <!--Different profiles that is taken from an array in profiles.js. This saves me time from having to do 5 different html profile pages-->
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
        var target_popup = function(form) {
            window.open('', //URL should be blank so that it will take form attributes.
                'UniqueWindowName', //window name
                'width=400,height=400,resizeable,scrollbars');
            form.target = 'asssets/php/send.php';
        }
    </script>

    <!--=============== SCROLL REVEAL ===============-->
    <script src="assets/js/scrollreveal.min.js"></script>

    <!--=============== MAIN JS ===============-->
    <script src="assets/js/main.js"></script>

    <!--=============== SWEETALERT JS ===============-->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!--========= LOGIN/REGISTER VALIDATION ===============-->
    <script src="assets/js/validation.js"></script>

    <!--========= GOOGLE MAPS API ===============-->
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script src="assets/js/googlemaps.js"></script>
    <script async src="https://maps.googleapis.com/maps/api/js?key=APIKEY&callback=initMap"></script>

    <!--======= LOGIN/REGISTER TOGGLE TOGGLE SLIDE ===============-->
    <script src='https://code.jquery.com/jquery-3.2.1.min.js'></script>
    <script>
        $('.message a').click(function() {
            $('form').animate({
                height: "toggle",
                opacity: "toggle"
            }, "slow");
        });
    </script>

</body>


</html>
