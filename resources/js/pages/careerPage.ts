import Swiper from "swiper";
import {Navigation, Pagination} from "swiper/modules";

export default function careerPage() {
  document.querySelectorAll('.career-values').forEach((el) => {
    const prevButton = el.querySelector('.slider-arrow-prev') as HTMLElement;
    const nextButton = el.querySelector('.slider-arrow-next') as HTMLElement;
    const progressbar = el.querySelector('.slider-progressbar') as HTMLElement;

    new Swiper(el as HTMLElement, {
      modules: [Navigation, Pagination],
      slidesPerView: 1.02,
      spaceBetween: 10,
      breakpoints: {
        1360: {
          slidesPerView: 3,
          spaceBetween: 20,
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