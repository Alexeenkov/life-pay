<script>
    includeCSS('lib/slick/slick.css');
    includeCSS('components/types/types.css');
</script>

<article class="types">
    <h2 class="types__title title title--basic wrapper">
        Что выбрать
    </h2>
    <div class="types__slider-wrapper js-types-slider-wrapper">
        <div class="types__slider js-types-slider">
            <div class="types__type type">
                <a href="#0" class="type__link">
                    <picture class="type__img">
                        <source type="image/webp" srcset="img/webp/terminal-1.webp, img/webp/terminal-1_2x.webp 2x">
                        <source type="image/jpeg" srcset="img/terminal-1.png, img/terminal-1_2x.png 2x">
                        <img src="img/terminal-1.png" alt="Смарт-терминал" title="Смарт-терминал">
                    </picture>
                    <div class="type__content">
                        <h3 class="type__title title"> Смарт-терминал </h3>
                        <div class="type__description">
                            Умеет всё: карты, чеки, оплату по СБП
                        </div>
                    </div>
                </a>
            </div>
            <div class="types__type type">
                <a href="#0" class="type__link">
                    <picture class="type__img type__img--mobile">
                        <source type="image/webp" srcset="img/webp/terminal-2.webp, img/webp/terminal-2_2x.webp 2x">
                        <source type="image/jpeg" srcset="img/terminal-2.png, img/terminal-2_2x.png 2x">
                        <img src="img/terminal-2.png" alt="Мобильный терминал" title="Мобильный терминал">
                    </picture>
                    <div class="type__content">
                        <h3 class="type__title title"> Мобильный терминал </h3>
                        <div class="type__description">
                            Работает с любым гаджетом по Bleutooth		
                        </div>
                    </div>
                </a>
            </div>
            <div class="types__type type">
                <a href="#0" class="type__link">
                    <picture class="type__img type__img--courier">
                        <source type="image/webp" srcset="img/webp/terminal-3.webp, img/webp/terminal-3_2x.webp 2x">
                        <source type="image/jpeg" srcset="img/terminal-3.png, img/terminal-3_2x.png 2x">
                        <img src="img/terminal-3.png" alt="Смартфон курьера" title="Смартфон курьера">
                    </picture>
                    <div class="type__content">
                        <h3 class="type__title title"> Смартфон курьера </h3>
                        <div class="type__description">
                            Терминал в телефоне: работает на Android, принимает карты и оплату через СБП
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="types__arrows js-types-arrows"></div>
    </div>
</article>

<script src="components/types/types.js"></script>