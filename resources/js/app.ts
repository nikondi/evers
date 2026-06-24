import "swiper/css";
import "swiper/css/pagination";
import "swiper/css/effect-fade";
import {manufacturePage, welcomePage} from "@/pages";
import {initAssortmentSliders, initForms, initNewsSliders, initPopups} from "@/components";

document.addEventListener('DOMContentLoaded', function () {
  document.body.classList.remove("no-js");

  // pages
  welcomePage();
  manufacturePage();

  // components
  initNewsSliders();
  initAssortmentSliders();
  initForms();
  initPopups();
});
