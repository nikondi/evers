<?php
/**
 * @var $goodItem - карточка товара
 */
?>
<a href="#" class="good-card">
    <div class="good-card__image">
        <img src="<?= $goodItem['image'] ?>" alt=""/>
    </div>
    <div class="good-card__title"><?= $goodItem['title'] ?></div>
</a>
