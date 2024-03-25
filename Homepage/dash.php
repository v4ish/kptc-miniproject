<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="This is description" content="E-Real website">
    <meta name="author" content="v4ish">
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <?php
session_start();

// Checks if the user is logged in, redirect to login if false
if (!isset($_SESSION['user'])) {
    header("Location: ../index.html");
    exit();
}
   ?>

    <!-- header section starts  -->

    <header class="header">

        <nav class="navbar nav-1">
            <section class="flex">
                <a href="../index.html" class="logo"><i class="fa-solid fa-sign-hanging"></i>E-REAL</a>

                <ul>
                    <li><a href="contact.php">Post your Property<i class="fas fa-sack-dollar"></i></a></li>
                </ul>
            </section>
        </nav>

        <nav class="navbar nav-2">
            <section class="flex">
                <div id="menu-btn" class="fas fa-bars"></div>

                <div class="menu">
                    <ul>
                        <li><a href="#">Buy<i class="fas fa-angle-down"></i></a>
                            <ul>
                                <li><a href="search_plot.php">Plot/Land</a></li>
                                <li><a href="search.php">House</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Sell<i class="fas fa-angle-down"></i></a>
                            <ul>
                                <li><a href="contact.php">Post your property</a></li>
                                <li><a href="#">Dashboard</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Help<i class="fas fa-angle-down"></i></a>
                            <ul>
                                <li><a href="about.html">About us</a></i></li>
                                <li><a href="contact.php">Contact us</a></i></li>
                                <li><a href="contact.php#faq">FAQ</a></i></li>
                            </ul>
                        </li>
                    </ul>
                </div>


                <ul>
                    <li><a href="#">My profile <i class="fas fa-angle-down"></i></a>
                        <ul>
                            <li><a href="../Login/settings.php">Settings</a></li>
                            <li><a href="../Login/logout.php">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </section>
        </nav>
    </header>

    <!-- header section ends -->

    <!-- home section starts  -->

    <div class="home">

        <section class="center">

            <form>
                <h3>Welcome to Dashboard</h3>


                <input class="btn" value="Search for Plot/Land" onclick="location.href='search.php'">
                <input class="btn" value="Search for House" onclick="location.href='search_plot.php'">


            </form>
        </section>
    </div>

    <!-- home section ends -->

    <!-- services section starts  -->

    <section class="services">

        <h1 class="heading">our services</h1>

        <div class="box-container">

            <div class="box">
                <img src="images/step-1.png" alt="">
                <h3>Sell & Buy Property</h3>
                <p>Text.</p>
            </div>

            <div class="box">
                <img src="images/step-3.png" alt="">
                <h3>100% Guarantee</h3>
                <p>Text</p>
            </div>

            <div class="box">
                <img src="images/icon-6.png" alt="">
                <h3>24/7 service</h3>
                <p>Text.</p>
            </div>

        </div>

    </section>

    <!--footer-->

    <footer class="footer">

        <section class="flex">

            <div class="box">
                <a href="tel:0000000000"><i class="fas fa-phone"></i><span>+91 1234567890</span></a>
                <a href="mailto:contact.erealwebsite.org"><i
                        class="fas fa-envelope"></i><span>contact.erealwebsite.org</span></a>
                <a href="#"><i class="fas fa-map-marker-alt"></i><span>Kochi, india - 683513</span></a>
            </div>

            <div class="box">
                <a href="../index.html"><span>Home</span></a>
                <a href="about.html"><span>About</span></a>
                <a href="contact.php"><span>Contact</span></a>
            </div>

            <div class="box">
                <a href="#"><span>Twitter</span><i class="fab fa-twitter"></i></a>
                <a href="#"><span>Linkedin</span><i class="fab fa-linkedin"></i></a>
                <a href="#"><span>Instagram</span><i class="fab fa-instagram"></i></a>

            </div>

        </section>

        <div class="credit">&copy; copyright @ 2024 by <span>E-real</span> | all rights reserved!</div>

    </footer>

    <!-- footer section ends -->


    <!-- custom js file link  -->

</body>

</html>