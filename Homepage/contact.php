<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <!-- custom css file link  -->
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
                    <li><a href="#">Post your Property<i class="fas fa-sack-dollar"></i></a></li>
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
                            <li><a href="../Login/login.php">Login</a></li>
                            <li><a href="../Login/reg.php">Register</a></li>
                        </ul>
                    </li>
                </ul>
            </section>
        </nav>
    </header>

    <!-- header section ends -->

    <!-- contact section starts  -->

    <section class="contact">

        <div class="row">
            <div class="image">
                <img src="images/contact-img.svg" alt="">
            </div>
            <form action="" method="post">
                <h3>Get in touch</h3>
                <input type="text" name="name" required maxlength="50" placeholder="Enter your name" class="box">
                <input type="email" name="email" required maxlength="50" placeholder="Enter your email" class="box">
                <input type="number" name="number" required maxlength="10" max="9999999999" min="0"
                    placeholder="Enter your number" class="box">
                <textarea name="message" placeholder="Enter your message" required maxlength="1000" cols="30" rows="10"
                    class="box"></textarea>
                <input type="submit" value="Send message" name="send" class="btn">
            </form>
        </div>

    </section>

    <!-- contact section ends -->

    <!-- faq section starts  -->

    <section class="faq" id="faq">

        <h1 class="heading">FAQ</h1>

        <div class="box-container">

            <div class="box active">
                <h3><span>How to contact with the buyers?</span><i class="fas fa-angle-down"></i></h3>
                <p>You can contact buyers by clicking on the Email/Call button</p>
            </div>

            <div class="box active">
                <h3><span>Why my listing not showing up?</span><i class="fas fa-angle-down"></i></h3>
                <p>Our Agents will call you to verify the listing and after verified your listing will be shown within
                    24hrs</p>
            </div>

            <div class="box">
                <h3><span>Is this site safe?</span><i class="fas fa-angle-down"></i></h3>
                <p>Absolutely yes, This site just shows the listing and passwords are secured with bcrypt hashing.</p>
            </div>
            <div class="box">
                <h3><span>How does this site make money?</span><i class="fas fa-angle-down"></i></h3>
                <p>Currently we don't, We're planning to expand our website and add more features including paid plans
                </p>
            </div>

        </div>

    </section>

    <!-- faq section ends -->










    <!-- footer section starts  -->

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
    <script src="js/script.js"></script>

</body>

</html>