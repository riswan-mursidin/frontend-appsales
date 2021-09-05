document.addEventListener("DOMContentLoaded", function () {
  new Splide("#card-slider", {
    type: "loop",
    perPage: 3,
    autoplay: true,
    breakpoints: {
      834: {
        perPage: 2,
      },
    },
  }).mount();
});
