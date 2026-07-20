<?php
$breadcrumbs = [
    ['/', 'Главная'],
    ['/coop/', 'Сотрудничество'],
    ['Отзывы партнеров']
];
include VIEW_PATH . 'partials/breadcrumbs.php';
?>
<section class="catalog-top-section">
    <div class="container">
        <h1 class="page-h1">Избранное</h1>
    </div>
</section>

<section class="catalog-favorites-section">
    <div class="container">
        <form class="articles-top">
            <div class="articles-search" style="max-width: unset">
                <input type="text" name="q" placeholder="Поиск"/>
                <button type="submit">
                    <svg width="20" height="20">
                        <use xlink:href="/assets/img/icons.svg#search"/>
                    </svg>
                </button>
            </div>
        </form>

        <?php
        $products = [
            ['image' => '/assets/img/products/1.png', 'title' => 'Бинт марлевый медицинский стерильный HELP', 'link' => '/catalog/product'],
            ['image' => '/assets/img/products/2.png', 'title' => 'Повязки пластырного типа бактерицидные', 'link' => '/catalog/product'],
            ['image' => '/assets/img/products/3.png', 'title' => 'Повязка пластырного типа с&nbsp;суперадсорбентом', 'link' => '/catalog/product'],
            ['image' => '/assets/img/products/4.png', 'title' => 'Салфетки сорбционные марлевые HELP', 'link' => '/catalog/product'],
            ['image' => '/assets/img/products/3.png', 'title' => 'Повязка пластырного типа с&nbsp;суперадсорбентом', 'link' => '/catalog/product'],
            ['image' => '/assets/img/products/2.png', 'title' => 'Повязки пластырного типа бактерицидные', 'link' => '/catalog/product'],
            ['image' => '/assets/img/products/1.png', 'title' => 'Бинт марлевый медицинский стерильный HELP', 'link' => '/catalog/product'],
            ['image' => '/assets/img/products/4.png', 'title' => 'Салфетки сорбционные марлевые HELP', 'link' => '/catalog/product'],
        ];
        ?>
        <div class="catalog-grid">
            <?php foreach ($products as $i => $goodItem): ?>
                <?php include VIEW_PATH . 'components/good-card.php'; ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>
