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

    <div class="min-h-screen bg-gradient-to-br from-orange-400 to-gray-100 flex items-center justify-center">
        <div class="w-full max-w-md">
            <?php
            include 'connection.php';
            $user = 0;
            $success = 0;
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                $course = $_POST['course'];
                $branch = $_POST['branch'];
                $linkedln = $_POST['linkedln'];
                $github = $_POST['github'];
                $userImage = $_FILES['userImage'];

                $sql = "SELECT * FROM `userregistration` WHERE email = '$email' OR password = '$password' OR linkedln = '$linkedln' OR github = '$github'";

                $result = mysqli_query($con, $sql);
                if ($result) {
                    $num = mysqli_num_rows(($result));
                    if ($num > 0) {
                        $user = 1;
                    } else {
                        $sql = "insert into `userregistration`(name, email, password, course, branch, linkedln, github, userImage) values('$name', '$email', '$password', '$course', '$branch', '$linkedln', '$github', '$userImage')";
                        $result = mysqli_query($con, $sql);
                        if ($result) {
                            $success = 1;
                        }
                    }
                }
            }
            ?>

            <h2 class="text-gray-400 text-3xl mb-6 font-bold text-center mt-28">Sign Up</h2>
            <?php
            if ($user) {
                echo '<div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-600 dark:bg-gray-900 dark:text-red-400" role="alert">
                    <span class="font-medium">Oops!</span> You should check in some of those fields below.
                    </div>';
            }
            if ($success) {
                echo '<div class="p-4 mb-4 mt- 28 text-sm text-green-800 rounded-lg bg-green-600 dark:bg-gray-900 dark:text-green-400" role="alert">
                <span class="font-medium">Congratulations!</span> You have successfully registered for E-Gov club. You can contact to Mr. Abhishek Tiwari to join the club.
                </div>';
            }

            ?>
            <form action="register.php" method="post" class="bg-white shadow-lg rounded px-10 pt-8 pb-8 mb-4 transform transition-transform duration-300 hover:-translate-y-2 hover:shadow-2xl hover:shadow-orange-700" enctype="multipart/form-data">
                <div class="relative mb-6">
                    <input
                        class="peer shadow appearance-none border border-orange-400 bg-white rounded w-full py-4 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="name" type="text" placeholder=" " name="name" required/>
                    <label
                        class="absolute text-orange-600 duration-300 transform -translate-y-1/2 scale-75 top-1 z-10 origin-[0] left-3 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-1/2 peer-focus:scale-75 peer-focus:-translate-y-2">
                        Name
                    </label>
                </div>
                <div class="relative mb-6">
                    <input
                        class="peer shadow appearance-none border border-orange-400 bg-white rounded w-full py-4 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="email" type="email" placeholder=" " name="email" required/>
                    <label
                        class="absolute text-orange-600 duration-300 transform -translate-y-1/2 scale-75 top-1 z-10 origin-[0] left-3 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-1/2 peer-focus:scale-75 peer-focus:-translate-y-2">
                        Email
                    </label>
                </div>
                <div class="relative mb-6">
                    <input
                        class="peer shadow appearance-none border border-orange-400 bg-white rounded w-full py-4 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="password" type="password" placeholder=" " name="password" required/>
                    <label
                        class="absolute text-orange-600 duration-300 transform -translate-y-1/2 scale-75 top-1 z-10 origin-[0] left-3 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-1/2 peer-focus:scale-75 peer-focus:-translate-y-2">
                        Password
                    </label>
                </div>
                <div class="relative mb-6">
                    <input
                        class="peer shadow appearance-none border border-orange-400 bg-white rounded w-full py-4 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="email" type="text" placeholder=" " name="course" required/>
                    <label
                        class="absolute text-orange-600 duration-300 transform -translate-y-1/2 scale-75 top-1 z-10 origin-[0] left-3 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-1/2 peer-focus:scale-75 peer-focus:-translate-y-2">
                        Course
                    </label>
                </div>
                <div class="relative mb-6">
                    <input
                        class="peer shadow appearance-none border border-orange-400 bg-white rounded w-full py-4 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="email" type="text" placeholder=" " name="branch" required/>
                    <label
                        class="absolute text-orange-600 duration-300 transform -translate-y-1/2 scale-75 top-1 z-10 origin-[0] left-3 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-1/2 peer-focus:scale-75 peer-focus:-translate-y-2">
                        Branch
                    </label>
                </div>
                <div class="relative mb-6">
                    <input
                        class="peer shadow appearance-none border border-orange-400 bg-white rounded w-full py-4 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="email" type="text" placeholder=" " name="linkedln" required/>
                    <label
                        class="absolute text-orange-600 duration-300 transform -translate-y-1/2 scale-75 top-1 z-10 origin-[0] left-3 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-1/2 peer-focus:scale-75 peer-focus:-translate-y-2">
                        Linkedin URL
                    </label>
                </div>
                <div class="relative mb-6">
                    <input
                        class="peer shadow appearance-none border border-orange-400 bg-white rounded w-full py-4 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="email" type="text" placeholder=" " name="github" required/>
                    <label
                        class="absolute text-orange-600 duration-300 transform -translate-y-1/2 scale-75 top-1 z-10 origin-[0] left-3 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-1/2 peer-focus:scale-75 peer-focus:-translate-y-2">
                        Github URL
                    </label>
                </div>
                <div class="relative mb-6">
                    <input
                        class="peer shadow appearance-none border border-orange-400 bg-white rounded w-full py-4 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="userImage" type="file" name="userImage"
                        accept=".jpg, .jpeg, .png" required />
                    <label
                        class="absolute text-orange-600 duration-300 transform -translate-y-1/2 scale-75 top-1 z-10 origin-[0] left-3 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-1/2 peer-focus:scale-75 peer-focus:-translate-y-2">
                        Upload Your Image
                    </label>
                </div>                
                <div class="flex items-center justify-between mb-6">
                    <button class="bg-orange-500 hover:bg-orange-600 text-white font-bold py-3 px-4 w-full rounded focus:outline-none focus:shadow-outline" type="submit">
                        Sign Up
                    </button>
                </div>
                <div class="text-center text-gray-700 text-sm">
                    Have an account? <a href="./login.php" class="text-orange-600 hover:underline">Sign in now</a>
                </div>
            </form>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="gsap.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/studio-freight/lenis@0.2.28/bundled/lenis.js"></script>
    <script src="scrolling.js"></script>
    <script src="script.js"></script>
    </div>
</body>

</html>