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