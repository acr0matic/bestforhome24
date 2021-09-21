const header = document.querySelector('#header');
const headerDropdown = header.querySelectorAll('.nav__list .dropdown > .dropdown__header');

let scrollPosition = window.pageYOffset;

headerDropdown.forEach((dropdown) => {
  dropdown.addEventListener('click', () => dropdown.parentNode.classList.toggle('dropdown--open'));
  window.addEventListener('click',
    (e) => {
      if (!dropdown.parentNode.contains(e.target)) dropdown.parentNode.classList.remove('dropdown--open');
    });

  window.addEventListener('scroll',
    () => {
      scrollPosition = window.pageYOffset;
      if (scrollPosition >= 150) dropdown.parentNode.classList.remove('dropdown--open');
    });
});
