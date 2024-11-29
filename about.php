<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>E-Gov | KCNIT</title>
  <link rel="shortcut icon" href="./assets/favicon.ico" type="image/x-icon">
  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="login.css">
  <!-- Font Awesome CDN for icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js'></script>
  <link href='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.css' rel='stylesheet'>
  <style>
    /* Add perspective and improve the smoothness */
    .hover-tilt {
      transition: transform 0.3s ease;
      perspective: 1200px;
      /* Enhanced depth */
    }

    /* Smooth transition for image and slight scaling */
    .tilt-image {
      transition: transform 0.3s ease, scale 0.3s ease;
      transform-style: preserve-3d;
    }

    /* On hover, add slight scaling effect */
    .hover-tilt:hover .tilt-image {
      transform: scale(1.05);
      /* Slight zoom */
    }
  </style>
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

  <!-- Ensure the DOM is fully loaded before the script runs -->
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const menuButton = document.getElementById('menuButton');
      const mobileMenu = document.getElementById('mobileMenu');

      menuButton.addEventListener('click', function() {
        mobileMenu.classList.toggle('hidden');
      });
    });
  </script>


  <section class="relative w-full h-72 md:h-96 mt-11">
    <img src="./assets/graduation.jpg" alt="Top Image" class="object-cover w-full h-full">
    <div class="absolute inset-0 bg-orange-500 opacity-30"></div>
    <div class="absolute inset-0 flex items-center justify-center bg-">
      <h1 class="text-white md:text-3xl font-bold text-center px-4">
        "MAKE YOUR WORK YOUR HOBBY. <br>DON'T LET IDLE TIMEPASSERS COME BETWEEN YOU AND YOUR WORK "
      </h1>
    </div>
  </section>

  <!-- Main Content -->
  <section class="py-12 md:py-16">
    <h2 class="text-2xl md:text-5xl font-bold mb-6 text-center text-orange-500">ABOUT US</h2><br>
    <div class="container mx-auto flex flex-col md:flex-row items-start px-4">
      <!-- Left Image (PNG with Orange Shadow and Improved Hover Tilt Effect) -->
      <div class="md:w-1/3 w-full mb-8 md:mb-0 relative hover-tilt" id="imageContainer">
        <img src=".\assets\E-gov_logo_bg_remove.png" alt="About Image" class="w-full h-auto relative z-10 tilt-image" id="tiltImage">
        <!-- Orange shadow below the PNG -->
        <div class="absolute inset-0 w-full h-full z-0 -bottom-4 -right-4 bg-orange-300 opacity-20 rounded-lg filter blur-md"></div>
      </div>
      <!-- Right Paragraph -->
      <div class="md:w-2/3 w-full md:pl-12">
        <p class="text-base md:text-lg leading-relaxed mb-4">
          On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue their duty through weakness To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it?
        </p>
        <br>
        <p class="text-base md:text-lg leading-relaxed">
          But who has any right to find fault with a man who chooses to enjoy a pleasure At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias.
        </p>
      </div>
    </div>
  </section>

  <section class="bg-orange-100 py-8 md:py-12">
    <div class="container mx-auto px-4">
      <h2 class="text-2xl md:text-3xl font-bold mb-6 text-center text-orange-500">Society of promotion of e-governance is a registered society under the Society Act 1880.</h2>
      <h3 class="text-2xl"> The society has been incorporated for the attainment of main objects, which inter - alias are:-</h3><br>
      <ul class="list-disc list-inside space-y-2 md:space-y-3 text-base md:text-lg">
        <li>To promote the use of information and communication technologies as a tool for providing good & transparent governance with a view to facilitate efficient, transparent growth and development in economy with the endeavour to make it available to every citizen of the country.</li>
        <li>To strive itself to a position as an organization committed to promote e- governance by combining the best that the specialized institutions in the country have to offer, into a holistic program.</li>
        <li> To assist transition to electronic government (e-government) up to electronic democracy (e-democracy).</li>
        <li>To promote good/transparent practice, enhance sharing of learning experiences, dissemination of information and management of knowledge in electronic government (e -Government) and electronic democracy (e-Democracy) amongst various human and institutional & networks and communities of interest in the Asia Pacific Region and beyond.</li>
        <li> To conduct research and development activities for developing electronic methods to upgrade/ reinvent traditional notions of government, government transactions and democracy.</li>
      </ul>
    </div>
  </section>


  <!-- Footer -->
  <footer class="bg-gray-800 text-gray-300 p-6">
    <div class="container mx-auto grid grid-cols-1 md:grid-cols-4 gap-4">
      <!-- Column 1: Digital India -->
      <div>
        <h4 class="text-orange-400 font-semibold mb-2">Digital India</h4>
        <ul class="space-y-1">
          <li><a href="#" class="hover:text-orange-500">About Us</a></li>
          <li><a href="#" class="hover:text-orange-500">Initiatives</a></li>
          <li><a href="#" class="hover:text-orange-500">Privacy Policy</a></li>
        </ul>
        <div class="flex space-x-4 mt-4">
          <a href="https://www.facebook.com/photo/?fbid=503963188396238&set=a.418832050242686" class="text-white hover:text-orange-500" target="_blank"><i class="fab fa-facebook fa-lg"></i></a>
          <a href="https://www.instagram.com/kcnitofficial?igsh=MWJxOWl2ZGR2N2VvOA==" class="text-white hover:text-orange-500" target="_blank"><i class="fab fa-instagram fa-lg"></i></a>
          <a href="https://x.com/kcnit" class="text-white hover:text-orange-500" target="_blank"><i class="fab fa-twitter fa-lg"></i></a>
          <a href="https://www.linkedin.com/company/kcnitbanda/" class="text-white hover:text-orange-500" target="_blank"><i class="fab fa-linkedin fa-lg"></i></a>
          <a href="https://www.youtube.com/@kcnitstudio8826" class="text-white hover:text-orange-500" target="_blank"><i class="fab fa-youtube fa-xl"></i></a>
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
          <li><a href="#" class="hover:text-orange-500">Right to Information</a></li>
          <li><a href="#" class="hover:text-orange-500">Disclaimer</a></li>
          <li><a href="#" class="hover:text-orange-500">FAQ</a></li>
        </ul>
      </div>

      <!-- Column 4: Contact Us -->
      <div>
        <h4 class="text-orange-400 font-semibold mb-2">
          CONTACT US</h4>

        <p>Please contact us for any query on the following Details-<br>
          Contact No. :<br>
          (05192)227584, 225375, 225311.<br>
          Fax :( 05192)22537.<br>
          Email:kcnit2002@rediffmail.com
          Website:<a href="http://www.kcnit.ac.in/">www.kcnit.ac.in</a></p>
      </div>
    </div>

    <div class="text-center text-orange-500 text-sm mt-6 pb-14">
      © 2024 - Ministry of Electronics & IT, Government of India. All rights reserved.<br>
      The information provided on this website is sourced from publicly available domains.
      <span class="text-orange-500 mt-0 block">Design by the <u>RUS</u></span>
    </div>
  </footer>
  <!-- GSAP CDN -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
  <script src="gsap.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/studio-freight/lenis@0.2.28/bundled/lenis.js"></script>
  <script src="scrolling.js"></script>
  <script src="script.js"></script>

  <script>
    const imageContainer = document.getElementById('imageContainer');
    const tiltImage = document.getElementById('tiltImage');

    // Add mousemove event to track mouse and tilt the image accordingly
    imageContainer.addEventListener('mousemove', (e) => {
      const {
        width,
        height,
        left,
        top
      } = imageContainer.getBoundingClientRect();
      const x = (e.clientX - left) / width; // Get X position relative to the element
      const y = (e.clientY - top) / height; // Get Y position relative to the element

      // Limit the tilt range to a smaller degree for smoother effect
      const rotateX = (y - 0.5) * 10; // Reduced rotation on X axis for smoother tilt
      const rotateY = (x - 0.5) * -10; // Reduced rotation on Y axis

      tiltImage.style.transform = `rotateX(${rotateX}deg) rotateY(${rotateY}deg) scale(1.05)`; // Added scale on hover
    });

    // Reset image position when the mouse leaves
    imageContainer.addEventListener('mouseleave', () => {
      tiltImage.style.transform = 'rotateX(0) rotateY(0) scale(1)'; // Reset scale and tilt
    });
  </script>
  </div>
</body>

</html>