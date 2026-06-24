<?php
$alt_header ??= false;
?>
<?php // TODO search ?>
<header class="header<?= $alt_header ? ' header--alt' : '' ?>">
    <div class="container">
        <div class="header-inner">
            <div class="header-logo">
                <a href="/">
                    <img src="/assets/img/logo.svg" alt=""/>
                </a>
            </div>
            <nav class="header-menu">
                <ul>
                    <li>
                        <span class="header-submenu-trigger">Каталог</span>
                        <ul class="header-submenu">
                            <li><a href="#">Новинки и бестселлеры</a></li>
                            <li><a href="#">Лечение ран, ожогов, пролежней</a></li>
                            <li><a href="#">Оказание первой помощи</a></li>
                            <li><a href="#">Средства для фиксации повязок, закрытия и защиты ран</a></li>
                            <li><a href="#">Защита операционного поля</a></li>
                            <li><a href="#">Средства индивидуальной защиты (СИЗ)</a></li>
                            <li><a href="#">Средства экспресс-диагностики</a></li>
                            <li><a href="#">Марлевые и нетканые медицинские изделия, вата</a></li>
                            <li><a href="/catalog/trademarks">Наши торговые марки</a></li>
                        </ul>
                    </li>
                    <li>
                        <span class="header-submenu-trigger">О компании</span>
                        <ul class="header-submenu">
                            <li><a href="#">О компании</a></li>
                            <li><a href="#">Отдел R&D</a></li>
                            <li><a href="/about/manufacture">Производство</a></li>
                            <li><a href="#">СМИ о нас</a></li>
                            <li><a href="#">Новости компании</a></li>
                            <li><a href="#">Реквизиты</a></li>
                        </ul>
                    </li>
                    <li>
                        <span class="header-submenu-trigger">Сотрудничество</span>
                        <ul class="header-submenu">
                            <li><a href="#">Оставить заявку</a></li>
                            <li><a href="#">Контрактное производство</a></li>
                            <li><a href="/coop/education">Обучение для партнеров</a></li>
                            <li><a href="#">Наши оптовые партнеры</a></li>
                            <li><a href="#">Отзывы партнеров</a></li>
                            <li><a href="#">Где купить</a></li>
                            <li><a href="#">Брендбук</a></li>
                        </ul>
                    </li>
                    <li>
                        <span class="header-submenu-trigger">Специалистам</span>
                        <ul class="header-submenu">
                            <li><a href="#">Научные публикации</a></li>
                            <li><a href="#">Полезные материалы о продуктах</a></li>
                            <li><a href="#">Наши партнерские организации</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Карьера</a></li>
                    <li><a href="#">Контакты</a></li>
                </ul>
            </nav>
            <div class="header-space-desktop"></div>
            <div class="header-contacts">
                <a href="mailto:evers@evers.ru" class="header-contacts-link">
                    <svg width="1em" height="1em">
                        <use xlink:href="/assets/img/icons.svg#envelope"/>
                    </svg>
                    <span>evers@evers.ru</span>
                </a>
                <a href="tel:+7 (499) 707-10-09" class="header-contacts-link">
                    <svg width="1em" height="1em">
                        <use xlink:href="/assets/img/icons.svg#phone"/>
                    </svg>
                    <span>+7 (499) 707-10-09</span>
                </a>
            </div>
            <div class="header-actions">
                <a href="#" class="header-action header-search">
                    <svg width="1em" height="1em">
                        <use xlink:href="/assets/img/icons.svg#search"/>
                    </svg>
                </a>
                <div class="header-space-mobile"></div>
                <a href="#" class="header-action">
                    <svg width="1em" height="1em">
                        <use xlink:href="/assets/img/icons.svg#heart"/>
                    </svg>
                    <span>0</span>
                </a>
                <a href="#" class="header-action">
                    <svg width="1em" height="1em">
                        <use xlink:href="/assets/img/icons.svg#cart"/>
                    </svg>
                    <span>0</span>
                </a>
                <a href="#" class="header-action header-burger">
                    <svg width="1em" height="1em">
                        <use xlink:href="/assets/img/icons.svg#burger"/>
                    </svg>
                </a>
            </div>

        </div>
    </div>
</header>
<div class="header-placeholder"></div>