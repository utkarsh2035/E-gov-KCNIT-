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
        <div class="container mx-auto py-12">
            <!-- Projects Section -->
            <div class="text-center mb-12">
                <h2 class="text-5xl font-bold mb-4 text-orange-700">Our Projects</h2>
                <p class="text-gray-600 text-lg">Check out the amazing work our team has done!</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 ml-8 mr-8">
                <!-- Project 1 -->
                <div class="bg-orange-300 rounded-lg shadow-lg overflow-hidden transform transition hover:scale-105 duration-300">
                    <img src="./assets/p1.jpg" alt="Project 1" class="w-full h-58 object-cover">
                    <div class="p-6">
                        <h3 class="text-2xl font-semibold mb-3">BuzzScope(News Website)</h3>
                        <p class="text-gray-700 mb-4">Get the latest tech news in one place with BuzzScope Tech News! This site curates top stories directly, keeping tech enthusiasts updated without the need to search multiple websites.</p>
                        <a href="https://github.com/utkarsh2035/News-Website.git" class="inline-block bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition">View Project</a>
                    </div>
                </div>

                <!-- Project 2 -->
                <div class="bg-orange-300 rounded-lg shadow-lg overflow-hidden transform transition hover:scale-105 duration-300">
                    <img src="./assets/p2.jpg" alt="Project 2" class="w-full h-58 object-cover">
                    <div class="p-6">
                        <h3 class="text-2xl font-semibold mb-3">Spotify Clone</h3>
                        <p class="text-gray-700 mb-4">Spotify is a digital music service that offers millions of songs and millions of artists.</p>
                        <a href="#" class="inline-block bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition">View Project</a>
                    </div>
                </div>

                <!-- Project 3 -->
                <div class="bg-orange-300 rounded-lg shadow-lg overflow-hidden transform transition hover:scale-105 duration-300">
                    <img src="./assets/p3.jpg" alt="Project 3" class="w-full h-58 object-cover">
                    <div class="p-6">
                        <h3 class="text-2xl font-semibold mb-3">U.P. Tourism Website UI Clone</h3>
                        <p class="text-gray-700 mb-4">This project is a clone of the UP Tourism website built using HTML, CSS, and JavaScript, replicating the design and user experience of the original site. It includes responsive layouts, interactive elements, and a showcase of popular tourist destinations.</p>
                        <a href="#" class="inline-block bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition">View Project</a>
                    </div>
                </div>

                <div class="bg-orange-300 rounded-lg shadow-lg overflow-hidden transform transition hover:scale-105 duration-300">
                    <img src="./assets/p4.jpg" alt="Project 3" class="w-full h-58 object-cover">
                    <div class="p-6">
                        <h3 class="text-2xl font-semibold mb-3">Kajli Mela</h3>
                        <p class="text-gray-700 mb-4">The website is dedicated to showcasing the vibrant celebration of Kajli Mela, a traditional festival observed three days after Raksha Bandhan. It provides a comprehensive look into the historical roots of this festival, which originated in Mahoba, UP.</p>
                        <a href="https://github.com/Rehan0013/Kajli_Mela" class="inline-block bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition">View Project</a>
                    </div>
                </div>

                <div class="bg-orange-300 rounded-lg shadow-lg overflow-hidden transform transition hover:scale-105 duration-300">
                    <img src="./assets/p5.jpg" alt="Project 3" class="w-full h-58 object-cover">
                    <div class="p-6">
                        <h3 class="text-2xl font-semibold mb-3">Youtube UI Clone</h3>
                        <div class="text-gray-700 mb-4">This project is a front-end clone of the popular video-sharing platform, YouTube. It replicates the core features of YouTube's interface, including video browsing, channel listings, and a responsive layout. </div>
                        <a href="https://github.com/utkarsh2035/YouTube-Clone.git" class="inline-block bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition">View Project</a>
                    </div>
                </div>

                <div class="bg-orange-300 rounded-lg shadow-lg overflow-hidden transform transition hover:scale-105 duration-300">
                    <img src="./assets/p6.jpg" alt="Project 3" class="w-full h-58 object-cover">
                    <div class="p-6">
                        <h3 class="text-2xl font-semibold mb-3">Netflix-Clone UI</h3>
                        <p class="text-gray-700 mb-4">This project is a multi-page front-end clone of the popular video-streaming platform, Netflix. It replicates the core features of Netflix’s Home, Login and dashboard interface, including video browsing and a responsive layout.</p>
                        <a href="https://github.com/Rehan0013/Netflix-Clone" class="inline-block bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition">View Project</a>
                    </div>
                </div>

                <!-- More projects can be added similarly -->
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