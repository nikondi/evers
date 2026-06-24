import Swiper from "swiper";
import {Navigation, Pagination} from "swiper/modules";

export default function initAssortmentSliders() {
  (document.querySelectorAll('.assortment-slider') as NodeListOf<HTMLElement>).forEach((el) => {
    const progressbar = el.querySelector('.slider-progressbar') as HTMLElement;

    new Swiper(el as HTMLElement, {
      modules: [Navigation, Pagination],
      slidesPerView: 1,
      spaceBetween: 20,
      breakpoints: {
        1360: {
          slidesPerView: 4
        }
      },
      pagination: {
        el: progressbar,
        type: "progressbar"
      }
    });
  });
}