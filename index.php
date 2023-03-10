<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name=description content="Тестовое задание в компанию LIFE PAY">
	<!-- ! favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
	<link rel="manifest" href="favicon/site.webmanifest">
	<link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">
	<!-- Предзагрузка шрифта -->
	<link rel="preload" href="fonts/Montserrat-Regular.woff2" as="font" type="font/woff2" crossorigin>
	<!-- Подключение файлов CSS -->
	<link rel="stylesheet" href="css/style.css">
	<!-- Подключение важных JS-скриптов. Подключаются вверху для обеспечения правильной работы остальных скриптов -->
	<script src="lib/jquery/jquery-3.6.2.min.js"></script>
	<script src="js/script.js"></script>

	<title>Алексеенков Илья - тестовое задание</title>
</head>

<body>
	<?php include 'components/svg-sprite/sprite.svg'; ?>
	<div class="wrapper">
		<section class="first-screen first-screen--bottom-indent">
			<h1 class="first-screen__title title"> Мобильный эквайринг с&nbsp;комиссией <span>от 1,2%</span> </h1>
			<div class="first-screen__subtitle"> Принимайте оплату на выезде — любым удобным способом </div>
			<picture class="first-screen__img">
				<source type="image/webp" srcset="img/webp/calculator.webp, img/webp/calculator_2x.webp 2x">
				<source type="image/jpeg" srcset="img/calculator.png, img/calculator_2x.png 2x">
				<img src="img/calculator.png" alt="Мобильный эквайринг с комиссией от 1,2%" title="Мобильный эквайринг с комиссией от 1,2%">
			</picture>
			<a href="#popup" class="first-screen__button button js-open-popup"> Подключить </a>
		</section>

		<section class="triggers triggers--bottom-indent">
			<h2 class="triggers__title title title--basic">Платежи <span>в&nbsp;любой&nbsp;точке&nbsp;продаж</span></h2>
			<ul class="triggers__list">
				<li class="triggers__item trigger">
					<div class="trigger__icon trigger__icon--star">
						<svg viewBox="0 0 41 40" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
							<clipPath id="a">
								<path d="m.126099 0h40v40h-40z" />
							</clipPath>
							<g clip-path="url(#a)">
								<path d="m30.8652 38.2608c-.3478 0-.6522-.087-.9565-.2609l-9.7826-6.3913-9.7826 6.3913c-.60874.3913-1.39135.3478-1.95657-.0435-.56521-.4348-.82608-1.1739-.65217-1.8696l3.08694-10.8695-9.21738-7.7826c-.52173-.4348-.739126-1.1739-.52173-1.8696.21739-.6957.82608-1.1304 1.52173-1.2174l10.99998-.7826 4.9565-10.82609c.2609-.60869.8696-1 1.5653-1 .6956 0 1.3043.39131 1.5652 1l4.9565 10.82609 11 .7826c.6957.0435 1.3044.5217 1.5217 1.2174.2174.6522 0 1.3913-.5217 1.8696l-9.1739 7.7391 3.0869 10.8696c.2174.6956-.0434 1.4347-.6521 1.8695-.3044.2174-.6522.3479-1.0435.3479zm-10.7391-10.4348c.3478 0 .6521.0869.9565.2608l6.8696 4.4783-2.1305-7.5217c-.1739-.6522.0435-1.3479.5652-1.7826l6.7392-5.6957-7.7392-.6087c-.6521-.0435-1.1739-.4348-1.4782-1l-3.7826-8.30434-3.7826 8.30434c-.2609.5652-.8261.9565-1.4783 1l-7.73914.5652 6.73914 5.6957c.5217.4348.7391 1.1304.5652 1.7826l-2.1304 7.5652 6.8695-4.4348c.3044-.2174.6087-.3043.9566-.3043z" />
							</g>
						</svg>
					</div>
					<div class="trigger__content">
						<h3 class="trigger__title"> Разные способы оплаты </h3>
						<div class="trigger__description">
							Оплата картой, наличными, по QR-коду или касанием мобильного телефона
						</div>
					</div>
				</li>
				<li class="triggers__item trigger">
					<div class="trigger__icon trigger__icon--like">
						<svg viewBox="0 0 39 38" xmlns="http://www.w3.org/2000/svg">
							<path d="m25.2509 38c-5.1714 0-13.304-1.6935-15.30583-3.0978-.45876-.3305-.709-.8261-.709-1.3631v-16.15c0-.4956.25024-.9913.62559-1.2804.12511-.0826 3.04444-2.3544 6.08894-4.0478 3.7952-2.06525 6.4227-4.95655 7.0482-6.77394.7507-2.23044 1.8351-5.28696 5.2549-5.28696 1.6265 0 2.9611.908696 3.6701 2.47826 1.418 3.22174-.0834 7.68264-2.5857 11.19344 1.6682.3718 3.7534.9087 5.0046 1.2805 2.2938.7021 3.7952 2.3543 4.1288 4.3782.292 2.0653-.7507 4.1718-2.961 5.7826-1.6266 4.337-4.4208 11.1935-6.4644 12.3087-.7924.4131-2.1687.5783-3.7952.5783zm-12.6784-5.4522c3.1696 1.3218 12.9287 2.6848 14.7637 1.9826.9592-.8674 3.4198-6.4021 5.1298-11.0695.1251-.3305.3336-.6196.6255-.8261 1.3763-.9087 2.0853-1.9826 1.9602-2.8913-.1251-.7435-.7924-1.3631-1.7933-1.6935-2.0853-.6609-7.2568-1.7761-7.3402-1.7761-.5839-.1239-1.0426-.5369-1.2511-1.1152-.2086-.5783-.0417-1.1978.3753-1.6109 3.7535-4.0065 4.4208-8.09563 3.7118-9.7478-.1668-.49565-.3754-.49565-.5005-.49565-.8341 0-1.2094.57826-2.0852 3.05652-1.001 2.8913-4.4625 6.36083-8.5914 8.59133-2.0018 1.0739-4.0037 2.5195-5.0046 3.263zm-6.58944 1.1565v-16.5217c0-1.4869-1.20946-2.6848-2.71085-2.6848-1.5014 0-2.752557 1.1979-2.752557 2.6848v16.4804c0 1.487 1.209457 2.6848 2.710847 2.6848 1.5014 0 2.75256-1.1978 2.75256-2.6435z" />
						</svg>
					</div>
					<div class="trigger__content">
						<h3 class="trigger__title"> Соотвествие закону </h3>
						<div class="trigger__description">
							Налоговая получит отчетность по 54-ФЗ, а клиент — чек
						</div>
					</div>
				</li>
				<li class="triggers__item trigger">
					<div class="trigger__icon trigger__icon--shield">
						<svg viewBox="0 0 41 40" xmlns="http://www.w3.org/2000/svg">
							<path clip-rule="evenodd" d="m19.9344 1.77287c.3774-.14149.7932-.14149 1.1705 0l13.3333 5c.6505.24394 1.0815.8658 1.0815 1.56054v11.66669c0 5.744-3.803 10.3338-7.2359 13.3376-1.7514 1.5325-3.4951 2.7304-4.7975 3.5445-.6529.4081-1.1994.7224-1.5865.9367-.1937.1072-.3478.1895-.4557.2462-.054.0283-.0964.0503-.1265.0657l-.0359.0182-.0107.0055-.0036.0018c-.0006.0002-.0024.0012-.7477-1.4896-.7454 1.4908-.7459 1.4905-.7464 1.4902l-.0049-.0024-.0108-.0055-.0359-.0182c-.0301-.0154-.0725-.0374-.1265-.0657-.1079-.0567-.262-.139-.4557-.2462-.387-.2143-.9336-.5286-1.5865-.9367-1.3024-.8141-3.046-2.012-4.7975-3.5445-3.43294-3.0038-7.23585-7.5936-7.23585-13.3376v-11.66669c0-.69474.43096-1.3166 1.08146-1.56054zm.5853 34.89383-.7464 1.4902c.4692.2347 1.0225.2352 1.4917.0006zm-.0001-1.8954c.3194-.181.7279-.4207 1.2001-.7158 1.1975-.7485 2.7873-1.8423 4.3691-3.2264 3.2338-2.8295 6.0975-6.5731 6.0975-10.829v-10.51168l-11.6666-4.375-11.66671 4.375v10.51168c0 4.2559 2.86371 7.9995 6.09751 10.829 1.5819 1.3841 3.1716 2.4779 4.3692 3.2264.4721.2951.8806.5348 1.1999.7158z" fill-rule="evenodd" />
						</svg>
					</div>
					<div class="trigger__content">
						<h3 class="trigger__title"> Безопасные платежи </h3>
						<div class="trigger__description">
							Отсутвие махинаций с купюрами и краж благодаря безналичной оплате
						</div>
					</div>
				</li>
				<li class="triggers__item trigger">
					<div class="trigger__icon trigger__icon--edit">
						<svg viewBox="0 0 41 40" xmlns="http://www.w3.org/2000/svg">
							<g clip-rule="evenodd" fill-rule="evenodd">
								<path d="m3.25719 6.46447c.93768-.93769 2.20945-1.46447 3.53553-1.46447h11.66668c.9205 0 1.6667.74619 1.6667 1.66667 0 .92047-.7462 1.66666-1.6667 1.66666h-11.66668c-.44202 0-.86595.1756-1.17851.48816s-.48815.73648-.48815 1.17851v23.3333c0 .4421.17559.866.48815 1.1785.31256.3126.73649.4882 1.17851.4882h23.33338c.442 0 .8659-.1756 1.1785-.4882.3125-.3125.4881-.7364.4881-1.1785v-11.6666c0-.9205.7462-1.6667 1.6667-1.6667s1.6667.7462 1.6667 1.6667v11.6666c0 1.3261-.5268 2.5979-1.4645 3.5356-.9377.9376-2.2095 1.4644-3.5355 1.4644h-23.33338c-1.32608 0-2.59785-.5268-3.53553-1.4644-.93768-.9377-1.46447-2.2095-1.46447-3.5356v-23.3333c0-1.32608.52679-2.59785 1.46447-3.53553z" />
								<path d="m33.4594 4.79769c-.4956 0-.971.1969-1.3215.54738l-15.5069 15.50693-.881 3.5239 3.524-.881 15.5069-15.50686c.3505-.35048.5474-.82583.5474-1.32148 0-.49566-.1969-.97101-.5474-1.32149s-.8258-.54738-1.3215-.54738zm-3.6785-1.80965c.9756-.9756 2.2988-1.52368 3.6785-1.52368s2.7029.54808 3.6785 1.52368c.9756.97561 1.5237 2.29881 1.5237 3.67852s-.5481 2.70291-1.5237 3.67854l-15.8333 15.8333c-.2136.2136-.4812.3651-.7743.4384l-6.6666 1.6667c-.568.1419-1.1688-.0245-1.5828-.4384-.414-.414-.5804-1.0148-.4384-1.5828l1.6667-6.6666c.0733-.2931.2248-.5607.4384-.7743z" />
							</g>
						</svg>
					</div>
					<div class="trigger__content">
						<h3 class="trigger__title"> Дополнительные возможности </h3>
						<div class="trigger__description">
							Можно удалить позицию из заказа или отменить его перед оплатой
						</div>
					</div>
				</li>
			</ul>
			<div class="triggers__button-container">
				<div class="triggers__description">
					Вы платите меньше, если используете кассу не постоянно
				</div>
				<a href="#popup" class="triggers__button button js-open-popup"> То, что надо! </a>
			</div>
		</section>
	</div>

	<?php include 'components/types/types.php'; ?>

	<?php if (!empty($_GET['show-slider']) && $_GET['show-slider'] === 'true') {
		include 'components/where-pay/where-pay.php';
	} ?>

	<div class="cost">
		<div class="cost__container">
			<h2 class="cost__title title title--basic wrapper"><span>Стоимость</span> мобильного эквайринга</h2>
			<div class="cost__description wrapper">
				Прозрачная комиссия на все виды эквайринга. Процент зависит только от вашей выручки и вида деятельности
			</div>
			<a href="#popup" class="cost__button cost__button--desktop button js-open-popup"> Подключить </a>
		</div>
		<div class="cost__table">
			<h3 class="cost__table-title title">Комиссия за использование эквайринга LIFE PAY — <span>от&nbsp;1,2%&nbsp;до&nbsp;1,9%</span></h3>
			<div class="cost__content">
				<table>
					<thead>
						<tr>
							<th>Вид деятельности</th>
							<th>Комиссия за эквайринг</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th>Фастфуд</th>
							<th>1,2%</th>
						</tr>
						<tr>
							<th>Продуктовые супермаркеты</th>
							<th>1,5%</th>
						</tr>
						<tr>
							<th>Прочее</th>
							<th>1,9%</th>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<div class="cost__buttons wrapper">
			<a href="#popup" class="cost__button button js-open-popup"> Подключить </a>
		</div>
	</div>

	<aside class="popup js-popup" id="popup">
		<div class="popup__body">
			<div class="popup__content js-popup-content">
				<button type="button" class="popup__close js-close-popup">
					<svg>
						<use xlink:href="#close"></use>
					</svg>
					<span class="visually-hidden">Закрыть модальное окно</span>
				</button>
				<h4 id='popup-title' class="popup__title title">Напишите свой номер телефона и <span>мы Вам перезвоним!</span></h4>
				<form action="#0" method="POST" class="popup__form">
					<input type="text" name="name" class="popup__input popup__name" placeholder="Введите имя" required>
					<input type="tel" name="tel" pattern="^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$" class="popup__input popup__tel mask" placeholder="Введите телефон" required>
					<button type="submit" class="popup__button button">Отправить заявку</button>
				</form>
			</div>
		</div>
	</aside>

	<script src="js/popup.js"></script>
</body>

</html>