<?php
// TODO mobile
?>
<?php
$breadcrumbs = [
    ['/', 'Главная'],
    ['О компании']
];
include VIEW_PATH . 'partials/breadcrumbs.php';
?>

<section>
    <div class="container">
        <h1 class="page-h1">О компании</h1>
        <div class="section-h2">
            Промышленный холдинг Эверс груп Рус&nbsp;— <span>российский производитель медицинских изделий</span>,
            ранозаживляющих средств и&nbsp;уходовой косметики.
        </div>
    </div>
</section>

<section class="about-mission-section">
    <div class="container">
        <div class="section-badge section-badge--white">миссия компании</div>
        <div class="section-h3">Наша миссия — стать российским лидером в&nbsp;производстве медицинских изделий,
            ранозаживляющих средств и&nbsp;уходовой косметики, непрерывно задавая новые стандарты эффективного и&nbsp;безопасного
            ухода за&nbsp;пациентами.
        </div>

        <div class="metric-card" style="max-width: 540px;top: 360px; left: 60px">
            <div class="metric-card__text">Мы&nbsp;развиваем экосистему передовых медицинских изделий и&nbsp;ранозаживляющих
                решений и&nbsp;уходовой косметики, где&nbsp;каждая разработка проходит полный цикл от&nbsp;лабораторных
                исследований до&nbsp;внедрения в&nbsp;клиническую практику.
            </div>
        </div>
        <div class="metric-card" style="max-width: 540px;top: 514px; left: 283px">
            <div class="metric-card__text">Наше видение — это мир, в котором скорость и безопасность восстановления
                перестают быть компромиссом и становятся стандартом, заданным российской школой заживления.
            </div>
        </div>
        <div class="metric-card" style="max-width: 260px; top: 440px; right: 60px">
            <div class="metric-card__title">25 + лет</div>
            <div class="metric-card__text">успешной работы в отрасли</div>
        </div>
        <div class="metric-card" style="max-width: 270px; top: 580px; right: 106px">
            <div class="metric-card__title">3</div>
            <div class="metric-card__text">современные производственные площадки</div>
        </div>
    </div>
</section>

<section class="about-tradition-section oversection">
    <div class="container">
        <div class="section-h4">Объединяя
            <span>традиции качества, возобновляемые виды сырья и&nbsp;современные технологии</span>,
            мы&nbsp;намерены укрепить лидерство на&nbsp;отечественном рынке и&nbsp;выйти на&nbsp;международный уровень
            как&nbsp;надёжный партнёр научного, фармацевтического и&nbsp;медицинского сообщества.
        </div>
        <div class="about-traditions">
            <div class="about-tradition">традиции качества</div>
            <div class="about-tradition">возобновляемые<br/>виды сырья</div>
            <div class="about-tradition">современные<br/> технологии</div>
        </div>
    </div>
</section>

<section class="about-value-section">
    <div class="container">
        <div class="swiper about-value-slider">
            <div class="slider-top">
                <div class="section-badge">наши ценности</div>
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
                $values = [
                    ['title' => 'Инновации', 'icon' => 'innovation', 'short_text' => 'Инновации для нас — это путь от идеи до продукта, который меняет жизни к лучшему. ', 'text' => '<p>Инновации для нас — это путь от идеи до продукта, который меняет жизни к лучшему. </p><p>Мы объединяем науку, медицину и бизнес, создавая решения,&nbsp;которые трансформируют существующую&nbsp;медицинскую практику.&nbsp;</p><p>Наша роль — создавать для специалистов, партнёров и обычных людей продукты и технологии, которые расширяют горизонты современной медицины и укрепляют национальную экспертизу.</p>'],
                    ['title' => 'Высокие стандарты', 'icon' => 'nature', 'short_text' => 'Мы строим производство, где качество закладывается системно.', 'text' => '<p>В основе наших продуктов — натуральные компоненты из возобновляемого сырья. Мы работаем по принципам разумного потребления и бережливого производства». </p><p>Ответственность для нас — это баланс между эффективностью продукта и сохранением окружающей среды, вклад в здоровье общества без ущерба для планеты.</p>'],
                    ['title' => 'Безопасность', 'icon' => 'standarts', 'short_text' => 'Трехступенчатая система контроля качества исключает случайности на всех этапах производства. ', 'text' => '<p>Мы строим производство, где качество закладывается системно: менеджмент сертифицирован по ISO-13485, а производимые медицинские продукты отвечают требованиям 3 класса риска. </p><p>Мы не ищем путей снижения себестоимости в ущерб составу, плотности или технологии, потому что убеждены: в решениях для здоровья не может быть компромиссов. Это наш осознанный выбор в пользу предсказуемого, стабильного результата для каждого, кто доверяет нам свое здоровье.</p>'],
                    ['title' => 'Партнёрство', 'icon' => 'partner', 'short_text' => 'Мы видим за каждой разработкой и медицинским продуктом конкретную судьбу.', 'text' => '<p>Доверие невозможно без честности. Мы выстраиваем сотрудничество на принципах&nbsp;прозрачности, экспертизы, уважения и стабильности для взаимного роста и развития в долгосрочной перспективе.</p><p>Только в таком профессиональном диалоге рождаются решения, которые двигают индустрию вперёд и обеспечивают заказчику и пациенту доступ к лучшим продуктам.</p>'],
                    ['title' => 'Забота', 'icon' => 'safety', 'short_text' => 'Ответственность для нас — это баланс между эффективностью продукта и сохранением окружающей среды.', 'text' => '<p>Трехступенчатая система контроля качества исключает случайности на всех этапах производства. Такой подход гарантирует предсказуемый и воспроизводимый результат, на который врач, партнёр и конечный покупатель могут рассчитывать в любых условиях. </p><p>Безопасность для нас — это основа, с которой начинается любой медицинский и косметический продукт группы компаний Эверс груп Рус, обязательное условие выхода на рынок и наше профессиональное слово.</p>'],
                    ['title' => 'Ответственность', 'icon' => 'care', 'short_text' => 'Мы выстраиваем сотрудничество на принципах&nbsp;прозрачности, экспертизы, уважения и стабильности.', 'text' => '<p>Мы видим за каждой разработкой и медицинским продуктом конкретную судьбу — пациента, который хочет быстрее вернуться к полноценной жизни, и врача, которому нужен надежный инструмент. </p><p>Мы совместно с медицинскими и научными специалистами участвуем в формировании стандартов оказания качественной медицинской помощи и благоприятной среды, способствующей повышению качества жизни.</p>'],
                ]
                ?>
                <?php foreach ($values as $value): ?>
                    <div class="swiper-slide">
                        <div class="about-value">
                            <div class="about-value-short">
                                <div class="about-value__top">
                                    <div class="about-value__icon">
                                        <svg width="1em" height="1em">
                                            <use xlink:href="/assets/img/icons/about_values.svg#<?= $value['icon'] ?>"/>
                                        </svg>
                                    </div>
                                    <div class="about-value__title"><?= $value['title'] ?></div>
                                    <div class="about-value__short"><?= $value['short_text'] ?></div>
                                </div>
                                <button class="about-value-flip">
                                    <svg width="1em" height="1em">
                                        <use xlink:href="/assets/img/icons/about_values.svg#flip"/>
                                    </svg>
                                </button>
                            </div>
                            <div class="about-value-full">
                                <div class="about-value__title"><?= $value['title'] ?></div>
                                <div class="about-value__text"><?= $value['text'] ?></div>
                                <button class="about-value-flip">
                                    <svg width="1em" height="1em">
                                        <use xlink:href="/assets/img/icons/about_values.svg#flip"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="swiper-pagination slider-progressbar"></div>
        </div>
    </div>
</section>

<section class="about-history-section oversection">
    <div class="container">
        <div class="section-badge">история компании</div>
        <div class="about-history swiper">
            <div class="swiper-wrapper">
                <?php $years = [
                    ['year' => '2001', 'text' => 'Год&nbsp;основания компании'],
                    ['year' => '2004', 'text' => 'Открытие производства в&nbsp;Ивановской области, основание компании ЭВТЕКС. Запуск ткацкого производства в&nbsp;Воскресенском'],
                    ['year' => '2005-2015', 'text' => 'Наращивание выпуска традиционных медицинских изделий из&nbsp;марли. Контракты с&nbsp;ключевыми фармдистрибьюторами РФ'],
                    ['year' => '2013', 'text' => 'Выход на&nbsp;аптечные сети и&nbsp;запуск СТМ-проектов'],
                    ['year' => '2014', 'text' => 'Создание штаб-квартиры компании в&nbsp;Москве'],
                    ['year' => '2017', 'text' => 'Открытие производства в&nbsp;Дубне.'],
                    ['year' => '2018', 'text' => 'ЭВЕРС становится резидентом ОЭЗ&nbsp;«Дубна»'],
                    ['year' => '2019', 'text' => 'Разработка и&nbsp;наращивания выпуска инновационных медицинских изделий'],
                    ['year' => '2021', 'text' => 'ЭВЕРС становится участником Медико-технологического кластера Московской области'],
                    ['year' => '2022-2023', 'text' => 'Регистрация и&nbsp;наращивание выпуска уникального в&nbsp;РФ&nbsp;медицинского продукта на&nbsp;основе хитозана&nbsp;— высокопористого покрытия Хитокол®'],
                    ['year' => '2023', 'text' => 'Пилотное тестирование Хитокол® в&nbsp;ММКЦ «Коммунарка»'],
                    ['year' => '2022-2025', 'text' => 'Подтверждение соответствия требованиям Системы менеджмента качества ГОСТ ISO 13485–2017'],
                    ['year' => '2026', 'text' => 'Расширение представленности медицинских изделий группы компаний в&nbsp;больничном сегменте'],
                ]; ?>
                <?php foreach ($years as $year): ?>
                    <div class="swiper-slide">
                        <div class="about-history-card">
                            <div class="about-history-card__year"><?= $year['year'] ?></div>
                            <div class="about-history-card__text"><?= $year['text'] ?></div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<section class="about-brands-section">
    <div class="container">
        <div class="section-badge">наш портфель</div>
        <div class="section-h3">Ассортимент компании постоянно расширяется и совершенствуется, предлагая лучшие решения
            для повышения уровня жизни населения.<br/> <span>Продукция представлена следующими брендами:</span>
        </div>
        <div class="brands-grid">
            <?php
            $brands = [
                ['link' => '#', 'logo' => '/assets/img/catalog/trademarks/help.png'],
                ['link' => '#', 'logo' => '/assets/img/catalog/trademarks/evers-med.png'],
                ['link' => '#', 'logo' => '/assets/img/catalog/trademarks/angel.png'],
                ['link' => '#', 'logo' => '/assets/img/catalog/trademarks/evers-life.png'],
            ];
            ?>
            <?php foreach ($brands as $brand): ?>
                <?php include VIEW_PATH . '/components/brand-card.php'; ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>