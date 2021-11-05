if (window.matchMedia('(max-width: 576px)').matches) {
  const hero = document.getElementById('hero');

  if (hero) {
    const content = hero.querySelector('.hero__content');
    const slider = hero.querySelector('.hero__slider');

    content.insertBefore(slider, content.querySelector('.hero__subtitle'))
  }
}