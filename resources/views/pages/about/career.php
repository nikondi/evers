<?php
$breadcrumbs = [
    ['/', 'Главная'],
    ['/about/', 'О компании'],
    ['Карьера']
];
include VIEW_PATH . 'partials/breadcrumbs.php';
?>

<section>
    <div class="container">
        <h1 class="page-h1">Карьера</h1>
        <div class="section-h3">
            Группа компаний Эверс груп Рус год от года создает продукты, повышающие качество жизни людей в нашей стране,
            и <span>объединяет профессионалов своего дела.</span>
        </div>
    </div>
</section>

<section class="career-values-section">
    <div class="container">
        <div class="swiper career-values">
            <div class="slider-top">
                <div class="section-badge">Ключевые корпоративные ценности</div>
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
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="career-value career-value--strategy">
                        <div class="career-value__icon">
                            <img src="/assets/img/icons/career-strategy.svg" alt="">
                        </div>
                        <div class="career-value__title">Открытая стратегия</div>
                        <div class="career-value__text">Все производственные и HR-процессы в компании идут в
                            соответствии с миссией и <a href="#">ценностями</a>. Результат труда каждого сотрудника
                            открывает широкому
                            кругу потребителей доступ к качественным медицинским изделиям и меняет жизнь наших сограждан
                            к лучшему.
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="career-value career-value--image"></div>
                </div>
                <div class="swiper-slide">
                    <div class="career-value career-value--person">
                        <div class="career-value__icon">
                            <img src="/assets/img/icons/career-person.svg" alt="">
                        </div>
                        <div class="career-value__title">Ценность личности</div>
                        <div class="career-value__text">Мы относимся к нашим сотрудникам как к ключевой ценности
                            компании, понимая и оценивая по достоинству вклад каждого. Мы поддерживаем профессиональный,
                            карьерный рост и развитие каждого, кто присоединился к нашей команде.
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="career-value career-value--elastic">
                        <div class="career-value__title">Гибкость и&nbsp;развитие</div>
                        <div class="career-value__text">Мир вокруг постоянно меняется, и мы меняемся вместе с ним,
                            стараясь становиться лучше день ото дня, поэтому поощряем инновационные идеи и
                            ответственность за результат.
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="career-value career-value--safety">
                        <div class="career-value__icon"></div>
                        <div class="career-value__title">Безопасность и баланс</div>
                        <div class="career-value__text">Мы создаём безопасную среду: производство соответствует ГОСТ ISO
                            13485-2017, а в ежедневной работе принята открытая коммуникация и стремление к балансу труда
                            и личной жизни.
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="career-value career-value--honest">
                        <div class="career-value__icon">
                            <img src="/assets/img/icons/career-honest.svg" alt="">
                        </div>
                        <div class="career-value__title">Прозрачность и&nbsp;справедливость</div>
                        <div class="career-value__text">Мы руководствуемся четкими и понятными критериями найма, оценки,
                            карьерного продвижения и оплаты труда. Трудовые отношения с нашими сотрудниками строятся
                            исключительно в рамках правого поля и в соответствии с Трудовым законодательством РФ. Мы
                            являемся одним из значимых налогоплательщиков региона.
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-pagination slider-progressbar"></div>
        </div>

    </div>
</section>


<section class="career-locations-section">
    <div class="container">
        <div class="section-badge">Наши локации</div>
        <div class="career-locations">
            <div class="career-location">
                <div class="career-location__tags">
                    <div class="career-location-tag">москва</div>
                </div>
                <div class="career-location__title">Офис управляющей компании</div>
            </div>
            <div class="career-location">
                <div class="career-location__tags">
                    <div class="career-location-tag">московская обл.</div>
                    <div class="career-location-tag">Мытищи</div>
                </div>
                <div class="career-location__title">Складской комплекс</div>
            </div>
            <div class="career-location">
                <div class="career-location__tags">
                    <div class="career-location-tag">московская обл.</div>
                    <div class="career-location-tag">дубна</div>
                </div>
                <div class="career-location__title">Офис и производственная площадка инновационных медицинских изделий,
                    научно-исследовательская лаборатория
                </div>
            </div>
            <div class="career-location">
                <div class="career-location__tags">
                    <div class="career-location-tag">ивановская обл.</div>
                    <div class="career-location-tag">тейково</div>
                    <div class="career-location-tag">воскресенское</div>
                </div>
                <div class="career-location__title">Офис и&nbsp;производственные площадки традиционных медицинских
                    изделий
                </div>
            </div>
        </div>
    </div>
</section>

<section class="career-specialists-section oversection">
    <div class="container">
        <div class="career-specialists">
            <div class="career-specialists-image">
                <img src="/assets/img/about/career-specialists.png" alt="">
            </div>
            <div class="career-specialists-text">
                <div class="section-badge">молодым специалистам</div>
                <div class="career-specialists__title section-h4">
                    Мы приглашаем молодых специалистов самых разных специальностей. Собственная
                    <a href="/about/develop">научно-производственная база</a>, лаборатория, 3 производственных площадки,
                    офис управляющей компании открыты для соискателей.
                </div>
                <div class="career-specialists__description">
                    Для экологичной и эффективной адаптации вновь принятому сотруднику составляется индивидуальный план
                    вхождения в должность, за каждым закрепляется опытный куратор. Новичок всегда может рассчитывать на
                    помощь коллег и всей команды.
                </div>
            </div>
        </div>
    </div>
</section>
<section class="career-request-section">
    <div class="container">
        <div class="contract-request career-request">
            <div class="contract-request-text">
                <div class="section-badge section-badge--white">оставить заявку</div>
                <div class="contract-request__text">Если вы хотите у нас работать, пожалуйста, заполните форму и приложите своё резюме. Если у нас появится подходящая вакансия, мы обязательно с вами свяжемся.
                </div>
                <div class="contract-request__note">Поля, отмеченные&nbsp;(*), обязательны для заполнения</div>
                <div class="contract-request-contacts">
                    <div class="contract-request-contact" style="max-width: 260px">
                        <div class="contract-request-contact__label">Об открытых вакансиях вы можете уточнить, написав на:</div>
                        <a href="mailto:hr@evers.ru" class="contract-request-contact__text">hr@evers.ru</a>
                    </div>
                </div>
            </div>
            <div class="contract-request-form form">
                <div class="form-fields">
                    <form action="/request.json">
                        <div class="form-input-group">
                            <div class="labeled-input labeled-input--required">
                                <div class="labeled-input-label">Ваше имя / название компании</div>
                                <input type="text" name="name" required/>
                            </div>
                            <div class="labeled-input labeled-input--required">
                                <div class="labeled-input-label">Контактный телефон</div>
                                <input type="tel" name="phone" required/>
                            </div>
                            <div class="labeled-input labeled-input--required">
                                <div class="labeled-input-label">E-mail</div>
                                <input type="email" name="email" required/>
                            </div>
                            <div class="labeled-input">
                                <div class="labeled-input-label">Комментарий</div>
                                <textarea name="comment"></textarea>
                            </div>
                            <label class="labeled-file">
                                <input type="file" name="file"/>
                                <svg height="22" width="20">
                                    <use xlink:href="/assets/img/icons.svg#clip"/>
                                </svg>
                                <span class="labeled-file__text">Прикрепить резюме</span>
                            </label>

                            <label class="checkbox checkbox--white">
                                <input type="checkbox" required/>
                                <span class="checkbox__check"></span>
                                <span>Я согласен на <a href="#">обработку персональных данных</a> и с условиями <a
                                        href="#">политики конфиденциальности</a> *</span>
                            </label>
                        </div>
                        <button type="submit" class="btn btn-white btn-full">Отправить</button>
                    </form>
                </div>
                <div class="form-success">
                    <img src="/assets/img/icons/form-success.svg" alt="">
                    <div class="form-success__title">Спасибо, заявка отправлена!</div>
                    <div class="form-success__description">Менеджер свяжется с вами в ближайшее время. Режим работы:
                        с 9 до 18 (ПН-ЧТ) и с 9 до 17 (ПТ) по московскому времени.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>