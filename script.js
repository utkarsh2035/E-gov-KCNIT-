// news-box

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

// Event-calender js
document.addEventListener('DOMContentLoaded', function () {
  var calendarEl = document.getElementById('calendar');

  var calendar = new FullCalendar.Calendar(calendarEl, {
      initialView: 'dayGridMonth',
      height: '100%', // Ensure it fills the height
      events: [
          {
              title: 'Workshop',
              start: '2024-10-20',
              description: 'Workshop on e-Government initiatives and digital transformation in public administration.',
          },
          {
              title: 'Conference',
              start: '2024-10-25',
              description: 'Conference on emerging technologies in e-Government.',
          },
          {
              title: 'Hackathon',
              start: '2024-11-05',
              description: '12-hour hackathon focused on innovative public sector solutions.',
          },
          // Add more events here
      ],
      eventClick: function(info) {
          alert(info.event.title + ': ' + info.event.extendedProps.description);
      }
  });

  calendar.render();

  
});
