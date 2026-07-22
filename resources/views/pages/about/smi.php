<?php
$breadcrumbs = [
    ['/', 'Главная'],
    ['/about', 'О компании'],
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
                ['link' => '/about/news/single', 'image' => '/assets/img/news/1.png', 'date' => 'ресурс', 'title' => '«Уральская ватная компания» примет участие в Региональном конгрессе медицинских сестёр в Тюмени', 'description' => 'Тюмень, 2026 год. В преддверии Международного дня медицинской сестры состоится масштабное...'],
                ['link' => '/about/news/single', 'image' => '/assets/img/news/2.png', 'date' => 'ресурс', 'title' => 'Масштабирование производства современных перевязочных средств EVERSMED как результат признания на рынке', 'description' => 'Группа компаний Эверс груп Рус в 2026 году нарастила объёмы производства современных перевязочных средств...'],
                ['link' => '/about/news/single', 'image' => '/assets/img/news/3.png', 'date' => 'ресурс', 'title' => 'Укусы насекомых: как быстро снять зуд и предотвратить воспаление', 'description' => 'Лето — пора пикников, прогулок на природе и активного отдыха. Но вместе с приятными впечатлениями могут прийти...'],
                ['link' => '/about/news/single', 'video' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/2GgV7bgBS4Q?si=Lu_sKpa3ilFERVJx" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>', 'date' => 'видеосюжет', 'title' => '«Уральская ватная компания» примет участие в Региональном конгрессе медицинских сестёр в Тюмени'],
                ['link' => '/about/news/single', 'image' => '/assets/img/news/2.png', 'date' => 'ресурс', 'title' => 'Масштабирование производства современных перевязочных средств EVERSMED как результат признания на рынке', 'description' => 'Группа компаний Эверс груп Рус в 2026 году нарастила объёмы производства современных перевязочных средств...'],
                ['link' => '/about/news/single', 'image' => '/assets/img/news/3.png', 'date' => 'ресурс', 'title' => 'Укусы насекомых: как быстро снять зуд и предотвратить воспаление', 'description' => 'Лето — пора пикников, прогулок на природе и активного отдыха. Но вместе с приятными впечатлениями могут прийти...'],
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

<section class="smi-contacts-section">
    <div class="container">
        <div class="smi-contacts">
            <div class="smi-contacts__title">Контакты для СМИ</div>
            <button class="btn btn-white popup-button" type="button" data-popup="request-smi-popup">
                Оставить заявку
            </button>
        </div>
    </div>
</section>


<?php //// POPUP ?>
<div class="popup" id="request-smi-popup">
    <button type="button" class="popup-close">
        <svg width="26" height="26" viewBox="0 0 26 26" fill="none">
            <path d="M24.9922 1L1 25M25 25L1.00784 1.00003" stroke="currentColor" stroke-width="2"
                  stroke-linecap="round"/>
        </svg>
    </button>
    <div class="popup-content">
        <div class="form">
            <div class="form-fields">
                <div class="popup-title">Заявка для представителей СМИ</div>
                <div class="popup-description">Пожалуйста, заполните форму заявки и менеджер свяжется с вами в ближайшее
                    время. Поля, отмеченные&nbsp;(*), обязательны для заполнения.
                </div>
                <form action="/request.json" class="popup-form">
                    <div class="form-input-group">
                        <div class="labeled-input labeled-input--required">
                            <div class="labeled-input-label">Ваше имя</div>
                            <input type="text" name="name" required/>
                        </div>
                        <div class="labeled-input">
                            <div class="labeled-input-label">Наименование/название  СМИ</div>
                            <input type="text" name="company"/>
                        </div>
                        <div class="labeled-input labeled-input--required">
                            <div class="labeled-input-label">Контактный телефон</div>
                            <input type="tel" name="phone" required/>
                        </div>
                        <div class="labeled-input labeled-input--required">
                            <div class="labeled-input-label">E-mail</div>
                            <input type="email" name="email" required/>
                        </div>
                        <div class="labeled-input">
                            <div class="labeled-input-label">Ваш вопрос</div>
                            <textarea name="comment"></textarea>
                        </div>
                        <label class="labeled-file">
                            <input type="file" name="file"/>
                            <svg height="22" width="20">
                                <use xlink:href="/assets/img/icons.svg#clip"/>
                            </svg>
                            <span class="labeled-file__text">Прикрепить файл</span>
                        </label>
                        <label class="checkbox">
                            <input type="checkbox" required/>
                            <span class="checkbox__check"></span>
                            <span>Я согласен на <a href="#">обработку персональных данных</a> *</span>
                        </label>
                        <label class="checkbox">
                            <input type="checkbox" required/>
                            <span class="checkbox__check"></span>
                            <span>Я согласен с условиями <a href="#">политики конфиденциальности</a> *</span>
                        </label>
                    </div>
                    <button type="submit" class="btn btn-green btn-full">Оставить заявку</button>
                </form>
            </div>
            <div class="form-success">
                <img src="/assets/img/icons/form-success.svg" alt="">
                <div class="form-success__title">Спасибо, заявка отправлена!</div>
                <div class="form-success__description">Менеджер свяжется с вами в ближайшее время. Режим работы:
                    с 9 до 18 (ПН-ЧТ) и с 9 до 17 (ПТ) по московскому времени.
                </div>
            </div>
        </div>

    </div>
</div>
