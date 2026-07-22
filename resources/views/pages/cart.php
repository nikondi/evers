<?php
$breadcrumbs = [
    ['/', 'Главная'],
    ['Корзина']
];
include VIEW_PATH . 'partials/breadcrumbs.php';
?>

<section>
    <div class="container">
        <h1 class="page-h1">Корзина</h1>
    </div>
</section>

<section class="cart-section">
    <div class="container">
        <div class="cart-wrapper">
            <div class="cart-items-wrapper">
                <div class="cart__order-title">Ваш заказ:</div>
                <div class="cart-items-top">
                    <button class="cart-delete">
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M17.2286 2.7973H13.1143V1.21622C13.1143 0.535135 12.5486 0 11.8286 0H6.17143C5.45143 0 4.88571 0.535135 4.88571 1.21622V2.7973H0.771429C0.334286 2.7973 0 3.11351 0 3.52703C0 3.94054 0.334286 4.25676 0.771429 4.25676H1.87714L3.06 16.9054C3.13714 17.5135 3.67714 18 4.34571 18H13.7057C14.3486 18 14.9143 17.5135 14.9914 16.9054L16.1743 4.25676H17.2286C17.6657 4.25676 18 3.94054 18 3.52703C18 3.11351 17.6657 2.7973 17.2286 2.7973ZM6.42857 1.45946H11.5714V2.7973H6.42857V1.45946ZM13.4486 16.5405H4.55143L3.42 4.25676H14.6057L13.4486 16.5405Z"
                                fill="#568129"/>
                        </svg>
                        <span>
                            Удалить
                            (<span class="cart-delete__count">0</span>)
                        </span>
                    </button>
                    <label class="cart-check-all checkbox">
                        Выбрать все
                        <input type="checkbox" required/>
                        <span class="checkbox__check"></span>
                    </label>
                </div>
                <div class="cart-items">
                    <?php
                    $items = [
                        ['image' => '/assets/img/cart-product.png', 'title' => 'Средство кровоостанавливающее «ЭверсЛайф-Гемо»', 'art' => '123456', 'size' => 'Размер: 18 х 13 см'],
                        ['image' => '/assets/img/cart-product.png', 'title' => 'Повязки пластырного типа бактерицидные', 'art' => '123456', 'size' => 'Размер: 80 х 60 мм'],
                        ['image' => '/assets/img/cart-product.png', 'title' => 'Повязки пластырного типа бактерицидные', 'art' => '123456', 'size' => 'Размер: 80 х 60 мм'],
                        ['image' => '/assets/img/cart-product.png', 'title' => 'Салфетки медицинские сорбционные из нетканого материала ANGEL', 'art' => '123456', 'size' => 'Размер: 16 x 14 см'],
                        ['image' => '/assets/img/cart-product.png', 'title' => 'Салфетки марлевые стерильные HELP', 'art' => '123456', 'size' => 'Размер: 45 х 29 см'],
                    ];
                    ?>
                    <?php foreach ($items as $item): ?>
                        <div class="cart-item">
                            <div class="cart-item-image">
                                <img src="<?= $item['image'] ?>" alt=""/>
                            </div>
                            <div class="cart-item-text">
                                <div class="cart-item__title"><?= $item['title'] ?></div>
                                <div class="cart-item__chars">
                                    <div class="cart-item__char">арт. <?= $item['art'] ?></div>
                                    <div class="cart-item__char"><?= $item['size'] ?></div>
                                </div>
                                <div class="product-quantity cart-quantity" data-min="20">
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
                            </div>
                            <div class="cart-item-favs">
                                <button class="cart-item__favorite"></button>
                                <label class="checkbox cart-check">
                                    <input type="checkbox" required/>
                                    <span class="checkbox__check"></span>
                                </label>
                            </div>
                            <button type="button" class="cart-item-delete">Удалить</button>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="form cart-form">
                <div class="form-fields">
                    <div class="cart__order-title" style="margin-bottom: 10px;">Данные для оформления заказа:</div>
                    <div class="popup-description">Поля, отмеченные (*), обязательны для оформления. После размещения
                        заказа
                        менеджер свяжется с вами для уточнения деталей.
                    </div>
                    <form action="/cart.json">
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
                            <div class="labeled-input">
                                <div class="labeled-input-label">Комментарий</div>
                                <textarea name="comment"></textarea>
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
                        <button type="submit" class="btn btn-green btn-full">Оформить оптовый заказ</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>