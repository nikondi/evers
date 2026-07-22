import Swiper from "swiper";

export default function manufacturePage() {
  initImages();
  initCounter();
  initTabs();
}

function initImages() {
  const el = document.querySelector(".product-images-slider") as HTMLElement;
  if (!el)
    return;

  new Swiper(el, {
    spaceBetween: 20
  });
}

function initCounter() {
  document.querySelectorAll<HTMLElement>(".product-quantity").forEach((wrapper) => {
    const input = wrapper.querySelector(".product-quantity__input") as HTMLInputElement;
    const plus = wrapper.querySelector(".product-quantity__btn-plus") as HTMLButtonElement;
    const minus = wrapper.querySelector(".product-quantity__btn-minus") as HTMLButtonElement;
    const display = wrapper.querySelector(".product-quantity__display") as HTMLSpanElement;
    const count = wrapper.querySelector(".product-quantity__count") as HTMLDivElement;

    const min = wrapper.dataset.min ? parseInt(wrapper.dataset.min) : 1;
    const max = wrapper.dataset.max ? parseInt(wrapper.dataset.max) : Infinity;

    const changeValue = (v: string) => {
      if (parseInt(v) < min)
        v = min + '';
      if (parseInt(v) > max)
        v = max + '';

      v = v.trim() ? v.replace(/\D/, '') : '1';
      input.value = v;
      display.innerText = v;
    }

    display.addEventListener('input', () => changeValue(display.innerText));
    display.addEventListener('focus', () => count.classList.add('focused'));
    display.addEventListener('blur', () => count.classList.remove('focused'));
    count.addEventListener('click', () => display.focus());
    plus.addEventListener('click', () => {
      changeValue((parseInt(input.value) || 1) + 1 + '')
    });
    minus.addEventListener('click', () => {
      const newValue = parseInt(input.value) - 1;
      changeValue((newValue > 0 ? newValue : 1) + '')
    });
  });
}

function initTabs() {
  const wrapper = document.querySelector(".product-tabs") as HTMLElement;
  if (!wrapper)
    return;

  const triggers = wrapper.querySelectorAll<HTMLButtonElement>(".product-tab-trigger");
  const contents = wrapper.querySelectorAll<HTMLButtonElement>(".product-tab");

  triggers.forEach((trigger, index) => {
    trigger.addEventListener('click', () => {
      contents.forEach((content, i) => i == index ? content.classList.add('active') : content.classList.remove('active'))
      triggers.forEach((t, i) => i == index ? t.classList.add('active') : t.classList.remove('active'))
    })
  })
}