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
    <section class="showcase">
        <!----This is where we load the background video. We can apply effects via CSS as overlay----->
        <video src="https://steamcdn-a.akamaihd.net/steam/clusters/sale_autumn2019_assets/54b5034d397baccb93181cc6/mp4_page_bg_dutch.mp4" muted loop autoplay playsinline></video>
        <div class="overlay"></div>
        <div class="discount__img">
            <div class="text">
                <h2>The Ultimate </h2>
                <h3>Gaming Platform</h3>
                <p>Mist is the ultimate destination for playing, discussing, and creating games. Join our platform by
                    creating your profile and join millions of others.</p>
            </div>
        </div>
        <!-- <div class="category__data">
            <div class="mist__container container grid">
                <div class="mist__content">
                    <img src="assets/img/st,small,507x507-pad,600x600,f8f8f8.png" alt="" class="mist__img">
                    <h3 class="mist__title">Amogus</h3>
                    <span class="mist__subtitle">Boss</span>
                    <span class="mist__price">9999 Mist Points</span>
                    <a href="profile.html" onclick="profile1()"><button class="button mist__button">
                            <i class='bx bx-user mist__icon'></i>
                        </button></a>
                </div>

                <div class="mist__content">
                    <img src="assets/img/b69ddcefb7d8d1de7f2554cae900fe9c0bf08a99.png" alt="" class="mist__img">
                    <h3 class="mist__title">BoneCrusher87</h3>
                    <span class="mist__subtitle">Tank</span>
                    <span class="mist__price">247 Mist Points</span>
                    <a href="profile.html" onclick="profile2()"><button class="button mist__button">
                            <i class='bx bx-user mist__icon'></i>
                        </button></a>
                </div>

                <div class="mist__content">
                    <img src="assets/img/30ff6f7e96e70a85203199de03d0acadbd5c14f7.png" alt="" class="mist__img">
                    <h3 class="mist__title">HotStuff</h3>
                    <span class="mist__subtitle">Assassin</span>
                    <span class="mist__price">89 Mist Points</span>
                    <a href="profile.html" onclick="profile3()"><button class="button mist__button">
                            <i class='bx bx-user mist__icon'></i>
                        </button></a>
                </div>
            </div>
        </div>-->
    </section>
    <!--==================== CATEGORY ====================-->
    <section class="section category">
        <div class="about__data">
            <div class="text">
                <?php
                if (isset($_SESSION["useruid"])) {
                    echo "<h2 class=\"section__title \">Welcome back " . $_SESSION["useruid"] . "</h2>";
                } else {
                    echo "<h2 class=\"section__title \" >Welcome to Mist</h2>";
                }
                ?>
            </div>
        </div>

        <div class="category__container container grid">
            <div class="category__data">
                <img src="assets/img/767e2335ee7cf5dc63a31678de938322b0a0c936.png" alt="" class="category__img">
                <h2 class="category__title">Profile</h2>
                <p class="category__description">Check out your profile.</p>
                <a href="profile.html" class="button">My Profile</a>
            </div>

            <div class="category__data">
                <img src="assets/img/29431a11b23215172f15d4653ea38f7ddfe01f49.png" alt="" class="category__img">
                <h2 class="category__title">Store</h2>
                <p class="category__description">Check the store.</p>
                <a href="store.html" class="button">Store</a>
            </div>

            <div class="category__data">
                <img src="assets/img/5d2e6234ab06945e768036ca72765260f4bd591e.png" alt="" class="category__img">
                <h2 class="category__title">Sunglasses</h2>
                <p class="category__description">You are awesome.</p>
                <a href="store.html" class="button">Know more</a>
            </div>
        </div>
    </section>

    <!--==================== ABOUT ====================-->
    <section class="section about" id="about">
        <div class="about__container container grid">
            <div class="about__data">
                <div class="text">
                    <h2 class="section__title about__title">The Latest Games</h2>
                </div>
                <p class="about__description">Browse the newest, top selling and discounted PC games on Mist.
                </p>
                <a href="https://store.steampowered.com" class="button">Check it out</a>
            </div>
            <div class="about__img">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/D71cBUeAL58?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </section>

    <!--==================== ABOUT ====================-->
    <section class="section about" id="about">
        <div class="about__container container grid">
            <div class="about__img">
                <a class="twitter-timeline" data-width="300" data-height="220" data-theme="light" data-chrome="nofooter noheader noborders noscrollbar" href="https://twitter.com/Steam?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" data-tweet-limit="1">weets by Mist</a>
                <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
            <div class="about__data">
                <div class="text">
                    <h2 class="section__title about__title">The Latest Tweets</h2>
                </div>
                <p class="about__description">Catch up on the latest tweets from Mist.
                </p>
                <a href="https://twitter.com/Steam?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" class="button">Check it out</a>
            </div>
        </div>
    </section>

    <!--==================== MIST MEMBERS ====================-->
    <section class="section mist" id="mist">
        <div class="about__data">
            <div class="text">
                <h2 class="section__title">Top Members</h2>
            </div>

            <div class="mist__container container grid">
                <div class="mist__content">
                    <img src="assets/img/st,small,507x507-pad,600x600,f8f8f8.png" alt="" class="mist__img">
                    <h3 class="mist__title">Amogus</h3>
                    <span class="mist__subtitle">Boss</span>
                    <span class="mist__price">9999 Mist Points</span>
                    <a href="profile.php" onclick="profile1()"><button class="button mist__button">
                            <i class='bx bx-user mist__icon'></i>
                        </button></a>
                </div>

                <div class="mist__content">
                    <img src="assets/img/b69ddcefb7d8d1de7f2554cae900fe9c0bf08a99.png" alt="" class="mist__img">
                    <h3 class="mist__title">BoneCrusher87</h3>
                    <span class="mist__subtitle">Tank</span>
                    <span class="mist__price">247 Mist Points</span>
                    <a href="profile.php" onclick="profile2()"><button class="button mist__button">
                            <i class='bx bx-user mist__icon'></i>
                        </button></a>
                </div>

                <div class="mist__content">
                    <img src="assets/img/30ff6f7e96e70a85203199de03d0acadbd5c14f7.png" alt="" class="mist__img">
                    <h3 class="mist__title">HotStuff</h3>
                    <span class="mist__subtitle">Assassin</span>
                    <span class="mist__price">89 Mist Points</span>
                    <a href="profile.php" onclick="profile3()"><button class="button mist__button">
                            <i class='bx bx-user mist__icon'></i>
                        </button></a>
                </div>

                <div class="mist__content">
                    <img src="assets/img/65d2fcb6c26c155851eb08b5fe4a07a0cca1f5c9.png" alt="" class="mist__img">
                    <h3 class="mist__title">MrBread2000</h3>
                    <span class="mist__subtitle">Destroyer</span>
                    <span class="mist__price">22 Mist Points</span>
                    <a href="profile.php" onclick="profile4()"><button class="button mist__button">
                            <i class='bx bx-user mist__icon'></i>
                        </button></a>
                </div>

                <div class="mist__content">
                    <img src="assets/img/ab7c0f533fdb0af001f6aae589074eae396a7257.png" alt="" class="mist__img">
                    <h3 class="mist__title">birdkiller</h3>
                    <span class="mist__subtitle">Gangster</span>
                    <span class="mist__price">14 Mist Points</span>
                    <a href="profile.php" onclick="profile5()"><button class="button mist__button">
                            <i class='bx bx-user mist__icon'></i>
                        </button></a>
                </div>

                <div class="mist__content">
                    <img src="assets/img/979bb2133de5a89a3f7a0524f8a1d27163301f6d.png" alt="" class="mist__img">
                    <h3 class="mist__title">katnip78</h3>
                    <span class="mist__subtitle">Noob</span>
                    <span class="mist__price">10 Mist Points</span>
                    <a href="profile.php" onclick="profile6()"><button class="button mist__button">
                            <i class='bx bx-user mist__icon'></i>
                        </button></a>
                </div>
            </div>
    </section>

    <!--==================== DISCOUNT ====================-->
    <section class="section discount">
        <div class="discount__container container grid">
            <div class="discount__data">
                <h2 class="discount__title">50% Discount <br> On New Products</h2>
                <a href="store.html" class="button">Go to Store</a>
            </div>

            <img src="assets/img/591807dd1aa5c200fcff659f4891feec51c28c73.png" alt="" class="discount__img">
        </div>
    </section>

    <!--==================== NEW ARRIVALS ====================-->
    <section class="section new" id="new">
        <h2 class="section__title">New Arrivals</h2>

        <div class="new__container container">
            <div class="swiper new-swiper">
                <div class="swiper-wrapper">
                    <div class="new__content swiper-slide">
                        <div class="new__tag">New</div>
                        <img src="assets/img/0514dadbca67ecca8d647f7cbe419e8995a3d2b3.png" alt="" class="new__img">
                        <h3 class="new__title">Cat. The Cat</h3>
                        <span class="new__subtitle">Animated Sticker</span>

                        <div class="new__prices">
                            <span class="new__price">£14.99</span>
                            <span class="new__discount">£29.99</span>
                        </div>

                        <button href="store.html" class="button new__button">
                            <i class='bx bx-cart-alt new__icon'></i>
                        </button>
                    </div>

                    <div class="new__content swiper-slide">
                        <div class="new__tag">New</div>
                        <img src="assets/img/3a10cc0f3b08e031af62e0911ff5b3266a2d0076.png" alt="" class="new__img">
                        <h3 class="new__title">Goon</h3>
                        <span class="new__subtitle">Animated Sticker</span>

                        <div class="new__prices">
                            <span class="new__price">£11.99</span>
                            <span class="new__discount">£21.99</span>
                        </div>

                        <button href="store.html" class="button new__button">
                            <i class='bx bx-cart-alt new__icon'></i>
                        </button>
                    </div>

                    <div class="new__content swiper-slide">
                        <div class="new__tag">New</div>
                        <img src="assets/img/69bb80dddd77cc8a048a70417b963361cfc6dff1.png" alt="" class="new__img">
                        <h3 class="new__title">Pierre</h3>
                        <span class="new__subtitle">Animated Sticker</span>

                        <div class="new__prices">
                            <span class="new__price">£4.99</span>
                            <span class="new__discount">£9.99</span>
                        </div>

                        <button href="store.html" class="button new__button">
                            <i class='bx bx-cart-alt new__icon'></i>
                        </button>
                    </div>

                    <div class="new__content swiper-slide">
                        <div class="new__tag">New</div>
                        <img src="assets/img/ff5b43bb1734c203edb8d5a51d838103ec80af54.png" alt="" class="new__img">
                        <h3 class="new__title">Bounty Hunter</h3>
                        <span class="new__subtitle">Animated Sticker</span>

                        <div class="new__prices">
                            <span class="new__price">£24.99</span>
                            <span class="new__discount">£44.99</span>
                        </div>

                        <button href="store.html" class="button new__button">
                            <i class='bx bx-cart-alt new__icon'></i>
                        </button>
                    </div>

                    <div class="new__content swiper-slide">
                        <div class="new__tag">New</div>
                        <img src="assets/img/cec461a2cc44f7e176c2e04d53c97f498cd573ff.png" alt="" class="new__img">
                        <h3 class="new__title">Medic</h3>
                        <span class="new__subtitle">Animated Sticker</span>

                        <div class="new__prices">
                            <span class="new__price">£5.99</span>
                            <span class="new__discount">£12.99</span>
                        </div>

                        <button href="store.html" class="button new__button">
                            <i class='bx bx-cart-alt new__icon'></i>
                        </button>
                    </div>

                    <div class="new__content swiper-slide">
                        <div class="new__tag">New</div>
                        <img src="assets/img/3293c56496d19c18a9f47b822fdfa98c9e7476f3.png" alt="" class="new__img">
                        <h3 class="new__title">Demoman (Toast)</h3>
                        <span class="new__subtitle">Animated Sticker</span>

                        <div class="new__prices">
                            <span class="new__price">£7.99</span>
                            <span class="new__discount">£14.99</span>
                        </div>

                        <button href="store.html" class="button new__button">
                            <i class='bx bx-cart-alt new__icon'></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--==================== SEARCH ====================-->
    <section class="section search">
        <div class="newsletter__container container">
            <h2 class="section__title">Search</h2>
            <p class="search__description">
                Search for what you would like to read on.
            </p>

            <form action="" class="search__form" role="search" id="form">
                <input type="text" placeholder="Type what you like to search for" type="search" id="query" name="q" class="search__input">
                <button class="button" type="submit">
                    Search
                </button>
            </form>
        </div>
    </section>
    </main>

    <!--==================== FOOTER ====================-->
    <?php
    include_once 'footer.php';
    ?>

    <!--=============== SCROLL UP ===============-->
    <a href="#" class="scrollup" id="scroll-up">
        <i class='bx bx-up-arrow-alt scrollup__icon'></i>
    </a>

    <!--Jquery script to show "active" page-->
    <script>
        document.getElementById('home').style.color = "grey";
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
        const menuBtn = document.querySelector('.menu-btn');
        let menuOpen = false;
        menuBtn.addEventListener('click', () => {
            if (!menuOpen) {
                menuBtn.classList.add('open');
                menuOpen = true;
            } else {
                menuBtn.classList.remove('open');
                menuOpen = false;
            }
        });
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

    <!--=============== SCROLL REVEAL ===============-->
    <script src="assets/js/scrollreveal.min.js"></script>

    <!--=============== SWIPER JS ===============-->
    <script src="assets/js/swiper-bundle.min.js"></script>

    <!--=============== MAIN JS ===============-->
    <script src="assets/js/main.js"></script>

    <script src="assets/js/products.js"></script>
    <script src="assets/js/app.js"></script>
    <script src="assets/js/search.js"></script>

    <!--============ SHOPPING CART ===============-->
    <script src="assets/js/products.js"></script>
    <script src="assets/js/app.js"></script>
</body>

</html>