const portfolio = document.getElementById('portfolio');

if (portfolio) {
  const modal = document.getElementById('modal-portfolio');

  const cards = portfolio.querySelectorAll('.portfolio__item');
  _.forEach(cards, (card) => {
    const list = card.querySelector('.portfolio__content .list').innerHTML;
    const text = card.querySelector('.portfolio__content .text').innerHTML;
    const images = card.querySelectorAll('.portfolio__content .gallery img');

    card.addEventListener('click', () => {
      UpdateModal(modal, list, text, images);
      MicroModal.show('modal-portfolio', modalParams);
    });
  });

  function UpdateModal(modal, list, text, images) {
    const parameters = modal.querySelector('.modal__list');
    const description = modal.querySelector('.modal__description');
    const gallery = modal.querySelector('.modal__gallery');

    parameters.innerHTML = list;
    description.innerHTML = text;
    gallery.innerHTML = '';

    _.forEach(images, (image) => {
      gallery.innerHTML +=
        `
        <div class="col-4">
          <div class="modal__picture position-relative">
              <a href="${image.dataset.full}" data-fslightbox="">
                <img alt="" class="preloader" src="/wp-content/themes/bestforhome/assets/img/misc/preloader.svg">
                <img data-src="${image.src}" alt="" class="modal__image image image--cover lazy">
              </a>
            </div>
            <!-- /.modal__picture -->
          </div>
        <!-- /.col-4 -->
        `;
    });

    lazyLoadInstance.update();
    refreshFsLightbox();
  }
}