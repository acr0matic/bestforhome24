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
  slidesPerView: 'auto',
  spaceBetween: 25,
  autoHeight: true,

  breakpoints: {
    768: {
      slidesPerView: 1,
    },

    996: {
      slidesPerView: 2,
    }
  },

  navigation: {
    nextEl: '.slider-constuction__next',
    prevEl: '.slider-constuction__prev',
  },
});


const material = new Swiper('.slider-material', {
  slidesPerView: 'auto',
  spaceBetween: 25,

  breakpoints: {
    996: {
      slidesPerView: 3,
    },

    1200: {
      slidesPerView: 3,
    },
  },

  navigation: {
    nextEl: '.slider-material__next',
    prevEl: '.slider-material__prev',
  },
});

const gallery = new Swiper('.slider-gallery', {
  slidesPerView: 1,
  spaceBetween: 10,
  grabCursor: true,
  loop:  true,

  autoplay: {
    delay: 3000,
  },
});
