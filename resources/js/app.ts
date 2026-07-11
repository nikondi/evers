import "swiper/css";
import "swiper/css/pagination";
import "swiper/css/effect-fade";
import "swiper/css/free-mode";
import "@fancyapps/ui/dist/fancybox/fancybox.css";
import {aboutPage, manufacturePage, productPage, welcomePage} from "@/pages";
import {initAssortmentSliders, initForms, initNewsSliders, initPopups} from "@/components";
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

  Fancybox.bind("[data-fancybox]");
});

