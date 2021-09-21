/* eslint-disable no-unused-vars */
/* eslint-disable no-undef */
// eslint-disable-next-line no-unused-vars

const useful = new Swiper('.slider-useful', {
  // loop: true,
  slidesPerView: 4,
  spaceBetween: 25,
});

const feedback = new Swiper('.slider-feedback', {
  slidesPerView: 2,
  spaceBetween: 25,
});

const hero = new Swiper('.slider-hero', {
  slidesPerView: 1,
  loop: true,

  autoplay: {
    delay: 5000,
  },
});
