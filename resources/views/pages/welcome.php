<?php
// TODO mobile
?>
<section class="welcome-first">
    <div class="container">
        <div class="welcome-first-content">
            <h1 class="welcome-first-subtitle">Эверс груп рус</h1>
            <h2 class="welcome-first-title">Медицинские изделия <span>российского</span> производства</h2>
            <a href="#" class="btn">Узнать больше</a>
            <div class="welcome-first-description">Инновации и технологии с 2001 года</div>
        </div>
    </div>
</section>

<section class="welcome-about oversection">
    <div class="container">
        <div class="section-badge">О компании</div>
        <h2 class="section-h1">Эверс груп Рус&nbsp;— производитель <span>медицинских изделий</span>, ранозаживляющих
            средств и&nbsp;уходовой косметики.</h2>
        <div class="about-info">
            <div class="about-metrics">
                <div class="about-metric">
                    <div class="about-metric__title">ГОСТ ISO 13485-2017</div>
                    <div class="about-metric__text">вся продукция соответствует требованиям Системы менеджмента качества
                    </div>
                </div>
                <div class="about-metric">
                    <div class="about-metric__title">150+</div>
                    <div class="about-metric__text">сотрудников компании ежедневно работают, чтобы&nbsp;сделать качество
                        жизни в&nbsp;нашей стране выше
                    </div>
                </div>
                <div class="about-metric">
                    <div class="about-metric__title">3</div>
                    <div class="about-metric__text">современные производственные площадки, оснащенные
                        высокотехнологичным оборудованием в Московской и Ивановской областях
                    </div>
                </div>
            </div>
            <div class="about-info-text">
                <p>Мы&nbsp;осуществляем полный цикл производства импортозамещающих медицинских изделий и&nbsp;уходовой
                    косметики в&nbsp;России.</p>
                <p>Обеспечиваем специалистов и&nbsp;широкий круг потребителей современными, эффективными, безопасными
                    и&nbsp;доступными медицинскими изделиями.</p>
                <div class="about-info-text__btn">
                    <a href="#" class="btn">Узнать больше</a>
                </div>
                <div class="about-info-text-years">
                    <div class="about-info-text-year"><b>С&nbsp;2017&nbsp;года&nbsp;—</b> представитель биомедицинского
                        кластера ОЭЗ&nbsp;«Дубна»
                    </div>
                    <div class="about-info-text-year"><b>С&nbsp;2019&nbsp;года&nbsp;—</b> участник
                        Медико-технологического
                        кластера Московской области
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="welcome-production">
    <div class="container">
        <div class="section-badge">Продукция</div>
        <div class="section-h2">
            Продукция Эверс рус&nbsp;Груп предназначена для&nbsp;применения <span>специалистами в&nbsp;лечебных учреждениях</span>,
            самостоятельной помощи и&nbsp;для&nbsp;ухода за&nbsp;пациентами на&nbsp;дому.
        </div>

        <div class="production-grid">
            <?php
            $production = [
                ['image' => '/assets/img/production/1.png', "title" => 'Лечение ран, ожогов, пролежней, уход за лежачими пациентами'],
                ['image' => '/assets/img/production/2.png', "title" => 'Средства для&nbsp;фиксации повязок, закрытия и&nbsp;защиты ран'],
                ['image' => '/assets/img/production/3.jpg', "title" => 'Марлевые и&nbsp;нетканые медицинские изделия, вата'],
                ['image' => '/assets/img/production/4.png', "title" => 'Защита операционного поля'],
                ['image' => '/assets/img/production/5.png', "title" => 'Средства экспресс-диагностики'],
                ['image' => '/assets/img/production/6.jpg', "title" => 'Оказание первой помощи'],
                ['image' => '/assets/img/production/7.png', "title" => 'средства индивидуальной защиты (сиз)'],
            ];
            ?>
            <?php foreach ($production as $good): ?>
                <a href="#" class="production-card">
                    <img src="<?= $good['image'] ?>" class="production-card__background" alt=""/>
                    <div class="production-card__title"><?= $good['title'] ?></div>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="oversection welcome-products">
    <div class="container">
        <div class="swiper products-slider">
            <div class="slider-top">
                <div class="section-badge">Новинки и бестселлеры</div>
                <div class="slider-arrows">
                    <button type="button" class="slider-arrow slider-arrow-prev">
                        <svg width="1em" height="1em">
                            <use xlink:href="/assets/img/icons/slider-arrows.svg#left"/>
                        </svg>
                    </button>
                    <button type="button" class="slider-arrow slider-arrow-next">
                        <svg width="1em" height="1em">
                            <use xlink:href="/assets/img/icons/slider-arrows.svg#right"/>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="swiper-wrapper">
                <?php
                $products = [
                    ['image' => '/assets/img/products/1.png', 'title' => 'Бинт марлевый медицинский стерильный HELP', 'link' => '#'],
                    ['image' => '/assets/img/products/2.png', 'title' => 'Повязки пластырного типа бактерицидные', 'link' => '#'],
                    ['image' => '/assets/img/products/3.png', 'title' => 'Повязка пластырного типа с&nbsp;суперадсорбентом', 'link' => '#'],
                    ['image' => '/assets/img/products/4.png', 'title' => 'Салфетки сорбционные марлевые HELP', 'link' => '#'],
                    ['image' => '/assets/img/products/3.png', 'title' => 'Повязка пластырного типа с&nbsp;суперадсорбентом', 'link' => '#'],
                    ['image' => '/assets/img/products/2.png', 'title' => 'Повязки пластырного типа бактерицидные', 'link' => '#'],
                    ['image' => '/assets/img/products/1.png', 'title' => 'Бинт марлевый медицинский стерильный HELP', 'link' => '#'],
                    ['image' => '/assets/img/products/4.png', 'title' => 'Салфетки сорбционные марлевые HELP', 'link' => '#'],
                ];
                ?>
                <?php foreach ($products as $i => $goodItem): ?>
                    <div class="swiper-slide">
                        <?php include VIEW_PATH . 'components/good-card.php'; ?>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="swiper-pagination slider-progressbar"></div>
        </div>

        <div class="welcome-manufacture">
            <div class="section-badge section-badge--white">Производство</div>
            <div class="welcome-manufacture__title">В основе производственного процесса - <span>технологии высочайшего уровня</span>,
                все предприятия оснащены современным высокотехнологичным оборудованием.
            </div>
            <a href="#" class="btn btn-green">Узнать больше</a>

            <div class="manufacture-metrics">
                <div class="manufacture-metric">
                    <div class="manufacture-metric__title">до 500 000</div>
                    <div class="manufacture-metric__text">наименований медицинских изделий</div>
                </div>
                <div class="manufacture-metric">
                    <div class="manufacture-metric__title">до 1 млн</div>
                    <div class="manufacture-metric__text">салфеток с нашатырным спиртом в месяц</div>
                </div>
                <div class="manufacture-metric">
                    <div class="manufacture-metric__title">200+</div>
                    <div class="manufacture-metric__text">повязок пластырного типа в сутки</div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="welcome-coop">
    <div class="container">
        <div class="section-badge section-badge--white">преимущества сотрудничества</div>
        <div class="welcome-coop-cards-wrapper">
            <div class="welcome-coop-cards">
                <div class="welcome-coop-card">
                    <div class="welcome-coop-card__title">Безопасность и эффективность</div>
                    <div class="welcome-coop-card__text">Все изделия зарегистрированы Федеральной службой по надзору в
                        сфере здравоохранения.
                    </div>
                </div>
                <div class="welcome-coop-card">
                    <div class="welcome-coop-card__title">Взаимовыгодное сотрудничество</div>
                    <div class="welcome-coop-card__text">Сопровождение контракта командой профессионалов, индивидуальный
                        подход к каждому партнеру.
                    </div>
                </div>
            </div>
            <div class="welcome-coop-cards">
                <div class="welcome-coop-card">
                    <div class="welcome-coop-card__title">Качество продукции</div>
                    <div class="welcome-coop-card__text">Высокое качество продукции и современный дизайн упаковки,
                        отвечающие тенденциям рынка.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="oversection welcome-news">
    <div class="container">
        <div class="welcome-news-top">
            <div class="section-badge">Новости компании</div>
            <a href="#" class="btn-link">Смотреть все</a>
        </div>

        <div class="welcome-news-grid">
            <?php
            $news = [
                ['image' => '/assets/img/news/1.png', 'date' => '7 мая', 'title' => '«Уральская ватная компания» примет участие в Региональном конгрессе медицинских сестёр в Тюмени', 'description' => 'Тюмень, 2026 год. В преддверии Международного дня медицинской сестры состоится масштабное...'],
                ['image' => '/assets/img/news/2.png', 'date' => '7 мая', 'title' => 'Масштабирование производства современных перевязочных средств EVERSMED как результат признания на рынке', 'description' => 'Группа компаний Эверс груп Рус в 2026 году нарастила объёмы производства современных перевязочных средств...'],
                ['image' => '/assets/img/news/3.png', 'date' => '6 мая', 'title' => 'Укусы насекомых: как быстро снять зуд и предотвратить воспаление', 'description' => 'Лето — пора пикников, прогулок на природе и активного отдыха. Но вместе с приятными впечатлениями могут прийти...'],
            ];
            ?>
            <?php foreach ($news as $i => $newsItem): ?>
                <?php include VIEW_PATH . '/components/news-card.php'; ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="welcome-partners">
    <div class="container">
        <div class="section-badge">Наши партнеры</div>
        <div class="section-h2"><span>Эверс груп Рус сотрудничает</span> с крупнейшими федеральными аптечными сетями,
            фармкомпаниями <span>и дистрибьюторами.</span></div>

        <div class="swiper partners-slider">
            <div class="swiper-wrapper">
                <?php
                $partners = [
                    '/assets/img/partners/a-plus.png',
                    '/assets/img/partners/avesta.png',
                    '/assets/img/partners/bukaev.png',
                    '/assets/img/partners/erka.png',
                    '/assets/img/partners/fest.png',
                    '/assets/img/partners/katren.png',
                    '/assets/img/partners/komus.png',
                    '/assets/img/partners/moy.png',
                    '/assets/img/partners/nd.png',
                    '/assets/img/partners/novaya.png',
                    '/assets/img/partners/oms.png',
                    '/assets/img/partners/osobaya.png',
                    '/assets/img/partners/puls.png',
                    '/assets/img/partners/rustest.png',
                    '/assets/img/partners/septico.png',
                    '/assets/img/partners/sistema.png',
                    '/assets/img/partners/snab.png',
                    '/assets/img/partners/sopka.png',
                    '/assets/img/partners/vitta.png',
                ];
                ?>
                <?php foreach ($partners as $partner): ?>
                    <div class="swiper-slide">
                        <div class="partner-card">
                            <img src="<?= $partner ?>" alt=""/>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="swiper-pagination slider-progressbar"></div>
        </div>
    </div>
</section>

<section class="welcome-contacts">
    <div class="container">
        <div class="welcome-contacts-wrapper">
            <div class="welcome-contacts-left">
                <div class="section-badge section-badge--white">Контакты</div>
                <div class="section-contact section-contact--email">
                    <div class="section-contact-label">Почта:</div>
                    <a href="mailto:evers@evers.ru" class="section-contact__link">evers@evers.ru</a>
                </div>
                <div class="section-contact section-contact--phone">
                    <div class="section-contact-label">Телефон:</div>
                    <a href="mailto:evers@evers.ru" class="section-contact__link">+7 (499) 707-10-09</a>
                </div>
                <a href="#" class="btn btn-white btn-full">Оставить заявку на сотрудничество</a>
            </div>
            <div class="welcome-contacts-right">
                <div class="social-buttons">
                    <a href="#" class="social-button social-button--white">
                        <svg height="1em">
                            <use xlink:href="/assets/img/socials.svg#vk"/>
                        </svg>
                    </a>
                    <a href="#" class="social-button social-button--white">
                        <svg height="1em" style="position: relative; top: -1px; right: -2px">
                            <use xlink:href="/assets/img/socials.svg#rutube"/>
                        </svg>
                    </a>
                    <a href="#" class="social-button social-button--white">
                        <svg height="1em">
                            <use xlink:href="/assets/img/socials.svg#dzen"/>
                        </svg>
                    </a>
                </div>
                <div class="welcome-contacts-right__text welcome-contacts-right__text--address">
                    <div class="section-contact-label">Офис:</div>
                    <p>Москва, ул. Флотская,<br/> д. 5, кор. Б</p>
                </div>
                <div class="welcome-contacts-right__text welcome-contacts-right__text--worktime">
                    <div class="section-contact-label">График работы:</div>
                    Пн-Чт<br/>
                    9:00 - 18:00<br/>
                    <br/>
                    Пт<br/>
                    9:00 - 17:00<br/>
                </div>
            </div>
        </div>
    </div>
</section>