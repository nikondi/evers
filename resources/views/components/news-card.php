<?php
/**
 * @var $newsItem - карточка новости
 */
?>
<a href="#" class="news-card">
    <div class="news-card__image">
        <img src="<?= $newsItem['image'] ?>" alt=""/>
    </div>
    <div class="news-card__date"><?= $newsItem['date'] ?></div>
    <div class="news-card__title"><?= $newsItem['title'] ?></div>
    <div class="news-card__description"><?= $newsItem['description'] ?></div>
</a>
