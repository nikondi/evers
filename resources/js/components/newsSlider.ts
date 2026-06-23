import Swiper from "swiper";
import {Navigation, Pagination} from "swiper/modules";

export default function initNewsSliders() {
  (document.querySelectorAll('.news-slider') as NodeListOf<HTMLElement>).forEach((el) => {
    const prevButton = el.querySelector('.slider-arrow-prev') as HTMLElement;
    const nextButton = el.querySelector('.slider-arrow-next') as HTMLElement;
    const progressbar = el.querySelector('.slider-progressbar') as HTMLElement;

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
  });
}