<?php
// TODO mobile
?>
<?php
$breadcrumbs = [
    ['/', 'Главная'],
    ['/about/', 'О компании'],
    ['Где купить']
];
include VIEW_PATH . 'partials/breadcrumbs.php';
?>

<section>
    <div class="container">
        <h1 class="page-h1">Где купить</h1>
    </div>
</section>

<section class="sellers-section">
    <?php // TODO фильтры ?>
    <div class="container sellers-wrapper">
        <div class="select-tabs">
            <div class="select-tab__current">Смотреть все</div>
            <div class="select-tabs__inner">
                <div class="select-tab active">Смотреть все</div>
                <div class="select-tab">Маркетплейсы</div>
                <div class="select-tab">Аптеки</div>
                <div class="select-tab">Интернет-магазины</div>
            </div>
        </div>
        <div class="foreign-cards sellers-grid">
            <?php
            $sellers = [
                ['image' => '/assets/img/about/sellers/seller1.png', 'title' => 'Аптека «Апрель»', 'description' => '<a href="#">apteka-april.ru</a><br/><a href="tel:+7 (495) 737-27-30">+7 (495) 737-27-30</a>'],
                ['image' => '/assets/img/about/sellers/seller2.png', 'title' => 'Аптека «Ригла»', 'description' => '<a href="#">rigla.ru</a><br/><a href="tel:+7 (495) 737-27-30">+7 (495) 737-27-30</a>'],
                ['image' => '/assets/img/about/sellers/seller3.png', 'title' => 'Аптека «Аптека.ру»', 'description' => '<a href="#">apteka.ru</a><br/><a href="tel:+7 (495) 737-27-30">+7 (495) 737-27-30</a>'],
                ['image' => '/assets/img/about/sellers/seller4.png', 'title' => 'Аптека «Диалог»', 'description' => '<a href="#">dialog.ru</a><br/><a href="tel:+7 (495) 737-27-30">+7 (495) 737-27-30</a>'],
            ];
            ?>
            <?php foreach ($sellers as $seller): ?>
                <div class="foreign-card">
                    <div class="foreign-card__image"><img src="<?= $seller['image']; ?>" alt=""/></div>
                    <div class="foreign-card__title"><?= $seller['title'] ?></div>
                    <div class="foreign-card__description"><?= $seller['description'] ?></div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
