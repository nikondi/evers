<?php
$breadcrumbs = [
    ['/', 'Главная'],
    ['/coop/', 'Сотрудничество'],
    ['Заявка на сотрудничество']
];
include VIEW_PATH . 'partials/breadcrumbs.php';
?>

<section>
    <div class="container">
        <h1 class="page-h1">Заявка на сотрудничество</h1>
    </div>
</section>

<section class="coop-request-section">
    <div class="container">
        <div class="coop-request__caption">Пожалуйста, заполните форму заявки и менеджер свяжется с вами в ближайшее
            время.
        </div>
        <div class="coop-request">
            <div class="coop-request-left">
                <div class="form">
                    <div class="form-fields">
                        <div class="popup-description">Поля, отмеченные&nbsp;(*), обязательны для заполнения.
                        </div>
                        <form action="/request.json" class="popup-form">
                            <div class="form-input-group">
                                <div class="labeled-input labeled-input--required">
                                    <div class="labeled-input-label">Ваше имя</div>
                                    <input type="text" name="name" required/>
                                </div>
                                <div class="labeled-input">
                                    <div class="labeled-input-label">Компания</div>
                                    <input type="text" name="company"/>
                                </div>
                                <div class="labeled-input">
                                    <div class="labeled-input-label">Формат сотрудничества</div>
                                    <select name="" id="">
                                        <option value="">Региональная сеть</option>
                                        <option value="">Региональная сеть</option>
                                        <option value="">Региональная сеть</option>
                                    </select>
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
                                <label class="checkbox">
                                    <input type="checkbox" required/>
                                    <span class="checkbox__check"></span>
                                    <span>Я согласен на <a href="#">обработку персональных данных</a> *</span>
                                </label>
                                <label class="checkbox">
                                    <input type="checkbox" required/>
                                    <span class="checkbox__check"></span>
                                    <span>Я согласен с условиями <a href="#">политики конфиденциальности</a> *</span>
                                </label>
                            </div>
                            <button type="submit" class="btn btn-green btn-full">Оставить заявку</button>
                        </form>
                    </div>
                    <div class="form-success">
                        <?php // TODO верстка ?>
                        Форма успешно отправлена
                    </div>
                </div>
            </div>
            <div class="coop-request-contacts">
                <div class="coop-request-contacts__title">Или свяжитесь с нами удобным способом:</div>
                <div class="coop-request-contact">
                    <div class="coop-request-contact__label">Почта:</div>
                    <div class="coop-request-contact__text"><a href="mailto:evers@evers.ru">evers@evers.ru</a></div>
                </div>
                <div class="coop-request-contact">
                    <div class="coop-request-contact__label">Телефон:</div>
                    <div class="coop-request-contact__text"><a href="tel:+7 (499) 707-10-09">+7 (499) 707-10-09</a>
                    </div>
                </div>
                <div class="coop-request-contacts__hr"></div>
                <div class="coop-request-contact">
                    <div class="coop-request-contact__label">График работы:</div>
                    <div class="coop-request-contact__text">
                        Пн-Чт<br/>
                        9:00 - 18:00<br/><br/>
                        Пт<br/>
                        9:00 - 17:00<br/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>