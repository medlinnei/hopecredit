<footer>
    <div class="wrapper-bottom">
        <div class="container footer__logo">
            <a class="logo" href="/">
                <img
                    src="{{asset('images/dist/Logo-white.png')}}"
                    alt="logo"
                    width="36"
                    height="48"
                />
                <p class="logo__text">opeGroup</p>
            </a>
            <ul class="social">
                <li>
                    <a class="social__link" href="/">
                        <svg class="social__icon" width="43" height="29">
                            <use href="./assets/icons.svg#telegram"></use>
                        </svg>
                    </a>
                </li>
                <li>
                    <a class="social__link" href="/">
                        <svg class="social__icon" width="43" height="29">
                            <use href="./assets/icons.svg#instagram"></use>
                        </svg>
                    </a>
                </li>
                <li>
                    <a class="social__link" href="/">
                        <svg class="social__icon" width="43" height="29">
                            <use href="./assets/icons.svg#youtube"></use>
                        </svg>
                    </a>
                </li>
            </ul>
            <ul class="help">
                <li>
                    <a href="" class="help__link">Жалоба? Вам сюда!</a>
                </li>
                <li><a href="" class="help__link">Сообщить о мошенничестве</a></li>
                <li>
                    <a href="" class="help__link"
                    >Не хватает денег на оплату кредита</a
                    >
                </li>
            </ul>
        </div>
        <div class="container">
            <div>
                <h3 class="container__title">Вопросы</h3>
                <button class="container__button">
                    <img
                        src="./assets/btn-line.png"
                        alt="line"
                        width="20"
                        height="15"
                    />
                </button>
            </div>
            <ul class="container__list">
                <li><a class="container__link" href="/">Часто задаваемые</a></li>
                <li><a class="container__link" href="/">Тарифы</a></li>
                <li><a class="container__link" href="/">Как взять кредит</a></li>
                <li><a class="container__link" href="/">Как оплатить кредит</a></li>
                <li><a class="container__link" href="/">Акции</a></li>
                <li><a class="container__link" href="/">Поддержка</a></li>
                <li><a class="container__link" href="/">Отзывы клиентов</a></li>
            </ul>
        </div>
        <div class="container">
            <div>
                <h3 class="container__title">Контакты</h3>
                <button class="container__button">
                    <img
                        src="./assets/btn-line.png"
                        alt="line"
                        width="20"
                        height="15"
                    />
                </button>
            </div>
            <ul class="container__list">
                <li>
                    <a
                        class="container__link container-contact"
                        href="tel:08008675637"
                    >0 800 867 56 37</a
                    >
                    <p class="container__text">
                        Специалисты нашего колл-центра готовы помочь вам с с 6:00 до
                        20:00
                    </p>
                </li>
                <li>
                    <a
                        class="container__link container-contact"
                        href="mailto:info@hope.group"
                    >info@hope.group</a
                    >
                </li>
                <li>
                    <ul class="social-desktop">
                        <li>
                            <a class="social__link" href="/">
                                <svg class="social__icon" width="43" height="29">
                                    <use href="./assets/icons.svg#telegram"></use>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a class="social__link" href="/">
                                <svg class="social__icon" width="43" height="29">
                                    <use href="./assets/icons.svg#instagram"></use>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a class="social__link" href="/">
                                <svg class="social__icon" width="43" height="29">
                                    <use href="./assets/icons.svg#youtube"></use>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <p class="container__adress-title">Адрес</p>
                    <p class="container__adress">
                        00601, г. Киев, Улица Твоеймамы, 66, офис 000
                    </p>
                </li>
            </ul>
        </div>
        <div class="container">
            <div>
                <h3 class="container__title">Документация</h3>
                <button class="container__button">
                    <img
                        src="./assets/btn-line.png"
                        alt="line"
                        width="20"
                        height="15"
                    />
                </button>
            </div>
            <ul class="container__list">
                <li><a class="container__link" href="/">Условия договора</a></li>
                <li>
                    <a class="container__link" href="/"
                    >Политика конфиденциальности персональных данных</a
                    >
                </li>
                <li>
                    <a class="container__link" href="/">Условия реструктуризации</a>
                </li>
                <li><a class="container__link" href="/">Образцы заявлений</a></li>
                <li><a class="container__link" href="/">Реквизиты</a></li>
            </ul>
        </div>
    </div>
    @yield('footer')
</footer>
