<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8" />
  <meta content="width=device-width, initial-scale=1.0, user-scalable=no" name="viewport" />
  <meta content="ie=edge" http-equiv="X-UA-Compatible" />

  <!-- Базовые мета-теги для поисковиков -->
  <title>Заголовок</title>

  <!-- Иконки для страницы -->
  <link href="img/favicons/favicon.ico" rel="shortcut icon" type="image/x-icon">
  <link href="img/favicons/favicon-16x16.png" rel="icon" sizes="16x16" type="image/png">
  <link href="img/favicons/favicon-32x32.png" rel="icon" sizes="32x32" type="image/png">
  <link href="img/favicons/apple-touch-icon-precomposed.png" rel="apple-touch-icon-precomposed">
  <link href="img/favicons/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="img/favicons/apple-touch-icon-57x57.png" rel="apple-touch-icon" sizes="57x57">
  <link href="img/favicons/apple-touch-icon-60x60.png" rel="apple-touch-icon" sizes="60x60">
  <link href="img/favicons/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
  <link href="img/favicons/apple-touch-icon-76x76.png" rel="apple-touch-icon" sizes="76x76">
  <link href="img/favicons/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
  <link href="img/favicons/apple-touch-icon-120x120.png" rel="apple-touch-icon" sizes="120x120">
  <link href="img/favicons/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">
  <link href="img/favicons/apple-touch-icon-152x152.png" rel="apple-touch-icon" sizes="152x152">
  <link href="img/favicons/apple-touch-icon-167x167.png" rel="apple-touch-icon" sizes="167x167">
  <link href="img/favicons/apple-touch-icon-180x180.png" rel="apple-touch-icon" sizes="180x180">
  <link href="img/favicons/apple-touch-icon-1024x1024.png" rel="apple-touch-icon" sizes="1024x1024">

  <!-- Метатеги которые выводят информацию о странице в поисковой запрос -->
  <meta content="описание не длиннее 155 символов" name="description" />
  <meta content="мета-теги, шаблон, html, css, acr0matic" name="keywords" />

  <!-- Метатеги для ссылок в социальных сетях -->
  <meta content="ru_RU" property="og:locale" />
  <meta content="" property="og:title">
  <meta content="" property="og:description" />
  <meta content="" property="og:image">

  <!-- Контролирует поведение поисковых систем при индексации страницы -->
  <meta content="index,follow" name="robots" />

  <!-- Покраска адресной строки в мобильных Chrome, Firefox OS и Opera -->
  <meta content="#4285f4" name="theme-color" />

  <!-- Покраска для iOS Safari -->
  <meta content="yes" name="apple-mobile-web-app-capable" />
  <meta content="#4285f4" name="apple-mobile-web-app-status-bar-style">

  <!-- Место для счетков и аналитики -->

  <!-- Место для счетков и аналитики -->

  <!-- Стили -->
  <!-- build:css css/style.min.css -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- endbuild -->
</head>

<body>
  <!-- Шапка -->
  <header id="header">
    <div class="container">
      <div class="header">
        <div class="header__logo logo logo--header">
          <a href="">
            <img alt="" class="logo__image" src="img/logo.svg">
          </a>
        </div>
        <!-- /.header__logo logo -->

        <nav class="header__nav nav nav--header">
          <ul class="nav__list">
            <li class="nav__item"><a class="nav__link link link--nav" href="">Главная</a></li>
            <li class="nav__item dropdown">
              <span class="dropdown__header nav__link link link--nav d-flex align-items-center">
                Каталог
                <img alt="" class="dropdown__arrow" src="img/icons/control/arrow__dropdown.svg">
              </span>

              <div class="dropdown__content">
                <div class="row">
                  <div class="col-6 d-flex flex-column align-items-start">
                    <a class="link link--nav dropdown__item" href="https://brandigital.ru/design">Москитные сетки</a>
                    <a class="link link--nav dropdown__item link link--nav dropdown__item--sub" href="">Внутренняя</a>
                    <a class="link link--nav dropdown__item link link--nav dropdown__item--sub" href="">Москитная дверь</a>
                    <a class="link link--nav dropdown__item link link--nav dropdown__item--sub" href="">Стандарт</a>
                    <a class="link link--nav dropdown__item link link--nav dropdown__item--sub" href="">Антипыль</a>
                    <a class="link link--nav dropdown__item link link--nav dropdown__item--sub" href="">Антипыльца</a>
                    <a class="link link--nav dropdown__item link link--nav dropdown__item--sub" href="">Антикошка</a>
                    <a class="link link--nav dropdown__item link link--nav dropdown__item--sub" href="">Ультравью</a>
                    <a class="link link--nav dropdown__item link link--nav dropdown__item--sub" href="">Проведал</a>
                  </div>
                  <!-- /.col-6 -->

                  <div class="col-6 d-flex flex-column align-items-start">
                    <a class="link link--nav dropdown__item" href="https://brandigital.ru/design">Рулонные шторы</a>
                    <a class="link link--nav dropdown__item link link--nav dropdown__item--sub" href="">Жалюзи</a>
                    <a class="link link--nav dropdown__item link link--nav dropdown__item--sub" href="">День-Ночь</a>
                    <a class="link link--nav dropdown__item link link--nav dropdown__item--sub" href="">Плиссе</a>
                    <a class="link link--nav dropdown__item link link--nav dropdown__item--sub" href="">Гранд</a>
                    <a class="link link--nav dropdown__item link link--nav dropdown__item--sub" href="">Гранд День-Ночь</a>
                    <a class="link link--nav dropdown__item link link--nav dropdown__item--sub" href="">Плиссе</a>
                  </div>
                  <!-- /.col-6 -->
                </div>
                <!-- /.row -->
              </div>
            </li>
            <li class="nav__item dropdown">
              <span class="dropdown__header nav__link link link--nav d-flex align-items-center">
                Услуги
                <img alt="" class="dropdown__arrow" src="img/icons/control/arrow__dropdown.svg">
              </span>

              <div class="dropdown__content dropdown__content--small">
                <div class="d-flex flex-column align-items-start">
                  <a class="link link--nav dropdown__item" href="https://brandigital.ru/design">Тонировка окон</a>
                  <a class="link link--nav dropdown__item" href="https://brandigital.ru/design">Регулировка окон</a>
                  <a class="link link--nav dropdown__item" href="https://brandigital.ru/design">Замки от детей</a>
                  <a class="link link--nav dropdown__item" href="https://brandigital.ru/design">Замена уплотнителя</a>
                  <a class="link link--nav dropdown__item" href="https://brandigital.ru/design">Ограничители</a>
                </div>
                <!-- /.d-flex-->
              </div>
              <!-- /.dropdown__content -->
            </li>
            <li class="nav__item"><a class="nav__link link link--nav" href="">Портфолио</a></li>
            <li class="nav__item"><a class="nav__link link link--nav" href="">Статьи</a></li>
          </ul>
        </nav>
        <!-- /.header__nav nav -->

        <div class="header__callback">
          <div class="d-flex flex-column me-4">
            <a class="header__phone link link--contact" href="tel:+">+7 926 630-45-56</a>
            <a class="header__phone link link--contact" href="tel:+">+7 977 415-28-17</a>
          </div>

          <button data-micromodal-trigger="modal-callback" class="header__button button button-outline">Обратный звонок</button>
        </div>
        <!-- /.header__callback -->

        <div class="header__mobile">
          <button class="hamburger hamburger--squeeze" type="button">
            <span class="hamburger-box">
              <span class="hamburger-inner"></span>
            </span>
          </button>
        </div>
        <!-- /.header__mobile -->
      </div>
      <!-- /.header -->
    </div>
    <!-- /.container -->
  </header>

  <div id="mobile-menu" class="mobile-menu">
    <div class="mobile-menu__overlay"></div>

    <div class="mobile-menu__container effect-fade effect-fade--bottom effect-fade--short">
      <div class="mobile-menu__wrapper">
        <nav class="mobile-menu__nav nav nav--mobile">
          <ul class="nav__list">
            <li class="nav__item mb-2"><a href="" class="nav__link">Главная</a></li>
            <li class="nav__item mb-2">
              <div class="handorgel handorgel--menu">
                <div class="handorgel__header">
                  <div class="handorgel__header__button">
                    <h3 class="handorgel__title nav__link">Москитные сетки</h3>
                    <div class="handorgel__indicator">
                      <img alt="" class="handorgel__arrow" src="img/icons/control/arrow__dropdown.svg">
                    </div>
                    <!-- /.handorgel__indicator -->
                  </div>
                  <!-- /.handorgel__header__button -->
                </div>
                <!-- /.handorgel__header -->

                <div class="handorgel__content">
                  <div class="handorgel__content__inner">
                    <p class="handorgel__content__text">
                    <ul class="mobile-menu__list">
                      <li class="nav__item nav__item--small"><a href="" class="nav__link">Весь каталог</a></li>
                      <li class="nav__item nav__item--small"><a href="" class="nav__link">Внутренняя</a></li>
                      <li class="nav__item nav__item--small"><a href="" class="nav__link">Москитная дверь</a></li>
                      <li class="nav__item nav__item--small"><a href="" class="nav__link">Стандарт</a></li>
                      <li class="nav__item nav__item--small"><a href="" class="nav__link">Антипыль</a></li>
                      <li class="nav__item nav__item--small"><a href="" class="nav__link">Антипыльца</a></li>
                      <li class="nav__item nav__item--small"><a href="" class="nav__link">Антикошка</a></li>
                      <li class="nav__item nav__item--small"><a href="" class="nav__link">Ультравью</a></li>
                      <li class="nav__item nav__item--small"><a href="" class="nav__link">Проведал</a></li>
                    </ul>
                    </p>
                  </div>
                  <!-- /.handorgel__content__inner -->
                </div>
                <!-- /.handorgel__content -->
              </div>
              <!-- /.handorgel-->
            </li>

            <li class="nav__item mb-2">
              <div class="handorgel handorgel--menu">
                <div class="handorgel__header">
                  <div class="handorgel__header__button">
                    <h3 class="handorgel__title nav__link">Рулонные шторы</h3>
                    <div class="handorgel__indicator">
                      <img alt="" class="handorgel__arrow" src="img/icons/control/arrow__dropdown.svg">
                    </div>
                    <!-- /.handorgel__indicator -->
                  </div>
                  <!-- /.handorgel__header__button -->
                </div>
                <!-- /.handorgel__header -->

                <div class="handorgel__content">
                  <div class="handorgel__content__inner">
                    <p class="handorgel__content__text">
                    <ul class="mobile-menu__list">
                      <li class="nav__item nav__item--small"><a href="" class="nav__link">Весь каталог</a></li>
                      <li class="nav__item nav__item--small"><a href="" class="nav__link">Жалюзи</a></li>
                      <li class="nav__item nav__item--small"><a href="" class="nav__link">День-Ночь</a></li>
                      <li class="nav__item nav__item--small"><a href="" class="nav__link">Плиссе</a></li>
                      <li class="nav__item nav__item--small"><a href="" class="nav__link">Гранд</a></li>
                      <li class="nav__item nav__item--small"><a href="" class="nav__link">Гранд День-Ночь</a></li>
                      <li class="nav__item nav__item--small"><a href="" class="nav__link">Плиссе</a></li>
                    </ul>
                    </p>
                  </div>
                  <!-- /.handorgel__content__inner -->
                </div>
                <!-- /.handorgel__content -->
              </div>
              <!-- /.handorgel-->
            </li>

            <li class="nav__item mb-2">
              <div class="handorgel handorgel--menu">
                <div class="handorgel__header">
                  <div class="handorgel__header__button">
                    <h3 class="handorgel__title nav__link">Услуги</h3>
                    <div class="handorgel__indicator">
                      <img alt="" class="handorgel__arrow" src="img/icons/control/arrow__dropdown.svg">
                    </div>
                    <!-- /.handorgel__indicator -->
                  </div>
                  <!-- /.handorgel__header__button -->
                </div>
                <!-- /.handorgel__header -->

                <div class="handorgel__content">
                  <div class="handorgel__content__inner">
                    <p class="handorgel__content__text">
                    <ul class="mobile-menu__dropdown">
                      <li class="nav__item nav__item--small"><a href="" class="nav__link">Тонировка окон</a></li>
                      <li class="nav__item nav__item--small"><a href="" class="nav__link">Регулировка окон</a></li>
                      <li class="nav__item nav__item--small"><a href="" class="nav__link">Замки от детей</a></li>
                      <li class="nav__item nav__item--small"><a href="" class="nav__link">Замена уплотнителя</a></li>
                      <li class="nav__item nav__item--small"><a href="" class="nav__link">Ограничители</a></li>
                    </ul>
                    </p>
                  </div>
                  <!-- /.handorgel__content__inner -->
                </div>
                <!-- /.handorgel__content -->
              </div>
              <!-- /.handorgel-->
            </li>
            <li class="nav__item mb-2"><a href="" class="nav__link">Портфолио</a></li>
            <li class="nav__item mb-2"><a href="" class="nav__link">Статьи</a></li>
          </ul>
        </nav>

        <div class="mobile-menu__action">
          <div class="d-flex flex-column mb-3 mt-4">
            <a class="header__phone link link--contact" href="tel:+">+7 926 630-45-56</a>
            <a class="header__phone link link--contact" href="tel:+">+7 977 415-28-17</a>
          </div>

          <button data-micromodal-trigger="modal-callback" class="header__button button button-outline">Обратный звонок</button>
        </div>
        <!-- /.mobile-menu__action -->
      </div>
      <!-- /.mobile-menu__wrapper -->
    </div>
    <!-- /.mobile-menu__container -->
  </div>
  <!-- /.mobile-menu -->

  <div class="widget">
    <a class="widget__link widget__link--hide" href="https://api.whatsapp.com/send?phone=" target="_blank">
      <img src="img/icons/widget/whatsapp.svg" alt="" class="widget__icon widget__icon--small">
    </a>

    <a class="widget__link widget__link--hide" href="https://t.me/" target="_blank">
      <img src="img/icons/widget/telegram.svg" alt="" class="widget__icon widget__icon--small">
    </a>

    <img id="widget" src="img/icons/widget/widget.svg" alt="" class="widget__icon">
  </div>
  <!-- /.widget -->