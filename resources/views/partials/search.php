<div class="search">
    <div class="search-body">
        <div class="search-top">
            <div class="search__title">Поиск по сайту</div>
            <button class="search-close" type="button">
                <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M24.9922 1L1 25M25 25L1.00784 1.00003" stroke="currentColor" stroke-width="2"
                          stroke-linecap="round"/>
                </svg>
            </button>
        </div>
        <div class="search-field">
            <label for="search-input" class="search-field__label">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <use xlink:href="/assets/img/icons.svg#search"></use>
                </svg>
            </label>
            <input type="text" class="search-field__input" id="search-input" placeholder="Введите текст запроса..."/>
        </div>
        <div class="search-results">
            <div class="search-results-triggers">
                <button class="search-results-trigger active">Каталог
                    (<span class="search-results-trigger__count">4</span>)
                </button>
                <button class="search-results-trigger">Страницы
                    (<span class="search-results-trigger__count">6</span>)
                </button>
            </div>
            <div class="search-results-tabs">
                <div class="search-results-tab active">
                    <div class="search-products">
                        <?php for ($i = 0; $i < 3; $i++) : ?>
                            <a href="/catalog/product" class="search-product">
                                <div class="search-product-image">
                                    <img src="/assets/img/cart-product.png" alt=""/>
                                </div>
                                <div class="search-product-text">
                                    <div class="search-product__title">Название товара</div>
                                    <div class="search-product__path">Главная / Каталог / Название категории</div>
                                </div>
                            </a>
                        <?php endfor; ?>
                    </div>
                    <nav class="pagination pagination--left" style="margin-top: 30px;">
                        <ul>
                            <li><span>1</span></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li>
                                <div>...</div>
                            </li>
                            <li><a href="#">24</a></li>
                            <li>
                                <a href="#">
                                    <svg width="16" height="16">
                                        <use xlink:href="/assets/img/icons/slider-arrows.svg#right"/>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </nav>

                </div>
                <div class="search-results-tab">
                    <div class="search-pages">
                        <?php for ($i = 0; $i < 6; $i++) : ?>
                            <a href="/news/single" class="search-page">
                                <div class="search-product-text">
                                    <div class="search-product__title">Название товара</div>
                                    <div class="search-product__path">Главная / Каталог / Название категории</div>
                                </div>
                            </a>
                        <?php endfor; ?>
                    </div>

                    <nav class="pagination pagination--left" style="margin-top: 20px;">
                        <ul>
                            <li><span>1</span></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li>
                                <div>...</div>
                            </li>
                            <li><a href="#">24</a></li>
                            <li>
                                <a href="#">
                                    <svg width="16" height="16">
                                        <use xlink:href="/assets/img/icons/slider-arrows.svg#right"/>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </nav>

                </div>
            </div>
        </div>

        <div class="search-not-found">По вашему запросу ничего не найдено</div>
    </div>
</div>
