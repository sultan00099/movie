
new Swiper('.image-slider', {
    navigation: {
        nextEl: 'swiper-button-next',
        prevEl: 'swiper-button-prev'
    },
    //текущее положение
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
        dynamicBullets: true
    },
    scrollBar: {
        el: '.swiper-scrollbar',
        draggable: true
    },
    keyboard: {
        enabled: true,
        onlyInViewport: true,
        pageUpDown: true
    },
    //slidesPerColumn: 3,
    loop: true,

    autoplay: {
        delay: 2000,
        stopOnLastSlide: false,
        disableOnInteraction: false
    },

    speed: 1000,
    //вертикальность
    //direction: 'vertical',

    effect: 'cube',
    cubeEffect: {
        slideShadows: true,
        shadow: true,
        shadowOffset: 20,
        shadowScale: 0.94
    },
});

new Swiper('.image-slider-horror', {
    navigation: {
        nextEl: 'swiper-button-next1',
        prevEl: 'swiper-button-prev1'
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
        dynamicBullets: true
    },
    scrollBar: {
        el: '.swiper-scrollbar',
        draggable: true
    },
    keyboard: {
        enabled: true,
        onlyInViewport: true,
        pageUpDown: true
    },
    //slidesPerColumn: 3,
    loop: true,
    speed: 1000,

});