let logo = document.querySelector(".logo-box");
let menuItems = document.querySelectorAll(".menu-box a");
let searchBox = document.querySelector(".search-box");
let videoBox = document.querySelector(".video-box");
let tl = gsap.timeline();
tl.from(logo, {
  opacity: 0,
  y: -100,
  duration: 0.8,
});
tl.from(menuItems, {
  opacity: 0,
  y: -100,
  stagger: 0.2,
  duration: 0.6,
});
tl.from(searchBox, {
  opacity: 0,
  y: -100,
  stagger: 0.2,
  duration: 0.6,
});

tl.from(
  videoBox,
  {
    opacity: 0,
    x: 200,
    y: 200,
    duration: 1,
  },
  "-=3"
);

const cursor = document.querySelector(".cursor");
window.addEventListener("mousemove", (e) => {
  gsap.to(cursor, {
    x: e.x,
    y: e.y,
    duration: 0.8,
    ease: "back.out",
  });
});
