// News Selection

const newsCards = document.querySelectorAll(".news-card");
const newsImage = document.getElementById("news-image");

newsCards.forEach((card) => {
  card.addEventListener("mouseenter", () => {
    const imageUrl = card.getAttribute("data-image");
    newsImage.style.opacity = 0;
    setTimeout(() => {
      newsImage.src = imageUrl;
      newsImage.style.opacity = 1;
    }, 300);
  });
});

// navbar-responsivness

const menuButton = document.getElementById('menuButton');
const mobileMenu = document.getElementById('mobileMenu');

menuButton.addEventListener('click', () => {
  mobileMenu.classList.toggle('hidden');
});

const newsItems = [
  "India Mobile Congress 2024 - Register Now",
  "5G Technology Updates - Learn More",
  "New Smartphone Launches in 2024",
  "AI Innovations Shaping the Future",
  "Tech Conferences to Watch in 2024"
];

let currentNewsIndex = 0;
const newsTextElement = document.getElementById('newsText');

// Function to update the news text
function updateNews(index) {
  newsTextElement.style.opacity = 0; // Fade out text
  setTimeout(() => {
    newsTextElement.textContent = newsItems[index]; // Change text
    newsTextElement.style.opacity = 1; // Fade in text
  }, 300);
}

// Previous button functionality
document.getElementById('prevBtn').addEventListener('click', () => {
  currentNewsIndex = (currentNewsIndex === 0) ? newsItems.length - 1 : currentNewsIndex - 1;
  updateNews(currentNewsIndex);
});

// Next button functionality
document.getElementById('nextBtn').addEventListener('click', () => {
  currentNewsIndex = (currentNewsIndex === newsItems.length - 1) ? 0 : currentNewsIndex + 1;
  updateNews(currentNewsIndex);
});