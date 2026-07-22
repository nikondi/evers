import "swiper/css";
import "swiper/css/pagination";
import "swiper/css/effect-fade";
import "swiper/css/free-mode";
import "@fancyapps/ui/dist/fancybox/fancybox.css";
import {aboutPage, careerPage, cartPage, manufacturePage, productPage, welcomePage} from "@/pages";
import {
  initAssortmentSliders,
  initBurger,
  initForms,
  initNewsSliders,
  initPopups,
  initSearch,
  initSelectTabs
} from "@/components";
import {Fancybox} from "@fancyapps/ui";
import Cookies from 'js-cookie';

document.addEventListener('DOMContentLoaded', function () {
  document.body.classList.remove("no-js");

  // pages
  welcomePage();
  manufacturePage();
  aboutPage();
  productPage();
  careerPage();
  cartPage();

  // components
  initNewsSliders();
  initAssortmentSliders();
  initForms();
  initPopups();
  initSelectTabs();
  initBurger();
  initSearch();

  Fancybox.bind("[data-fancybox]");

  if (!Cookies.get('politics')) {
    const warn = document.querySelector<HTMLElement>('.politics-warn');
    warn.classList.add('active');
    warn.querySelector('.politics-warn__btn').addEventListener('click', () => {
      Cookies.set('politics', '1', {expires: 365, path: '/'});
      warn.remove();
    });
  }
});

