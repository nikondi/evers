<section class="welcome-first">
    <div class="container">
        <div class="welcome-first-content">
            <h1 class="welcome-first-subtitle">Эверс груп рус</h1>
            <h2 class="welcome-first-title">Медицинские изделия <span>российского</span> производства</h2>
            <a href="#" class="btn">Узнать больше</a>
            <div class="welcome-first-description">Инновации и технологии с 2001 года</div>
        </div>
    </div>
</section>

<section class="welcome-about oversection">
    <div class="container">
        <div class="section-badge">О компании</div>
        <h2 class="section-h1">Эверс груп Рус&nbsp;— производитель <span>медицинских изделий</span>, ранозаживляющих
            средств и&nbsp;уходовой косметики.</h2>
        <div class="about-info">
            <div class="about-metrics">
                <div class="about-metric">
                    <div class="about-metric__title">ГОСТ ISO 13485-2017</div>
                    <div class="about-metric__text">вся продукция соответствует требованиям Системы менеджмента качества
                    </div>
                </div>
                <div class="about-metric">
                    <div class="about-metric__title">150+</div>
                    <div class="about-metric__text">сотрудников компании ежедневно работают, чтобы&nbsp;сделать качество
                        жизни в&nbsp;нашей стране выше
                    </div>
                </div>
                <div class="about-metric">
                    <div class="about-metric__title">3</div>
                    <div class="about-metric__text">современные производственные площадки, оснащенные
                        высокотехнологичным оборудованием в Московской и Ивановской областях
                    </div>
                </div>
            </div>
            <div class="about-info-text">
                <p>Мы&nbsp;осуществляем полный цикл производства импортозамещающих медицинских изделий и&nbsp;уходовой
                    косметики в&nbsp;России.</p>
                <p>Обеспечиваем специалистов и&nbsp;широкий круг потребителей современными, эффективными, безопасными
                    и&nbsp;доступными медицинскими изделиями.</p>
                <div class="about-info-text__btn">
                    <a href="#" class="btn">Узнать больше</a>
                </div>
                <div class="about-info-text-years">
                    <div class="about-info-text-year"><b>С&nbsp;2017&nbsp;года&nbsp;—</b> представитель биомедицинского
                        кластера ОЭЗ&nbsp;«Дубна»
                    </div>
                    <div class="about-info-text-year"><b>С&nbsp;2019&nbsp;года&nbsp;—</b> участник
                        Медико-технологического
                        кластера Московской области
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="welcome-production">
    <div class="container">
        <div class="section-badge">Продукция</div>
        <div class="section-h2">
            Продукция Эверс рус&nbsp;Груп предназначена для&nbsp;применения <span>специалистами в&nbsp;лечебных учреждениях</span>,
            самостоятельной помощи и&nbsp;для&nbsp;ухода за&nbsp;пациентами на&nbsp;дому.
        </div>

        <div class="production-grid">
            <?php
            $production = [
                ['image' => '/assets/img/production/1.png', "title" => 'Лечение ран, ожогов, пролежней, уход за лежачими пациентами'],
                ['image' => '/assets/img/production/2.png', "title" => 'Средства для&nbsp;фиксации повязок, закрытия и&nbsp;защиты ран'],
                ['image' => '/assets/img/production/3.jpg', "title" => 'Марлевые и&nbsp;нетканые медицинские изделия, вата'],
                ['image' => '/assets/img/production/4.png', "title" => 'Защита операционного поля'],
                ['image' => '/assets/img/production/5.png', "title" => 'Средства экспресс-диагностики'],
                ['image' => '/assets/img/production/6.jpg', "title" => 'Оказание первой помощи'],
                ['image' => '/assets/img/production/7.png', "title" => 'средства индивидуальной защиты (сиз)'],
            ];
            ?>
            <?php foreach ($production as $good): ?>
                <a href="#" class="production-card">
                    <img src="<?= $good['image'] ?>" class="production-card__background"/>
                    <div class="production-card__title"><?= $good['title'] ?></div>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>