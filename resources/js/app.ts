import "swiper/css";
import "swiper/css/pagination";
import "swiper/css/effect-fade";
import {manufacturePage, welcomePage} from "@/pages";
import {initForms, initPopups, newsSliders} from "@/components";

document.addEventListener('DOMContentLoaded', function () {
  document.body.classList.remove("no-js");

  // pages
  welcomePage();
  manufacturePage();

  // components
  newsSliders();
  initForms();
  initPopups();
});
