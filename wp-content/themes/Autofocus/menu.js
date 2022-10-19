const hamburger = document.querySelector(".menu__hamburger");
const nav = document.querySelector(".menu__links");
const [...hamburgerElements] = document.querySelectorAll(".hamburger__bar");

let currentTouchPos = 0,
  startTouchPos = 0,
  previous = 0;

hamburger.addEventListener("click", e => {
  e.stopPropagation();
  navToggle();
});

document.body.addEventListener("click", e => {
  if (hamburger.classList.contains("menu__hamburger--active")) navToggle();
});

nav.addEventListener("click", e => {
  e.stopPropagation();
});

window.addEventListener("resize", e => {
  if (window.getComputedStyle(hamburger).display !== "none") {
    if (hamburger.classList.contains("menu__hamburger--active")) {
      nav.style.transform = "translateX(-100%)";
    } else nav.style.transform = "";
  } else nav.style.transform = "translateX(0%)";

  if (window.getComputedStyle(hamburger).display !== "none") {
    nav.addEventListener("touchstart", touchstart, { passive: true });
    nav.addEventListener("touchmove", touchmove, { passive: true });
    nav.addEventListener("touchend", touchend, { passive: true });
  } else {
    nav.removeEventListener("touchstart", touchstart);
    nav.removeEventListener("touchmove", touchmove);
    nav.removeEventListener("touchend", touchend);
  }
});

if (window.getComputedStyle(hamburger).display !== "none") {
  nav.addEventListener("touchstart", touchstart, { passive: true });
  nav.addEventListener("touchmove", touchmove, { passive: true });
  nav.addEventListener("touchend", touchend, { passive: true });
}

const hamburgerTl = gsap.timeline({ defaults: { duration: 0.3 } });
hamburgerTl
  .to(
    hamburgerElements[0],
    {
      duration: 0.1,
      y: "300%",
    },
    0
  )
  .to(
    hamburgerElements[2],
    {
      duration: 0.1,
      y: "-300%",
    },
    "-=.1"
  )
  .to(
    hamburgerElements[1],
    {
      transformOrigin: "center",
      scaleX: 0,
    },
    "-=.3"
  )
  .to(hamburgerElements[0], {
    transformOrigin: "center",
    rotateZ: 45,
  })
  .to(
    hamburgerElements[2],
    {
      transformOrigin: "center",
      rotateZ: -45,
    },
    "-=.3"
  );
hamburgerTl.pause();

function navToggle(e) {
  hamburger.classList.toggle("menu__hamburger--active");
  nav.classList.toggle("nav__links--active");
  if (hamburger.classList.contains("menu__hamburger--active")) {
    nav.style.transform = "translateX(-100%)";
    hamburgerTl.play();
  } else {
    nav.style.transform = "translateX(0)";
    hamburgerTl.reverse();
  }
  document.body.classList.toggle("overflow-hidden");
}

function touchstart(e) {
  startTouchPos = e.changedTouches[0].clientX;
  nav.style.transition = "none";
}

function touchmove(e) {
  currentTouchPos = e.changedTouches[0].clientX;
  let diff = currentTouchPos - startTouchPos;
  if (diff <= 0) return;
  nav.style.transform = `translateX(calc(-100% + ${diff}px))`;
}

function touchend(e) {
  currentTouchPos = e.changedTouches[0].clientX;
  if (currentTouchPos > startTouchPos + nav.clientWidth / 3) navToggle();
  else nav.style.transform = "translateX(-100%)";
  nav.style.transition = "";
}
