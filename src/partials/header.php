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
          <a href="index.php">
            <img alt="" class="logo__image" src="img/logo.svg">
          </a>
        </div>
        <!-- /.header__logo logo -->

        <nav class="header__nav nav nav--header">
          <ul class="nav__list">
            <li class="nav__item"><a class="nav__link link link--nav" href="index.php">Главная</a></li>
            <li class="nav__item dropdown">
              <span class="dropdown__header nav__link link link--nav d-flex align-items-center">
                Каталог
                <img alt="" class="dropdown__arrow" src="img/icons/control/arrow__dropdown.svg">
              </span>

              <div class="dropdown__content">
                <div class="row">
                  <div class="col-6 d-flex flex-column align-items-start">
                    <a class="link link--nav dropdown__item" href="mosquito.php">Москитные сетки</a>
                    <a class="link link--nav dropdown__item link link--nav dropdown__item--sub" href="mosquito-item.php">Внутренняя</a>
                    <a class="link link--nav dropdown__item link link--nav dropdown__item--sub" href="mosquito-item.php">Москитная дверь</a>
                    <a class="link link--nav dropdown__item link link--nav dropdown__item--sub" href="mosquito-item.php">Стандарт</a>
                    <a class="link link--nav dropdown__item link link--nav dropdown__item--sub" href="mosquito-item.php">Антипыль</a>
                    <a class="link link--nav dropdown__item link link--nav dropdown__item--sub" href="mosquito-item.php">Антипыльца</a>
                    <a class="link link--nav dropdown__item link link--nav dropdown__item--sub" href="mosquito-item.php">Антикошка</a>
                    <a class="link link--nav dropdown__item link link--nav dropdown__item--sub" href="mosquito-item.php">Ультравью</a>
                    <a class="link link--nav dropdown__item link link--nav dropdown__item--sub" href="mosquito-item.php">Проведал</a>
                  </div>
                  <!-- /.col-6 -->

                  <div class="col-6 d-flex flex-column align-items-start">
                    <a class="link link--nav dropdown__item" href="mosquito.php">Рулонные шторы</a>
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
                  <a class="link link--nav dropdown__item" href="service.php">Тонировка окон</a>
                  <a class="link link--nav dropdown__item" href="service.php">Регулировка окон</a>
                  <a class="link link--nav dropdown__item" href="service.php">Замки от детей</a>
                  <a class="link link--nav dropdown__item" href="service.php">Замена уплотнителя</a>
                  <a class="link link--nav dropdown__item" href="service.php">Ограничители</a>
                </div>
                <!-- /.d-flex-->
              </div>
              <!-- /.dropdown__content -->
            </li>
            <li class="nav__item"><a class="nav__link link link--nav" href="portfolio.php">Портфолио</a></li>
            <li class="nav__item"><a class="nav__link link link--nav" href="blog.php">Статьи</a></li>
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
            <li class="nav__item mb-2"><a href="index.php" class="nav__link">Главная</a></li>
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
                      <li class="nav__item nav__item--small"><a href="mosquito.php" class="nav__link">Весь каталог</a></li>
                      <li class="nav__item nav__item--small"><a href="mosquito-item.php" class="nav__link">Внутренняя</a></li>
                      <li class="nav__item nav__item--small"><a href="mosquito-item.php" class="nav__link">Москитная дверь</a></li>
                      <li class="nav__item nav__item--small"><a href="mosquito-item.php" class="nav__link">Стандарт</a></li>
                      <li class="nav__item nav__item--small"><a href="mosquito-item.php" class="nav__link">Антипыль</a></li>
                      <li class="nav__item nav__item--small"><a href="mosquito-item.php" class="nav__link">Антипыльца</a></li>
                      <li class="nav__item nav__item--small"><a href="mosquito-item.php" class="nav__link">Антикошка</a></li>
                      <li class="nav__item nav__item--small"><a href="mosquito-item.php" class="nav__link">Ультравью</a></li>
                      <li class="nav__item nav__item--small"><a href="mosquito-item.php" class="nav__link">Проведал</a></li>
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
                      <li class="nav__item nav__item--small"><a href="service.php" class="nav__link">Тонировка окон</a></li>
                      <li class="nav__item nav__item--small"><a href="service.php" class="nav__link">Регулировка окон</a></li>
                      <li class="nav__item nav__item--small"><a href="service.php" class="nav__link">Замки от детей</a></li>
                      <li class="nav__item nav__item--small"><a href="service.php" class="nav__link">Замена уплотнителя</a></li>
                      <li class="nav__item nav__item--small"><a href="service.php" class="nav__link">Ограничители</a></li>
                    </ul>
                    </p>
                  </div>
                  <!-- /.handorgel__content__inner -->
                </div>
                <!-- /.handorgel__content -->
              </div>
              <!-- /.handorgel-->
            </li>
            <li class="nav__item mb-2"><a href="portfolio.php" class="nav__link">Портфолио</a></li>
            <li class="nav__item mb-2"><a href="blog.php" class="nav__link">Статьи</a></li>
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

  <div class="page-loader" id="page-loader">
    <div class="page-loader__wrapper">
      <div class="page-loader__spinner">
        <svg width="164" height="164" viewBox="0 0 164 164" fill="none" xmlns="http://www.w3.org/2000/svg">
          <g clip-path="url(#clip0_369:47)">
            <path d="M30.6391 133.361C23.972 126.694 18.7282 118.922 15.0763 110.27C11.4618 101.748 9.55153 92.7404 9.38298 83.4326H0.019043C0.393601 105.869 9.795 126.113 24.7398 140.702L31.3695 134.073C31.126 133.829 30.8826 133.605 30.6391 133.361Z" fill="#ECD031" />
            <path d="M9.36394 82.0093C9.36394 72.1959 11.2742 62.6821 15.0759 53.7302C18.5968 45.3963 23.5971 37.8677 29.9459 31.3504L23.3162 24.7207C8.89574 39.5157 0 59.7231 0 82.0093C0 82.4774 0 82.9644 0.0187279 83.4326H9.38266C9.36394 82.9456 9.36394 82.4774 9.36394 82.0093Z" fill="#D2BE4B" />
            <path d="M53.7302 148.942C45.3963 145.421 37.8677 140.421 31.3504 134.072L24.7207 140.702C39.497 155.122 59.7044 164.018 81.9905 164.018V154.654C72.1959 154.635 62.6821 152.725 53.7302 148.942Z" fill="#E1C83C" />
            <path d="M110.27 148.942C101.318 152.725 91.8041 154.654 81.9907 154.654V164.018C104.277 164.018 124.484 155.122 139.261 140.702L132.631 134.072C126.132 140.402 118.622 145.403 110.27 148.942Z" fill="#E1C83C" />
            <path d="M164 83.4326H154.636C154.468 92.7404 152.557 101.767 148.943 110.288C145.291 118.941 140.047 126.713 133.38 133.38C133.137 133.623 132.893 133.848 132.668 134.092L139.298 140.721C154.224 126.113 163.607 105.869 164 83.4326Z" fill="#ECD031" />
            <path d="M148.943 53.73C152.726 62.6819 154.655 72.1957 154.655 82.0091C154.655 82.4773 154.655 82.9642 154.636 83.4324H164C164 82.9642 164.019 82.4773 164.019 82.0091C164.019 59.7229 155.123 39.5156 140.703 24.7393L134.073 31.3689C140.403 37.8675 145.404 45.3961 148.943 53.73Z" fill="#ECD031" />
            <path d="M82.0093 9.36394C91.8227 9.36394 101.336 11.2742 110.288 15.0759C118.922 18.7279 126.694 23.9717 133.361 30.6388C133.605 30.8823 133.829 31.1257 134.073 31.3505L140.702 24.7208C125.795 9.4763 105.007 0 82.0093 0V9.36394Z" fill="#D2BE4B" />
            <path d="M30.639 30.6388C37.3061 23.9717 45.0782 18.7279 53.7305 15.0759C62.6824 11.2929 72.1962 9.36394 82.0096 9.36394V0C58.993 0 38.2051 9.47631 23.3164 24.7395L29.9461 31.3692C30.1708 31.1257 30.3955 30.8823 30.639 30.6388Z" fill="#D2BE4B" />
          </g>
          <defs>
            <clipPath id="clip0_369:47">
              <rect width="164" height="164" fill="white" />
            </clipPath>
          </defs>
        </svg>

      </div>
      <!-- /.preloader__spinner -->
      <div class="page-loader__logo"><img src="img/logo--loader.svg" alt=""></div>
      <!-- /.preloader__logo -->
    </div>
    <!-- /.preloader__wrapper -->
  </div>


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