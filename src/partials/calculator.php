<section class="section" id="calculator">
  <div class="container">
    <h2 class="section__title">Рассчитайте стоимость самостоятельно</h2>

    <form class="calculator">
      <div class="calculator__header">
        <div class="row">
          <div class="col-6">
            <div class="calculator__wrapper">
              <h3 class="calculator__title">
                Категория изделия
              </h3>

              <div class="input">
                <select class="input__select" data-trigger name="calculator_type">
                  <option value="">Выберите из списка</option>
                  <option value="nets">Москитные сетки</option>
                  <option value="curtains">Рулонные шторы</option>
                </select>
                <!-- /.input -->
              </div>
              <!-- /.input -->
            </div>
            <!-- /.calculator__wrapper -->
          </div>
          <!-- /.col-6 -->

          <div class="col-6">
            <div class="calculator__wrapper">
              <h3 class="calculator__title">
                Вид изделия
              </h3>

              <div class="input">
                <select class="input__select" data-trigger name="calculator_type">
                  <option value="">Выберите из списка</option>
                  <option value="english">Английский язык</option>
                  <option value="сhess">Шахматы</option>
                  <option value="speech">Логопед</option>
                  <option value="music">Музыкальная студия</option>
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
        <div class="row">
          <div class="col-xl-5 pe-4 calculator__border">
            <div class="calculator__wrapper">
              <h3 class="calculator__title">
                Размеры

                <a href="" class="calculator__link link link--nav">
                  Как произвести замер?
                </a>
              </h3>

              <div class="row">
                <div class="col-6">
                  <div class="input">
                    <input placeholder="Ширина в мм." autocomplete="off" type="number" name="" class="input__field">
                    <img data-tippy-content="" class="input__warning" src="img/icons/misc/warning.svg" alt="">
                  </div>
                  <!-- /.input -->
                </div>
                <!-- /.col-6 -->

                <div class="col-6">
                  <div class="input">
                    <input placeholder="Высота в мм." autocomplete="off" type="number" name="" class="input__field">
                    <img data-tippy-content="" class="input__warning" src="img/icons/misc/warning.svg" alt="">
                  </div>
                  <!-- /.input -->
                </div>
                <!-- /.col-6 -->

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

          <div class="col-xl-7 ps-4">
            <div class="row mb-5">
              <div class="col-5">
                <div class="calculator__wrapper">
                  <h3 class="calculator__title">Цвет</h3>
                  <div class="calculator__group">
                    <label class="calculator__value calculator__color calculator__color--white">
                      Белый
                      <input type="radio" name="color" checked>
                    </label>

                    <label class="calculator__value calculator__color calculator__color--brown">
                      Коричневый
                      <input type="radio" name="color">
                    </label>

                    <label class="calculator__value calculator__color calculator__color--RAL">
                      RAL
                      <input type="radio" name="color">
                    </label>
                  </div>
                  <!-- /.calculator__group -->
                </div>
                <!-- /.calculator__wrapper -->
              </div>
              <!-- /.col-6 -->

              <div class="col-7">
                <div class="calculator__wrapper">
                  <h3 class="calculator__title">Крепежи</h3>
                  <div class="calculator__group">
                    <label class="calculator__value calculator__value--image calculator__handle">
                      Пластик
                      <input type="radio" name="fasteners" checked>
                      <img class="calculator__image" src="img/section/calculator/fasteners/plastic-fasteners.jpg" alt="">
                    </label>

                    <label class="calculator__value calculator__value--image calculator__handle">
                      Металл
                      <input type="radio" name="fasteners">
                      <img class="calculator__image" src="img/section/calculator/fasteners/metal-fasteners.jpg" alt="">
                    </label>

                    <label class="calculator__value calculator__value--image calculator__corner">
                      Плунжер
                      <input type="radio" name="fasteners">
                      <img class=" calculator__image" src="img/section/calculator/fasteners/plunger-fasteners.jpg" alt="">
                    </label>
                  </div>
                  <!-- /.calculator__group -->
                </div>
                <!-- /.calculator__wrapper -->
              </div>
              <!-- /.col-6 -->
            </div>
            <!-- /.row -->

            <div class="row">
              <div class="col-5">
                <div class="calculator__wrapper">
                  <h3 class="calculator__title">Ручки</h3>
                  <div class="calculator__group">
                    <label class="calculator__value calculator__value--image calculator__corner">
                      Пластик
                      <input type="radio" name="handle" checked>
                      <img class="calculator__image" src="img/section/calculator/corner/corner-plastic.jpg" alt="">
                    </label>

                    <label class="calculator__value calculator__value--image calculator__corner">
                      Металл
                      <input type="radio" name="handle">
                      <img class=" calculator__image" src="img/section/calculator/corner/corner-metal.jpg" alt="">
                    </label>
                  </div>
                  <!-- /.calculator__group -->
                </div>
                <!-- /.calculator__wrapper -->
              </div>
              <!-- /.col-6 -->

              <div class="col-7">
                <div class="calculator__wrapper">
                  <h3 class="calculator__title">Углы</h3>
                  <div class="calculator__group">
                    <label class="calculator__value calculator__value--image calculator__fasteners">
                      Пластик
                      <input type="radio" name="corner" checked>
                      <img class="calculator__image" src="img/section/calculator/handle/handle-plastic.jpg" alt="">
                    </label>

                    <label class="calculator__value calculator__value--image calculator__fasteners">
                      Металл
                      <input type="radio" name="corner">
                      <img class="calculator__image" src="img/section/calculator/handle/handle-metal.jpg" alt="">
                    </label>
                  </div>
                  <!-- /.calculator__group -->
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
      <!-- /.calculator__body -->
    </form>
    <!-- /.callback -->
  </div>
  <!-- /.container -->
</section>