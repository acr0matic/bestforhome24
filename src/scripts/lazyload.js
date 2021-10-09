
const lazyLoadInstance = new LazyLoad({
  elements_selector: '.lazy',
  unobserve_entered: true,
  callback_enter: executeLazyFunction,

  callback_loaded: (trigger) => {
    const container = trigger.closest('div');
    const loader = container.querySelector('.preloader');

    if (loader) loader.classList.add('preloader--hide');
  },
});

function executeLazyFunction(element) {
  const lazyFunctionName = element.getAttribute("data-lazy-function");
  const lazyFunction = window.lazyFunctions[lazyFunctionName];

  if (!lazyFunction) return;

  lazyFunction(element);
}

window.lazyFunctions = {
  map: (element) => {
    const script = document.createElement('script');
    script.src = 'https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Aeb43c71a35f82b72f4fb211ee6d0101918a651b0d54c8fcffdf3354cc4e95772&amp;width=100%&amp;height=100%&amp;lang=ru_RU&amp;scroll=false';

    element.appendChild(script);
  },
};