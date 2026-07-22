<?php
$breadcrumbs = [
    ['/', 'Главная'],
    ['/about', 'О компании'],
    ['/about/news', 'Новости']
];
include VIEW_PATH . 'partials/breadcrumbs.php';
?>

<section class="news-single-section">
    <div class="container">
        <a href="/about/news" class="product-back-button">
            <div class="slider-arrow">
                <svg width="1em" height="1em">
                    <use xlink:href="/assets/img/icons/slider-arrows.svg#left"/>
                </svg>
            </div>
            Назад
        </a>
        <div class="news-single-image">
            <img src="/assets/img/article-full.png" alt=""/>
        </div>
        <div class="news-single-content">
            <div class="news-single-date">7 мая 2026</div>
            <h1 class="news-single-title">«Уральская ватная компания» примет участие в Региональном конгрессе
                медицинских сестёр в Тюмени</h1>
            <main class="news-single-text">
                <p>Тюмень, 2026 год. В преддверии Международного дня медицинской сестры состоится масштабное
                    профессиональное событие — Региональный междисциплинарный конгресс «СИЛА — Сестринские Инновации.
                    Лидерство. Актуальность». Мероприятие пройдёт 12–14 мая 2026 года в Тюмени при поддержке
                    департамента здравоохранения Тюменской области.</p>
                <p>Важным участником конгресса станет «Уральская ватная компания» — надёжный поставщик расходных
                    материалов и медицинского оборудования.</p>
                <p>На конгрессе «Уральская ватная компания», выступающая в качестве партнёра компании «Эверс груп Рус»,
                    представит широкий ассортимент продуктов медицинского назначения — как современных инновационных
                    решений, так и проверенных традиционных изделий. Участие компании станет вкладом в достижение
                    главной цели конгресса: повышение качества сестринской помощи через внедрение новых технологий и
                    укрепление профессионального сообщества.</p>
                <p>Участие компании в мероприятии имеет большое значение для всех сторон:</p>

                <ul>
                    <li>Для участников конгресса это возможность напрямую познакомиться с продукцией, узнать о новых
                        решениях и обсудить вопросы снабжения с опытным поставщиком.
                    </li>
                    <li>Для «Уральской ватной компании» — шанс укрепить репутацию, продемонстрировать свою вовлечённость
                        в развитие сестринского дела и наладить новые профессиональные контакты.
                    </li>
                    <li>В целом такое партнёрство способствует сближению производителей, поставщиков и практикующих
                        специалистов — а значит, помогает улучшать качество медицинской помощи.
                    </li>
                </ul>
                <p>Конгресс обещает стать значимой площадкой для обмена опытом и внедрения передовых практик в
                    сестринском деле. Его масштабность подчёркивают несколько ключевых факторов:</p>

                <ul>
                    <li>Междисциплинарный формат: событие объединит специалистов разных медицинских направлений — это
                        позволит рассмотреть вопросы сестринской практики в широком профессиональном контексте.
                    </li>
                    <li>Региональное значение с потенциалом выхода на федеральный уровень: конгресс станет центром
                        притяжения для медицинских сестёр и руководителей сестринских служб со всего региона, а
                        представленные на нём инициативы могут лечь в основу новых стандартов работы.
                    </li>
                    <li>Акцент на инновациях и лидерстве: название конгресса («СИЛА») отражает его главные темы —
                        внедрение инноваций, развитие лидерских качеств у медицинских сестёр и актуализацию их роли в
                        современной системе здравоохранения.
                    </li>
                    <li>Связь с международным праздником: проведение конгресса в преддверии Международного дня
                        медицинской сестры придаёт событию дополнительную значимость и символизм, подчёркивая уважение к
                        профессии и вклад медсестёр в здравоохранение.
                    </li>
                </ul>
            </main>
            <a href="#" class="btn btn-green" style="margin-top: 60px;">Кнопка, если нужна</a>
        </div>

        <div class="swiper products-slider" style="margin-top: 80px;">
            <div class="slider-top">
                <div class="section-badge">Продукция, упомянутая в материале</div>
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

        <div class="swiper news-slider" style="margin-top: 80px;">
            <div class="slider-top">
                <div class="section-badge">вам может быть интересно</div>
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
                $events = [
                    ['image' => '/assets/img/news/1.png', 'date' => '7 мая', 'title' => 'Поддержка раненых бойцов: важность волонтерской помощи и профессионального обучения', 'description' => 'В современных реалиях, когда так много наших бойцов нуждаются в помощи и поддержке, невозможно оставаться в стороне...'],
                    ['image' => '/assets/img/news/2.png', 'date' => '7 мая', 'title' => 'Развитие компетенций специалистов паллиативной помощи', 'description' => '9-10 июня текущего года в Уфе на базе АНМО «Уфимский хоспис» состоялось значимое образовательное мероприятие...'],
                    ['image' => '/assets/img/news/3.png', 'date' => '6 мая', 'title' => 'Компания из Дубны обучает волонтеров правильно использовать свою продукцию для помощи СВО', 'description' => 'Один из резидентов ОЭЗ «Дубна» активно включился в волонтерское движение, направленное на помощь пациентам...'],
                    ['image' => '/assets/img/news/1.png', 'date' => '7 мая', 'title' => 'Поддержка раненых бойцов: важность волонтерской помощи и профессионального обучения', 'description' => 'В современных реалиях, когда так много наших бойцов нуждаются в помощи и поддержке, невозможно оставаться в стороне...'],
                    ['image' => '/assets/img/news/2.png', 'date' => '7 мая', 'title' => 'Развитие компетенций специалистов паллиативной помощи', 'description' => '9-10 июня текущего года в Уфе на базе АНМО «Уфимский хоспис» состоялось значимое образовательное мероприятие...'],
                    ['image' => '/assets/img/news/3.png', 'date' => '6 мая', 'title' => 'Компания из Дубны обучает волонтеров правильно использовать свою продукцию для помощи СВО', 'description' => 'Один из резидентов ОЭЗ «Дубна» активно включился в волонтерское движение, направленное на помощь пациентам...'],
                ];
                ?>
                <?php foreach ($events as $i => $newsItem): ?>
                    <div class="swiper-slide">
                        <?php include VIEW_PATH . '/components/news-card.php'; ?>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="swiper-pagination slider-progressbar"></div>
        </div>
    </div>
</section>
