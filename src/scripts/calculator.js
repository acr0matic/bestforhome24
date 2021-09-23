/* eslint-disable class-methods-use-this */
/* eslint-disable wrap-iife */
/* eslint-disable no-undef */

class CalculatorController {
  constructor(ref) {
    this.calc = ref;
    this.groups = ref.querySelectorAll('.calculator__group');
    this.radioGroup = _.map(this.groups, (group) => group.querySelectorAll('input[type=radio]'));

    this.radioGroup.forEach((group) => this.UpdateRadio(group));
    this.Events();
  }

  Events() {
    this.radioGroup.forEach((group) => {
      group.forEach((radio) => {
        radio.addEventListener('change', () => this.UpdateRadio(group));
      });
    });
  }

  UpdateRadio(group) {
    group.forEach((radio) => {
      if (radio.checked) radio.parentElement.classList.add('calculator__value--active');
      else radio.parentElement.classList.remove('calculator__value--active');
    });
  }

  UpdatePrice() {

  }

  UpdateType() {

  }
}
