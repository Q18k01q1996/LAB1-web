var swiper = new Swiper(".gallery__container-slider", {
    slidesPerView: 4,
    spaceBetween: 30,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".gallery-arrow__next",
        prevEl: ".gallery-arrow__prev",
    },

});
