var thumbnailSlider = new Swiper(".thumbnail-slider", {
    spaceBetween: 10,
    slidesPerView: 4,
    freeMode: true,
    watchSlidesProgress: true,
});

var mainSlider = new Swiper(".main-slider", {
    spaceBetween: 5,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    thumbs: {
        swiper: thumbnailSlider,
    },
    loop: true,
});