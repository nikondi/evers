<?php
$breadcrumbs = [
    ['/', 'Главная'],
    ['#', 'Специалистам'],
    ['Наши партнерские организации']
];
include VIEW_PATH . 'partials/breadcrumbs.php';
?>

<section>
    <div class="container">
        <h1 class="page-h1">Наши партнерские организации</h1>
    </div>
</section>

<section class="spec-partners-section">
    <div class="container">
        <div class="spec-partners-grid">
            <?php
            $partners = [
                ['title' => 'МедГильдия при Серпуховской ТПП', 'logo' => '/assets/img/specialists/partners/guild.png', 'contacts' => '<a href="https://serpukhov.tpprf.ru">serpukhov.tpprf.ru</a><br /><a href="tel:+7 (4967) 76-12-55">+7 (4967) 76-12-55</a>', 'description' => 'Гильдия создана для поддержки и развития медицинских и оздоровительных предприятий Московской области. Активно взаимодействует с властью, организует профильные мероприятия и способствует развитию высокотехнологичного производства. Председатель МедГильдии при Серпуховской ТПП — Никита Евгеньевич Легкодимов.'],
                ['title' => 'ОЭЗ Дубна', 'logo' => '/assets/img/specialists/partners/dubna.png', 'contacts' => '<a href="https://www.example.ru">www.example.ru</a><br /><a href="tel:+7 (495) 737-27-30">+7 (495) 737-27-30</a>', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'],
                ['title' => 'Живущие с ФОП', 'logo' => '/assets/img/specialists/partners/default.png', 'contacts' => '<a href="https://www.example.ru">www.example.ru</a><br /><a href="tel:+7 (495) 737-27-30">+7 (495) 737-27-30</a>', 'description' => 'Гильдия создана для поддержки и развития медицинских и оздоровительных предприятий Московской области. Активно взаимодействует с властью, организует профильные мероприятия и способствует развитию высокотехнологичного производства. Председатель МедГильдии при Серпуховской ТПП — Никита Евгеньевич Легкодимов.'],
                ['title' => 'Родные Любимые', 'logo' => '/assets/img/specialists/partners/default.png', 'contacts' => '<a href="https://www.example.ru">www.example.ru</a><br /><a href="tel:+7 (495) 737-27-30">+7 (495) 737-27-30</a>', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'],
                ['title' => 'ТПП Иваново', 'logo' => '/assets/img/specialists/partners/default.png', 'contacts' => '<a href="https://www.example.ru">www.example.ru</a><br /><a href="tel:+7 (495) 737-27-30">+7 (495) 737-27-30</a>', 'description' => 'Гильдия создана для поддержки и развития медицинских и оздоровительных предприятий Московской области. Активно взаимодействует с властью, организует профильные мероприятия и способствует развитию высокотехнологичного производства. Председатель МедГильдии при Серпуховской ТПП — Никита Евгеньевич Легкодимов.'],
                ['title' => 'Ассоциация хосписной помощи', 'logo' => '/assets/img/specialists/partners/default.png', 'contacts' => '<a href="https://www.example.ru">www.example.ru</a><br /><a href="tel:+7 (495) 737-27-30">+7 (495) 737-27-30</a>', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'],
            ];
            ?>
            <?php foreach ($partners as $partner): ?>
                <div class="spec-partner">
                    <div class="spec-partner__top">
                        <div class="spec-partner__text">
                            <div class="spec-partner__title"><?= $partner['title'] ?></div>
                            <div class="spec-partner__contacts"><?= $partner['contacts'] ?></div>
                        </div>
                        <div class="spec-partner__logo">
                            <img src="<?= $partner['logo'] ?>" alt=""/>
                        </div>
                    </div>
                    <div class="spec-partner__description"><?= $partner['description'] ?></div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>