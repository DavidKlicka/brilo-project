import Swiper, { Autoplay } from 'swiper';

class SwiperInit {
    init (container, options) {
        const SwiperInitialized = new Swiper(container, options)
    }
}

let newSwiper = new SwiperInit;
newSwiper.init('.js-swiper-container.article-row', {
    modules: [Autoplay],
    loop: true,
    slidesPerView: 1,
    slidesPerGroup: 1,
    autoplay: {
        delay: 3000,
    },

    breakpoints: {
        480: {
            slidesPerView: 2,
            slidesPerGroup: 2,
        },

        1024: {
            slidesPerView: 3,
            slidesPerGroup: 3,
        },
    }
});