import "swiper/css";
import "swiper/css/pagination";
import "swiper/css/effect-fade";
import {manufacturePage, welcomePage} from "@/pages";
import {newsSliders} from "@/components";

document.addEventListener('DOMContentLoaded', function () {
  // pages
  welcomePage();
  manufacturePage();

  // components
  newsSliders();
});
