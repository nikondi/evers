<?php
$breadcrumbs = [
    ['/', 'Главная'],
    ['/coop/', 'Сотрудничество'],
    ['Отзывы партнеров']
];
include VIEW_PATH . 'partials/breadcrumbs.php';
?>

<section>
    <div class="container">
        <h1 class="page-h1">Отзывы партнеров</h1>
    </div>
</section>

<section class="coop-reviews-section">
    <div class="container">
        <?php // TODO фильтры ?>
        <div class="select-tabs">
            <button class="select-tab-current" type="button">Смотреть все</button>
            <div class="select-tabs__inner">
                <div class="select-tab active">Смотреть все</div>
                <div class="select-tab">Отзывы о сотрудничестве</div>
                <div class="select-tab">Дипломы и награды</div>
            </div>
        </div>

        <div class="reviews-grid">
            <?php
            $reviews = [
                ['image' => '/assets/img/coop/reviews/review-1.png', 'text' => 'Благодарственное письмо от фонда «Надежда, вера, возрождение»'],
                ['image' => '/assets/img/coop/reviews/review-2.png', 'text' => 'Благодарственное письмо от ООО «ФЭСТ»'],
                ['image' => '/assets/img/coop/reviews/review-3.png', 'text' => 'Благодарственное письмо от Курского государственного медицинского университета'],
                ['image' => '/assets/img/coop/reviews/review-4.png', 'text' => 'Благодарственное письмо от Российского Общества Колоректальных Хирургов (РОКХ)'],
                ['image' => '/assets/img/coop/reviews/review-5.png', 'text' => 'Благодарственное письмо от ООО ГК «Надежда-Фарма»'],
                ['image' => '/assets/img/coop/reviews/review-6.png', 'text' => 'Благодарственное письмо от ООО «ТРЕЙБОР»'],
                ['image' => '/assets/img/coop/reviews/review-7.png', 'text' => 'Благодарственное письмо от ТД «Особая забота»'],
                ['image' => '/assets/img/coop/reviews/review-8.png', 'text' => 'Диплом участника 33 международной выставки медицинской техники'],
            ];
            ?>
            <?php foreach ($reviews as $review): ?>
                <a href="<?= $review['image'] ?>" class="review-card" data-fancybox="review">
                    <div class="review-card__image"><img src="<?= $review['image'] ?>" alt=""></div>
                    <div class="review-card__text"><?= $review['text'] ?></div>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>
