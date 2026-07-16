import Swiper from "swiper";
import {FreeMode, Navigation, Pagination} from "swiper/modules";

export default function welcomePage() {
  initProductsSlider();
  initPartnersSlider();
}

function initProductsSlider() {
  document.querySelectorAll('.products-slider').forEach((el) => {
    const prevButton = el.querySelector('.slider-arrow-prev') as HTMLElement;
    const nextButton = el.querySelector('.slider-arrow-next') as HTMLElement;
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

function initPartnersSlider() {
  const partnersSlider = document.querySelector('.partners-slider') as HTMLElement;
  if (!partnersSlider)
    return;

  const progressbar = partnersSlider.querySelector('.slider-progressbar') as HTMLElement;

  new Swiper(partnersSlider, {
    modules: [Pagination],
    slidesPerView: 'auto',
    spaceBetween: 20,
    centeredSlidesBounds: true,
    breakpoints: {
      1360: {
        slidesPerView: 4,
      },
    },
    pagination: {
      el: progressbar,
      type: "progressbar"
    }
  })
}