<?php
// TODO mobile

$product = [
    'title' => 'Хитокол®-ДА',
    'images' => ['/assets/img/catalog/product.png', '/assets/img/catalog/product.png', '/assets/img/catalog/product.png', '/assets/img/catalog/product.png', '/assets/img/catalog/product.png', '/assets/img/catalog/product.png', '/assets/img/catalog/product.png',],
    'art' => '123456',
    'short' => '<p>Высокоэффективное инновационное средство на основе биологически активного хитозана с иммобилизированными антимикробными препаратами, анестетиком и протеолитическим ферментом для лечения сложных ран.</p><h4>ОБЛАСТИ ПРИМЕНЕНИЯ:</h4><ul><li>медицинские стационары,</li><li>хирургия,</li> <li>амбулаторно-поликлинические учреждения,</li><li>травматология,</li><li>колопроктология,</li> <li>флебология,</li><li>пластическая и стоматологическая хирургия,</li> <li>комбустиология,</li> <li>домашнее применение.</li></ul>'
];
$thumbnails = array_slice($product['images'], 0, 2);
$additional_count = count($product['images']) - count($thumbnails);
?>
<?php
$breadcrumbs = [
    ['/', 'Главная'],
    ['/catalog/', 'Каталог'],
    ['#', 'Лечение ран, ожогов, пролежней, уход за лежачими пациентами'],
    [$product['title']]
];
include VIEW_PATH . 'partials/breadcrumbs.php';
?>

<section class="product-page-top">
    <div class="container">
        <a href="#" class="product-back-button">
            <div class="slider-arrow">
                <svg width="1em" height="1em">
                    <use xlink:href="/assets/img/icons/slider-arrows.svg#left"/>
                </svg>
            </div>
            Назад
        </a>
        <div class="product-data">
            <div class="product-images">
                <div class="product-images-slider swiper">
                    <div class="swiper-wrapper">
                        <?php foreach ($product['images'] as $image): ?>
                            <div class="swiper-slide">
                                <a href="<?= $image ?>" data-fancybox="product-gallery"><img src="<?= $image ?>"
                                                                                             alt=""/></a>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <a href="#" class="product-images__download">Скачать фото (zip)</a>
                </div>
                <div class="product-images-thumbnails">
                    <?php foreach ($thumbnails as $image): ?>
                        <div class="product-images-thumbnail">
                            <a href="<?= $image ?>" data-fancybox="product-thumbs"><img src="<?= $image ?>" alt=""></a>
                        </div>
                    <?php endforeach; ?>
                    <?php if ($additional_count > 0): ?>
                        <div class="product-images-thumbnail">
                            <img src="<?= $product['images'][2] ?>" alt="">
                            <div class="product-images-thumbnail__additional"><?= $additional_count ?>+</div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="product-info">
                <!-- Класс active - в избранных -->
                <button class="product-favorite-button" type="button">
                    <svg width="18" height="16" viewBox="0 0 19 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M5.17849 0.500046C3.97646 0.500046 2.78087 0.972382 1.86969 1.92053C0.0472841 3.81678 0.0420493 6.86029 1.86234 8.75798L9.15357 16.3608C9.33009 16.5464 9.66547 16.5464 9.84199 16.3608C12.2742 13.83 14.701 11.2963 17.1332 8.76533C18.9556 6.86905 18.9556 3.82418 17.1332 1.92789C15.3108 0.0316076 12.3306 0.0315651 10.5082 1.92789L9.50149 2.96565L8.49478 1.92053C7.5123 0.894298 6.29499 0.495076 5.17849 0.500046ZM5.17849 1.42741C6.12574 1.42741 7.07797 1.81001 7.8137 2.57557L9.16091 3.98133C9.33743 4.16687 9.67282 4.16687 9.84933 3.98133L11.1891 2.58293C12.6606 1.05179 14.9807 1.05182 16.4522 2.58293C17.9236 4.11404 17.9236 6.58655 16.4522 8.11764C14.1356 10.5282 11.818 12.9421 9.50142 15.3526L2.5507 8.1103C1.08026 6.5773 1.07927 4.10664 2.5507 2.57557C3.2864 1.81002 4.23124 1.42741 5.17849 1.42741Z"
                            fill="#383B3D" stroke="#568129"/>
                    </svg>
                    <svg width="18" height="16" viewBox="0 0 19 17" fill="none" xmlns="http://www.w3.org/2000/svg"
                         class="product-favorite-button__icon-active">
                        <path
                            d="M1.86969 1.92053C2.78087 0.972382 3.97646 0.500046 5.17849 0.500046C6.29499 0.495076 7.5123 0.894298 8.49478 1.92053L9.50149 2.96565L10.5082 1.92789C12.3306 0.0315651 15.3108 0.0316075 17.1332 1.92789C18.9556 3.82418 18.9556 6.86905 17.1332 8.76533C14.701 11.2963 12.2742 13.83 9.84199 16.3608C9.66547 16.5464 9.33009 16.5464 9.15357 16.3608L1.86234 8.75798C0.0420493 6.86029 0.0472841 3.81678 1.86969 1.92053Z"
                            fill="#DE171A" stroke="#DE171A"/>
                    </svg>
                </button>
                <div class="product-tags">
                    <div class="product-tag">Заживление ран</div>
                    <div class="product-tag">Стерильно</div>
                </div>
                <div class="product-title">
                    <div class="section-h2">
                        <?= $product['title'] ?>
                    </div>
                    <div class="product-art">арт. <?= $product['art'] ?></div>
                </div>
                <div class="product-options">
                    <div class="product-option">
                        <div class="product-option__label">Выберите размер:</div>
                        <label class="nice-select">
                            <select name="">
                                <option value="0">5х5х0,4см №2</option>
                                <option value="1">5х5х0,4см №3</option>
                                <option value="2">5х5х0,4см №4</option>
                            </select>
                        </label>
                    </div>
                </div>
                <div class="product-cart">
                    <div class="product-quantity">
                        <input type="hidden" name="quantity" class="product-quantity__input" value="1"/>
                        <button type="button" class="product-quantity__btn product-quantity__btn-minus">
                            <svg width="18" height="2">
                                <use xlink:href="/assets/img/icons/counter.svg#minus"/>
                            </svg>
                        </button>
                        <div class="product-quantity__count">
                            <span class="product-quantity__display" contenteditable="true">1</span>
                            уп
                        </div>
                        <button type="button" class="product-quantity__btn product-quantity__btn-plus">
                            <svg width="18" height="18">
                                <use xlink:href="/assets/img/icons/counter.svg#plus"/>
                            </svg>
                        </button>
                    </div>
                    <button class="product-add btn">Добавить в оптовый заказ</button>
                </div>

                <div class="product-pricelist">
                    <a href="#">Запросить прайс-лист</a>
                </div>

                <div class="product-short">
                    <?= $product['short'] ?>
                </div>
            </div>
        </div>
    </div>
</section>