<?php
$breadcrumbs = [
    ['/', 'Главная'],
    ['Корзина']
];
include VIEW_PATH . 'partials/breadcrumbs.php';
?>

<section class="cart-success-section">
    <div class="container">
        <div class="cart-success">
            <div class="cart-success-info">
                <h1 class="page-h1">Спасибо за заказ!</h1>
                <div class="cart-success-info__title">Ваш заказ <span>#12345</span> оформлен.</div>
                <div class="cart-success-info__text">В ближайшее время менеджер свяжется с вами для уточнения деталей.
                    Отдел продаж работает с 9 до 18 (ПН-ЧТ) и с 9 до 17 (ПТ) по московскому времени.
                </div>
            </div>
            <div class="cart-success-contacts">
                <div class="cart-success-contacts__title">Если у вас остались вопросы, пожалуйста, свяжитесь с нами
                    удобным способом:
                </div>
                <div class="cart-success-contacts__list">
                    <div class="cart-success-contact">
                        <div class="cart-success-contact__label">Телефон:</div>
                        <a href="" class="cart-success-contact__text">+7 (499) 707-10-09</a>
                    </div>
                    <div class="cart-success-contact">
                        <div class="cart-success-contact__label">Почта:</div>
                        <a href="" class="cart-success-contact__text">evers@evers.ru</a>
                    </div>
                    <div class="cart-success-contact">
                        <div class="cart-success-contact__label">График работы:</div>
                        <div class="cart-success-contact__text">
                            <p>Пн-Чт: 9:00 - 18:00</p>
                            <p>Пт: 9:00 - 17:00</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
