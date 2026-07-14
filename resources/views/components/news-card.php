<?php
/**
 * @var array $newsItem - карточка новости
 */
$is_video = !empty($newsItem['video']);
?>
<div class="news-card<?= $is_video ? ' news-card--video' : '' ?>">
    <div class="news-card__image">
        <?php if ($is_video): ?>
            <?= $newsItem['video'] ?>
        <?php else: ?>
            <a href="<?= $newsItem['link'] ?>"><img src="<?= $newsItem['image'] ?>" alt=""/></a>
        <?php endif; ?>
    </div>
    <a href="<?= $newsItem['link'] ?>" class="news-card__date"><?= $newsItem['date'] ?></a>
    <a href="<?= $newsItem['link'] ?>" class="news-card__title"><?= $newsItem['title'] ?></a>
    <?php if (!empty($newsItem['description'])): ?>
        <a href="<?= $newsItem['link'] ?>" class="news-card__description"><?= $newsItem['description'] ?></a>
    <?php endif; ?>
</div>
