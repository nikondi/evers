import Swiper from "swiper";
import {FreeMode, Mousewheel, Navigation, Pagination} from "swiper/modules";

export default function aboutPage() {
  initValuesSlider();
  initHistorySlider();
}

function initValuesSlider() {
  const el = document.querySelector(".about-value-slider") as HTMLElement;
  if (!el) return;

  const prevButton = el.querySelector('.slider-arrow-prev') as HTMLElement;
  const nextButton = el.querySelector('.slider-arrow-next') as HTMLElement;
  const progressbar = el.querySelector('.slider-progressbar') as HTMLElement;

  el.querySelectorAll('.about-value-flip').forEach(b => {
    b.addEventListener('click', () => b.closest('.about-value')?.classList.toggle('flip'))
  })

  new Swiper(el as HTMLElement, {
    modules: [Navigation, Pagination],
    slidesPerView: 1,
    spaceBetween: 20,
    breakpoints: {
      1360: {
        slidesPerView: 3
      }
    },
    navigation: {
      prevEl: prevButton,
      nextEl: nextButton,
    },
    pagination: {
      el: progressbar,
      type: "progressbar"
    }
  });
}

function initHistorySlider() {
  const el = document.querySelector(".about-history") as HTMLElement;
  if (!el) return;

  new Swiper(el, {
    modules: [Mousewheel, FreeMode],
    freeMode: {
      enabled: true,
      momentumBounce: true,

    },
    slidesPerView: 'auto',
    spaceBetween: 20,
    mousewheel: {
      enabled: true,
      releaseOnEdges: true
    }
  })
}