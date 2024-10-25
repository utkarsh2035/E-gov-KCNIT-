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
  <link rel="stylesheet" href="login.css">
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

  <!-- team-box -->

  <div class="bg-orange-200 py-8" id="gallery">
    <div class="container mx-auto">
      <div class="text-center mb-8">
        <h2 class="text-5xl font-bold mt-20 text-orange-700 font-italic">Gallery</h2>
      </div>
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

        <!-- Gallery Item 1 -->
        <div class="gallery-grid">
          <a href="g1.jpg" class="block border-4 border-orange-100 hover:border-orange-300 rounded-lg">
            <figure class="relative overflow-hidden  border-4 border-orange-100 hover:border-orange-300 rounded-lg">
              <img class="w-full h-auto transition-transform duration-300 ease-in-out transform hover:scale-105" src="./assets/g1.jpg" alt="">
              <figcaption class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 text-white text-center opacity-0 transition-opacity duration-300 ease-in-out hover:opacity-100">
                <p class="text-sm"><b>MR. PUSHPENDRA NIRANJAN<br />AT E-GOV CEREMONY</b><br />Mr. Pushpendra Niranjan receiving the award on behalf of the entire e-gov team.</p>
              </figcaption>
            </figure>
          </a>
        </div>

        <!-- Gallery Item 2 -->
        <div class="gallery-grid">
          <a href="g2.jpg" class="block border-4 border-orange-100 hover:border-orange-300 rounded-lg">
            <figure class="relative overflow-hidden  border-4 border-orange-100 hover:border-orange-300 rounded-lg">
              <img class="w-full h-auto transition-transform duration-300 ease-in-out transform hover:scale-105" src="./assets/g2.jpg" alt="">
              <figcaption class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 text-white text-center opacity-0 transition-opacity duration-300 ease-in-out hover:opacity-100">
                <p class="text-sm"><b>K.C.N.I.T ADDED AS AN E-GOV CAMPUS</b><br />Mr. Shyamji Nigam with the respected members of the e-gov cell and our college book.</p>
              </figcaption>
            </figure>
          </a>
        </div>

        <!-- Gallery Item 3 -->
        <div class="gallery-grid">
          <a href="g3.jpg" class="block border-4 border-orange-100 hover:border-orange-300 rounded-lg">
            <figure class="relative overflow-hidden  border-4 border-orange-100 hover:border-orange-300 rounded-lg">
              <img class="w-full h-auto transition-transform duration-300 ease-in-out transform hover:scale-105" src="./assets/g3.jpg" alt="">
              <figcaption class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 text-white text-center opacity-0 transition-opacity duration-300 ease-in-out hover:opacity-100">
                <p class="text-sm"><b>MR. SHYAMJI NIGAM WITH COLLEGE PROSPECTUS</b><br />Mr. Shyamji Nigam representing Bundelkhand's No.1 engineering college in the e-gov ceremony.</p>
              </figcaption>
            </figure>
          </a>
        </div>

        <!-- Gallery Item 4 -->
        <div class="gallery-grid">
          <a href="g4.jpg" class="block border-4 border-orange-100 hover:border-orange-300 rounded-lg">
            <figure class="relative overflow-hidden  border-4 border-orange-100 hover:border-orange-300 rounded-lg">
              <img class="w-full h-auto transition-transform duration-300 ease-in-out transform hover:scale-105" src="./assets/g4.jpg" alt="">
              <figcaption class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 text-white text-center opacity-0 transition-opacity duration-300 ease-in-out hover:opacity-100">
                <p class="text-sm"><b>MR. SHYAMJI NIGAM WITH MS. LISA GRANDE</b><br />KCNIT was announced as an E-Gov Campus by Ms. Lisa Grande at Constitution Club of India.</p>
              </figcaption>
            </figure>
          </a>
        </div>

        <!-- Gallery Item 5 -->
        <div class="gallery-grid">
          <a href="g5.jpg" class="block border-4 border-orange-100 hover:border-orange-300 rounded-lg">
            <figure class="relative overflow-hidden  border-4 border-orange-100 hover:border-orange-300 rounded-lg">
              <img class="w-full h-auto transition-transform duration-300 ease-in-out transform hover:scale-105" src="./assets/g5.jpg" alt="">
              <figcaption class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 text-white text-center opacity-0 transition-opacity duration-300 ease-in-out hover:opacity-100">
                <p class="text-sm"><b>MR. SHYAMJI NIGAM AT THE INAUGURATION OF KAJLI MELA</b><br />Head of the e-gov KCNIT campus, Mr. Shyamji Nigam, attended with the e-gov cell and students.</p>
              </figcaption>
            </figure>
          </a>
        </div>

        <!-- Gallery Item 6 -->
        <div class="gallery-grid">
          <a href="g6.jpg" class="block border-4 border-orange-100 hover:border-orange-300 rounded-lg">
            <figure class="relative overflow-hidden  border-4 border-orange-100 hover:border-orange-300 rounded-lg">
              <img class="w-full h-auto transition-transform duration-300 ease-in-out transform hover:scale-105 border-50 border-white hover:border-orange-300" src="./assets/g6.jpg" alt="">
              <figcaption class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 text-white text-center opacity-0 transition-opacity duration-300 ease-in-out hover:opacity-100">
                <p class="text-sm"><b>E-GOV TEAM WITH S.P AND C.O CITY BANDA</b><br />E-gov team with the S.P Mr. Piyush Srivastava and C.O. Mr. Vinod Singh at the inauguration.</p>
              </figcaption>
            </figure>
          </a>
        </div>

        <div class="gallery-grid">
          <a href="g7.jpg" class="block border-4 border-orange-100 hover:border-orange-300 rounded-lg">
            <figure class="relative overflow-hidden  border-4 border-orange-100 hover:border-orange-300 rounded-lg">
              <img class="w-full h-auto transition-transform duration-300 ease-in-out transform hover:scale-105 border-50 border-white hover:border-orange-300" src="./assets/g7.jpg" alt="">
              <figcaption class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 text-white text-center opacity-0 transition-opacity duration-300 ease-in-out hover:opacity-100">
                <p class="text-sm"><b>NETWORKING & WEB DISIGNING</b><br />E-GOV Members and Intellectual members attend this workshop in KCNIT.</p>
              </figcaption>
            </figure>
          </a>
        </div>


        <div class="gallery-grid">
          <a href="g8.jpg" class="block border-4 border-orange-100 hover:border-orange-300 rounded-lg">
            <figure class="relative overflow-hidden  border-4 border-orange-100 hover:border-orange-300 rounded-lg">
              <img class="w-full h-auto transition-transform duration-300 ease-in-out transform hover:scale-105 border-50 border-white hover:border-orange-300" src="./assets/g8.jpg" alt="">
              <figcaption class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 text-white text-center opacity-0 transition-opacity duration-300 ease-in-out hover:opacity-100">
                <p class="text-sm"><b>MR. ABHISHEK TIWARI AT KCNIT CAMPUS</b><br />Mr. ABhishek Tiwari give the information about networking and webdesigning.</p>
              </figcaption>
            </figure>
          </a>
        </div>



        <div class="gallery-grid">
          <a href="g9.jpg" class="block border-4 border-orange-100 hover:border-orange-300 rounded-lg">
            <figure class="relative overflow-hidden  border-4 border-orange-100 hover:border-orange-300 rounded-lg">
              <img class="w-full h-auto transition-transform duration-300 ease-in-out transform hover:scale-105 border-50 border-white hover:border-orange-300" src="./assets/g9.jpg" alt="">
              <figcaption class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 text-white text-center opacity-0 transition-opacity duration-300 ease-in-out hover:opacity-100">
                <p class="text-sm"><b>News of</b><br />KCNIT</p>
              </figcaption>
            </figure>
          </a>
        </div>


        <div class="gallery-grid">
          <a href="g10.jpg" class="block border-4 border-orange-100 hover:border-orange-300 rounded-lg">
            <figure class="relative overflow-hidden  border-4 border-orange-100 hover:border-orange-300 rounded-lg">
              <img class="w-full h-auto transition-transform duration-300 ease-in-out transform hover:scale-105 border-50 border-white hover:border-orange-300" src="./assets/g10.jpg" alt="">
              <figcaption class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 text-white text-center opacity-0 transition-opacity duration-300 ease-in-out hover:opacity-100">
                <p class="text-sm"><b>BUNDELKHAND TOURISM SITE WAS</b><br />To visit the Bundelkhand Tourism site click on this link....Bundelkhand Tourism</p>
              </figcaption>
            </figure>
          </a>
        </div>


        <div class="gallery-grid">
          <a href="g11.jpg" class="block border-4 border-orange-100 hover:border-orange-300 rounded-lg">
            <figure class="relative overflow-hidden  border-4 border-orange-100 hover:border-orange-300 rounded-lg">
              <img class="w-full h-auto transition-transform duration-300 ease-in-out transform hover:scale-105 border-50 border-white hover:border-orange-300" src="./assets/g11.jpg" alt="">
              <figcaption class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 text-white text-center opacity-0 transition-opacity duration-300 ease-in-out hover:opacity-100">
                <p class="text-sm"><b>BANDA TRAFFIC POLICE SITE</b><br />To visit the Banda traffic Police site click on this link....Banda Traffic Police.</p>
              </figcaption>
            </figure>
          </a>
        </div>


        <div class="gallery-grid">
          <a href="g12.jpg" class="block border-4 border-orange-100 hover:border-orange-300 rounded-lg">
            <figure class="relative overflow-hidden  border-4 border-orange-100 hover:border-orange-300 rounded-lg">
              <img class="w-full h-auto transition-transform duration-300 ease-in-out transform hover:scale-105 border-50 border-white hover:border-orange-300" src="./assets/g12.jpg" alt="">
              <figcaption class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 text-white text-center opacity-0 transition-opacity duration-300 ease-in-out hover:opacity-100">
                <p class="text-sm"><b>E-GOV K.C.N.I.T CAMPUS DESIGNED <br />THE KAJLI MELA SITE.</b><br />Designed on August 2013.To visit the kajali mela site click on this link....Kajli Mela</p>
              </figcaption>
            </figure>
          </a>
        </div>




        <!-- Add other gallery items similarly -->

        <div class="clearfix"></div>
      </div>
    </div>
  </div>

  <footer class="bg-gray-800 text-gray-300 p-6 mt-2 pb-18">
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

    <div class="text-center text-orange-500 text-sm mt-6">
      © 2024 - Ministry of Electronics & IT, Government of India. All rights reserved.<br>
      The information provided on this website is sourced from publicly available domains.
      <span class="text-orange-500 mt-0 block">Design by the <u>RUS</u></span>
    </div>
  </footer>



  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
  <script src="gsap.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/studio-freight/lenis@0.2.28/bundled/lenis.js"></script>
  <script src="scrolling.js"></script>
  <script src="script.js"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>

</html>