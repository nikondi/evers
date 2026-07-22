import {lockBody, unlockBody} from "@/helpers/popups";

export default function initSearch() {
  const wrapper = document.querySelector<HTMLElement>('.search');
  const searchInput = document.getElementById('search-input') as HTMLInputElement;
  const notFound = document.querySelector<HTMLElement>('.search-not-found');
  const results = document.querySelector<HTMLElement>('.search-results');

  const triggers = wrapper.querySelectorAll<HTMLButtonElement>('.search-results-trigger');
  const contents = wrapper.querySelectorAll<HTMLButtonElement>('.search-results-tab');

  triggers.forEach((trigger, i) => {
    trigger.addEventListener('click', () => {
      contents.forEach((content, index) => {
        if (i === index)
          content.classList.add('active');
        else
          content.classList.remove('active');
      });
      triggers.forEach((t, index) => {
        if (i === index)
          t.classList.add('active');
        else
          t.classList.remove('active');
      });
    })
  });
  searchInput.addEventListener('input', () => {
    if (searchInput.value.length > 3) {
      if (Math.random() < 0.5) {
        notFound.classList.add('active');
        results.classList.remove('active');
      } else {
        notFound.classList.remove('active');
        results.classList.add('active');
      }
    } else {
      notFound.classList.remove('active');
      results.classList.remove('active');
    }
  });

  const openButton = document.querySelector<HTMLButtonElement>('.header-search');
  const closeButton = wrapper.querySelector<HTMLButtonElement>('.search-close');
  const body = wrapper.querySelector<HTMLButtonElement>('.search-body');
  const open = () => {
    wrapper.classList.add('active');
    lockBody();
  }
  const close = () => {
    wrapper.classList.remove('active');
    unlockBody();
  }

  openButton.addEventListener('click', open);

  wrapper.addEventListener('click', close);
  closeButton.addEventListener('click', close);

  body.addEventListener('click', (e) => e.stopPropagation());
}