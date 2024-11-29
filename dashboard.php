<?php
session_start();
include('./connection.php');
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
    <div class="container mx-auto max-w-6xl mt-40">
        <!-- Profile Section -->
        <div class="relative bg-gray-200 shadow-2xl rounded-2xl p-8 md:flex md:space-x-6 items-center transform hover:scale-105 transition-transform duration-300 hover:shadow-orange-500">
            <!-- Background Accent -->
            <div class="absolute top-0 right-0 h-full w-1/2 rounded-2xl opacity-50"></div>
            
            <!-- Profile Image -->
            <div class="relative z-10 w-36 h-36 rounded-full overflow-hidden shadow-xl border-4 border-white hover:border-orange-500 hover:shadow-orange-500">
                <img src="https://via.placeholder.com/150" alt="Profile Image" class="object-cover w-full h-full">
            </div>

            <!-- Profile Information -->
            <div class="relative z-10 mt-6 md:mt-0 bg-o">
                <h1 class="text-4xl font-extrabold text-gray-800">John Doe</h1>
                <p class="text-lg text-black-500">Full Stack Developer | E-Club Member | Sophomore</p>
                <p class="mt-2 text-black-600">B.Tech in Computer Science, XYZ University</p>
                <p class="mt-2 italic text-black-700">"Exploring the frontiers of AI and open-source projects."</p>

                <!-- Social Media Links -->
                <div class="flex space-x-4 mt-4">
                    <a href="#" class="text-blue-500 hover:text-blue-700">
                        <svg class="w-7 h-7" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 2.163c-5.488 0-9.837 4.348-9.837 9.837 0 5.488 4.348 9.837 9.837 9.837 5.488 0 9.837-4.348 9.837-9.837C21.837 6.511 17.488 2.163 12 2.163zm-.48 14.449H9.387v-5.596h2.133v5.596zm-1.066-6.369h-.021c-.774 0-1.27-.553-1.27-1.254 0-.716.518-1.254 1.316-1.254.798 0 1.271.538 1.271 1.254 0 .707-.482 1.254-1.296 1.254zm6.711 6.369h-2.133v-2.8c0-.67-.024-1.527-.931-1.527-.932 0-1.074.727-1.074 1.479v2.849h-2.133v-5.596h2.048v.788h.03c.284-.541.977-1.105 2.011-1.105 2.135 0 2.529 1.425 2.529 3.271v4.642z"/></svg>
                    </a>
                    <a href="#" class="text-gray-900 hover:text-black">
                        <svg class="w-7 h-7" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 0C5.37 0 0 5.37 0 12c0 5.337 3.438 9.828 8.205 11.408.6.113.82-.263.82-.582 0-.29-.01-1.056-.016-2.073-3.338.725-4.043-1.568-4.043-1.568-.546-1.39-1.333-1.76-1.333-1.76-1.09-.744.082-.729.082-.729 1.204.085 1.837 1.236 1.837 1.236 1.072 1.835 2.809 1.305 3.495.998.11-.776.42-1.305.76-1.605-2.664-.303-5.466-1.332-5.466-5.93 0-1.31.467-2.38 1.235-3.22-.124-.303-.536-1.52.117-3.168 0 0 1.008-.323 3.3 1.23A11.453 11.453 0 0 1 12 6.803a11.448 11.448 0 0 1 3.005.404c2.29-1.553 3.297-1.23 3.297-1.23.653 1.648.242 2.865.118 3.168.77.84 1.233 1.91 1.233 3.22 0 4.609-2.806 5.625-5.476 5.921.432.372.816 1.102.816 2.222 0 1.605-.014 2.897-.014 3.293 0 .322.216.701.824.581C20.564 21.828 24 17.337 24 12 24 5.37 18.63 0 12 0z"/></svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- Projects Section -->
        <div class="mt-12">
            <h3 class="text-3xl font-bold text-white mb-6">Projects</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 ">
                <!-- Project 1 -->
                <div class="bg-gray-300 shadow-xl rounded-lg overflow-hidden transform hover:scale-105 transition-transform duration-300 hover:shadow-orange-300">
                    <img src="https://via.placeholder.com/400" alt="Project 1" class="object-cover w-full h-48">
                    <div class="p-6">
                        <h4 class="text-lg font-semibold text-gray-800">Project Title 1</h4>
                        <p class="text-gray-600">Brief description of the project. Innovative project tackling real-world problems using AI.</p>
                    </div>
                </div>

                <!-- Project 2 -->
                <div class="bg-gray-300 shadow-xl rounded-lg overflow-hidden transform hover:scale-105 transition-transform duration-300 hover:shadow-orange-300">
                    <img src="https://via.placeholder.com/400" alt="Project 2" class="object-cover w-full h-48">
                    <div class="p-6">
                        <h4 class="text-lg font-semibold text-gray-800">Project Title 2</h4>
                        <p class="text-gray-600">A web-based app developed using React, simplifying project collaboration for teams.</p>
                    </div>
                </div>

                <!-- Project 3 -->
                <div class="bg-gray-300 shadow-xl rounded-lg overflow-hidden transform hover:scale-105 transition-transform duration-300 hover:shadow-orange-300">
                    <img src="https://via.placeholder.com/400" alt="Project 3" class="object-cover w-full h-48">
                    <div class="p-6">
                        <h4 class="text-lg font-semibold text-gray-800">Project Title 3</h4>
                        <p class="text-gray-600">IoT-based system for smart home automation, providing remote control over devices.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-gray-800 text-gray-300 p-6 mt-12 pb-40">
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