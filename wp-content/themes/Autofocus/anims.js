gsap.registerPlugin(ScrollTrigger);

ScrollTrigger.defaults({ toggleActions: "play pause resume reverse" });

const parallax = ({
  target,
  offset,
  start = "top top",
  end = "bottom 10%",
  markers = false,
}) => {
  gsap.fromTo(
    target,
    {
      y: 0,
    },
    {
      y: offset,
      scrollTrigger: {
        scrub: 0.2,
        trigger: target,
        start,
        end,
        markers,
      },
    }
  );
};
const reveal = ({
  target,
  trigger,
  amount = 0.5,
  markers = false,
  end = "bottom top",
}) => {
  gsap.fromTo(
    target,
    {
      autoAlpha: 0,
      y: 50,
      clipPath: "polygon(0 100%, 100% 100%, 100% 100%, 0 100%)",
    },
    {
      stagger: {
        amount,
      },
      autoAlpha: 1,
      y: 0,
      clipPath: "polygon(0% 0%, 100% 0%, 100% 100%, 0% 100%)",
      scrollTrigger: {
        trigger,
        start: "top 90%",
        end,
        markers,
      },
      onComplete: function () {
        gsap.set(this.targets(), { clearProps: "all" });
      },
    }
  );
};
const artists = document.querySelectorAll(".artist");
const titles = document.querySelectorAll(
  "[class*=__title]:not(.footer__title)"
);

const logoTl = gsap.timeline();
logoTl
  .to(".logo_o", {
    rotateZ: 180,
    transformOrigin: "center",
    ease: "none",
    duration: 1,
    fill: "#ce5e3a",
  })
  .to(".logo_o", {
    rotateZ: -180,
    transformOrigin: "center",
    ease: "power2.out",
    duration: 0.7,
    fill: "black",
  });

// Hero imgs
parallax({
  target: ".hero__img:nth-child(3)",
  offset: "50",
  start: "top 30%",
});

parallax({
  target: ".hero__img:nth-child(2)",
  offset: "25",
  start: "top 10%",
});
parallax({
  target: ".hero__decoration",
  offset: -50,
  start: "top 20%",
});

gsap.from(".hero__date, .hero__title, .hero__subtitle, .hero__cta", {
  autoAlpha: 0,
  duration: 0.4,
  y: 100,

  stagger: 0.25,
});

reveal({
  target: ".artist, .artist h3, .artist .tags a",
  trigger: ".artists",
});
reveal({
  target: ".stand, .stand h3, .stand p",
  trigger: ".stands__grid",
});

reveal({
  target: ".conferences__text > *",
  trigger: ".conferences__section:first-of-type",
  end: "bottom top",
});

gsap.from(".billetterie__card", {
  autoAlpha: 0,
  duration: 0.375,
  y: 100,
  stagger: 0.25,
  ease: "power3.out",
  onComplete: function () {
    gsap.set(this.targets(), { clearProps: "all" });
  },
});

titles.forEach(title => {
  gsap.fromTo(
    title,
    {
      autoAlpha: 0,
      y: 50,
    },
    {
      autoAlpha: 1,
      y: 0,
      ease: "power3.out",
      scrollTrigger: {
        trigger: title,
        start: "top 90%",
      },
    }
  );
});
