if (document.querySelector('.swiper-acf-block-default') && !document.querySelector('.swiper-acf-block-default').closest('.acf-block-preview')) {

    let sliders = document.querySelectorAll('.swiper-acf-block-default');

    sliders.forEach((e, index) => {

        let swiperId = e.id;

        const swiperSlider = new Swiper('#' + swiperId, {
            slidesPerView: 1,
            spaceBetween: 20,
            loop: false,
            freeMode: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true
            },
            navigation: {
                nextEl: '.swiper-btn.next',
                prevEl: '.swiper-btn.prev',
            },
            breakpoints: {
                1025: {
                    slidesPerView: 'auto',
                },
            },
        });
    });

    jQuery('.swiper-acf-block-default').each(function () {
        jQuery(this).magnificPopup({
            delegate: 'a',
            type: 'image',
            gallery: {
                enabled: true
            },
            callbacks: {
                open: function () {
                    document.querySelector('html').style.overflow = 'hidden';
                },
                close: function () {
                    document.querySelector('html').style.overflow = 'auto';
                },
            },
        });
    });
}