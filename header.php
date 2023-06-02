<?php
session_start();
?>

<!doctype html>
<html>

<header>
    <h2><a href="home.php" class="logo">Mist</a></h2>
    <ul>
        <div class="menulinks" id="mistnavlinks">
            <p3><a class="menulinks" id="home" href="home.php">Home</a></p3>
            <?php
            if (isset($_SESSION["useruid"])) {
                echo "<p3><a class=\"menulinks\" id=\"profile\" href=\"profile.php\" onclick=\"profile0()\">Profile</a></p3>";
            } elseif (isset($_SESSION["adminuid"])) {
                echo "<p3><a class='menulinks' href=\"admin.php\">Admin</a></p3>";
            }
            ?>
            <?php
            if (isset($_SESSION["useruid"])) {
                echo "<p3><a class='menulinks' href='store.php'>Store</a></p3>";
                echo "<p3><a class='menulinks' href='contact.php'>Contact</a></p3>";
            }
            ?>
            <?php
            if (isset($_SESSION["useruid"]) || isset($_SESSION["adminuid"])) {
                echo "<p3><a class='menulinks' href='assets/includes/logout.inc.php'>Logout</a></p3>";
            } else {
                echo "<p3><a class='menulinks' href='index.php'>Login</a></p3>";
            }
            ?>
            <div class="darktoggle" id="darktoggle" onclick="enableDarkLight()"></div>
            <?php
            if (isset($_SESSION["useruid"])) {
                echo "<div class=\"toggle\"></div>";
                echo "<div class=\"total-items-in-cart\">0";
            }
            ?>
        </div>
    </ul>
</header>