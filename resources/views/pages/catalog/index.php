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
        <div class="catalog-top">
            <div class="catalog-top-text">
                <h1 class="page-h1">Лечение ран, ожогов, пролежней, уход за лежачими пациентами</h1>
                <div class="catalog-top__description">Краткое описание категории из 1-2 предложений. Краткое описание
                    категории из 1-2 предложений.
                </div>
            </div>
            <div class="catalog-top-image">
                <img src="/assets/img/catalog/trademarks/evers-life.png" alt="">
            </div>
        </div>
    </div>
</section>

<section class="catalog-list-section">
    <div class="container">
        <form class="articles-top">
            <div class="article-filters">
                <?php // TODO: фильтры мобилка ?>
                <label class="article-filter">
                    <select>
                        <option>Тип материала</option>
                        <option>Первый</option>
                        <option>Второй</option>
                    </select>
                    <span class="article-filter__plus"></span>
                </label>
                <label class="article-filter">
                    <select>
                        <option>Тип продукции</option>
                        <option>Первый</option>
                        <option>Второй</option>
                    </select>
                    <span class="article-filter__plus"></span>
                </label>
            </div>
            <div class="articles-search">
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
        <div class="catalog-seo">
            <p><b>СЕО-текст.</b> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt
                in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                deserunt mollit anim id est laborum.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                deserunt mollit anim id est laborum.</p>
        </div>
    </div>
</section>
