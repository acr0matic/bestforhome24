<section class="section" id="calculator" data-current="mosquito">
  <div class="container">
    <h2 class="section__title">Рассчитайте стоимость самостоятельно</h2>

    <form class="calculator">
      <div class="swiper slider-calculator calculator__slider">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="calculator__header">
              <div class="row">
                <div class="col-12 col-md-6 mb-4 mb-md-0">
                  <div class="calculator__wrapper">
                    <h3 class="calculator__title">
                      Категория изделия
                    </h3>

                    <div class="input">
                      <select class="input__select" data-trigger name="calculator_type">
                        <option value="mosquito">Москитные сетки</option>
                        <option value="curtains">Рулонные шторы</option>
                      </select>
                      <!-- /.input -->
                    </div>
                    <!-- /.input -->
                  </div>
                  <!-- /.calculator__wrapper -->
                </div>
                <!-- /.col-6 -->

                <div class="col-12 col-md-6">
                  <div class="calculator__wrapper">
                    <h3 class="calculator__title">
                      Вид изделия
                    </h3>

                    <div class="input">
                      <select class="input__select" data-trigger name="calculator_type">
                        <option value="Рамочная">Рамочная сетка</option>
                        <option value="Внутренняя">Внутренняя сетка</option>
                        <option value="Раздвижная">Раздвижная сетка</option>
                        <option value="Дверная">Дверная сетка</option>
                        <option value="Стандарт">Стандарт</option>
                        <option value="Антипыль">Антипыль</option>
                        <option value="Антипыльца">Антипыльца</option>
                        <option value="Антикошка">Антикошка</option>
                        <option value="Ультравью">Ультравью</option>
                      </select>
                      <!-- /.input -->
                    </div>
                    <!-- /.input -->
                  </div>
                  <!-- /.calculator__wrapper -->
                </div>
                <!-- /.col-6 -->
              </div>
              <!-- /.row -->
            </div>
            <!-- /.calculator__header -->

            <div class="calculator__body">
              <div class="swiper slider-calculator-inner">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="row">
                      <div class="col-xl-4 pe-4 mb-4 mb-md-0 calculator__border">
                        <div class="calculator__wrapper">
                          <h3 class="calculator__title">
                            Конструкция

                            <a href="" class="calculator__link link link--nav">
                              Как произвести замер?
                            </a>
                          </h3>

                          <div class="row">
                            <div class="col-6">
                              <div class="input">
                                <input placeholder="Ширина в мм." autocomplete="off" type="number" name="width" class="input__field">
                                <img data-tippy-content="" class="input__warning" src="img/icons/misc/warning.svg" alt="">
                              </div>
                              <!-- /.input -->
                            </div>
                            <!-- /.col-6 -->

                            <div class="col-6">
                              <div class="input">
                                <input placeholder="Высота в мм." autocomplete="off" type="number" name="height" class="input__field">
                                <img data-tippy-content="" class="input__warning" src="img/icons/misc/warning.svg" alt="">
                              </div>
                              <!-- /.input -->
                            </div>
                            <!-- /.col-6 -->

                            <!--
                            <div class="col-12 mt-4">
                              <select class="input__select" data-trigger name="calculator_type">
                                <option value="">Вид полотна</option>
                                <option value="english">Английский язык</option>
                                <option value="сhess">Шахматы</option>
                                <option value="speech">Логопед</option>
                                <option value="music">Музыкальная студия</option>
                              </select>
                            </div> -->

                            <div class="col-12">
                              <div class="calculator__preview">
                                <img src="img/section/calculator/prototype/net.svg" alt="" class="calculator__image image">
                              </div>
                              <!-- /.calculator__preview -->
                            </div>
                            <!-- /.col-12 -->
                          </div>
                          <!-- /.row -->
                        </div>
                        <!-- /.calculator__wrapper -->
                      </div>
                      <!-- /.col-6 -->

                      <div class="col-xl-8 ps-md-4">
                        <div class="row mb-4 mb-md-5">
                          <div class="col-6 col-md-5">
                            <div class="calculator__wrapper">
                              <h3 class="calculator__title">Цвет рамы</h3>
                              <div data-field="color" class="calculator__group custom-scrollbar">
                                <label class="calculator__value calculator__color calculator__color--white">
                                  Белый
                                  <input type="radio" name="Рама" value="Белая" checked>
                                </label>

                                <label class="calculator__value calculator__color calculator__color--brown">
                                  Коричневый
                                  <input type="radio" name="Рама" value="Коричневая">
                                </label>

                                <label class="calculator__value calculator__color calculator__color--RAL">
                                  RAL
                                  <input type="radio" name="Рама" value="RAL">
                                </label>
                              </div>
                              <!-- /.calculator__group custom-scrollbar -->
                            </div>
                            <!-- /.calculator__wrapper -->
                          </div>
                          <!-- /.col-6 -->

                          <div class="col-6 col-md-7">
                            <div class="calculator__wrapper">
                              <h3 class="calculator__title">Крепежи</h3>
                              <div data-price="" class="calculator__group custom-scrollbar">
                                <label class="calculator__value calculator__value--image calculator__handle">
                                  Пластик
                                  <input type="radio" name="Крепеж" value="Пластик" checked>
                                  <img class="calculator__image" src="img/section/calculator/fasteners/plastic-fasteners.jpg" alt="">
                                </label>

                                <label class="calculator__value calculator__value--image calculator__handle">
                                  Металл
                                  <input type="radio" name="Крепеж" value="Металл">
                                  <img class="calculator__image" src="img/section/calculator/fasteners/metal-fasteners.jpg" alt="">
                                </label>

                                <label class="calculator__value calculator__value--image calculator__corner">
                                  Плунжер
                                  <input type="radio" name="Крепеж" value="Плунжер">
                                  <img class=" calculator__image" src="img/section/calculator/fasteners/plunger-fasteners.jpg" alt="">
                                </label>
                              </div>
                              <!-- /.calculator__group custom-scrollbar -->
                            </div>
                            <!-- /.calculator__wrapper -->
                          </div>
                          <!-- /.col-6 -->
                        </div>
                        <!-- /.row -->

                        <div class="row">
                          <div class="col-6 col-md-5">
                            <div class="calculator__wrapper">
                              <h3 class="calculator__title">Ручки</h3>
                              <div data-price="" class="calculator__group custom-scrollbar">
                                <label class="calculator__value calculator__value--image calculator__corner">
                                  Пластик
                                  <input type="radio" name="Ручки" value="Пластик" checked>
                                  <img class="calculator__image" src="img/section/calculator/corner/corner-plastic.jpg" alt="">
                                </label>

                                <label class="calculator__value calculator__value--image calculator__corner">
                                  Металл
                                  <input type="radio" name="Ручки" value="Металл">
                                  <img class=" calculator__image" src="img/section/calculator/corner/corner-metal.jpg" alt="">
                                </label>
                              </div>
                              <!-- /.calculator__group custom-scrollbar -->
                            </div>
                            <!-- /.calculator__wrapper -->
                          </div>
                          <!-- /.col-6 -->

                          <div class="col-6 col-md-7">
                            <div class="calculator__wrapper">
                              <h3 class="calculator__title">Углы</h3>
                              <div data-price="" class="calculator__group custom-scrollbar">
                                <label class="calculator__value calculator__value--image calculator__fasteners">
                                  Пластик
                                  <input type="radio" name="Углы" value="Пластик" checked>
                                  <img class="calculator__image" src="img/section/calculator/handle/handle-plastic.jpg" alt="">
                                </label>

                                <label class="calculator__value calculator__value--image calculator__fasteners">
                                  Металл
                                  <input type="radio" name="Углы" value="Металл">
                                  <img class="calculator__image" src="img/section/calculator/handle/handle-metal.jpg" alt="">
                                </label>
                              </div>
                              <!-- /.calculator__group custom-scrollbar -->
                            </div>
                            <!-- /.calculator__wrapper -->
                          </div>
                          <!-- /.col-6 -->
                        </div>
                        <!-- /.row -->
                      </div>
                      <!-- /.col-6 -->
                    </div>
                    <!-- /.row -->
                  </div>
                  <!-- /.swiper-slide -->

                  <div class="swiper-slide">
                    <div class="row">
                      <div class="col-xl-4 pe-4 mb-4 mb-md-0 calculator__border">
                        <div class="calculator__wrapper">
                          <div class="calculator__preview">
                            <img src="img/section/calculator/prototype/net.svg" alt="" class="calculator__image image">
                          </div>
                          <!-- /.calculator__preview -->
                        </div>
                        <!-- /.calculator__wrapper -->
                      </div>
                      <!-- /.col-6 -->

                      <div class="col-xl-8 ps-md-4">
                        <div class="row mb-4 mb-md-5">
                          <div class="col-12">
                            <div class="calculator__wrapper">
                              <h3 class="calculator__title">
                                Конструкция

                                <a href="" class="calculator__link link link--nav">
                                  Как произвести замер?
                                </a>
                              </h3>

                              <div class="row">
                                <div class="col-6">
                                  <div class="input">
                                    <input placeholder="Ширина в мм." autocomplete="off" type="number" name="width" class="input__field">
                                    <img data-tippy-content="" class="input__warning" src="img/icons/misc/warning.svg" alt="">
                                  </div>
                                  <!-- /.input -->
                                </div>
                                <!-- /.col-6 -->

                                <div class="col-6">
                                  <div class="input">
                                    <input placeholder="Высота в мм." autocomplete="off" type="number" name="height" class="input__field">
                                    <img data-tippy-content="" class="input__warning" src="img/icons/misc/warning.svg" alt="">
                                  </div>
                                  <!-- /.input -->
                                </div>
                                <!-- /.col-6 -->
                              </div>
                              <!-- /.row -->
                            </div>
                          </div>
                          <!-- /.col-9 -->
                        </div>
                        <!-- /.row -->

                        <div class="row">
                          <div class="col-3">
                            <div class="calculator__wrapper">
                              <h3 class="calculator__title">Цвет рамы</h3>
                              <div class="calculator__group custom-scrollbar">
                                <label class="calculator__value calculator__color calculator__color--white">
                                  Белый
                                  <input type="radio" name="Цвет" value="Белый" checked>
                                </label>

                                <label class="calculator__value calculator__color calculator__color--brown">
                                  Коричневый
                                  <input type="radio" name="Цвет" value="Коричневый">
                                </label>
                              </div>
                              <!-- /.calculator__group custom-scrollbar -->
                            </div>
                            <!-- /.calculator__wrapper -->
                          </div>
                          <!-- /.col-4 -->

                          <div class="col-9">
                            <div class="calculator__wrapper">
                              <h3 class="calculator__title">Дополнительная информация</h3>
                              <p class="calculator__description">Далеко-далеко за словесными горами в стране гласных и согласных живут рыбные тексты. Она образ реторический грустный его обеспечивает мир текстов страну своих!</p>
                            </div>
                            <!-- /.calculator__wrapper -->
                          </div>
                          <!-- /.col-12 -->
                        </div>
                        <!-- /.row -->
                      </div>
                      <!-- /.col-6 -->
                    </div>
                    <!-- /.row -->
                  </div>
                  <!-- /.swiper-slide -->
                </div>
                <!-- /.swiper-wrapper -->
              </div>
              <!-- /.swiper slider-calculator-inner -->
            </div>
            <!-- /.calculator__body -->
          </div>
          <!-- /.swiper-slide -->

          <div class="swiper-slide">
            <div class="calculator__body pt-0">
              <div class="row">
                <div class="col-12 mb-4 mb-md-0 col-md-6">
                  <div class="calculator__wrapper">
                    <h3 class="calculator__title">
                      Сводка
                    </h3>

                    <table class="table table--calculator">
                      <thead>
                        <tr>
                          <th>Параметр</th>
                          <th>Значение</th>
                          <th>Цена</th>
                        </tr>
                      </thead>

                      <tbody>
                        <tr>
                          <td>Размеры</td>
                          <td>50x50</td>
                          <td>499р</td>
                        </tr>
                        <tr>
                          <td>Цвет</td>
                          <td>Белый</td>
                          <td>0р</td>
                        </tr>
                        <tr>
                          <td>Крепеж</td>
                          <td>Пластик</td>
                          <td>0р</td>
                        </tr>
                        <tr>
                          <td>Углы</td>
                          <td>Пластик</td>
                          <td>0р</td>
                        </tr>
                        <tr>
                          <td>Ручки</td>
                          <td>Пластик</td>
                          <td>0р</td>
                        </tr>
                        <tr>
                          <td>Установка</td>
                          <td>Нет</td>
                          <td>0р</td>
                        </tr>
                        <tr>
                          <td>Доставка</td>
                          <td>Нет</td>
                          <td>0р</td>
                        </tr>
                        <tr style="background-color: #fafafa;">
                          <td style="text-align: right;" colspan="2">Итого:</td>
                          <td>0р</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <!-- /.calculator__wrapper -->
                </div>
                <!-- /.col-6 -->

                <div class="col-12 col-md-6">
                  <div class="calculator__wrapper">
                    <h3 class="calculator__title">
                      Дополнительные услуги
                    </h3>

                    <div class="calculator__additional">
                      <div class="calculator__service me-4">
                        <label class="checkbox">
                          <input type="checkbox">
                          <span class="checkbox__mark"></span>
                          <span class="checkbox__label">Доставка</span>
                        </label>
                      </div>
                      <!-- /.calculator__service -->

                      <div class="calculator__service">
                        <label class="checkbox">
                          <input type="checkbox">
                          <span class="checkbox__mark"></span>
                          <span class="checkbox__label">Установка</span>
                        </label>
                      </div>
                      <!-- /.calculator__service -->
                    </div>
                    <!-- /.calculator__additional -->

                    <p class="calculator__info">Цены на допольнительные услуги могут меняться в зависимости от количества изделий и местоположения объекта. Уточняйте у менеджера.</p>
                  </div>
                  <!-- /.calculator__wrapper -->

                  <div class="calculator__wrapper">
                    <h3 class="calculator__title">
                      Оставить заявку
                    </h3>

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

                    <button data-sending="Отправка..." class="form__button button button-primary ms-auto" type="submit">Отправить заявку</button>
                  </div>
                  <!-- /.calculator__wrapper -->
                </div>
                <!-- /.col-6 -->
              </div>
              <!-- /.row -->
            </div>
            <!-- /.calculator__body -->
          </div>
          <!-- /.swiper-slide -->
        </div>
        <!-- /.swiper-wrapper -->
      </div>
      <!-- /.swiper slider-calculator -->

      <div class="calculator__footer">
        <div class="row align-items-center m-0 flex-column-reverse flex-md-row">
          <div class="col-12 col-md-6 px-0">
            <p class="calculator__info">
              Cтоимость указанная в калькуляторе не является публичной офертой.
              <br>
              Итоговая стоимость определяется после проведения точных замеров.
            </p>
          </div>
          <!-- /.col-4 -->

          <div class="col-12 col-md-5 offset-md-1 px-0 mb-4 mb-md-0">
            <div class="calculator__control">
              <button type="button" class="calculator__prev button button-primary" disabled>Назад</button>
              <button type="button" class="calculator__next button button-primary mb-3 mb-md-0 ms-md-3">Далее</button>
            </div>
            <!-- /.calculator__control -->
          </div>
          <!-- /.col-8 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.calculator__footer -->
    </form>
    <!-- /.callback -->
  </div>
  <!-- /.container -->
</section>