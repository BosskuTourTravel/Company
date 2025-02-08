const swiper = new Swiper('.mySwiper', {
    slidesPerView: 1.1,
    spaceBetween: 10,
    freeMode: true,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    

    breakpoints: {
        // Responsif untuk perangkat yang lebih besar
        640: {
            slidesPerView: 2.1,
            spaceBetween: 10, // Mengurangi jarak antar slide di layar medium
        },
        1024: {
            slidesPerView: 4.1,
            spaceBetween: 10, // Mengurangi jarak antar slide di layar besar
        },
    },
});