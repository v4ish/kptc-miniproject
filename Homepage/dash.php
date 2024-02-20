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
            <li><a href="contact.html">Post your Property<i class="fas fa-sack-dollar"></i></a></li>
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
                     <li><a href="search_plot.html">Plot/Land</a></li>
                     <li><a href="search.html">House</a></li>
                  </ul>
               </li>
               <li><a href="#">Sell<i class="fas fa-angle-down"></i></a>
                  <ul>
                     <li><a href="contact.html">Post your property</a></li>
                     <li><a href="#">Dashboard</a></li>
                  </ul>
               </li>
               <li><a href="#">Help<i class="fas fa-angle-down"></i></a>
                  <ul>
                     <li><a href="about.html">About us</a></i></li>
                     <li><a href="contact.html">Contact us</a></i></li>
                     <li><a href="contact.html#faq">FAQ</a></i></li>
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
         <div class="box">
            <p>Select Location <span>*</span></p>
            <select name="bhk" class="input" required>
               <option value="Alappuzha">Alappuzha</option>
               <option value="Ernakulam">Ernakulam</option>
               <option value="Idukki">Idukki</option>
               <option value="Kannur">Kannur</option>
               <option value="Kasaragod">Kasaragod</option>
               <option value="Kollam">Kollam</option>
               <option value="Kottayam">Kottayam</option>
               <option value="Kozhikode">Kozhikode</option>
               <option value="Malappuram">Malappuram</option>
               <option value="Palakkad">Palakkad</option>
               <option value="Pathanamthitta">Pathanamthitta</option>
               <option value="Thiruvananthapuram">Thiruvananthapuram</option>
               <option value="Thrissur">Thrissur</option>
               <option value="Wayanad">Wayanad</option>
            </select>
         </div>
         <div class="flex">
            <div class="box">
               <p>Property type <span>*</span></p>
               <select name="type" class="input" required>
                  <option value="flat">Plot/Land</option>
               </select>
            </div>
            <div class="box">
               <p>Area<span>*</span></p>
               <select name="bhk" class="input" required>
                  <option value="3">1-5 Cent</option>
                  <option value="7">6-9 Cent</option>
                  <option value="13">10-15 Cent</option>
                  <option value="18">16-20 Cent</option>
                  <option value="21,50">21-50 Cent</option>
                  <option value="21,50">51-99 Cent</option>
                  <option value="21,50">1 Acre</option>
                  <option value="21,50">Above 1 Acre</option>
               </select>
            </div>
            <div class="box">
               <p>Minimum budget <span>*</span></p>
               <select name="minimum" class="input" required>
                  <option value="5000000">5 lac</option>
                  <option value="1000000">10 lac</option>
                  <option value="2000000">20 lac</option>
                  <option value="3000000">30 lac</option>
                  <option value="4000000">40 lac</option>
                  <option value="4000000">40 lac</option>
                  <option value="5000000">50 lac</option>
                  <option value="6000000">60 lac</option>
                  <option value="7000000">70 lac</option>
                  <option value="8000000">80 lac</option>
                  <option value="9000000">90 lac</option>
                  <option value="10000000">1 Cr</option>
                  <option value="20000000">2 Cr</option>
                  <option value="30000000">3 Cr</option>
                  <option value="40000000">4 Cr</option>
                  <option value="50000000">5 Cr</option>
                  <option value="60000000">6 Cr</option>
                  <option value="70000000">7 Cr</option>
                  <option value="80000000">8 Cr</option>
                  <option value="90000000">9 Cr</option>
                  <option value="100000000">10 Cr</option>
                  <option value="150000000">15 Cr</option>
                  <option value="200000000">20 Cr</option>
               </select>
            </div>
            <div class="box">
               <p>Maximum budget <span>*</span></p>
               <select name="maximum" class="input" required>
                  <option value="5000000">5 lac</option>
                  <option value="1000000">10 lac</option>
                  <option value="2000000">20 lac</option>
                  <option value="3000000">30 lac</option>
                  <option value="4000000">40 lac</option>
                  <option value="4000000">40 lac</option>
                  <option value="5000000">50 lac</option>
                  <option value="6000000">60 lac</option>
                  <option value="7000000">70 lac</option>
                  <option value="8000000">80 lac</option>
                  <option value="9000000">90 lac</option>
                  <option value="10000000">1 Cr</option>
                  <option value="20000000">2 Cr</option>
                  <option value="30000000">3 Cr</option>
                  <option value="40000000">4 Cr</option>
                  <option value="50000000">5 Cr</option>
                  <option value="60000000">6 Cr</option>
                  <option value="70000000">7 Cr</option>
                  <option value="80000000">8 Cr</option>
                  <option value="90000000">9 Cr</option>
                  <option value="100000000">10 Cr</option>
                  <option value="150000000">15 Cr</option>
                  <option value="200000000">Above 20 Cr</option>
               </select>
            </div>
         </div>
         <input type="submit" value="search property" name="search" class="btn" onclick="alert('Feature not implemented yet')">

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
         <a href="mailto:contact.erealwebsite.org"><i class="fas fa-envelope"></i><span>contact.erealwebsite.org</span></a>
         <a href="#"><i class="fas fa-map-marker-alt"></i><span>Kochi, india - 683513</span></a>
      </div>

      <div class="box">
         <a href="../index.html"><span>Home</span></a>
         <a href="about.html"><span>About</span></a>
         <a href="contact.html"><span>Contact</span></a>
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