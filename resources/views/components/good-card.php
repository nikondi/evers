<?php
/**
 * @var $goodItem - карточка товара
 */
?>
<div class="product-card">
    <div class="product-card__image">
        <img src="<?= $goodItem['image'] ?>" alt=""/>
        <button
            class="product-card__favorite<?= $i % 2 == 0 ? ' product-card__favorite--active' : '' ?>"></button>
    </div>
    <div class="product-card__title">
        <?= $goodItem['title'] ?>
    </div>
    <a href="<?= $goodItem['link'] ?>" class="btn btn-green btn-full">
        Смотреть
    </a>
</div>