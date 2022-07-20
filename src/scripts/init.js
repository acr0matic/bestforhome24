MicroModal.init(modalParams);

tippy('[data-tippy-content]', {
  allowHTML: true,
  maxWidth: 300,
  theme: 'flat',
});

const accordion = document.querySelectorAll('.handorgel')
_.forEach(accordion, (item) => new handorgel(item));

const scrollController = new SmoothScroll('a[href*="#"]', {
  speed: 500,
  speedAsDuration: true,
});

AOS.init({
  once: true,
});

const modalTrigger = document.querySelectorAll('[data-micromodal-trigger]');
_.forEach(modalTrigger, trigger => {
  trigger.addEventListener('click', () => {
    currentModal = trigger.dataset.micromodalTrigger;
  });
})