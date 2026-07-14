<?php
$breadcrumbs = [
    ['/', 'Главная'],
    ['#', 'О компании'],
    ['Научные публикации']
];
include VIEW_PATH . 'partials/breadcrumbs.php';
?>

<section>
    <div class="container">
        <h1 class="page-h1">Научные публикации</h1>
    </div>
</section>

<section class="publications-grid-section">
    <div class="container">
        <form class="news-top">
            <div class="select-tabs">
                <button class="select-tab-current" type="button">Текстовые материалы</button>
                <div class="select-tabs__inner">
                    <div class="select-tab active">Текстовые материалы</div>
                    <div class="select-tab">Видеоматериалы</div>
                </div>
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

        <div class="pubs-grid">
            <?php
            $publications = [
                ['type' => 'text', 'label' => 'текстовый материал', 'link' => '#', 'image' => '/assets/img/product/pub-1.png', 'title' => 'Принципы и методы лечения гнойно-некротических ран', 'text' => 'В 7 главе книги «Руководство по хирургии», посвящённой лечению ран, рассматривается эффективность применения раневого покрытия Хитокол®, мазевой сетчатой повязки и ранозаживляющего средства «ЭверсЛайф-Гель».'],
                ['type' => 'text', 'label' => 'текстовый материал', 'link' => '#', 'image' => '/assets/img/product/pub-2.png', 'title' => 'Возможности мониторинга и стимуляции длительно незаживающих ран с применением комплексного подхода', 'text' => 'В представленной статье подробно рассмотрена методология лечения хронических, долго не заживающих ран с использованием препарата Хитокол® в составе комплексной терапии. '],
                ['type' => 'text', 'label' => 'текстовый материал', 'link' => '#', 'image' => '/assets/img/product/pub-1.png', 'title' => 'Принципы и методы лечения гнойно-некротических ран', 'text' => 'В 7 главе книги «Руководство по хирургии», посвящённой лечению ран, рассматривается эффективность применения раневого покрытия Хитокол®, мазевой сетчатой повязки и ранозаживляющего средства «ЭверсЛайф-Гель».'],
                ['type' => 'text', 'label' => 'текстовый материал', 'link' => '#', 'image' => '/assets/img/product/pub-2.png', 'title' => 'Возможности мониторинга и стимуляции длительно незаживающих ран с применением комплексного подхода', 'text' => 'В представленной статье подробно рассмотрена методология лечения хронических, долго не заживающих ран с использованием препарата Хитокол® в составе комплексной терапии. '],
            ];
            ?>
            <?php foreach ($publications as $publication): ?>
                <?php include VIEW_PATH . '/components/pub-card.php'; ?>
            <?php endforeach; ?>
        </div>

        <nav class="pagination articles-pagination">
            <ul>
                <li><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li>
                    <div>...</div>
                </li>
                <li><a href="#">24</a></li>
                <li>
                    <a href="#">
                        <svg width="16" height="16">
                            <use xlink:href="/assets/img/icons/slider-arrows.svg#right"/>
                        </svg>
                    </a>
                </li>
            </ul>
        </nav>

    </div>
</section>
