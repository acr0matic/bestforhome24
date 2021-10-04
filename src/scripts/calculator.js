class CalculatorController {
  constructor(ref) {
    this.calc = ref;
    this.groups = ref.querySelectorAll('.calculator__group');
    this.select = ref.querySelectorAll('[data-trigger]');

    this.radioGroup = _.invokeMap(this.groups, 'querySelectorAll', 'input[type=radio]');
    this.choices = _.map(this.select, (select) => new Choices(select, {
      searchEnabled: false,
      itemSelectText: 'Выбрать',
      noChoicesText: 'Нет элементов',
    }));

    _.forEach(this.radioGroup, (group) => this.UpdateRadio(group))
    this.Events();
  }

  Events() {
    _.forEach(this.radioGroup, (group) => {
      _.forEach(group, (radio) => radio.addEventListener('change', () => this.UpdateRadio(group)));
    });

    this.select[0].addEventListener('choice', () => {
      this.choices[1].clearChoices();

      console.log(this.choices[0].getValue());
    });
  }

  UpdateRadio(group) {
    _.forEach(group, (radio) => {
      if (radio.checked) radio.parentElement.classList.add('calculator__value--active');
      else radio.parentElement.classList.remove('calculator__value--active');
    })
  }

  UpdatePrice() {

  }

  UpdateType() {

  }
}
