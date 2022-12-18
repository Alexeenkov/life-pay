<script>
    includeCSS('lib/slick/slick.css');
    includeCSS('components/where-pay/where-pay.css');
</script>

<article class="where-pay where-pay--bottom-indent">
    <h2 class="where-pay__title title title--basic wrapper">
        Где можно принимать платежи
    </h2>
    <div class="where-pay__slider-wrapper">
        <div class="where-pay__slider js-pay-slider">
            <div class="where-pay__card card">
                <picture class="card__img">
                    <source type="image/webp" srcset="img/webp/where-pay-1.webp, img/webp/where-pay-1_2x.webp 2x">
                    <source type="image/jpeg" srcset="img/where-pay-1.jpg, img/where-pay-1_2x.jpg 2x">
                    <img src="img/where-pay-1.jpg" alt="Смарт-терминал" title="Смарт-терминал">
                </picture>
                <div class="card__content">
                    <h3 class="card__title title"> У клиента дома или в офисе </h3>
                    <ul class="card__list">
                        <li class="card__item card__item--credit-card">
                            <svg class="social__icon">
                                <use xlink:href="#credit-card"></use>
                            </svg>
                            <span>Банковской картой</span>
                        </li>
                        <li class="card__item">
                            <svg class="social__icon">
                                <use xlink:href="#touch-mobile"></use>
                            </svg>
                            <span>Оплата касанием</span>
                        </li>
                        <li class="card__item">
                            <svg class="social__icon">
                                <use xlink:href="#qr-code"></use>
                            </svg>
                            <span>QR-код</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="where-pay__card card">
                <picture class="card__img">
                    <source type="image/webp" srcset="img/webp/where-pay-2.webp, img/webp/where-pay-2_2x.webp 2x">
                    <source type="image/jpeg" srcset="img/where-pay-2.jpg, img/where-pay-2_2x.jpg 2x">
                    <img src="img/where-pay-2.jpg" alt="Смарт-терминал" title="Смарт-терминал">
                </picture>
                <div class="card__content">
                    <h3 class="card__title title"> В любой точке на&nbsp;карте </h3>
                    <ul class="card__list">
                        <li class="card__item card__item--credit-card">
                            <svg>
                                <use xlink:href="#credit-card"></use>
                            </svg>
                            <span>Банковской картой</span>
                        </li>
                        <li class="card__item">
                            <svg>
                                <use xlink:href="#touch-mobile"></use>
                            </svg>
                            <span>Оплата касанием</span>
                        </li>
                        <li class="card__item">
                            <svg>
                                <use xlink:href="#qr-code"></use>
                            </svg>
                            <span>QR-код</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="where-pay__arrows js-pay-arrows"></div>
    </div>
    <div class="wrapper">
        <button type="button" class="where-pay__button button wrapper"> Хочу </button>
    </div>
</article>

<script src="components/where-pay/where-pay.js"></script>