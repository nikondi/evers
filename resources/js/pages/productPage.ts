import Swiper from "swiper";

export default function manufacturePage() {
  initImages();
}

function initImages() {
  const el = document.querySelector(".product-images-slider") as HTMLElement;
  if (!el)
    return;

  new Swiper(el, {
    spaceBetween: 20
  });
}