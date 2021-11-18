const data = {
  'production': {
    'mosquito': {
      'price': {
        'Изделие': {
          'Стандарт': [499, 999],
          'Рамочная': [599, 1299],
        },

        'Рама': {
          'Белая': 0,
          'Коричневая': 200,
          'RAL': 200,
        },

        'Крепеж': {
          'Пластик': 0,
          'Металл': 200,
        },

        'Ручки': {
          'Пластик': 0,
          'Металл': 200,
        },

        'Углы': {
          'Пластик': 0,
          'Металл': 200,
        }
      },

      'advanced': {
        'Доставка': 500,
        'Установка': 500,
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
        'Изделие': {
          "Рулонная": 500,
        },
      },

      'advanced': {
        'Доставка': 500,
        'Установка': 500,
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

let calculatorData = {

};

class CalculatorController {
  constructor(ref) {
    this.calc = ref;
    this.groups = ref.querySelectorAll('.calculator__group');
    this.select = ref.querySelectorAll('[data-trigger]');

    this.fields = ref.querySelectorAll('input, select');
    this.sizeFields = _.filter(Array.from(this.fields), { 'type': 'number', 'disabled': false });
    this.radioGroup = _.invokeMap(this.groups, 'querySelectorAll', 'input[type=radio]');
    this.choices = _.map(this.select, (select) => new Choices(select, {
      searchEnabled: false,
      itemSelectText: 'Выбрать',
      noChoicesText: 'Нет элементов',
    }));


    this.Init();
    this.Events();
  }

  Init() {
    this.UpdateType(this.choices[0].getValue(true));

    const priceData = data.production[this.current].price;
    const priceKeys = _.keys(priceData);

    // Установка цены в инпуты
    _.forEach(priceKeys, price => {
      const picked = this.calc.querySelectorAll(`input[name=${price}]`)
      _.forEach(picked, item => item.dataset.cost = priceData[price][item.value]);
    });

    // Установка цены в объект с ценами из инпутов
    _.forEach(this.fields, field => {
      if (field.type === 'radio' && field.checked && !field.disabled) {
        this.UpdatePrice(field.name, field.value, field.dataset.cost);
      }
    })

    this.UpdateService(this.choices[1].getValue(true));
  }

  Events() {
    _.forEach(this.sizeFields, field => field.addEventListener('input', () => this.CalculateSize(this.sizeFields)));

    _.forEach(this.radioGroup, (group) => {
      _.forEach(group, (radio) => radio.addEventListener('change', () => this.UpdateRadio(group)));
    });

    this.select[0].addEventListener('change', () => {
      const current = this.choices[0].getValue(true);
      const values = data['production'][current]['naming'];

      const list = [];
      _.forOwn(values, (key, value) => {
        list.push({ value: key, label: values[value] })
      })

      this.choices[1].clearChoices();
      this.choices[1].setChoices(list);
      calculatorInner.slideTo(this.choices[0].getValue()['choiceId'] - 1);

      this.UpdateType(this.choices[0].getValue(true));
      this.UpdateService(this.choices[1].getValue(true));
    });

    this.select[1].addEventListener('change', () => {
      const value = this.choices[1].getValue(true)
      const target = this.calc.querySelectorAll('input[name=Крепеж]');
      _.forEach(target, input => {
        if (value !== "Рамочная" && input.value === "Плунжер") {
          input.parentNode.style.display = 'none';
          input.checked = false;
          input.parentNode.classList.remove('calculator__value--active');

          target[0].checked = true;
          target[0].parentNode.classList.add('calculator__value--active');

          this.UpdatePrice(target[0].name, target[0].value, target[0].dataset.cost);
        }

        else {
          input.parentNode.style.display = 'block';
        }
      })

      this.UpdateService(value);
    });
  }

  UpdateRadio(group) {
    _.forEach(group, (radio) => {
      if (radio.checked && !radio.disabled) {
        radio.parentElement.classList.add('calculator__value--active');
        this.UpdatePrice(radio.name, radio.value, radio.dataset.cost);
      }

      else radio.parentElement.classList.remove('calculator__value--active');
    })

    if (this.calc.dataset.service)
      this.UpdateService(this.choices[1].getValue(true));
  }

  UpdateType(type) {
    if (type) this.calc.dataset.current = type;
    this.current = this.calc.dataset.current;

    this.ResetPrice();
    _.forEach(this.radioGroup, (group) => this.UpdateRadio(group))

    if (this.calc.dataset.service) {
      this.CalculateSize(this.fields);
      this.UpdateTotal();
    }
  }

  UpdateService(service) {
    if (service) this.calc.dataset.service = service;
    this.service = this.calc.dataset.service;

    this.CalculateSize(this.fields);
  }

  UpdatePrice(key, value, cost) {
    calculatorData[key] = [value, cost];
  }

  ResetPrice() {
    calculatorData = {};
  }

  UpdateTotal() {
    calculatorData['Итого'] = 0;

    _.forEach(calculatorData, (key, value) => {
      if (value !== 'Итого') calculatorData['Итого'] += parseInt(key[1]);
    });
  }

  UpdateTable() {

  }

  CalculateSize(fields) {
    const price = data.production[this.current].price['Изделие'];

    const fieldsArray = Array.from(fields);
    const width = _.find(fieldsArray, ['name', 'width']).value || 0;
    const height = _.find(fieldsArray, ['name', 'height']).value || 0;

    const addPriceValue = (price[this.service][1] / 100) * 10;

    if ((width !== 0 || height !== 0)) {
      if (width * height > 10000) {
        const multiplier = Math.ceil((width * height) / 1000 - 10);

        if (multiplier != 0)
          calculatorData['Изделие'] = [this.service, Math.floor(price[this.service][1] + multiplier * addPriceValue)];

        else calculatorData['Изделие'] = [this.service, price[this.service][1]];
      }

      else if (width * height > 2500)
        calculatorData['Изделие'] = [this.service, price[this.service][1]];

      else calculatorData['Изделие'] = [this.service, price[this.service][0]];
    }

    else calculatorData['Изделие'] = [this.service, price[this.service][0]];


    this.UpdateTotal();
  }
}
