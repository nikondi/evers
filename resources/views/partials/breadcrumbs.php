<?php
/**
 * @var string[][] $breadcrumbs
 */
?>
<section class="section-breadcrumbs">
    <div class="container">
        <ul class="breadcrumbs">
            <?php foreach ($breadcrumbs as $breadcrumb): ?>
                <li>
                    <?php if (isset($breadcrumb[1])): ?>
                        <a href="<?= $breadcrumb[0] ?>"><?= $breadcrumb[1] ?></a>
                    <?php else: ?>
                        <span><?= $breadcrumb[0] ?></span>
                    <?php endif; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>