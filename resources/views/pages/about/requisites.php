<?php
$breadcrumbs = [
    ['/', 'Главная'],
    ['/about', 'О компании'],
    ['Реквизиты']
];
include VIEW_PATH . 'partials/breadcrumbs.php';
?>

<section>
    <div class="container">
        <h1 class="page-h1">Реквизиты</h1>
    </div>
</section>

<section class="requisites-section">
    <div class="container">
        <div class="requisites-grid">
            <div class="requisites-list">
                <div class="requisite">
                    <div>Получатель:</div>
                    <div>ООО «Эверс Груп Рус»</div>
                </div>
                <div class="requisite">
                    <div>ИНН:</div>
                    <div>7743935342</div>
                </div>
                <div class="requisite">
                    <div>КПП:</div>
                    <div>774301001</div>
                </div>
                <div class="requisite">
                    <div>ОГРН:</div>
                    <div>1147746895988</div>
                </div>
                <div class="requisite">
                    <div>Местонахождение:</div>
                    <div>125493, город Москва,<br/> Флотская ул., д. 5кб, офис 108</div>
                </div>
            </div>
            <div class="requisites-contacts">
                <div class="requisites-contacts__text">
                    Если вам требуются дополнительные реквизиты, пожалуйста, свяжитесь с нами удобным способом:
                </div>
                <div class="requisites-contacts__label">Почта:</div>
                <a href="mailto:evers@evers.ru" class="requisites-contacts__contact">evers@evers.ru</a>
                <div class="requisites-contacts__label" style="margin-top: 30px;">Телефон:</div>
                <a href="tel:+7 (499) 707-10-09" class="requisites-contacts__contact">+7 (499) 707-10-09</a>
            </div>
        </div>
    </div>
</section>