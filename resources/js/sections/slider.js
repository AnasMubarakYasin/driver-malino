import { default as Swiper } from "swiper";

var swiper = new Swiper("#slider .swiper", {
    slidesPerView: "auto",
    centeredSlides: true,
    spaceBetween: 32,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
    },
    // navigation: {
    //     nextEl: ".swiper-button-next",
    //     prevEl: ".swiper-button-prev",
    // },
    // scrollbar: {
    //     el: ".swiper-scrollbar",
    // },
});
