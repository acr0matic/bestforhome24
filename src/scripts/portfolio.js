const portfolio = document.getElementById('portfolio');

if (portfolio) {
  const modal = document.getElementById('modal-portfolio');

  const cards = portfolio.querySelectorAll('.portfolio__item');
  _.forEach(cards, (card) => {
    const list = card.querySelector('.portfolio__content .list--main').innerHTML;
    const add = card.querySelector('.portfolio__content .list--additional').innerHTML;
    const images = card.querySelectorAll('.portfolio__content .gallery .picture');

    card.addEventListener('click', () => {
      const parameters = modal.querySelector('.modal__list--main');
      const additional = modal.querySelector('.modal__list--additional');
      const gallery = modal.querySelectorAll('.modal__gallery .swiper-slide');

      parameters.innerHTML = list;
      additional.innerHTML = add;

      _.forEach(gallery, (image, index) => {
        if (images[index]) {
          image.innerHTML = images[index].outerHTML;
          image.style.display = 'block';
        }

        else image.style.display = 'none';
      });

      _.forEach(images, (image, index) => {
        if (image) {
          gallery[index] = image.innerHTML;
          gallery[index].style.display = 'block';
        }

        else gallery[index].style.display = 'none';
      });

      lazyLoadInstance.update();
      refreshFsLightbox();
    });
  });
}