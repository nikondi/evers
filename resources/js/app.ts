import "swiper/css";
import "swiper/css/pagination";
import "swiper/css/effect-fade";
import "swiper/css/free-mode";
import "@fancyapps/ui/dist/fancybox/fancybox.css";
import {aboutPage, manufacturePage, productPage, welcomePage} from "@/pages";
import {initAssortmentSliders, initForms, initNewsSliders, initPopups, initSelectTabs} from "@/components";
import {Fancybox} from "@fancyapps/ui";

document.addEventListener('DOMContentLoaded', function () {
  document.body.classList.remove("no-js");

  // pages
  welcomePage();
  manufacturePage();
  aboutPage();
  productPage();

  // components
  initNewsSliders();
  initAssortmentSliders();
  initForms();
  initPopups();
  initSelectTabs();

  Fancybox.bind("[data-fancybox]");

  document.querySelector(".header-burger").addEventListener('click', (e) => {
    document.querySelector('.header-menu').classList.toggle('active');
  })
});

