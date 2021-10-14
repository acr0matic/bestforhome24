/* eslint-disable no-unused-vars */
/* eslint-disable no-undef */
// eslint-disable-next-line no-unused-vars

const useful = new Swiper('.slider-useful', {
  // loop: true,
  slidesPerView: 'auto',
  spaceBetween: 25,

  breakpoints: {
    992: {
      slidesPerView: 3,
    },

    1200: {
      slidesPerView: 4,
    },
  },

  navigation: {
    nextEl: '.slider-useful__next',
    prevEl: '.slider-useful__prev',
  },
});

const feedback = new Swiper('.slider-feedback', {
  slidesPerView: 'auto',
  spaceBetween: 25,

  breakpoints: {
    768: {
      slidesPerView: 2,
    },
  },

  navigation: {
    nextEl: '.slider-feedback__next',
    prevEl: '.slider-feedback__prev',
  },
});

const hero = new Swiper('.slider-hero', {
  slidesPerView: 1,
  loop: true,
  spaceBetween: 10,

  autoplay: {
    delay: 5000,
    disableOnInteraction: false,
  },
});

const constuction = new Swiper('.slider-constuction', {
  slidesPerView: 2,
  spaceBetween: 20,


  navigation: {
    nextEl: '.slider-constuction__next',
    prevEl: '.slider-constuction__prev',
  },
});
