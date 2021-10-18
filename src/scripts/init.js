const modalParams = {
  awaitCloseAnimation: true,
  disableFocus: true,
};

MicroModal.init(modalParams);


tippy('[data-tippy-content]', {
  placement: 'right',
  allowHTML: true,
  maxWidth: 300,
  theme: 'flat',
});

const accordion = document.querySelectorAll('.handorgel')
_.forEach(accordion, (item) => new handorgel(item));

pv.init({
  block: {
    speed: 5,
  },
});