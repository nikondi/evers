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
        <?php // TODO button ?>
        <button class="btn request-button" type="button">Оставить заявку на обучение</button>
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
        <?php // TODO button ?>
        <div class="btn btn-green question-button">Задать вопрос</div>
    </div>
</section>