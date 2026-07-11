<?php
// TODO mobile
?>
<?php
$breadcrumbs = [
    ['/', 'Главная'],
    ['/coop/', 'Сотрудничество'],
    ['Брендбук']
];
include VIEW_PATH . 'partials/breadcrumbs.php';
?>

<section>
    <div class="container">
        <h1 class="page-h1">Брендбук</h1>
    </div>
</section>

<section class="brandbook-section">
    <div class="container">
        <div class="section-h2">Логотип Эверс груп Рус</div>
        <div class="brandbook-desktop">
            <div class="brandbook-desktop__text">
                <p><b>Основная версия логотипа</b> — комбинация символа и дескриптора (краткого текстового пояснения
                    сути бренда). Это эталонный вариант для большинства каналов: цифровые платформы, печатные материалы,
                    мерч, оформление пространств, транспорт, спецодежда, медиа и реклама.</p>
                <p><b>Краткая версия логотипа</b> — символ, применяется как упрощённый вариант идентификации бренда в
                    условиях ограниченного пространства или необходимости минималистичного визуального решения.</p>
                <p>Символ используется для цифровых носителей (аватары соцсетей, фавиконки, водяной знак), мелких
                    печатных элементов и макетов мерча.</p>
                <p><b>Версии на латинице</b> предназначены для коммуникации с международной аудиторией и обеспечения
                    единого фирменного стиля за пределами русскоязычного рынка. Обеспечение визуальной консистентности
                    бренда на международном уровне требует соблюдения единых стандартов использования логотипа.</p>
                <button type="button" class="btn btn-green popup-button" data-popup="brandbook-popup">Запросить брендбук
                </button>
            </div>
            <div class="brandbook-desktop__logos">
                <?php
                $brand_cards = [
                    ['title' => 'Основная версия', 'src' => '/assets/img/coop/logos/evers-rus.png'],
                    ['title' => 'краткая версия', 'src' => '/assets/img/coop/logos/evers-rus-short.png'],
                    ['title' => 'Основная версия (латиница)', 'src' => '/assets/img/coop/logos/evers-en.png'],
                    ['title' => 'краткая версия (латиница)', 'src' => '/assets/img/coop/logos/evers-en-short.png'],
                ];
                ?>
                <?php foreach ($brand_cards as $brand_card): ?>
                    <div class="brandbook-card">
                        <div class="brandbook-card__title"><?= $brand_card['title'] ?></div>
                        <div class="brandbook-card__image"><img src="<?= $brand_card['src'] ?>" alt=""/></div>
                        <div class="brandbook-card__link"><a href="<?= $brand_card['src'] ?>" download>Скачать</a></div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<section class="brandbook-trademarks-section">
    <div class="container brandbook-trademarks">
        <div class="section-h3">Логотипы наших торговых марок</div>
        <div class="brandbook-trademarks-list">
            <?php
            $brand_cards = [
                ['src' => '/assets/img/coop/logos/help.png'],
                ['src' => '/assets/img/coop/logos/evers-med.png'],
                ['src' => '/assets/img/coop/logos/angel.png'],
                ['src' => '/assets/img/coop/logos/evers-life.png'],
            ];
            ?>
            <?php foreach ($brand_cards as $brand_card): ?>
                <div class="brandbook-card">
                    <div class="brandbook-card__image"><img src="<?= $brand_card['src'] ?>" alt=""/></div>
                    <div class="brandbook-card__link"><a href="<?= $brand_card['src'] ?>" download>Скачать</a></div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<div class="popup" id="brandbook-popup">
    <button type="button" class="popup-close">
        <svg width="26" height="26" viewBox="0 0 26 26" fill="none">
            <path d="M24.9922 1L1 25M25 25L1.00784 1.00003" stroke="currentColor" stroke-width="2"
                  stroke-linecap="round"/>
        </svg>
    </button>
    <div class="popup-content">
        <div class="popup-title">Запрос брендбука</div>
        <div class="form">
            <div class="form-fields">
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
                            <div class="labeled-input-label">Компания</div>
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
                    <button type="submit" class="btn btn-green btn-full">Отправить запрос</button>
                </form>
            </div>
            <div class="form-success">
                <?php // TODO верстка ?>
                Форма успешно отправлена
            </div>
        </div>

    </div>
</div>
