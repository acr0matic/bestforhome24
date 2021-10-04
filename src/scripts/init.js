const modalParams = {
  awaitCloseAnimation: true,
  disableFocus: true,
};

MicroModal.init(modalParams);


tippy('.input__warning[data-tippy-content]', {
  placement: 'right',
  allowHTML: true,
  maxWidth: 300,
  theme: 'flat',
});