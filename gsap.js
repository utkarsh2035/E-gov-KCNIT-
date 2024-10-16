let logo = document.querySelector(".logo-box");
let menuItems = document.querySelectorAll(".menu-box a");
let searchBox = document.querySelector(".search-box");
let videoBox = document.querySelector(".video-box");
let tl = gsap.timeline();
tl.from(logo, {
    opacity: 0,
    y: -100,
    duration: .8,
})
tl.from(menuItems, {
    opacity: 0,
    y: -100,
    stagger: .2,
    duration: .6,
})
tl.from(searchBox, {
    opacity: 0,
    y: -100,
    stagger: .2,
    duration: .6,
})

tl.from(videoBox, {
    opacity: 0,
    x: -300,
    y: -200,
    duration: 1,
}, "-=3")
