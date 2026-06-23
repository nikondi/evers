<?php
// TODO mobile
?>
<?php
$breadcrumbs = [
    ['/', 'Главная'],
    ['/coop/', 'Сотрудничество'],
    ['Обучение для оптовых партнеров']
];
include VIEW_PATH . 'partials/breadcrumbs.php';
?>

<section>
    <div class="container">
        <h1 class="page-h1">Обучение для оптовых партнеров</h1>
    </div>
</section>

<section class="education-first">
    <div class="container">
        <img src="/assets/img/icons/peoples.svg" alt=""/>
        <div class="education-first-text">
            <div class="section-h3">
                <span>Поддержка сообщества важна</span> в любой сфере, а в такой чувствительной области как медицина -
                особенно.
            </div>
            <p>Для наших действующих и новых партнеров мы проводим обучающие мероприятия по продуктам. Если у вас есть
                вопросы по нашему ассортименту, методам использования, опыту применения и другим аспектам, мы готовы
                организовать для&nbsp;ваших сотрудников обучение.</p>
            <p>Программа мероприятия разрабатывается индивидуально, и&nbsp;может быть организована как&nbsp;онлайн,
                так&nbsp;и&nbsp;офлайн.</p>
        </div>
        <button class="btn popup-button" data-popup="request-popup" type="button">Оставить заявку на обучение</button>
    </div>
</section>

<section class="education-question oversection">
    <div class="container">
        <div class="section-badge">задать вопрос</div>
        <div class="section-h3">
            <span>Многие специалисты с&nbsp;большим удовольствием используют нашу продукцию в&nbsp;своей ежедневной
                практике.</span> Если&nbsp;ваш&nbsp;вопрос относится к&nbsp;компетенции действующего медицинского
            специалиста узкого
            профиля, мы&nbsp;готовы пригласить такого спикера.
        </div>
        <div class="education-question-text">
            Пожалуйста, опишите ваш запрос через форму (или обратитесь к своему персональному менеджеру напрямую), мы
            обязательно с вами свяжемся, чтобы обсудить детали.
        </div>
        <div class="btn btn-green popup-button" data-popup="question-popup">Задать вопрос</div>
    </div>
</section>

<section class="education-events-section oversection">
    <div class="container">
        <div class="swiper news-slider">
            <div class="slider-top">
                <div class="section-badge">Наши мероприятия</div>
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