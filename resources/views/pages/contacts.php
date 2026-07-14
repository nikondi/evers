<?php
$breadcrumbs = [
    ['/', 'Главная'],
    ['Контакты']
];
include VIEW_PATH . 'partials/breadcrumbs.php';
?>

<section>
    <div class="container">
        <h1 class="page-h1">Контакты</h1>
    </div>
</section>

<section class="contacts-data-section">
    <div class="container">
        <div class="contacts-wrapper">
            <div class="contacts-data">
                <div class="section-badge">Офис</div>
                <div class="contacts-data__city">Москва</div>
                <div class="contacts-data__address">ул. Флотская, дом 5, корп. Б</div>
                <div class="contacts-data__label">График работы:</div>
                <div class="contacts-data__worktime">Пн-Чт: 9:00 - 18:00</div>
                <div class="contacts-data__woktime" style="margin-top: 10px;">Пт: 9:00 - 17:00</div>
                <div class="contacts-data__warning"><b>Внимание!</b> Заказ пропусков для прохода/проезда на территорию
                    производится строго не менее, чем за 30 минут до прибытия в офис по телефонной заявке.
                </div>
                <div class="contacts-data__bottom">
                    <div class="contacts-data__label">Телефон:</div>
                    <a href="tel:+7 (499) 707-10-09" class="contacts-data__link">+7 (499) 707-10-09</a>
                    <div class="contacts-data__label">Почта:</div>
                    <a href="mailto:evers@evers.ru" class="contacts-data__link">evers@evers.ru</a>
                </div>
            </div>
            <div class="contacts-data-map">
                <script type="text/javascript" charset="utf-8" async
                        src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A4c9a5a52c13b4c3f4cc0fc15038be5c394629c087212bbcf2a22e2f6dd8dc8b9&amp;width=100%&amp;height=100%&amp;lang=ru_RU&amp;scroll=true"></script>
            </div>
        </div>
    </div>
</section>
<section class="contacts-data-section">
    <div class="container">
        <div class="contacts-wrapper">
            <div class="contacts-data">
                <div class="section-badge">склад</div>
                <div class="contacts-data__city">Московская область</div>
                <div class="contacts-data__address">городской округ Мытищи, деревня Аббакумово, Рогачёвское шоссе, 1
                </div>
                <div class="contacts-data__label">График работы:</div>
                <div class="contacts-data__worktime">Пн-Чт: 7:00 - 16:00 (въезд на территорию до 15:30)</div>
                <div class="contacts-data__woktime" style="margin-top: 10px;">Пт: 7:00 - 15:00 (въезд на территорию до
                    14:30)
                </div>
                <div class="contacts-data__warning"><b>Внимание!</b> Заказ пропусков для прохода/проезда на территорию
                    производится строго не менее, чем за 30 минут до прибытия в офис по телефонной заявке.
                </div>
                <div class="contacts-data__bottom">
                    <div class="contacts-data__label">Телефон:</div>
                    <a href="tel:+7 (499) 707-10-09" class="contacts-data__link">+7 (499) 707-10-09</a>
                    <div class="contacts-data__label">Почта:</div>
                    <a href="mailto:evers@evers.ru" class="contacts-data__link">evers@evers.ru</a>
                </div>
            </div>
            <div class="contacts-data-map">
                <script type="text/javascript" charset="utf-8" async
                        src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ab195cb89fdcc5c2f8299716e3e777ef83e2d819458bdbcda6022bcc15303fd38&amp;width=100%25&amp;height=100%&amp;lang=ru_RU&amp;scroll=true"></script>
            </div>
        </div>
    </div>
</section>

<section class="contacts-socials-section">
    <div class="container contacts-socials">
        <div class="contacts-base">
            <div class="section-badge">мы в соц. сетях</div>
            <div class="social-buttons">
                <a href="#" class="social-button">
                    <svg height="1em">
                        <use xlink:href="/assets/img/socials.svg#vk"/>
                    </svg>
                </a>
                <a href="#" class="social-button">
                    <svg height="1em" style="position: relative; top: -1px; right: -2px">
                        <use xlink:href="/assets/img/socials.svg#rutube"/>
                    </svg>
                </a>
                <a href="#" class="social-button">
                    <svg height="1em">
                        <use xlink:href="/assets/img/socials.svg#dzen"/>
                    </svg>
                </a>
            </div>
        </div>
        <div class="contacts-smi">
            <div class="section-badge">контакты для сми</div>
            <button type="button" class="btn btn-green popup-button" data-popup="<?php // TODO попап ?>">Оставить
                заявку
            </button>
        </div>
    </div>
</section>