const data = {
  'production': {
    'mosquito': {
      'price': {
        'Изделие': {
          'Стандарт': [499, 999],
          'Рамочная сетка': [599, 1299],
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
    },

    'curtains': {
      'price': {
        'Изделие': {
          'Вертикальные жалюзи': [499, 999],
        },
      },

      'advanced': {
        'Доставка': 500,
        'Установка': 500,
      },
    },
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
    this.checkbox = _.filter(Array.from(this.fields), { 'type': 'checkbox', 'disabled': false });
    this.radioGroup = _.invokeMap(this.groups, 'querySelectorAll', 'input[type=radio]');
    this.choices = _.map(this.select, (select) => new Choices(select, {
      searchEnabled: false,
      itemSelectText: 'Выбрать',
      noChoicesText: 'Нет элементов',
    }));

    this.table = ref.querySelector('.table tbody');

    this.Init();
    this.Events();
  }

  Init() {
    this.UpdateType(this.choices[0].getValue(true));

    const priceData = data.production[this.current];
    const priceKeys = _.keys(priceData.price);
    const advancedKeys = _.keys(priceData.advanced);

    // Установка цены в радиокнопки
    _.forEach(priceKeys, price => {
      const picked = this.calc.querySelectorAll(`input[name=${price}]`)
      _.forEach(picked, item => {
        item.dataset.cost = priceData.price[price][item.value];
      });
    });

    // Установка цены в чекбоксы
    _.forEach(advancedKeys, price => {
      const picked = this.calc.querySelectorAll(`input[name=${price}]`)
      _.forEach(picked, item => {
        item.dataset.cost = priceData.advanced[item.name];
      });
    });

    // Установка цены в объект с ценами из инпутов
    _.forEach(this.fields, field => {
      if ((field.type === 'radio' || field.type === 'checkbox') && field.checked && !field.disabled)
        this.UpdatePrice(field.name, field.value, field.dataset.cost);
    })

    this.UpdateChoices();
    this.UpdateService(this.choices[1].getValue(true));
    this.UpdateTable();
  }

  Events() {
    _.forEach(this.sizeFields, field => field.addEventListener('input', () => this.CalculateSize(this.sizeFields)));
    _.forEach(this.checkbox, field => field.addEventListener('change', () => this.UpdateCheckbox(field)));

    _.forEach(this.radioGroup, (group) => {
      _.forEach(group, (radio) => radio.addEventListener('change', () => this.UpdateRadio(group)));
    });

    this.select[0].addEventListener('change', () => {
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

  UpdateChoices() {
    const current = this.choices[0].getValue(true);
    const keys = _.keys(data['production'][current].price['Изделие']);
    const firstItem = _.values(keys)[0];

    const list = _.map(keys, (key) => ({ 'value': key, 'label': key }));

    this.choices[1].clearChoices();
    this.choices[1].setChoices(list);
    this.choices[1].setChoiceByValue(firstItem);
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

  UpdateCheckbox(checkbox) {
    const price = checkbox.dataset.cost;
    const name = checkbox.parentNode.querySelector('.checkbox__label').innerHTML;

    if (checkbox.checked) {
      checkbox.value = 'Да';
      this.UpdatePrice(name, checkbox.value, price);
    }

    else {
      checkbox.value = 'Нет';
      this.UpdatePrice(name, checkbox.value, 0);
    }

    this.UpdateTotal();
  }

  UpdateType(type) {
    if (type) this.calc.dataset.current = type;
    this.current = this.calc.dataset.current;

    this.UpdateChoices();

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

  UpdatePrice(key, value, additional) {
    if (additional !== undefined) calculatorData[key] = [value, additional];
    else calculatorData[key] = value;
  }

  ResetPrice() {
    calculatorData = {};
  }

  UpdateTotal() {
    calculatorData['Итого'] = 0;

    _.forEach(calculatorData, (key, value) => {
      if (value !== 'Итого') calculatorData['Итого'] += parseInt(key[1]);
    });

    this.UpdateTable();
  }

  UpdateTable() {
    const dataLength = _.keys(calculatorData).length - 1;
    let index = 0;
    this.table.innerHTML = '';

    _.forEach(calculatorData, (key, value) => {
      if (index !== dataLength) {
        if (_.isArray(key)) {
          this.table.innerHTML +=
            `<tr>
            <td>${value}</td>
            <td>${key[0]}</td>
            <td>${key[1]}р</td>
          </tr>`;
        }

        else {
          this.table.innerHTML +=
            `<tr>
            <td colspan="2">${value}</td>
            <td>${key}р</td>
          </tr>`;
        }
      }

      else {
        this.table.innerHTML +=
          `<tr>
            <td colspan="2">${value}</td>
            <td>${key}р</td>
          </tr>`;
      }

      index++;
    });
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
