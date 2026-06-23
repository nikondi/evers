<?php
// TODO mobile
?>
<?php
$breadcrumbs = [
    ['/', 'Главная'],
    ['/about/', 'О компании'],
    ['Производство']
];
include VIEW_PATH . 'partials/breadcrumbs.php';
?>

<section>
    <div class="container">
        <h1 class="page-h1">Производство</h1>
        <div class="section-h2">
            Группа компаний Эверс груп Рус&nbsp;осуществляет <span>полный цикл производства</span> уникальных и&nbsp;импортозамещающих
            медицинских изделий и&nbsp;косметических средств.
        </div>
    </div>
</section>

<section class="manufacture-info-section">
    <div class="container">
        <div class="manufacture-info">
            <div class="manufacture-info-text">
                <p>Производство ведётся <b>на&nbsp;трёх собственных площадках</b>, оснащённых передовым
                    высокотехнологичным оборудованием, Они&nbsp;расположены в&nbsp;Московской области (на&nbsp;территории
                    ОЭЗ&nbsp;«Дубна») и&nbsp;в&nbsp;Ивановской области.</p>
                <p>В&nbsp;группе компаний действует собственная научно-исследовательская лаборатория, которая занимается
                    разработкой и&nbsp;внедрением инноваций.</p>
                <p>Это&nbsp;позволяет выпускать технологически сложные медицинские изделия, успешно конкурирующие с&nbsp;зарубежными
                    аналогами, а&nbsp;также создавать уникальные продукты, включая линейку ранозаживляющих средств
                    «Хитокол» и&nbsp;ранозаживляющие мазевые сетчатые повязки.</p>
                <a href="#" class="btn">Узнать больше о наших разработках</a>
            </div>
            <div class="manufacture-info-metrics">
                <div class="manufacture-info-metric">
                    <div class="manufacture-info-metric__title">200+</div>
                    <div class="manufacture-info-metric__text">наименований и вариантов исполнения<br/> медицинских
                        изделий
                    </div>
                </div>
                <div class="manufacture-info-metric">
                    <div class="manufacture-info-metric__title">>130 млн изделий</div>
                    <div class="manufacture-info-metric__text">в год мощность производства</div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php // TODO не нравится мне этот блок ?>
<section class="manufacture-process-section">
    <div class="container">
        <div class="section-badge section-badge--white">Производственный процесс</div>
    </div>
    <div class="container">
        <div class="manufacture-processes">
            <div class="manufacture-process active">
                <div class="manufacture-process-inner">
                    <div class="manufacture-process__title">Инновационные идеи</div>
                    <div class="manufacture-process__text">Сотрудничество с&nbsp;российскими медицинскими работниками
                        из&nbsp;различных областей позволяет понять, какие проблемы стоят перед&nbsp;современной
                        медициной. Совместная работа даёт нам&nbsp;актуальные идеи для&nbsp;разработки инновационных
                        медицинских изделий, повышающих стандарты лечения.
                    </div>
                </div>
            </div>
            <div class="manufacture-process">
                <div class="manufacture-process-inner">
                    <div class="manufacture-process__title">Реализация проекта</div>
                    <div class="manufacture-process__text">Разработка передовых медицинских изделий, ранозаживляющих
                        решений и&nbsp;уходовой косметики осуществляется на&nbsp;базе собственной лаборатории совместно
                        с&nbsp;ведущими российскими медицинскими ВУЗами. Проведение доклинических испытаний при&nbsp;участии
                        медицинских учреждений РФ, имеющих государственную аккредитацию - необходимый этап проверки на&nbsp;эффективность
                        и&nbsp;безопасность.
                    </div>
                </div>
            </div>
            <div class="manufacture-process">
                <div class="manufacture-process-inner">
                    <div class="manufacture-process__title">Сырье для производства</div>
                    <div class="manufacture-process__text">Партнёрство с&nbsp;большим количеством российских и&nbsp;иностранных
                        компаний-поставщиков сырья и&nbsp;компонентов для&nbsp;производства медицинских изделий
                        позволяет выбирать самые качественные и&nbsp;современные материалы. Мы&nbsp;тщательно проверяем
                        исходное сырьё, чтобы&nbsp;наша продукция отвечала самым высоким, в&nbsp;том&nbsp;числе
                        международным стандартам.
                    </div>
                </div>
            </div>
            <div class="manufacture-process">
                <div class="manufacture-process-inner">
                    <div class="manufacture-process__title">Контроль качества изделий</div>
                    <div class="manufacture-process__text">Главный критерий для организации любого производственного
                        процесса - безопасность конечного продукта. Все медицинские изделия и уходовая косметика нашего
                        производства проходят строгий контроль качества на различных этапах, подтверждающий их
                        безопасность.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="manufacture-regions-section oversection">
    <div class="container manufacture-regions-container">
        <div class="section-badge">Наши производственные площадки</div>
        <div class="manufacture-regions">
            <div class="manufacture-regions-slider swiper">
                <div class="swiper-wrapper">
                    <?php
                    $regions = [
                        [
                            'title' => 'Московская обл. (ОЭЗ&nbsp;«Дубна»)', 'text' => '<p><b>Производство, расположенное в Московской области на территории ОЭЗ «Дубна», специализируется на выпуске сложных медицинских изделий с высокой степенью потенциального риска применения.</b></p> <p>Здесь же функционирует уникальная научно-исследовательская лаборатория, на базе которой проводятся передовые исследования в сотрудничестве с ведущими медицинскими, научными и образовательными учреждениями.</p><p>Отдел технического контроля полностью соответствует требованиям системы менеджмента качества, сертифицированной по стандарту ISO 13485. Благодаря комплексному оснащению отдел обеспечивает сквозной контроль качества по всей номенклатуре медицинских изделий — от входной проверки сырья до приемки готовой продукции.</p>',
                            'points' => [
                                [9.381, 56.966, 'Московская обл. (ОЭЗ «Дубна»)'], // Координаты в процентах от (1503 x 891)
                            ]
                        ],
                        [
                            'title' => 'Ивановская область', 'text' => '<p><b>Две производственные площадки ООО «ЭВТЕКС», входящие в группу компаний Эверс Груп Рус расположены в Ивановской области в г. Тейково и пос. Воскресенкое.</b></p> <p>Производство численностью свыше 100 сотрудников оснащено современным высокопроизводительным оборудованием и специализируется на производстве традиционных медицинских расходных материалов: продукция из марли, салфетки сорбционные нетканые, эластичные самофиксирующиеся и фиксирующие бинты, пластыри для фиксации катетеров и повязки пластырного типа, салфетки для стимуляции дыхания, стерильные спиртовые салфетки, одноразовые маски.</p>',
                            'points' => [
                                [11.643, 60.942, 'Ивановская обл. (г. Тейково)'], // Координаты в процентах от (1503 x 891)
                                [10.379, 64.983, 'Ивановская обл. (с. Воскресенское)'] // Координаты в процентах от (1503 x 891)
                            ]
                        ],
                    ];
                    ?>
                    <?php foreach ($regions as $region): ?>
                        <div class="swiper-slide">
                            <div class="manufacture-region-card">
                                <div class="manufacture-region-card__title"><?= $region['title'] ?></div>
                                <div class="manufacture-region-card__text"><?= $region['text'] ?></div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="slider-arrows">
                    <button type="button" class="slider-arrow slider-arrow-prev">
                        <svg width="1em" height="1em">
                            <use xlink:href="/assets/img/icons/slider-arrows.svg#left"/>
                        </svg>
                    </button>
                    <button type="button" class="slider-arrow slider-arrow-next">
                        <svg width="1em" height="1em">
                            <use xlink:href="/assets/img/icons/slider-arrows.svg#right"/>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="manufacture-regions-map">
                <img src="/assets/img/manufacture/map.svg" width="1503" alt="">
                <?php foreach ($regions as $i => $region): ?>
                    <?php foreach ($region['points'] as $point): ?>
                        <div class="manufacture-regions-point"
                             style="left: <?= $point[0] ?>%; top: <?= $point[1] ?>%" data-group="<?= $i ?>">
                            <?= $point[2] ?>
                            <svg width="15" height="10" viewBox="0 0 15 10">
                                <path d="M8.03636 9.27273L0 0H14.2182L8.03636 9.27273Z" fill="currentColor"/>
                            </svg>

                        </div>
                    <?php endforeach; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<section class="manufacture-video-section">
    <div class="container">
        <div class="section-badge">Видео о производстве</div>
        <div class="manufacture-video">
            <video src="https://lorem.video/720p" poster="/assets/img/manufacture/video-preview.jpg"></video>
            <button type="button" class="manufacture-play-button">
                <svg width="95" height="95" viewBox="0 0 95 95" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <foreignObject x="-10" y="-10" width="115" height="115">
                        <div xmlns="http://www.w3.org/1999/xhtml"
                             style="backdrop-filter:blur(5px);clip-path:url(#bgblur_0_162_4351_clip_path);height:100%;width:100%"></div>
                    </foreignObject>
                    <path data-figma-bg-blur-radius="10"
                          d="M47.5 0C21.3 0 0 21.3 0 47.5C0 73.7 21.3 95 47.5 95C73.7 95 95 73.7 95 47.5C95 21.3 73.7 0 47.5 0ZM62.8 49.9L40.4 64.8C38.5 66.1 35.9 64.7 35.9 62.4V32.6C35.9 30.3 38.5 28.9 40.4 30.2L62.8 45.1C64.5 46.2 64.5 48.8 62.8 49.9Z"
                          fill="white" fill-opacity="0.6"/>
                    <defs>
                        <clipPath id="bgblur_0_162_4351_clip_path" transform="translate(10 10)">
                            <path
                                d="M47.5 0C21.3 0 0 21.3 0 47.5C0 73.7 21.3 95 47.5 95C73.7 95 95 73.7 95 47.5C95 21.3 73.7 0 47.5 0ZM62.8 49.9L40.4 64.8C38.5 66.1 35.9 64.7 35.9 62.4V32.6C35.9 30.3 38.5 28.9 40.4 30.2L62.8 45.1C64.5 46.2 64.5 48.8 62.8 49.9Z"/>
                        </clipPath>
                    </defs>
                </svg>
            </button>
        </div>
    </div>
</section>


<section class="manufacture-samples-section">
    <div class="container">
        <div class="manufacture-samples">
            <div class="manufacture-samples-left">
                <div class="section-h2">Наше производство способно обеспечивать <span>стабильные поставки</span> в&nbsp;объёме:
                </div>
                <?php // TODO оставить заявку ?>
                <button type="button" class="btn">Оставить заявку о сотрудничестве</button>
            </div>
            <div class="manufacture-samples-right">
                <div class="manufacture-samples-items">
                    <div class="manufacture-sample">
                        <div class="manufacture-sample__image">
                            <img src="/assets/img/manufacture/samples/1.png" alt="">
                        </div>
                        <div class="manufacture-sample__title">5 млн. метров</div>
                        <div class="manufacture-sample__text">бинтов в месяц</div>
                    </div>
                    <div class="manufacture-sample">
                        <div class="manufacture-sample__image">
                            <img src="/assets/img/manufacture/samples/2.png" alt="">
                        </div>
                        <div class="manufacture-sample__title">600 000 ед.</div>
                        <div class="manufacture-sample__text">инновационных продуктов в месяц</div>
                    </div>
                </div>
                <?php // TODO ссылки ?>
                <div class="note">
                    Мы производим продукцию как под <a href="#">собственными брендами</a>, так и по контракту. Если для
                    производства вашей <a href="#">собственной торговой марки</a> нужен надежный партнер, то мы готовы к
                    сотрудничеству.
                </div>
            </div>
        </div>
    </div>
</section>