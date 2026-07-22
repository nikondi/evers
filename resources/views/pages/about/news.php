<?php
$breadcrumbs = [
    ['/', 'Главная'],
    ['/about', 'О компании'],
    ['Новости и мероприятия']
];
include VIEW_PATH . 'partials/breadcrumbs.php';
?>

<section>
    <div class="container">
        <h1 class="page-h1">Новости и мероприятия</h1>
    </div>
</section>

<section class="articles-grid-section">
    <div class="container">
        <form class="news-top">
            <div class="select-tabs">
                <button class="select-tab-current" type="button">Смотреть все</button>
                <div class="select-tabs__inner">
                    <div class="select-tab active">Смотреть все</div>
                    <div class="select-tab">Новости компании</div>
                    <div class="select-tab">Мероприятия</div>
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

        <div class="news-grid">
            <?php
            $news = [
                ['link' => '/about/news/single', 'image' => '/assets/img/news/1.png', 'date' => '7 мая', 'title' => '«Уральская ватная компания» примет участие в Региональном конгрессе медицинских сестёр в Тюмени', 'description' => 'Тюмень, 2026 год. В преддверии Международного дня медицинской сестры состоится масштабное...'],
                ['link' => '/about/news/single', 'image' => '/assets/img/news/2.png', 'date' => '7 мая', 'title' => 'Масштабирование производства современных перевязочных средств EVERSMED как результат признания на рынке', 'description' => 'Группа компаний Эверс груп Рус в 2026 году нарастила объёмы производства современных перевязочных средств...'],
                ['link' => '/about/news/single', 'image' => '/assets/img/news/3.png', 'date' => '6 мая', 'title' => 'Укусы насекомых: как быстро снять зуд и предотвратить воспаление', 'description' => 'Лето — пора пикников, прогулок на природе и активного отдыха. Но вместе с приятными впечатлениями могут прийти...'],
                ['link' => '/about/news/single', 'image' => '/assets/img/news/1.png', 'date' => '7 мая', 'title' => '«Уральская ватная компания» примет участие в Региональном конгрессе медицинских сестёр в Тюмени', 'description' => 'Тюмень, 2026 год. В преддверии Международного дня медицинской сестры состоится масштабное...'],
                ['link' => '/about/news/single', 'image' => '/assets/img/news/2.png', 'date' => '7 мая', 'title' => 'Масштабирование производства современных перевязочных средств EVERSMED как результат признания на рынке', 'description' => 'Группа компаний Эверс груп Рус в 2026 году нарастила объёмы производства современных перевязочных средств...'],
                ['link' => '/about/news/single', 'image' => '/assets/img/news/3.png', 'date' => '6 мая', 'title' => 'Укусы насекомых: как быстро снять зуд и предотвратить воспаление', 'description' => 'Лето — пора пикников, прогулок на природе и активного отдыха. Но вместе с приятными впечатлениями могут прийти...'],
                ['link' => '/about/news/single', 'image' => '/assets/img/news/1.png', 'date' => '7 мая', 'title' => '«Уральская ватная компания» примет участие в Региональном конгрессе медицинских сестёр в Тюмени', 'description' => 'Тюмень, 2026 год. В преддверии Международного дня медицинской сестры состоится масштабное...'],
                ['link' => '/about/news/single', 'image' => '/assets/img/news/2.png', 'date' => '7 мая', 'title' => 'Масштабирование производства современных перевязочных средств EVERSMED как результат признания на рынке', 'description' => 'Группа компаний Эверс груп Рус в 2026 году нарастила объёмы производства современных перевязочных средств...'],
                ['link' => '/about/news/single', 'image' => '/assets/img/news/3.png', 'date' => '6 мая', 'title' => 'Укусы насекомых: как быстро снять зуд и предотвратить воспаление', 'description' => 'Лето — пора пикников, прогулок на природе и активного отдыха. Но вместе с приятными впечатлениями могут прийти...'],
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
