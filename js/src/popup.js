jQuery(function () {
    'use strict'

    const timeout = 500;
    let unlock = true;

    $('.js-open-popup').on('click', function (e) {
        e.preventDefault();
        const popupName = $(this).attr('href');
        popupOpen($(popupName));
    });

    $('.js-close-popup').on('click', function (e) {
        e.preventDefault();
        const popup = $(this).closest('.js-popup');
        popupClose(popup);
    });

    $(document).on('keydown', function (e) {
        if (e.key === 'Escape' || e.code === 'Escape') {
            popupClose();
        }
    });

    function popupOpen(currentPopup) {
        if (currentPopup && unlock) {
            const popupActive = $('.js-popup._open');
            if (popupActive.length !== 0) {
                popupClose(popupActive, false);
            }
            bodyLock();
            currentPopup.addClass('_open');
            currentPopup.on("click", function (e) {
                if ($(e.target).closest('.js-popup-content').length === 0) {
                    const popup = $(this).closest('.js-popup');
                    popupClose(popup);
                }
            });
        }
    }

    function popupClose(doUnlock = true) {
        if (unlock) {
            $('.js-popup._open').removeClass('_open');
            if (doUnlock) {
                bodyUnLock();
            }
        }
    }

    function bodyLock() {
        const lockPaddingValue = getScrollBarWidth() + 'px';
        $('.js-lock-padding').css('padding-right', lockPaddingValue);
        $('body').css('padding-right', lockPaddingValue);
        $('body').addClass('lock');
        $('html').addClass('lock');

        unlock = false;
        setTimeout(function () {
            unlock = true;
        }, timeout);
    }

    function bodyUnLock() {
        setTimeout(function () {
            $('.js-lock-padding').css('padding-right', '0px');
            $('body').css('padding-right', '0px');
            $('body').removeClass('lock');
            $('html').removeClass('lock');
        }, timeout);

        unlock = false;
        setTimeout(function () {
            unlock = true;
        }, timeout);
    }

    function getScrollBarWidth() {
        var $outer = $('<div>').css({visibility: 'hidden', width: 100, overflow: 'scroll'}).appendTo('body'),
            widthWithScroll = $('<div>').css({width: '100%'}).appendTo($outer).outerWidth();
        $outer.remove();
        return 100 - widthWithScroll;
    };
});