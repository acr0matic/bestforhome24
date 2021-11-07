const data = {
  'production': {
    'mosquito': {
      'price': {
        'standart': 500,
      },

      'naming': {
        'standart': 'Стандарт',
        'antidust': 'Антипыль',
        'antipollen': 'Антипыльца',
        'anticat': 'Антикошка',
        'ultraview': 'Ультравью',
        'common': 'Рамочная сетка',
        'inner': 'Внутренняя сетка',
        'provedal': 'Раздвижная сетка',
        'door': 'Дверная сетка'
      }
    },

    'curtains': {
      'price': {
        'standart': 500,
      },

      'naming': {
        'jalusie': 'Вертикальные жалюзи',
        'jalusie-h': 'Горизонтальные жалюзи',
        'zebra': 'День-ночь',
        'plisse': 'Плиссе',
        'grand': 'Гранд',
        'grand-zebra': 'Гранд день-ночь',
        'grand-plisse': 'Гранд плиссе',
      }
    },
  },

  'service': {

  },
}

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

    this.select[0].addEventListener('highlightChoice', () => {
      const current = this.choices[0].getValue(true);
      const values = data['production'][current]['naming'];

      const list = [];
      _.forOwn(values, (key, value) => {
        list.push({ value: key, label: values[value] })
      })

      this.choices[1].clearChoices();
      this.choices[1].setChoices(list);
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
