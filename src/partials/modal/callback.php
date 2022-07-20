<div class="modal modal-callback micromodal-slide" id="modal-callback" aria-hidden="true">
  <div class="modal__overlay" data-micromodal-close>
    <div class="modal__container" role="dialog" aria-modal="true">
      <header class="modal__header">
        <div class="modal__title">Заказать обратный звонок</div>

        <svg data-micromodal-close class="modal__close svg" viewBox="0 0 512 512">
          <path fill="#272727" data-micromodal-close d="M284.286,256.002L506.143,34.144c7.811-7.811,7.811-20.475,0-28.285c-7.811-7.81-20.475-7.811-28.285,0L256,227.717
          			L34.143,5.859c-7.811-7.811-20.475-7.811-28.285,0c-7.81,7.811-7.811,20.475,0,28.285l221.857,221.857L5.858,477.859
          			c-7.811,7.811-7.811,20.475,0,28.285c3.905,3.905,9.024,5.857,14.143,5.857c5.119,0,10.237-1.952,14.143-5.857L256,284.287
          			l221.857,221.857c3.905,3.905,9.024,5.857,14.143,5.857s10.237-1.952,14.143-5.857c7.811-7.811,7.811-20.475,0-28.285
          			L284.286,256.002z" />
        </svg>
      </header>

      <main class="modal__content">
        <p class="modal__description">
          Оставьте свои контактные данные и мы свяжемся <br> с Вами в ближайшее рабочее время.
        </p>

        <form class="form" action="php/mail.php" data-target="callback">
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
              <span class="checkbox__label">Я согласен на <a href="policy.html" class="checkbox__policy">обработку</a> моих персональных данных.</span>
            </label>
          </div>
          <!-- /.input -->

          <button data-sending="Отправка..." class="form__button button button-primary mx-auto" type="submit">Отправить</button>
        </form>
      </main>
    </div>
    <!-- /.modal__container -->
  </div>
  <!-- /.modal__overlay -->
</div>
<!-- /.modal -->