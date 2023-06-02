<?php
include_once 'assets/includes/dbh.inc.php';
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

    <!--=============== BOOTSTRAP FOR TABLE ===============-->
    <link rel="stylesheet" href="assets/css/test.css">

    <title>Mist</title>
</head>

<body>
    <!--==================== HEADER ====================-->
    <section class="showcase">
        <?php
        include_once 'header.php';
        include_once 'sidemenu.php';
        ?>
        <div class="table-responsive">
            <div class="discount__data">
                <h2 class="section__title">Admin Dashboard</h2>
                <table class="table table-striped">
                    <div class="container">
                        <thead>
                            <tr>
                                <th scope="col"><h3>ID</h3></th>
                                <th scope="col"><h3>Username</h3></th>
                                <th scope="col"><h3>First Name</h3></th>
                                <th scope="col"><h3>Last Name</h3></th>
                                <th scope="col"><h3>Email</h3></th>
                                <th scope="col"><h3>Password</h3></th>
                                <th scope="col"><h3>Address 1</h3></th>
                                <th scope="col"><h3>Address 2</h3></th>
                                <th scope="col"><h3>Postcode</h3></th>
                                <th scope="col"><h3>Country</h3></th>
                                <th scope="col"><h3></h3></th>
                                <th scope="col"><h3></h3></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php
                                $sql = "SELECT * FROM users;";
                                $result = mysqli_query($conn, $sql);
                                $resultCheck = mysqli_num_rows($result);

                                if ($resultCheck > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $id = $row['usersId'];
                                        $uid = $row['usersUid'];
                                        $firstname = $row['usersFirstname'];
                                        $lastname = $row['usersLastname'];
                                        $email = $row['usersEmail'];
                                        $password = $row['usersPwd'];
                                        $address1 = $row['usersAddress1'];
                                        $address2 = $row['usersAddress2'];
                                        $postcode = $row['usersPostcode'];
                                        $country = $row['usersCountry'];
                                        echo '<tr>';
                                        echo '<th scope=row><h3>' . $id . '</h3></th>';
                                        echo '<td><h3>' . $uid . '</h3></td>';
                                        echo '<td><h3>' . $firstname . '</h3></td>';
                                        echo '<td><h3>' . $lastname . '</h3></td>';
                                        echo '<td><h3>' . $email . '</h3></td>';
                                        echo '<td><h3>' . $password . '</h3></td>';
                                        echo '<td><h3>' . $address1 . '</h3></td>';
                                        echo '<td><h3>' . $address2 . '</h3></td>';
                                        echo '<td><h3>' . $postcode . '</h3></td>';
                                        echo '<td><h3>' . $country . '</h3></td>';
                                        echo '<td><button class="button" type="submit" name="adminsubmit"><a href="assets/includes/admin.update.inc.php?updateid=' . $id . '""</a>Update Profile</button></td>';
                                        echo '<td><button class="button" type="submit" name="adminsubmit"><a href="assets/includes/admin.delete.inc.php?deleteid=' . $id . '""</a>Delete Profile</button></td>';
                                        echo '</tr>';
                                    }
                                }
                                ?>
                            </tr>
                        </tbody>
                    </div>
                </table>
            </div>
        </div>
    </section>
</body>
<!--==================== FOOTER ====================-->
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

<!--=============== SCROLL REVEAL ===============-->
<script src="assets/js/scrollreveal.min.js"></script>

<!--=============== SWIPER JS ===============-->
<script src="assets/js/swiper-bundle.min.js"></script>

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