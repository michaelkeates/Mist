<!doctype html>
<html>
<section class="showcasemenu">
    <div class="menu">
        <div id="dashboard" class="dashboard">
            <div class="user">
                <a href="assets/img/avatar.png"><img src="assets/img/avatar.png" alt="Avatar" style="width:100px;height:100px;" /></a>
                <?php
                if (isset($_SESSION["useruid"])) {
                    echo "<h3>Welcome " . $_SESSION["useruid"] . "</h3>";
                } elseif (isset($_SESSION["adminuid"])) {
                    echo "<h3>Admin</h3>";
                } else {
                    echo "<h3>User</h3>";
                    echo "<p>Not a member</p><a href=\"index.html\" class=\"button\">Register Now!</a>";
                }
                ?>
            </div>
            <div class="products-list">
                <div class="cart">
                    <div class="cart-header">
                        <div class="column1">
                            <h3>Item</h3>
                        </div>
                        <div class="column2">
                            <h3>Unit Price</h3>
                        </div>
                        <div class="column3">
                            <h3>Units</h3>
                        </div>
                    </div>
                    <div class="cart-items">
                        <!-- render cart items here -->
                    </div>
                    <div class="cart-footer">
                        <div class="subtotal">
                            Subtotal (0 items): £0
                        </div>
                        <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                            <input type="hidden" name="add" value="1">
                            <input type="hidden" name="cmd" value="_cart">
                            <input type="hidden" name="upload" value="1">
                            <input type="hidden" name="business" value="10226060@coleggwent.ac.uk">
                            <input type="hidden" name="currency_code" value="GBP">
                            <div class="cart-paypal">

                            </div>
                            <input type="submit" class="button" alt="Checkout" value="Pay with PayPal">
                        </form>
                    </div>
                </div>
            </div>
        </div>
</section>