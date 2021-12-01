/* eslint-disable no-undef */
/* eslint-disable no-new */

const Calculator = document.getElementById('calculator');
if (Calculator) new CalculatorController(Calculator);

const preloader = document.getElementById('page-loader');
document.addEventListener("DOMContentLoaded", function () {
  window.setTimeout(function () {
    preloader.classList.add('page-loader--hide');
  }, 500);
});
