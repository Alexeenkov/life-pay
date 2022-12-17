jQuery(function () {
    $('.js-types-slider').slick({
        dots: false,
        infinite: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                }
            }
        ],
        appendArrows: $('.js-types-slider-wrapper'),
        prevArrow: `<button type="button" class="types__arrow types__arrow--prev">
                        <svg width="15" height="25" viewBox="0 0 15 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.5 1L13 12.5L1.5 24" stroke="white" stroke-width="2" />
                        </svg>
                    </button>`,
        nextArrow: `<button type="button" class="types__arrow types__arrow--next">
                        <svg width="15" height="25" viewBox="0 0 15 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.5 1L13 12.5L1.5 24" stroke="white" stroke-width="2" />
                        </svg>
                    </button>`,
    });
});



