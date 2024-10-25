<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>E-Gov|KCNIT</title>
  <link rel="shortcut icon" href="./assets/favicon.ico" type="image/x-icon">
  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="style.css">
  <!-- Font Awesome CDN for icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js'></script>
  <link href='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.css' rel='stylesheet'>
</head>

<body class="m-0 p-0 box-border overflow-hidden relative">
  <div class="cursor h-3 w-3 rounded-full bg-orange-600 fixed top-0 left-0 z-20 boxShadow"></div>
  <div class="bg-gray-50">
    <!-- Navbar -->
    <nav class="flex items-center justify-between p-4 bg-white shadow-md w-full fixed top-0 z-10">
      <!-- Logo -->
      <div class="flex items-center space-x-2 logo-box">
        <a href="index.php">
          <img src="./assets/E-gov logo.jpg" alt="Logo" class="h-14">
        </a>
      </div>

      <!-- Menu Links for Desktop -->
      <div class="hidden md:flex space-x-6 text-lg gap-5 menu-box text-gray-700">
        <a href="index.php" class="hover:text-gray-900 transition-colors duration-200">Home</a>
        <a href="team.php" class="hover:text-gray-900 transition-colors duration-200">Team</a>
        <a href="gallary.php" class="hover:text-gray-900 transition-colors duration-200">Gallery</a>
        <a href="projects.php" class="hover:text-gray-900 transition-colors duration-200">Projects</a>
        <a href="about.php" class="hover:text-gray-900 transition-colors duration-200">About</a>
        <a href="contact.php" class="hover:text-gray-900 transition-colors duration-200">Contact</a>
      </div>

      <!-- Login Section for Desktop -->
      <div class="hidden md:flex items-center space-x-2 login-box text-gray-700">
        <img src="./assets/login.png" alt="login" class="h-8">
        <?php
        if (isset($_SESSION['name'])) {
          echo '<p class="text-gray-700 text-lg hover:text-orange-600 transition-colors duration-200">Welcome, ' . htmlspecialchars($_SESSION['name']) . '</p>';
        } else {
          echo '<a href="./login.php" class="text-gray-700 text-lg hover:text-orange-600 transition-colors duration-200">Login</a>';
        }
        ?>
      </div>

      <!-- Logout for Desktop (Hidden on smaller screens) -->
      <?php
      if (isset($_SESSION['name'])) {
        echo '<a href="./logout.php" class="hidden md:block text-gray-700 text-lg hover:text-orange-600 transition-colors duration-200 mr-8">Logout</a>';
      }
      ?>

      <!-- Mobile Menu Button -->
      <div class="md:hidden flex items-center">
        <button id="menuButton" class="focus:outline-none text-gray-700">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
          </svg>
        </button>
      </div>
    </nav>

    <!-- Mobile Menu -->
    <div id="mobileMenu" class="md:hidden bg-white shadow-md pb-4 pl-4 pr-4 hidden pt-24">
      <!-- Always visible "Home" link -->
      <a href="index.php" class="block text-gray-700 hover:text-orange-600 mb-2">Home</a>
      <a href="team.php" class="block text-gray-700 hover:text-orange-600 mb-2">Team</a>
      <a href="gallary.php" class="block text-gray-700 hover:text-orange-600 mb-2">Gallery</a>
      <a href="projects.php" class="block text-gray-700 hover:text-orange-600 mb-2">Projects</a>
      <a href="about.php" class="block text-gray-700 hover:text-orange-600 mb-2">About</a>
      <a href="contact.php" class="block text-gray-700 hover:text-orange-600">Contact</a>

      <!-- Login and Logout for Mobile -->
      <?php
      if (isset($_SESSION['name'])) {
        echo '<p class="block text-gray-700 text-lg hover:text-orange-600 mb-2 mt-2">Welcome, ' . htmlspecialchars($_SESSION['name']) . '</p>';
        echo '<a href="./logout.php" class="block text-gray-700 hover:text-orange-600 mb-2">Logout</a>';
      } else {
        echo '<a href="./login.php" class="block text-gray-700 hover:text-orange-600">Login</a>';
      }
      ?>
    </div>
  </div>
  <div
    class="lg:boxHeight kcnit-image mt-20 w-full object-cover overflow-hidden">
    <img
      src="./assets/kcnit-college.jpeg"
      alt="KCNIT"
      class="object-center h-full w-full aspect-auto" />
  </div>
  <div
    class="heading flex items-center justify-center mt-8 flex-col gap-4 pb-4 ml-20 mr-20 transform hover:scale-105 hover:shadow-2xl shadow-xl hover:shadow-orange-300 duration-200">
    <h1 class="text-6xl font-bold text-orange-400">Contact Info</h1>
    <p>Kali Charan Nigam Institute of Technology, Banda (U.P.)</p>
  </div>
  <section class="container mx-auto px-4 py-8">
    <!-- Phone Section -->
    <div
      class="flex items-center space-x-4 mb-6 justify-center mt-12 ml-40 mr-40 pb-4 transform hover:scale-105 hover:shadow-2xl shadow-xl hover:shadow-orange-300 duration-200">
      <div>
        <i class="fas fa-phone text-yellow-500 text-2xl"></i>
      </div>
      <div>
        <h3 class="text-2xl font-semibold">Phone</h3>
        <p class="text-gray-700">(05192) 227584, 225375, 225311</p>
      </div>
    </div>

    <!-- Address Section -->
    <div
      class="flex items-center space-x-4 mb-6 justify-center mt-12 ml-40 mr-40 pb-4 transform hover:scale-105 hover:shadow-2xl shadow-xl hover:shadow-orange-300 duration-200">
      <div>
        <i class="fas fa-map-marker-alt text-yellow-500 text-2xl"></i>
      </div>
      <div>
        <h3 class="text-2xl font-semibold">Address</h3>
        <p class="text-gray-700">
          Kali Charan Nigam Institute of Technology, Naraini Road,
          Banda-210001 (U.P.)
        </p>
      </div>
    </div>

    <!-- Map Section -->
    <div
      class="mt-12 ml-40 mr-40 transform hover:scale-105 hover:shadow-2xl shadow-xl hover:shadow-orange-300 duration-200">
      <iframe
        src="https://www.google.com/maps/embed/v1/place?q=Kali%20Charan%20Nigam%20Institute%20of%20Technology%2C%20Banda%20(U.P.)&key=AIzaSyA7FIw630P8J438wsZH86CaEuFYs8BiiKY"
        width="100%"
        height="450"
        style="border: 0"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </section>
  <div
    class="minor-info flex flex-wrap items-center justify-center mt-8 flex-col gap-4 pb-4 ml-40 mr-40 transform hover:scale-105 hover:shadow-2xl shadow-xl hover:shadow-orange-300 duration-200">
    <p>Kali Charan Nigam Institute of Technology Naraini road Banda U.P.</p>
    <p>Contact No. :(05192)227584, 225375, 225311.</p>
    <p>Fax :( 05192)22537.</p>
    <p>
      Email: <a href="/" class="text-orange-500">kcnit2002@rediffmail.com</a>
    </p>
    <p>
      Website:
      <a href="index.html" class="text-orange-500">www.kcnit.ac.in</a>
    </p>
  </div>

  <div
    class="flex justify-center flex-wrap space-x-8 mt-12 pb-4 ml-40 mr-40 transform hover:scale-105 hover:shadow-2xl shadow-xl hover:shadow-orange-300 duration-200">
    <!-- Facebook -->
    <a
      href="https://www.facebook.com/photo/?fbid=503963188396238&set=a.418832050242686"
      target="_blank"
      class="text-blue-600 hover:text-blue-800">
      <i class="fab fa-facebook fa-3x"></i>
    </a>

    <!-- Twitter -->
    <a
      href="https://x.com/kcnit"
      target="_blank"
      class="text-blue-400 hover:text-blue-500 shadow-blue-600">
      <i class="fab fa-twitter fa-3x"></i>
    </a>

    <!-- Instagram -->
    <a
      href="https://www.instagram.com/kcnitofficial?igsh=MWJxOWl2ZGR2N2VvOA=="
      target="_blank"
      class="text-pink-500 hover:text-pink-700">
      <i class="fab fa-instagram fa-3x"></i>
    </a>

    <!-- LinkedIn -->
    <a
      href="https://www.linkedin.com/company/kcnitbanda/"
      target="_blank"
      class="text-blue-700 hover:text-blue-900">
      <i class="fab fa-linkedin fa-3x"></i>
    </a>

    <!-- YouTube -->
    <a
      href="https://www.youtube.com/@kcnitstudio8826"
      target="_blank"
      class="text-red-600 hover:text-red-800">
      <i class="fab fa-youtube fa-3x"></i>
    </a>
  </div>

  <footer class="bg-gray-800 text-gray-300 p-6 mt-12 pb-24">
    <div class="container mx-auto grid grid-cols-1 md:grid-cols-4 gap-4">
      <!-- Column 1: Digital India -->
      <div>
        <h4 class="text-orange-400 font-semibold mb-2">Digital India</h4>
        <ul class="space-y-1">
          <li><a href="#" class="hover:text-orange-500">About Us</a></li>
          <li><a href="#" class="hover:text-orange-500">Initiatives</a></li>
          <li>
            <a href="#" class="hover:text-orange-500">Privacy Policy</a>
          </li>
        </ul>
        <div class="flex space-x-4 mt-4">
          <a
            href="https://www.facebook.com/photo/?fbid=503963188396238&set=a.418832050242686"
            class="text-white hover:text-orange-500"
            target="_blank"><i class="fab fa-facebook fa-lg"></i></a>
          <a
            href="https://www.instagram.com/kcnitofficial?igsh=MWJxOWl2ZGR2N2VvOA=="
            class="text-white hover:text-orange-500"
            target="_blank"><i class="fab fa-instagram fa-lg"></i></a>
          <a
            href="https://x.com/kcnit"
            class="text-white hover:text-orange-500"
            target="_blank"><i class="fab fa-twitter fa-lg"></i></a>
          <a
            href="https://www.linkedin.com/company/kcnitbanda/"
            class="text-white hover:text-orange-500"
            target="_blank"><i class="fab fa-linkedin fa-lg"></i></a>
          <a
            href="https://www.youtube.com/@kcnitstudio8826"
            class="text-white hover:text-orange-500"
            target="_blank"><i class="fab fa-youtube fa-xl"></i></a>
        </div>
      </div>

      <!-- Column 2: Useful Links -->
      <div>
        <h4 class="text-orange-400 font-semibold mb-2">Useful Links</h4>
        <ul class="space-y-1">
          <li><a href="#" class="hover:text-orange-500">Events</a></li>
          <li><a href="#" class="hover:text-orange-500">Press Release</a></li>
          <li><a href="#" class="hover:text-orange-500">Videos</a></li>
        </ul>
      </div>

      <!-- Column 3: Help & Support -->
      <div>
        <h4 class="text-orange-400 font-semibold mb-2">Help & Support</h4>
        <ul class="space-y-1">
          <li>
            <a href="#" class="hover:text-orange-500">Right to Information</a>
          </li>
          <li><a href="#" class="hover:text-orange-500">Disclaimer</a></li>
          <li><a href="#" class="hover:text-orange-500">FAQ</a></li>
        </ul>
      </div>

      <!-- Column 4: Contact Us -->
      <div>
        <h4 class="text-orange-400 font-semibold mb-2">CONTACT US</h4>

        <p>
          Please contact us for any query on the following Details-<br />
          Contact No. :<br />
          (05192)227584, 225375, 225311.<br />
          Fax :( 05192)22537.<br />
          Email:kcnit2002@rediffmail.com Website:<a
            href="http://www.kcnit.ac.in/">www.kcnit.ac.in</a>
        </p>
      </div>
    </div>

    <div class="text-center text-orange-500 text-sm mt-6 pb-6">
      © 2024 - Ministry of Electronics & IT, Government of India. All rights
      reserved.<br />
      The information provided on this website is sourced from publicly
      available domains.
      <span class="text-orange-500 mt-0 block">Design by the <u>RUS</u></span>
    </div>
  </footer>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
  <script src="gsap.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/studio-freight/lenis@0.2.28/bundled/lenis.js"></script>
  <script src="scrolling.js"></script>
  <script src="script.js"></script>
</body>

</html>