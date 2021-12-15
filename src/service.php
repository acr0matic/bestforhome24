<?php include_once('partials/header.php'); ?>

<main id="item">
  <section class="section" id="showcase">
    <div class="showcase">
      <div class="showcase__row">
        <div class="container">
          <div class="row">
            <div class="col-12 col-md-5 mb-3 mb-md-0">
              <div class="slider">
                <div class="swiper slider-gallery">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="showcase__picture">
                        <img src="img/catalog/mosquito/gallery/1.jpg" alt="" class="showcase__image image image--cover">
                      </div>
                      <!-- /.showcase__picture -->
                    </div>
                    <!-- /.swiper-slide -->

                    <div class="swiper-slide">
                      <div class="showcase__picture">
                        <img src="img/catalog/mosquito/gallery/1.jpg" alt="" class="showcase__image image image--cover">
                      </div>
                      <!-- /.showcase__picture -->
                    </div>
                    <!-- /.swiper-slide -->
                  </div>
                  <!-- /.swiper-wrapper -->
                </div>
                <!-- /.swiper slider-gallery -->
              </div>
              <!-- /.slider -->
            </div>
            <!-- /.col-6 -->

            <div class="col-12 col-md-7 p-3">
              <h1 class="showcase__title section__title page__title"><span>РАМОЧНЫЕ</span> МОСКИТНЫЕ СЕТКИ</h1>
              <p class="showcase__description custom-scrollbar">
                Рамочная москитная сетка — удобная в эксплуатации конструкция. Мы делаем рамочные москитные сетки на окна любых размеров. В «Оконном сервисе» можно заказать «москитку» в рамке на комнатные оконные рамы, на балкон, эркер и другие.
                <br> <br>
                Рамочная москитная сетка — удобная в эксплуатации конструкция. При необходимости вы сможете ее без проблем снять, чтобы почистить от насекомых или помыть. Мы делаем рамочные москитные сетки на окна любых размеров. В «Оконном сервисе» можно заказать «москитку» в рамке на комнатные оконные рамы, на балкон, эркер и другие.
              </p>

              <div class="showcase__action">
                <button data-micromodal-trigger="modal-callback" class="button button-outline me-md-3 mb-2 mb-md-0">Заказать</button>
                <button class="button button-primary">Цены</button>
              </div>
              <!-- /.showcase__action -->
            </div>
            <!-- /.col-6 -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container -->
      </div>
      <!-- /.showcase__row -->
    </div>
    <!-- /.showcase -->
  </section>

  <section class="section" id="calculator-small">
    <div class="container">
      <h2 class="section__title">Наши расценки</h2>

      <form class="calculator">
        <div class="calculator__body pt-0">
          <div class="row">
            <div class="col-12 mb-4 mb-md-0 col-md-6">
              <div class="calculator__wrapper">
                <h3 class="calculator__title">
                  Цены
                </h3>

                <table class="table table--calculator">
                  <thead>
                    <tr>
                      <th>Услуга</th>
                      <th class="table__tooltip">
                        Цена
                        <img data-tippy-content="Цена указана за квадратный метр" src="img/icons/misc/help.svg" alt="" class="table__help ms-2">
                      </th>
                    </tr>
                  </thead>

                  <tbody>
                    <tr>
                      <td>Размеры</td>
                      <td>499р</td>
                    </tr>
                    <tr>
                      <td>Цвет</td>
                      <td>0р</td>
                    </tr>
                    <tr>
                      <td>Крепеж</td>
                      <td>0р</td>
                    </tr>
                    <tr>
                      <td>Установка</td>
                      <td>0р</td>
                    </tr>
                    <tr>
                      <td>Доставка</td>
                      <td>0р</td>
                    </tr>
                  </tbody>
                </table>

                <p class="calculator__info mt-4">
                  Cтоимость указанная в калькуляторе не является публичной офертой.
                  <br>
                  Итоговая стоимость определяется после проведения оценочных работ.
                </p>
              </div>
              <!-- /.calculator__wrapper -->
            </div>
            <!-- /.col-6 -->

            <div class="col-12 col-md-6">
              <div class="calculator__wrapper">
                <h3 class="calculator__title">
                  Оставить заявку
                </h3>

                <p>Укажите свои контактные данные и мы свяжемся с Вами в ближайшее рабочее время по поводу интересующей услуги.</p>

                <div class="input mb-3 mt-4">
                  <input placeholder="Ваше имя" autocomplete="off" type="text" name="user_name" class="input__field">
                  <img data-tippy-content="Имя содержит недопустимые символы" class="input__warning" src="img/icons/misc/warning.svg" alt="">
                </div>
                <!-- /.input -->

                <div class="input mb-4">
                  <input data-required placeholder="Ваш телефон" autocomplete="off" type="tel" name="user_phone" class="input__field">
                  <img data-tippy-content="Номер телефона указан не полностью или содержит ошибки" class="input__warning" src="img/icons/misc/warning.svg" alt="">
                </div>
                <!-- /.input -->

                <div class="input mb-4 pb-1">
                  <label class="checkbox">
                    <input type="checkbox" class="checkbox__privacy">
                    <span class="checkbox__mark"></span>
                    <span class="checkbox__label">Я согласен на обработку моих персональных данных. <br> <a href="policy.html" class="checkbox__policy">Открыть политику конфиденциальности</a></span>
                  </label>
                </div>
                <!-- /.input -->

                <button data-sending="Отправка..." class="form__button button button-primary mb-4" type="submit">Отправить заявку</button>
              </div>
              <!-- /.calculator__wrapper -->
            </div>
            <!-- /.col-6 -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.calculator__body -->
      </form>
      <!-- /.callback -->
    </div>
    <!-- /.container -->
  </section>

  <?php include_once('partials/textblock.php'); ?>

  <section class="section" id="service">
    <div class="container">
      <div class="service">
        <div class="section__header">
          <h2 class="section__title">Другие услуги</h2>
          <a href="" class="link link--nav link--arrow">
            Все услуги
            <svg class="link__arrow svg ms-2" width="13" height="10" viewBox="0 0 10 7" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M6.83007 0.139209L9.86053 3.16392C10.0465 3.34953 10.0465 3.65047 9.86053 3.83608L6.83007 6.86079C6.64411 7.0464 6.3426 7.0464 6.15663 6.86079C5.97067 6.67518 5.97067 6.37424 6.15663 6.18863L8.37418 3.97529L0 3.97529L0 3.02471L8.37418 3.02471L6.15663 0.811367C5.97067 0.625755 5.97067 0.32482 6.15663 0.139209C6.3426 -0.0464029 6.64411 -0.0464029 6.83007 0.139209Z" fill="#969696"></path>
            </svg>
          </a>
        </div>
        <!-- /.section__header -->

        <p class="section__description">
          Наша компания изготавливает москитные сетки и рулонные шторы уже больше 10 лет. Каждая сетка или штора делается строго индивидуально под Ваши окна. В нашем каталоге тысячи цветов и вариаций рисунков для штор, а также, все возможные виды антимоскитного полотна для любой формы москитной сетки.
        </p>

        <div class="swiper swiper--shadow swiper--mobile slider-service">
          <div class="swiper-wrapper row">
            <div class="swiper-slide col-12 col-sm-6 col-lg-4 mb-3 mb-sm-5">
              <div class="card">
                <div class="card__picture position-relative">
                  <img src="img/misc/preloader.svg" class="preloader" alt="">
                  <img data-src="img/section/catalog/adjustment.jpg" alt="" class="card__image image image--cover lazy">
                </div>
                <!-- /.card__picture -->

                <div class="card__content">
                  <h3 class="card__title">Регулировка окон</h3>
                  <span class="card__link link link--arrow">Подробнее
                    <svg class="link__arrow svg ms-2" width="13" height="10" viewBox="0 0 10 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M6.83007 0.139209L9.86053 3.16392C10.0465 3.34953 10.0465 3.65047 9.86053 3.83608L6.83007 6.86079C6.64411 7.0464 6.3426 7.0464 6.15663 6.86079C5.97067 6.67518 5.97067 6.37424 6.15663 6.18863L8.37418 3.97529L0 3.97529L0 3.02471L8.37418 3.02471L6.15663 0.811367C5.97067 0.625755 5.97067 0.32482 6.15663 0.139209C6.3426 -0.0464029 6.64411 -0.0464029 6.83007 0.139209Z" fill="#969696"></path>
                    </svg>
                  </span>
                </div>
                <!-- /.card__content -->

                <a class="stretched-link" href=""></a>
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col-4 -->

            <div class="swiper-slide col-12 col-sm-6 col-lg-4 mb-3 mb-sm-5">
              <div class="card">
                <div class="card__picture position-relative">
                  <img src="img/misc/preloader.svg" class="preloader" alt="">
                  <img data-src="img/section/catalog/lock.jpg" alt="" class="card__image image image--cover lazy">
                </div>
                <!-- /.card__picture -->

                <div class="card__content">
                  <h3 class="card__title">Замки от детей</h3>
                  <span class="card__link link link--arrow">Подробнее
                    <svg class="link__arrow svg ms-2" width="13" height="10" viewBox="0 0 10 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M6.83007 0.139209L9.86053 3.16392C10.0465 3.34953 10.0465 3.65047 9.86053 3.83608L6.83007 6.86079C6.64411 7.0464 6.3426 7.0464 6.15663 6.86079C5.97067 6.67518 5.97067 6.37424 6.15663 6.18863L8.37418 3.97529L0 3.97529L0 3.02471L8.37418 3.02471L6.15663 0.811367C5.97067 0.625755 5.97067 0.32482 6.15663 0.139209C6.3426 -0.0464029 6.64411 -0.0464029 6.83007 0.139209Z" fill="#969696"></path>
                    </svg>
                  </span>
                </div>
                <!-- /.card__content -->

                <a class="stretched-link" href=""></a>
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col-4 -->

            <div class="swiper-slide col-12 col-sm-6 col-lg-4 mb-3 mb-sm-5">
              <div class="card">
                <div class="card__picture position-relative">
                  <img src="img/misc/preloader.svg" class="preloader" alt="">
                  <img data-src="img/section/catalog/limiter.jpg" alt="" class="card__image image image--cover lazy">
                </div>
                <!-- /.card__picture -->

                <div class="card__content">
                  <h3 class="card__title">Ограничители (гребенки)</h3>
                  <span class="card__link link link--arrow">Подробнее
                    <svg class="link__arrow svg ms-2" width="13" height="10" viewBox="0 0 10 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M6.83007 0.139209L9.86053 3.16392C10.0465 3.34953 10.0465 3.65047 9.86053 3.83608L6.83007 6.86079C6.64411 7.0464 6.3426 7.0464 6.15663 6.86079C5.97067 6.67518 5.97067 6.37424 6.15663 6.18863L8.37418 3.97529L0 3.97529L0 3.02471L8.37418 3.02471L6.15663 0.811367C5.97067 0.625755 5.97067 0.32482 6.15663 0.139209C6.3426 -0.0464029 6.64411 -0.0464029 6.83007 0.139209Z" fill="#969696"></path>
                    </svg>
                  </span>
                </div>
                <!-- /.card__content -->

                <a class="stretched-link" href=""></a>
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col-4 -->

            <div class="swiper-slide col-12 col-sm-6 col-lg-4 mb-3 mb-sm-0">
              <div class="card">
                <div class="card__picture position-relative">
                  <img src="img/misc/preloader.svg" class="preloader" alt="">
                  <img data-src="img/section/catalog/tinting.jpg" alt="" class="card__image image image--cover lazy">
                </div>
                <!-- /.card__picture -->

                <div class="card__content">
                  <h3 class="card__title">Тонировка окон</h3>
                  <span class="card__link link link--arrow">Подробнее
                    <svg class="link__arrow svg ms-2" width="13" height="10" viewBox="0 0 10 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M6.83007 0.139209L9.86053 3.16392C10.0465 3.34953 10.0465 3.65047 9.86053 3.83608L6.83007 6.86079C6.64411 7.0464 6.3426 7.0464 6.15663 6.86079C5.97067 6.67518 5.97067 6.37424 6.15663 6.18863L8.37418 3.97529L0 3.97529L0 3.02471L8.37418 3.02471L6.15663 0.811367C5.97067 0.625755 5.97067 0.32482 6.15663 0.139209C6.3426 -0.0464029 6.64411 -0.0464029 6.83007 0.139209Z" fill="#969696"></path>
                    </svg>
                  </span>
                </div>
                <!-- /.card__content -->

                <a class="stretched-link" href=""></a>
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col-4 -->

            <div class="swiper-slide col-12 col-sm-6 col-lg-4 mb-3 mb-sm-0">
              <div class="card">
                <div class="card__picture position-relative">
                  <img src="img/misc/preloader.svg" class="preloader" alt="">
                  <img data-src="img/section/catalog/compressor.png" alt="" class="card__image image image--cover lazy">
                </div>
                <!-- /.card__picture -->

                <div class="card__content">
                  <h3 class="card__title">Замена уплотнителя</h3>
                  <span class="card__link link link--arrow">Подробнее
                    <svg class="link__arrow svg ms-2" width="13" height="10" viewBox="0 0 10 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M6.83007 0.139209L9.86053 3.16392C10.0465 3.34953 10.0465 3.65047 9.86053 3.83608L6.83007 6.86079C6.64411 7.0464 6.3426 7.0464 6.15663 6.86079C5.97067 6.67518 5.97067 6.37424 6.15663 6.18863L8.37418 3.97529L0 3.97529L0 3.02471L8.37418 3.02471L6.15663 0.811367C5.97067 0.625755 5.97067 0.32482 6.15663 0.139209C6.3426 -0.0464029 6.64411 -0.0464029 6.83007 0.139209Z" fill="#969696"></path>
                    </svg>
                  </span>
                </div>
                <!-- /.card__content -->

                <a class="stretched-link" href=""></a>
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col-4 -->

            <div class="swiper-slide col-12 col-sm-6 col-lg-4">
              <div class="card">
                <div class="card__picture position-relative">
                  <img src="img/misc/preloader.svg" class="preloader" alt="">
                  <img data-src="img/section/catalog/limiter.jpg" alt="" class="card__image image image--cover lazy">
                </div>
                <!-- /.card__picture -->

                <div class="card__content">
                  <h3 class="card__title">Ограничители (гребенки)</h3>
                  <span class="card__link link link--arrow">Подробнее
                    <svg class="link__arrow svg ms-2" width="13" height="10" viewBox="0 0 10 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M6.83007 0.139209L9.86053 3.16392C10.0465 3.34953 10.0465 3.65047 9.86053 3.83608L6.83007 6.86079C6.64411 7.0464 6.3426 7.0464 6.15663 6.86079C5.97067 6.67518 5.97067 6.37424 6.15663 6.18863L8.37418 3.97529L0 3.97529L0 3.02471L8.37418 3.02471L6.15663 0.811367C5.97067 0.625755 5.97067 0.32482 6.15663 0.139209C6.3426 -0.0464029 6.64411 -0.0464029 6.83007 0.139209Z" fill="#969696"></path>
                    </svg>
                  </span>
                </div>
                <!-- /.card__content -->

                <a class="stretched-link" href=""></a>
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col-4 -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.swiper swiper--shadow swiper--mobile -->
      </div>
      <!-- /.callback -->
    </div>
    <!-- /.container -->
  </section>

  <?php include_once('partials/order.php'); ?>

  <?php include_once('partials/faq.php'); ?>

  <?php include_once('partials/callback.php'); ?>
</main>

<?php include_once('partials/footer.php'); ?>