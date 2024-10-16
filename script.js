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
