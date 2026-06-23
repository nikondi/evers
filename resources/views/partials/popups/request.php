<div class="popup" id="request-popup">
    <button type="button" class="popup-close">
        <svg width="26" height="26" viewBox="0 0 26 26" fill="none">
            <path d="M24.9922 1L1 25M25 25L1.00784 1.00003" stroke="currentColor" stroke-width="2"
                  stroke-linecap="round"/>
        </svg>
    </button>
    <div class="popup-content">
        <div class="popup-title">Заявка на обучение для партнеров</div>
        <div class="form">
            <div class="form-fields">
                <div class="popup-description">Пожалуйста, заполните форму заявки и менеджер свяжется с вами в ближайшее
                    время. Поля, отмеченные&nbsp;(*), обязательны для заполнения.
                </div>
                <form action="/request.json" class="popup-form">
                    <div class="popup-input-group">
                        <div class="labeled-input labeled-input--required">
                            <div class="labeled-input-label">Ваше имя</div>
                            <input type="text" name="name" required/>
                        </div>
                        <div class="labeled-input">
                            <div class="labeled-input-label">Компания</div>
                            <input type="text" name="company"/>
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
                            <span>Я согласен на <a href="#">обработку персональных данных</a> *</span>
                        </label>
                        <label class="checkbox">
                            <input type="checkbox" required/>
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
</div>
