<?php
$breadcrumbs = [
    ['/', 'Главная'],
    ['/coop/', 'Сотрудничество'],
    ['Наши оптовые партнеры']
];
include VIEW_PATH . 'partials/breadcrumbs.php';
?>

<section>
    <div class="container">
        <h1 class="page-h1">Наши оптовые партнеры</h1>
    </div>
</section>

<section class="coop-wholesale-section">
    <div class="container">
        <div class="coop-wholesale-grid">
            <?php
            $partners = [
                ['logo' => '/assets/img/coop/wholesale/fest.png', 'title' => 'OOO «Предприятие «ФЭСТ»', 'links' => '<a href="https://festltd.ru ">festltd.ru </a><br /><a href="tel:+7 (4942) 493201">+7 (4942) 493201</a>', 'description' => 'Производитель аптечеĸ первой медицинсĸой ПОМОЩИ ФЭСТ, аптечеĸ автомобильных, для детей, для сотрудниĸов, для дома, для офиса.'],
                ['logo' => '/assets/img/coop/wholesale/sopka.png', 'title' => 'Компания «Sopka»', 'links' => '<a href="https://sopkaoutdoor.ru">sopkaoutdoor.ru</a><br /><a href="tel:+7 (905) 970-00-30">+7 (905) 970-00-30</a>', 'description' => 'Уникальные аптечки для туризма и путешествий.'],
                ['logo' => '/assets/img/coop/wholesale/oms-group.png', 'title' => 'Компания «ОМС-Групп»', 'links' => '<a href="https://omc-grup.ru">omc-grup.ru</a><br /><a href="tel:+7 (906) 753-85-35">+7 (906) 753-85-35</a>', 'description' => 'Официальный дилер крупнейших производителей медицинского оборудования и расходных материалов.'],
                ['logo' => '/assets/img/coop/wholesale/avesta.png', 'title' => 'ООО «Авеста Фармацевтика»', 'links' => '<a href="https://avgr.su">avgr.su</a><br /><a href="tel:+7 (495) 775-02-05">+7 (495) 775-02-05</a>', 'description' => 'Поставка и закупка медикаментов, осуществление складского хранения.'],
                ['logo' => '/assets/img/coop/wholesale/vitta.png', 'title' => 'ГК «ВИТТА компани»', 'links' => '<a href="https://vitta.ru">vitta.ru</a><br /><a href="tel:+7 (495) 363 22 86">+7 (495) 363 22 86</a>', 'description' => 'Оптовые поставки медикаментов, изделий медицинского назначения, товаров для ухода.'],
                ['logo' => '/assets/img/coop/wholesale/komus.png', 'title' => '«Комус Медицина»', 'links' => '<a href="https://komus-med.ru">komus-med.ru</a><br /><a href="tel:+7 (495) 995-20-01">+7 (495) 995-20-01</a>', 'description' => 'Оптовые поставки изделий медицинского назначения, расходных материалов, медицинских приборов, аптечек и т.д.'],
                ['logo' => '/assets/img/coop/wholesale/puls.png', 'title' => 'ООО «ФК ПУЛЬС»', 'links' => '<a href="https://puls.ru">puls.ru</a><br /><a href="tel:+7 (495) 725-25-35">+7 (495) 725-25-35</a>', 'description' => 'Дистрибуция лекарственных препаратов и медицинских изделий.'],
                ['logo' => '/assets/img/coop/wholesale/katren.png', 'title' => 'АО НПК «КАТРЕН»', 'links' => '<a href="https://katren.ru">katren.ru</a><br /><a href="tel:+7 (800) 500-50-44">+7 (800) 500-50-44</a>', 'description' => 'Один из крупнейших фармацевтических дистрибьюторов России.'],
                ['logo' => '/assets/img/coop/wholesale/a.png', 'title' => 'ООО&nbsp;«А-Плюс»', 'links' => '<a href="https://а-плюс.рф">а-плюс.рф</a><br /><a href="tel:+7 (383) 280-43-33">+7 (383) 280-43-33</a>', 'description' => 'Поставщик медицинского оборудования и изделий.'],
                ['logo' => '/assets/img/coop/wholesale/new-hosp.png', 'title' => 'ООО МО «Новая больница»', 'links' => '<a href="https://newhospital.ru">newhospital.ru</a><br /><a href="tel:+7 (343) 355-56-57 ">+7 (343) 355-56-57 </a>', 'description' => 'Многопрофильная клиника полного цикла, включающая поликлиническое отделение, стационар и специализированные центры.'],
                ['logo' => '/assets/img/coop/wholesale/nadezhda.png', 'title' => 'ГК «Надежда-Фарм»', 'links' => '<a href="https://hopetmb.ru">hopetmb.ru</a><br /><a href="tel:+7 (4752) 44-08-13">+7 (4752) 44-08-13</a>', 'description' => 'Поставщик лекарственных средств, медицинской техники, медицинских расходных материалов и другой продукции для учреждений.'],
                ['logo' => '/assets/img/coop/wholesale/erka.png', 'title' => 'ГК «ЭРКАФАРМ»', 'links' => '<a href="https://erkapharm.com">erkapharm.com</a><br /><a href="tel:+7 (495) 988-33-38">+7 (495) 988-33-38</a>', 'description' => 'Федеральная розничная компания, включает аптеки, работающие в формате от дискаунтеров до фармамаркетов.'],
                ['logo' => '/assets/img/coop/wholesale/septico.png', 'title' => 'ООО «Септико»', 'links' => '—<br /><a href="tel:+7 (383) 309-00-51">+7 (383) 309-00-51</a>', 'description' => 'Оптовые поставки медицинских расходных материалов.'],
                ['logo' => '/assets/img/coop/wholesale/snabfarm.png', 'title' => 'SnabFarm (ООО «МЕНЯЙСЯ»)', 'links' => '<a href="https://snabfarm.ru">snabfarm.ru</a><br /><a href="tel:+7 (495) 133-58-98">+7 (495) 133-58-98</a>', 'description' => 'Комплексное оснащение медицинских учреждений расходными материалами.'],
                ['logo' => '/assets/img/coop/wholesale/rustest.png', 'title' => 'ООО «Рус Тест» ', 'links' => '<a href="https://rustestlab.ru">rustestlab.ru</a><br /><a href="tel:+7 (495) 783-81-23">+7 (495) 783-81-23</a>', 'description' => 'Поставщик медицинских расходных материалов и оборудования.'],
                ['logo' => '/assets/img/coop/wholesale/bukaev.png', 'title' => 'ООО «Букаев.ру»', 'links' => '<a href="https://bukaev.ru">bukaev.ru</a><br /><a href="tel:+7 (831) 282-58-60">+7 (831) 282-58-60</a>', 'description' => 'Российская компания экспортёр лекарственных препаратов, БАД, товаров медицинского назначения и парафармацевтики в страны СНГ.'],
                ['logo' => '/assets/img/coop/wholesale/zdrav.png', 'title' => 'ООО «МОЙздрав»', 'links' => '<a href="https://moyzdrav.ru">moyzdrav.ru</a><br /><a href="tel:+7 (495) 647-29-57 (доб.3)">+7 (495) 647-29-57 (доб.3)</a>', 'description' => 'Поставщик продукции для ухода за пациентами, медицинских изделий и реабилитационного оборудования.'],
                ['logo' => '/assets/img/coop/wholesale/system.png', 'title' => 'ТД «Система»', 'links' => '<a href="https://медрасходники74.рф">медрасходники74.рф</a><br /><a href="tel:+7 (351) 225-03-58">+7 (351) 225-03-58</a>', 'description' => 'Поставщик расходных материалов для медицины и индустрии красоты.'],
                ['logo' => '/assets/img/coop/wholesale/care.png', 'title' => 'ТД «Особая забота»', 'links' => '<a href="https://zabota-uhod.ru">zabota-uhod.ru</a><br /><a href="tel:+7 (900) 622-44-62">+7 (900) 622-44-62</a>', 'description' => 'Дистрибьютор российских производителей товаров для ухода за лежачими больными и товаров медицинского назначения.'],
                ['logo' => '/assets/img/coop/wholesale/nanomedical.png', 'title' => 'ООО «НаноМедикал Групп»', 'links' => '<a href="https://nanomg.ru">nanomg.ru</a><br /><a href="tel:+7 (351) 242-03-24">+7 (351) 242-03-24</a>', 'description' => 'Компания занимается поиском, регистрацией и дистрибуцией международных и отечественных медицинских изделий.'],
            ];
            ?>
            <?php foreach ($partners as $partner) : ?>
                <div class="coop-wholesale">
                    <div class="coop-wholesale__image"><img src="<?= $partner['logo'] ?>" alt=""></div>
                    <div class="coop-wholesale__title"><?= $partner['title'] ?></div>
                    <div class="coop-wholesale__links"><?= $partner['links'] ?></div>
                    <div class="coop-wholesale__description"><?= $partner['description'] ?></div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>