console.log("outside the if");

import PhotoSwipeLightbox from "./photoswipe-lightbox.esm.min.js";
import PhotoSwipe from "./photoswipe.esm.min.js";

const cte = document.querySelectorAll("[data-cte]");

if (cte.length) {
  console.log("inside the if");

  const lightbox = new PhotoSwipeLightbox({
    gallery: cte,
    children: "a",
    pswpModule: PhotoSwipe,
  });
  lightbox.init();
}

const cteSet = document.querySelectorAll("[data-cte-set]");

if (cteSet.length) {
  console.log("inside the set if");

  const lightbox = new PhotoSwipeLightbox({
    gallery: cteSet,
    children: "[data-cte-set-image] a",
    pswpModule: PhotoSwipe,
  });
  lightbox.init();
}
