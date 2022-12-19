/**
 * Функция вызывается в компонентах для подключения CSS-стилей компонента в head.
 * Избегает повторного подключения на странице
 * @param {string} path - относительный путь файла
 */
function includeCSS(path) {
    const selector = `link[href="${path}"]`;
    if ($(selector).length !== 0) return;
    $('head').append(`<link rel="stylesheet" href="${path}">`);
}

/**
 * Функция вызывается в компонентах для подключения JS-скриптов компонента в конец body.
 * Избегает повторного подключения на странице
 * @param {string} path - относительный путь файла
 */
function includeJS(path) {
    setTimeout(() => {
        const selector = `script[src="${path}"]`;
        if ($(selector).length !== 0) return;
        $('body').append(`<script src="${path}"></script>`);
    }, 0);
}