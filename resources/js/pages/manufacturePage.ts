import Swiper from "swiper";
import {EffectFade, Navigation} from "swiper/modules";

export default function manufacturePage() {
  initProcesses();
  initRegions();
}

function initProcesses() {
  const processesWrapper = document.querySelector('.manufacture-processes') as HTMLElement;
  if (!processesWrapper)
    return;
  const processes = processesWrapper.querySelectorAll('.manufacture-process') as NodeListOf<HTMLElement>;
  processes.forEach((process) => {
    process.addEventListener('click', () => {
      processes.forEach((p) => p.classList.remove('active'));
      process.classList.add('active');
    });
  })

}


function initRegions() {
  const regionsWrapper = document.querySelector('.manufacture-regions') as HTMLElement;
  if (!regionsWrapper)
    return;

  const slider = regionsWrapper.querySelector('.manufacture-regions-slider') as HTMLElement;
  const prevButton = slider.querySelector('.slider-arrow-prev') as HTMLElement;
  const nextButton = slider.querySelector('.slider-arrow-next') as HTMLElement;

  const swpr = new Swiper(slider, {
    modules: [EffectFade, Navigation],
    loop: true,
    slidesPerView: 1,
    effect: "fade",
    navigation: {
      prevEl: prevButton,
      nextEl: nextButton,
    },
    fadeEffect: {
      crossFade: true // Включает перекрестное затухание
    },
  });

  const pointElems = regionsWrapper.querySelectorAll('.manufacture-regions-point') as NodeListOf<HTMLElement>;

  const checkSlides = (currentIndex: number) => {
    pointElems.forEach((pointElem) => {
      if (currentIndex == parseInt(pointElem.dataset.group))
        pointElem.classList.add('active');
      else
        pointElem.classList.remove('active');
    });
  }
  checkSlides(swpr.activeIndex)

  swpr.on('slideChange', (s) => {
    console.log(s.realIndex)
    checkSlides(s.realIndex)
  });

  pointElems.forEach((pointElem) => {
    pointElem.addEventListener('click', () => {
      swpr.slideTo(parseInt(pointElem.dataset.group));
    })
  })
}
