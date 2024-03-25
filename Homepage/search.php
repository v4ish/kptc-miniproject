<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Search For Houses</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <!-- header section starts  -->

    <?php
session_start();

// Checks if the user is logged in, redirect to login if false
if (!isset($_SESSION['user'])) {
    header("Location: ../index.html");
    exit();
}
   ?>

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
                                <li><a href="#">House</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Sell<i class="fas fa-angle-down"></i></a>
                            <ul>
                                <li><a href="contact.php">Post your Property</a></li>
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
                    <li><a href="#">My Profile <i class="fas fa-angle-down"></i></a>
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

    <!-- search filter section starts  -->
    <div class="search-wrapper">
        <label for="search">Search for House</label>
        <input type="search" id="search" placeholder="Type here to search..." data-search />
    </div>
    <!-- search filter section Ends here  -->

    <!-- listings section starts  -->

    <section class="listings">
        <h1 class="heading">Searched results</h1>

        <div class="box-container">
            <div class="box">
                <div class="admin">
                    <h3>A</h3>
                    <div>
                        <p>Aaliya</p>
                        <span>27-01-2024</span>
                    </div>
                </div>
                <div class="thumb">

                    <p class="type"><span>House</span><span>sale</span></p>
                    <img src="re/aaliya/house1.jpg" alt="" />
                </div>
                <h3 class="name">Beautiful house near nedumbassery </h3>
                <p class="location">
                    <i class="fas fa-map-marker-alt"></i><span>Nedumbassery , Kochi - 683585</span>
                </p>
                <div class="flex">
                    <p><i class="fas fa-rupee-sign"></i><span>93 L</span></p>>
                    <p><i class="fas fa-maximize"></i><span>1200sqft</span></p>
                </div>
                <a href="tel:+918714899350" class="btn">Call</a>
                <a href="mailto:thevk350@proton.me" class="btn">Mail</a>
            </div>

            <div class="box">
                <div class="admin">
                    <h3>A</h3>
                    <div>
                        <p>Adhithyan</p>
                        <span>27-10-2023</span>
                    </div>
                </div>
                <div class="thumb">

                    <p class="type"><span>House</span><span>Rent</span></p>
                    <img src="re/adhithyan/house1.jpg" alt="" />
                </div>
                <h3 class="name">House for rent in Haripad</h3>
                <p class="location">
                    <i class="fas fa-map-marker-alt"></i><span>Haripad, Allapuzha - 690514</span>
                </p>
                <div class="flex">
                    <p><i class="fas fa-rupee-sign"></i><span>86 L</span></p>>
                    <p><i class="fas fa-maximize"></i><span>900sqft</span></p>
                </div>
                <a href="tel:+918714899350" class="btn">Call</a>
                <a href="mailto:contact.erealwebsite.org" class="btn">Mail</a>
            </div>

            <div class="box">
                <div class="admin">
                    <h3>L</h3>
                    <div>
                        <p>Leenus</p>
                        <span>17-10-2023</span>
                    </div>
                </div>
                <div class="thumb">

                    <p class="type"><span>House</span><span>sale</span></p>
                    <img src="re/leenus/house1.jpg" alt="" />
                </div>
                <h3 class="name">My house</h3>
                <p class="location">
                    <i class="fas fa-map-marker-alt"></i><span>Aluva, Kochi - 683101</span>
                </p>
                <div class="flex">
                    <p><i class="fas fa-rupee-sign"></i><span>1Cr</span></p>>
                    <p><i class="fas fa-maximize"></i><span>1250sqft</span></p>
                </div>
                <a href="tel:+918714899350" class="btn">Call</a>
                <a href="mailto:contact.erealwebsite.org" class="btn">Mail</a>
            </div>

            <div class="box">
                <div class="admin">
                    <h3>V4</h3>
                    <div>
                        <p>Vaisakh</p>
                        <span>23-07-2022</span>
                    </div>
                </div>
                <div class="thumb">

                    <p class="type"><span>House</span><span>sale</span></p>
                    <img src="re/vaisakh/house1.jpg" alt="" />
                </div>
                <h3 class="name">House for sale</h3>
                <p class="location">
                    <i class="fas fa-map-marker-alt"></i><span>N.Paravoor, Kochi - 683513</span>
                </p>
                <div class="flex">
                    <p><i class="fas fa-rupee-sign"></i><span>2Cr</span></p>>
                    <p><i class="fas fa-maximize"></i><span>2345sqft</span></p>
                </div>
                <a href="tel:+918714899350" class="btn">Call</a>
                <a href="mailto:thevk350@proton.me" class="btn">Mail</a>
            </div>

        </div>
    </section>

    <!-- listings section ends -->

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

        <div class="credit">
            &copy; copyright @ 2024 by <span>E-real</span> | all rights reserved!
        </div>
    </footer>
    <!-- footer section ends -->

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        const searchInput = document.getElementById("search");
        const propertyListings = document.querySelectorAll(".box");

        searchInput.addEventListener("input", function() {
            const searchTerm = searchInput.value.trim().toLowerCase();

            propertyListings.forEach(function(listing) {
                const name = listing
                    .querySelector(".name")
                    .textContent.trim()
                    .toLowerCase();
                const location = listing
                    .querySelector(".location")
                    .textContent.trim()
                    .toLowerCase();
                const flex = listing
                    .querySelector(".flex")
                    .textContent.trim()
                    .toLowerCase();

                if (name.includes(searchTerm) || location.includes(searchTerm) || flex.includes(
                        searchTerm)) {
                    listing.style.display = "block";
                } else {
                    listing.style.display = "none";
                }
            });
        });
    });
    </script>
</body>

</html>

<!--Filter by Location,Pincode, Listed Name, Area-->