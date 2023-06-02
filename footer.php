<!doctype html>
<!--==================== FOOTER ====================-->
<footer class="footer section">
    <div class="footer__container container grid">
        <div class="footer__content">
            <a href="#" class="footer__logo">
                <img src="assets/img/logomist.png" alt="" class="footer__logo-img">
                Mist
            </a>

            <br>

            <p class="footer__description">Mist is a fictional website conceived for an assigment set by USW & Coleg
                Gwent.</p>

            <div class="footer__social">
                <a href="https://www.facebook.com/Steam/" target="_blank" class="footer__social-link">
                    <i class='bx bxl-facebook'></i>
                </a>
                <a href="https://www.instagram.com/steam_games_official/?hl=en" target="_blank" class="footer__social-link">
                    <i class='bx bxl-instagram-alt'></i>
                </a>
                <a href="https://twitter.com/Steam?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" target="_blank" class="footer__social-link">
                    <i class='bx bxl-twitter'></i>
                </a>
            </div>
        </div>

        <div class="footer__content">
            <h3 class="footer__title">Site</h3>

            <ul class="footer__links">
                <li>
                    <a href="profile.html" class="footer__link">Profile</a>
                </li>
                <li>
                    <a href="store.html" class="footer__link">Store</a>
                </li>
                <li>
                    <a href="contact.html" class="footer__link">Contact</a>
                </li>
            </ul>
        </div>

        <div class="footer__content">
            <h3 class="footer__title">Our Services</h3>

            <ul class="footer__links">
                <li>
                    <?php
                    if (isset($_SESSION["useruid"]) || isset($_SESSION["adminuid"])) {
                        echo "<a href=\"assets/includes/logout.inc.php\" class=\"footer__link\">Logout</a>";
                    } else {
                        echo "<a href=\"index.php\" class=\"footer__link\">Login</a>";
                    }
                    ?>
                </li>
                <li>
                    <a href="tel:254727844021" class="footer__link">Call Number</a>
                </li>
                <li>
                    <a href="mailto:10226060@coleggwent.ac.uk" class="footer__link">Send Email</a>
                </li>
            </ul>
        </div>

        <div class="footer__content">
            <h3 class="footer__title">Our Company</h3>

            <ul class="footer__links">
                <li>
                    <a href="https://store.steampowered.com/privacy_agreement/?snr=1_44_44_" class="footer__link">Privacy Policy</a>
                </li>
                <li>
                    <a href="https://store.steampowered.com/legal/?snr=1_44_44_" class="footer__link">Legal</a>
                </li>
                <li>
                    <a href="https://store.steampowered.com/steam_refunds/?snr=1_44_44_" class="footer__link">Refunds</a>
                </li>
            </ul>
        </div>
    </div>

    <span class="footer__copy">&#169; HND IS2S556 Responsive Web Development CW2 Michael Keates (23009273)</span>

</footer>