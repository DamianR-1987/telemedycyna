JQuery(function() {
    var opinions_swiper = new Swiper.Swiper('.opinions-swiper', {
        slidesPerView: 1,
        spaceBetween: 16,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
            el: ".swiper-pagination"
        },
        breakpoints: {
            992: {
                slidesPerView: 3,
                spaceBetween: 16,
            }
        }
    });

    var partners_swiper = new Swiper.Swiper('.partners-swiper', {
        slidesPerView: 2,
        spaceBetween: 16,
        pagination: {
            el: ".swiper-pagination"
        },
        breakpoints: {
            992: {
                slidesPerView: 5,
                spaceBetween: 16,
            }
        }
    });
});