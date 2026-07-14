<?php
$breadcrumbs = [
    ['/', 'Главная'],
    ['#', 'О компании'],
    ['СМИ о нас']
];
include VIEW_PATH . 'partials/breadcrumbs.php';
?>

<section>
    <div class="container">
        <h1 class="page-h1">СМИ о нас</h1>
    </div>
</section>

<section class="articles-grid-section">
    <div class="container">
        <form class="news-top">
            <div class="select-tabs">
                <button class="select-tab-current" type="button">Смотреть все</button>
                <div class="select-tabs__inner">
                    <div class="select-tab active">Смотреть все</div>
                    <div class="select-tab">Статьи</div>
                    <div class="select-tab">Видеосюжеты</div>
                </div>
            </div>
        </form>

        <div class="news-grid">
            <?php
            $news = [
                ['image' => '/assets/img/news/1.png', 'date' => 'ресурс', 'title' => '«Уральская ватная компания» примет участие в Региональном конгрессе медицинских сестёр в Тюмени', 'description' => 'Тюмень, 2026 год. В преддверии Международного дня медицинской сестры состоится масштабное...'],
                ['image' => '/assets/img/news/2.png', 'date' => 'ресурс', 'title' => 'Масштабирование производства современных перевязочных средств EVERSMED как результат признания на рынке', 'description' => 'Группа компаний Эверс груп Рус в 2026 году нарастила объёмы производства современных перевязочных средств...'],
                ['image' => '/assets/img/news/3.png', 'date' => 'ресурс', 'title' => 'Укусы насекомых: как быстро снять зуд и предотвратить воспаление', 'description' => 'Лето — пора пикников, прогулок на природе и активного отдыха. Но вместе с приятными впечатлениями могут прийти...'],
                ['video' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/2GgV7bgBS4Q?si=Lu_sKpa3ilFERVJx" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>', 'date' => 'видеосюжет', 'title' => '«Уральская ватная компания» примет участие в Региональном конгрессе медицинских сестёр в Тюмени'],
                ['image' => '/assets/img/news/2.png', 'date' => 'ресурс', 'title' => 'Масштабирование производства современных перевязочных средств EVERSMED как результат признания на рынке', 'description' => 'Группа компаний Эверс груп Рус в 2026 году нарастила объёмы производства современных перевязочных средств...'],
                ['image' => '/assets/img/news/3.png', 'date' => 'ресурс', 'title' => 'Укусы насекомых: как быстро снять зуд и предотвратить воспаление', 'description' => 'Лето — пора пикников, прогулок на природе и активного отдыха. Но вместе с приятными впечатлениями могут прийти...'],
            ];
            ?>
            <?php foreach ($news as $i => $newsItem): ?>
                <?php include VIEW_PATH . '/components/news-card.php'; ?>
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
