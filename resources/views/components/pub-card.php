<?php
/**
 * @var array $publication
 * ['type' => 'text', 'label' => 'текстовый материал', 'link' => '#', 'image' => '/assets/img/product/pub-1.png', 'title' => 'Принципы и методы лечения гнойно-некротических ран', 'text' => 'В 7 главе книги «Руководство по хирургии», посвящённой лечению ран, рассматривается эффективность применения раневого покрытия Хитокол®, мазевой сетчатой повязки и ранозаживляющего средства «ЭверсЛайф-Гель».'],
 * ['type' => 'video', 'label' => 'видео материал', 'link' => '#', 'video' => 'https://lorem.video/720p', 'title' => 'Принципы и методы лечения гнойно-некротических ран', 'text' => 'В 7 главе книги «Руководство по хирургии», посвящённой лечению ран, рассматривается эффективность применения раневого покрытия Хитокол®, мазевой сетчатой повязки и ранозаживляющего средства «ЭверсЛайф-Гель».'],
 *
 */
?>
<div class="pub-card pub-card--<?= $publication['type'] ?>">
    <?php if ($publication['type'] == 'text'): ?>
        <div class="pub-card__image">
            <img src="<?= $publication['image'] ?>" alt="">
        </div>
    <?php else: ?>
        <div class="pub-card__video">
            <video src="<?= $publication['video'] ?>"></video>
        </div>
    <?php endif; ?>
    <div class="ub-card-text__data">
        <div class="pub-card-tag"><?= $publication['label'] ?></div>
        <div class="pub-card-title"><?= $publication['title'] ?></div>
        <div class="pub-card-text"><?= $publication['text'] ?></div>
        <a href="<?= $publication['link'] ?>" class="btn btn-full">Смотреть</a>
    </div>
</div>