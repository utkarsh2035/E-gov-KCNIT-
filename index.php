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

  <!-- Video - Box -->
  <!-- Background Video Section -->
  <div class="video-box h-1/2 w-screen">
    <video src="./assets/videoplayback.mp4" autoplay muted loop class="w-full h-full object-cover overflow-hidden"></video>
  </div>

  <div class="bg-orange-100 font-sans leading-normal tracking-normal">
    <!-- Header Section -->
    <header class="bg-orange-600 text-white py-8">
      <div class="container mx-auto px-4">
        <h1 class="text-4xl font-bold text-center">Welcome to the E-Governance Club</h1>
        <p class="text-lg text-center mt-2">Driving Digital Transformation in Governance</p>
      </div>
    </header>

    <!-- Introduction Section -->
    <section class="py-12">
      <div class="container mx-auto px-4">
        <div class="bg-orange-100 rounded-lg shadow-lg p-6 md:p-12">
          <h2 class="text-3xl font-semibold text-center text-orange- mb-6">About the E-Governance Club</h2>
          <p class="text-orange-700 text-lg text-center mb-6">
            The E-Governance Club is a dynamic community of students, professionals, and enthusiasts dedicated to exploring the intersection of technology and governance. Our club focuses on promoting the digital transformation of government services, enhancing transparency, efficiency, and citizen engagement.
          </p>
          <p class="text-gray-700 text-lg text-center mb-6">
            Whether you're passionate about policy-making, digital solutions, or curious about how technology can improve public services, the E-Gov Club is the perfect space to connect, share ideas, and drive meaningful change in the world of e-governance.
          </p>
          <p class="text-gray-700 text-lg text-center">
            Join us in shaping the future of government for the digital age!
          </p>
        </div>
      </div>
    </section>
  </div>
  <div class="bg-orange-600 w-full py-3 flex flex-col md:flex-row justify-between items-center px-6 md:px-12 text-white">
    <!-- Left Icon and Text -->
    <div class="flex items-center space-x-2">
      <span class="text-xl">✨</span>
      <span class="font-semibold text-lg" style="padding-right: 20px;">What's New</span>
    </div>

    <button id="prevBtn" class="bg-white text-orange-600 rounded-full p-0 focus:outline-none">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
      </svg>
    </button>

    <!-- Center Text -->
    <div class="text-center md:flex-grow my-2 md:my-0">
      <span id="newsText" class="text-lg font-medium">India Mobile Congress 2024 - Register Now</span>
    </div>

    <!-- Right Arrows -->
    <div class="flex items-center space-x-4">

      <button id="nextBtn" class="bg-white text-orange-600 rounded-full p-0 focus:outline-none">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
        </svg>
      </button>
    </div>
  </div>
  <!-- News - Box -->
  <div class="bg-gray-50 flex flex-col min-h-3/4">
    <!-- Header -->
    <main class="flex-grow container mx-auto p-6">
      <div class="flex flex-col lg:flex-row justify-between items-start lg:space-x-12">
        <!-- Left side: Latest News Section (Unaffected by API) -->
        <div class="w-full lg:w-1/3 mb-10 lg:mb-0 relative">
          <h1 class="text-5xl font-extrabold mb-4 text-gray-900">Latest News</h1>
          <p class="text-lg text-gray-600 mb-6">Stay up-to-date with the latest insights and updates in the world of technology.</p>
          <a href="https://www.indiatoday.in/" class="inline-block px-6 py-3 bg-gradient-to-r from-orange-500 to-yellow-500 text-white font-semibold rounded-full transition-transform transform hover:scale-110 hover:bg-gradient-to-r hover:from-orange-600 hover:to-yellow-600 shadow-md hover:shadow-lg">View All News</a>

          <!-- Static News Image -->
          <div class="mt-6">
            <img id="news-image" class="news-image w-full rounded-lg shadow-lg shadow-orange-300" src="https://miro.medium.com/v2/resize:fit:554/1*vuJHrhjlkx5H9XxB4zcwtA.jpeg" alt="News Image">
          </div>
        </div>

        <!-- Right side: Technology News Cards (Loaded from API) -->
        <div class="w-full lg:w-2/3 space-y-6">
          <!-- News Card 1 -->
          <div class="bg-white p-6 rounded-lg shadow-lg hover:bg-gray-100 transition-all duration-300 flex items-start space-x-4 transform hover:scale-105 hover:shadow-2xl shadow-xl hover:shadow-orange-300 duration-200 relative news-card" data-image="default-image.jpg">
            <div class="absolute left-0 top-0 h-full w-1 bg-orange-500 rounded-l-lg"></div>
            <div class="text-orange-500 text-xs font-semibold uppercase tracking-wide">Category</div>
            <span class="text-gray-400 text-xs">• Date</span>
            <div class="text-lg font-semibold text-gray-800 flex-grow">News Title</div>
            <a href="#" class="text-orange-500 text-xl transition-transform transform hover:scale-125 hover:rotate-45">↗</a>
          </div>

          <!-- News Card 2 -->
          <div class="bg-white p-6 rounded-lg shadow-lg hover:bg-gray-100 transition-all duration-300 flex items-start space-x-4 transform hover:scale-105 hover:shadow-2xl shadow-xl hover:shadow-orange-300 duration-200 relative news-card" data-image="default-image.jpg">
            <div class="absolute left-0 top-0 h-full w-1 bg-orange-500 rounded-l-lg"></div>
            <div class="text-orange-500 text-xs font-semibold uppercase tracking-wide">Category</div>
            <span class="text-gray-400 text-xs">• Date</span>
            <div class="text-lg font-semibold text-gray-800 flex-grow">News Title</div>
            <a href="#" class="text-orange-500 text-xl transition-transform transform hover:scale-125 hover:rotate-45">↗</a>
          </div>

          <!-- News Card 3 -->
          <div class="bg-white p-6 rounded-lg shadow-lg hover:bg-gray-100 transition-all duration-300 flex items-start space-x-4 transform hover:scale-105 hover:shadow-2xl shadow-xl hover:shadow-orange-300 duration-200 relative news-card" data-image="default-image.jpg">
            <div class="absolute left-0 top-0 h-full w-1 bg-orange-500 rounded-l-lg"></div>
            <div class="text-orange-500 text-xs font-semibold uppercase tracking-wide">Category</div>
            <span class="text-gray-400 text-xs">• Date</span>
            <div class="text-lg font-semibold text-gray-800 flex-grow">News Title</div>
            <a href="#" class="text-orange-500 text-xl transition-transform transform hover:scale-125 hover:rotate-45">↗</a>
          </div>

          <!-- News Card 4 -->
          <div class="bg-white p-6 rounded-lg shadow-lg hover:bg-gray-100 transition-all duration-300 flex items-start space-x-4 transform hover:scale-105 hover:shadow-2xl shadow-xl hover:shadow-orange-300 duration-200 relative news-card" data-image="default-image.jpg">
            <div class="absolute left-0 top-0 h-full w-1 bg-orange-500 rounded-l-lg"></div>
            <div class="text-orange-500 text-xs font-semibold uppercase tracking-wide">Category</div>
            <span class="text-gray-400 text-xs">• Date</span>
            <div class="text-lg font-semibold text-gray-800 flex-grow">News Title</div>
            <a href="#" class="text-orange-500 text-xl transition-transform transform hover:scale-125 hover:rotate-45">↗</a>
          </div>

          <!-- News Card 5 -->
          <div class="bg-white p-6 rounded-lg shadow-lg hover:bg-gray-100 transition-all duration-300 flex items-start space-x-4 transform hover:scale-105 hover:shadow-2xl shadow-xl hover:shadow-orange-300 duration-200 relative news-card" data-image="default-image.jpg">
            <div class="absolute left-0 top-0 h-full w-1 bg-orange-500 rounded-l-lg"></div>
            <div class="text-orange-500 text-xs font-semibold uppercase tracking-wide">Category</div>
            <span class="text-gray-400 text-xs">• Date</span>
            <div class="text-lg font-semibold text-gray-800 flex-grow">News Title</div>
            <a href="#" class="text-orange-500 text-xl transition-transform transform hover:scale-125 hover:rotate-45">↗</a>
          </div>
        </div>
      </div>
    </main>
  </div>

  <!-- Events and calender -->
  <div class="bg-orange-100">
    <img src="https://uptourism.gov.in/images/kumbh-2.png" alt="News Image" class="news-image w-full rounded-lg shadow-lg shadow-orange-300 mt-8">
  </div>
  <div class="bg-orange-100">
    <div class="container mx-auto p-6">
      <h1 class="text-5xl font-bold text-center mb-10 text-orange-600">Event Calendar</h1>

      <!-- Main Calendar and Event List Layout -->
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 h-auto">

        <!-- Event List on the Left -->
        <div class="overflow-hidden relative">
          <h2 class="text-3xl font-semibold mb-6">Upcoming Events</h2>

          <!-- Event Card -->
          <div class="bg-white shadow-lg rounded-lg p-6 mb-6 hover:shadow-2xl transition-shadow duration-300 ease-in-out shadow-orange-300 hover:shadow-orange-500">
            <h3 class="text-xl font-bold mb-2">Event 1: Workshop</h3>
            <p class="text-gray-600 mb-2"><strong>Date:</strong> October 20, 2024</p>
            <p class="text-gray-600 mb-2"><strong>Time:</strong> 10:00 AM - 1:00 PM</p>
            <p class="text-gray-700">Join us for a workshop on e-Government initiatives and digital transformation in public administration.</p>
          </div>

          <!-- Event Card -->
          <div class="bg-white shadow-lg rounded-lg p-6 mb-6 hover:shadow-2xl transition-shadow duration-300 ease-in-out shadow-orange-300 hover:shadow-orange-500">
            <h3 class="text-xl font-bold mb-2">Event 2: Conference</h3>
            <p class="text-gray-600 mb-2"><strong>Date:</strong> October 25, 2024</p>
            <p class="text-gray-600 mb-2"><strong>Time:</strong> 9:00 AM - 5:00 PM</p>
            <p class="text-gray-700">Annual conference on emerging technologies in e-Government and how they are reshaping governance globally.</p>
          </div>

          <!-- Event Card -->
          <div class="bg-white shadow-lg rounded-lg p-6 mb-6 hover:shadow-2xl transition-shadow shadow-orange-300 duration-300 ease-in-out shadow-orange-300 hover:shadow-orange-500">
            <h3 class="text-xl font-bold mb-2">Event 3: Hackathon</h3>
            <p class="text-gray-600 mb-2"><strong>Date:</strong> November 5, 2024</p>
            <p class="text-gray-600 mb-2"><strong>Time:</strong> 8:00 AM - 8:00 PM</p>
            <p class="text-gray-700">Participate in a 12-hour hackathon where teams create innovative solutions for public sector challenges using technology.</p>
          </div>
        </div>

        <!-- Calendar and Facebook Iframe on the Right -->
        <div>

          <h2 class="text-3xl font-semibold mb-6">Calender</h2>

          <div class="bg-orange-100 shadow-lg rounded-lg p-6 h-4/5 overflow-hidden shadow-orange-300 hover:shadow-orange-500">
            <div id="calendar" class="w-full h-96 rounded-lg overflow-hidden shadow"></div>



          </div>
        </div>
      </div>
    </div>
    <div class="max-w-7xl mx-auto py-12 px-6 lg:px-8">
      
      <!-- Heading Section -->
      <div class="text-center">
        <h2 class="text-4xl font-extrabold text-gray-900 mb-4">Skills We Teach</h2>
        <p class="text-lg text-gray-600">Empower yourself with our range of skill-enhancing courses</p>
      </div>
  
      <!-- Skills Section -->
      <div class="mt-10 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
        
        <!-- Skill Card 1 -->
        <div class="bg-orange-200 p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300 hover:bg-orange-300">
          <div class="flex items-center justify-center">
            <img src="https://freepngimg.com/thumb/web_development/6-2-web-development-download-png-thumb.png" alt="Coding Icon" class="h-20 w-20">
          </div>
          <h3 class="mt-4 text-xl font-semibold text-gray-800 text-center">Web Development</h3>
          <p class="mt-2 text-gray-600 text-center">Master HTML, CSS, JavaScript, and frameworks like React and Tailwind.</p>
        </div>
  
        <!-- Skill Card 2 -->
        <div class="bg-orange-200 p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300 hover:bg-orange-300">
          <div class="flex items-center justify-center">
            <img src="https://www.vlrtraining.in/wp-content/uploads/2020/10/logo-data-structure.png" alt="Design Icon" class="h-20 w-20">
          </div>
          <h3 class="mt-4 text-xl font-semibold text-gray-800 text-center">Data Structure & Algorithm</h3>
          <p class="mt-2 text-gray-600 text-center">Understanding the concept of DSA with C++ and Python.</p>
        </div>
  
        <!-- Skill Card 3 -->
        <div class="bg-orange-200 p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300 hover:bg-orange-300">
          <div class="flex items-center justify-center">
            <img src="https://cdn-icons-png.flaticon.com/512/3090/3090011.png" alt="Marketing Icon" class="h-20 w-20">
          </div>
          <h3 class="mt-4 text-xl font-semibold text-gray-800 text-center">Data Analytics</h3>
          <p class="mt-2 text-gray-600 text-center">Explore data analytics techniques with tools like Python, SQL, and Excel.</p>
        </div>
  
        <!-- Skill Card 4 -->
        <div class="bg-orange-200 p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300 hover:bg-orange-300">
          <div class="flex items-center justify-center">
            <img src="https://static.vecteezy.com/system/resources/thumbnails/036/105/045/small_2x/artificial-intelligence-ai-processor-chip-icon-symbol-for-graphic-design-logo-web-site-social-media-png.png" alt="Photography Icon" class="h-20 w-20">
          </div>
          <h3 class="mt-4 text-xl font-semibold text-gray-800 text-center">How to Use AI</h3>
          <p class="mt-2 text-gray-600 text-center">Dive into AI technologies and learn how to apply machine learning in real-world projects.</p>
        </div>
  
        <!-- Skill Card 5 -->
        <div class="bg-orange-200 p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300 hover:bg-orange-300">
          <div class="flex items-center justify-center">
            <img src="https://appzcreative.com/wp-content/uploads/2018/06/Android-App-Development-400x400.png" alt="AI Icon" class="h-20 w-20">
          </div>
          <h3 class="mt-4 text-xl font-semibold text-gray-800 text-center">Android Development</h3>
          <p class="mt-2 text-gray-600 text-center">Build Android apps using Kotlin or Java with Android Studio.</p>
        </div>
  
        <!-- Skill Card 6 -->
        <div class="bg-orange-200 p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300 hover:bg-orange-300">
          <div class="flex items-center justify-center">
            <img src="https://i0.wp.com/ahex.co/wp-content/uploads/2022/06/iphone-application-development.webp?fit=409%2C400&ssl=1" alt="Languages Icon" class="h-20 w-20">
          </div>
          <h3 class="mt-4 text-xl font-semibold text-gray-800 text-center">iOS Development</h3>
          <p class="mt-2 text-gray-600 text-center">Create iOS applications using Swift, objective-C and Xcode.</p>
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

      <div class="text-center text-orange-500 text-sm mt-6">
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
      const API_KEY = 'pub_564616650f6fcb472d4e1f5d53c8935323abf'; // Replace with your actual API key
      const API_URL = `https://newsdata.io/api/1/news?apikey=${API_KEY}&language=en&category=technology`;

      // Function to load technology news from the API
      async function loadNews() {
        try {
          const response = await fetch(API_URL);
          const data = await response.json();
          const newsData = data.results;

          if (newsData && newsData.length > 0) {
            // Filter news items that have images
            const filteredNews = newsData.filter(item => item.image_url);

            // Check if there are enough news items
            if (filteredNews.length > 0) {
              const newsCards = document.querySelectorAll('.news-card');

              // Load the filtered news items into the news cards
              newsCards.forEach((card, index) => {
                if (filteredNews[index]) {
                  const newsItem = filteredNews[index];
                  const categoryElement = card.querySelector('.text-orange-500');
                  const dateElement = card.querySelector('.text-gray-400');
                  const titleElement = card.querySelector('.text-lg.font-semibold');
                  const linkElement = card.querySelector('a');

                  categoryElement.textContent = 'Technology'; // Static category
                  dateElement.textContent = `• ${new Date(newsItem.pubDate).toLocaleDateString()}`;
                  titleElement.textContent = newsItem.title;
                  linkElement.setAttribute('href', newsItem.link);

                  // Set the image URL
                  card.setAttribute('data-image', newsItem.image_url);
                }
              });
            } else {
              console.error('No news items with images found.');
            }
          }
        } catch (error) {
          console.error('Error fetching news:', error);
        }
      }

      // Load the news when the page is loaded
      window.addEventListener('DOMContentLoaded', loadNews);
    </script>
  </div>
</body>

</html>