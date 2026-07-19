<?php
$breadcrumbs = [
    ['/', 'Главная'],
    ['/coop/', 'Сотрудничество'],
    ['Контрактное производство']
];
include VIEW_PATH . 'partials/breadcrumbs.php';
?>

<section>
    <div class="container">
        <h1 class="page-h1">Контрактное производство</h1>
        <div class="section-h3"><span>Надежное производство для ваших медицинских изделий.</span> Полный цикл: от
            регистрационного
            удостоверения до партии под вашим брендом на складе.
        </div>
    </div>
</section>

<section class="contract-first-section">
    <div class="container">
        <div class="contract-first">
            <div class="contract-first-text">
                <img src="/assets/img/icons/patches.svg" alt=""/>
                <div class="contract-first__title">Производим стерильные и нестерильные медицинские изделия с вашим
                    дизайном упаковки.
                </div>
                <div class="contract-first__text">
                    Мы поможем вам быстро создать и внедрить собственную линейку медицинских изделий чтобы повысить
                    средний чек и рентабельность бизнеса.
                </div>
                <button class="btn btn-white popup-button" data-popup="request-popup">Оставить заявку</button>
                <div class="contract-first-advs">
                    <div class="contract-first-adv">Индивидуальные условия сотрудничества с каждым клиентом</div>
                    <div class="contract-first-adv">Возможность разработки уникального товара под ваши требования</div>
                </div>
            </div>
            <div class="contract-first-image">
                <img src="/assets/img/coop/contract/first-background.png" alt=""/>
            </div>
        </div>
        <div class="contract-metrics">
            <div class="contract-metrics__title">130+ млн<br/>изделий в год</div>
            <div class="contract-metrics__description">
                <p>собственное производство
                    и научная лаборатория</p>
                <p>работаем с 2001 года</p>
            </div>
        </div>
    </div>
</section>

<section class="contract-partners-section">
    <div class="container">
        <div class="section-badge">наши партнеры</div>
        <div class="section-h2">Контрактное производство Эверс груп Рус&nbsp;сотрудничает <span>с&nbsp;крупнейшими федеральными аптечными сетями и&nbsp;фармкомпаниями</span>,
            в&nbsp;числе которых Ригла, Апрель, Эркафарм.
        </div>
    </div>
</section>

<section class="contract-for-section">
    <div class="container">
        <div class="section-badge section-badge--white">для кого</div>
        <div class="contract-for__title section-h2">Для&nbsp;аптечных и&nbsp;торговых сетей, клиник и&nbsp;госпиталей,
            владельцев брендов, маркетплейсов и&nbsp;e-commerce, стартапов в&nbsp;MedTech, медицинских специалистов.
        </div>
        <button type="button" class="btn btn-white popup-button" data-popup="request-popup">
            Оставить заявку
        </button>
    </div>
</section>

<section class="contract-assortment-section oversection">
    <div class="container">
        <div class="section-badge">ассортимент</div>
        <div class="section-h4">
            Мы производим широкий ассортимент товаров - <span>более 200 наименований в различных категориях.</span> Под
            вашей
            торговой маркой мы можем произвести любой продукт из нашего актуального ассортимента и предоставим все
            необходимые документы - РУ РЗН (Регистрационное удостоверение), декларации и сертификаты.
        </div>
        <div class="swiper assortment-slider">
            <div class="swiper-wrapper">
                <?php
                $goods = [
                    ['link' => '/catalog/product', 'image' => '/assets/img/coop/contract/assortment/1.png', 'title' => 'Лейкопластыри и повязки '],
                    ['link' => '/catalog/product', 'image' => '/assets/img/coop/contract/assortment/2.png', 'title' => 'Марля, вата, бинты'],
                    ['link' => '/catalog/product', 'image' => '/assets/img/coop/contract/assortment/3.png', 'title' => 'Средства индивидуальной защиты (маски, бахилы)'],
                    ['link' => '/catalog/product', 'image' => '/assets/img/coop/contract/assortment/4.png', 'title' => 'Средства экспресс-диагностики'],
                ]
                ?>
                <?php foreach ($goods as $goodItem): ?>
                    <div class="swiper-slide">
                        <?php include VIEW_PATH . 'components/good-short-card.php'; ?>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="swiper-pagination slider-progressbar"></div>
        </div>
    </div>
</section>

<section class="contract-request-section">
    <div class="container">
        <div class="contract-request">
            <div class="contract-request-text">
                <div class="section-badge section-badge--white">оставить заявку</div>
                <div class="contract-request__text">Оставьте Ваши контакты и&nbsp;пожелания&nbsp;— мы&nbsp;свяжемся с&nbsp;Вами
                    в&nbsp;самое
                    ближайшее время, чтобы&nbsp;обсудить детали.
                </div>
                <div class="contract-request__note">Поля, отмеченные&nbsp;(*), обязательны для заполнения</div>
                <div class="contract-request-contacts">
                    <div class="contract-request-contact">
                        <div class="contract-request-contact__label">Почта:</div>
                        <a href="mailto:evers@evers.ru" class="contract-request-contact__text">evers@evers.ru</a>
                    </div>
                    <div class="contract-request-contact">
                        <div class="contract-request-contact__label">Телефон:</div>
                        <a href="tel:+7 (499) 707-10-09" class="contract-request-contact__text">+7 (499) 707-10-09</a>
                    </div>
                </div>
            </div>
            <div class="contract-request-form form">
                <div class="form-fields">
                    <form action="/request.json">
                        <div class="form-input-group">
                            <div class="labeled-input labeled-input--required">
                                <div class="labeled-input-label">Ваше имя / название компании</div>
                                <input type="text" name="name" required/>
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
                                <div class="labeled-input-label">Комментарий</div>
                                <textarea name="comment"></textarea>
                            </div>
                            <label class="checkbox checkbox--white">
                                <input type="checkbox" required/>
                                <span class="checkbox__check"></span>
                                <span>Я согласен на <a href="#">обработку персональных данных</a> и с условиями <a
                                        href="#">политики конфиденциальности</a> *</span>
                            </label>
                        </div>
                        <button type="submit" class="btn btn-white btn-full">Оставить заявку</button>
                    </form>
                </div>
                <div class="form-success">
                    <?php // TODO верстка ?>
                    Форма успешно отправлена
                </div>
            </div>
        </div>
    </div>
</section>