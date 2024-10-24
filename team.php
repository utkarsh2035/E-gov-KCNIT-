<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stylish Footer</title>
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


    <div class="bg-orange-100 mt-20">
        <div class="container mx-auto py-10">
            <!-- Faculty Section -->
            <div class="text-center mb-10">
                <h2 class="text-3xl font-bold mb-6 text-orange-600">Faculty</h2>
                <div class="flex justify-center">
                    <div class="w-48">
                        <img src="faculty.jpg" alt="Faculty Image" class="rounded-lg shadow-lg mb-4">
                        <p class="font-medium text-lg">Dr. Faculty Name</p>
                    </div>
                    <div class="w-48">
                        <img src="faculty.jpg" alt="Faculty Image" class="rounded-lg shadow-lg mb-4">
                        <p class="font-medium text-lg">Mr. Vivek Tripathi</p>
                    </div>
                </div>
            </div>

            <!-- Web Design Team Section -->
            <div class="text-center mb-10">
                <h2 class="text-3xl font-bold mb-6 text-orange-600">Web Design Team</h2>
                <div class="flex flex-wrap justify-center gap-6">
                    <div class="w-48 mx-auto">
                        <img src="./assets/rehan.jpg" alt="Designer 1" class="rounded-lg shadow-lg mb-4 hover:scale-105 transition duration-300 hover:shadow-2xl shadow-xl hover:shadow-orange-600">
                        <p class="font-medium text-lg"><b><i>Rehan Ali</i></b><br>(Full-stack Web dev.)</p>
                    </div>
                    <div class="w-48 mx-auto">
                        <img src="./assets/utkarsh.jpg" alt="Designer 2" class="rounded-lg shadow-lg mb-4 hover:scale-105 transition duration-300 hover:shadow-2xl shadow-xl hover:shadow-orange-600">
                        <p class="font-medium text-lg"><b><i>Utkarsh Rawat</i></b><br>(Full-stack Web dev.)</p>
                    </div>
                    <div class="w-48 mx-auto">
                        <img src="./assets/sudeep.jpg" alt="Designer 2" class="rounded-lg shadow-lg mb-4 hover:scale-105 transition duration-300 hover:shadow-2xl shadow-xl hover:shadow-orange-600">
                        <p class="font-medium text-lg"><b><i>Sudeep Kumar</i></b><br>(Full-stack Web dev.)</p>
                    </div>
                </div>
            </div>

            <!-- Head and Co-Head Section -->
            <div class="text-center mb-10">
                <h2 class="text-3xl font-bold mb-6 text-orange-600">Head and Co-Head</h2>
                <div class="flex flex-wrap justify-center space-x-8">
                    <div class="w-48">
                        <img src="./assets/utkarsh.jpg" alt="Head" class="rounded-lg shadow-lg mb-4">
                        <p class="font-medium text-lg"><b><i>Utkarsh Rawat</i></b></p>
                    </div>
                    <div class="w-48">
                        <img src="./assets/shankar.jpg" alt="Co-Head" class="rounded-lg shadow-lg mb-4">
                        <p class="font-medium text-lg"><b><i>Shankar Dayal Shukla</i></b></p>
                    </div>
                </div>
            </div>

            <!-- Volunteers Section -->
            <div class="text-center mb-10">
                <h2 class="text-3xl font-bold mb-6 text-orange-600">Volunteers</h2>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                    <div class="w-48 mx-auto">
                        <img src="./assets/rehan.jpg" alt="Volunteer 1" class="rounded-lg shadow-lg mb-4">
                        <p class="font-medium text-lg"><b><i>Rehan Ali</i></b></p>
                    </div>
                    <div class="w-48 mx-auto">
                        <img src="./assets/sudeep.jpg" alt="Volunteer 2" class="rounded-lg shadow-lg mb-4">
                        <p class="font-medium text-lg"><b><i>Sudeep Kumar</i></b></p>
                    </div>
                    <div class="w-48 mx-auto">
                        <img src="volunteer3.jpg" alt="Volunteer 3" class="rounded-lg shadow-lg mb-4">
                        <p class="font-medium text-lg"><b><i>Sukarn Maurya</i></b></p>
                    </div>
                    <div class="w-48 mx-auto">
                        <img src="volunteer4.jpg" alt="Volunteer 4" class="rounded-lg shadow-lg mb-4">
                        <p class="font-medium text-lg"><b><i>Omisha</i></b></p>
                    </div>
                </div>
            </div>

        </div>
    </div>

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

        <div class="text-center text-orange-500 text-sm mt-6 pb-20">
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
    </div>
</body>

</html>