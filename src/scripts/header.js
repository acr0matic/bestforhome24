const header = document.querySelector('#header');
const headerDropdown = header.querySelectorAll('.nav__list .dropdown > .dropdown__header');
const dropdownOpenClass = 'dropdown--open';

let scrollPosition = window.pageYOffset;

_.forEach(headerDropdown, (dropdown) => {
  dropdown.addEventListener('click', () => Dropdown(dropdown, 'toggle'));
  window.addEventListener('click',
    (e) => {
      if (!dropdown.parentNode.contains(e.target)) Dropdown(dropdown, 'hide');
    });

  window.addEventListener('scroll',
    () => {
      scrollPosition = window.pageYOffset;
      if (scrollPosition >= 150) Dropdown(dropdown, 'hide');
    });
})

function Dropdown(dropdown, action) {
  const className = 'dropdown--open';

  if (action === 'hide') dropdown.parentNode.classList.remove(className);
  else if (action === 'toggle') dropdown.parentNode.classList.toggle(className);
}

/* Логика для мобильного меню */
const mobileMenuButton = document.querySelector('.header__mobile');
const mobileBurger = mobileMenuButton.querySelector('.hamburger')
const mobileMenu = document.getElementById('mobile-menu');
const mobileOverlay = mobileMenu.querySelector('.mobile-menu__overlay');

mobileMenuButton.addEventListener('click', () => {
  mobileBurger.classList.toggle('is-active');
  mobileMenu.classList.toggle('mobile-menu--open');
});

mobileOverlay.addEventListener('click', () => {
  mobileBurger.classList.remove('is-active');
  mobileMenu.classList.remove('mobile-menu--open');
});
