@extends('layouts.app')
@section('styles')
@include('layouts.includesCredit.header')
    <section class="invest">
        <h1 class="invest__title">Инвестиции</h1>
        <p class="invest__text">Вкладывайте деньги с выгодой и скоростью</p>
        <button class="invest__btn">Рассчитать</button>
        <img
            class="invest__img"
            src="{{asset('images/dist/hero-lights.png')}}"
            alt="hero-lights"
            width="800"
            height="100"
        />
        <div class="bid-block">
            <p class="bid-block-label">Минимальная ставка в год:</p>
            <p class="bid-block-text">15%</p>
        </div>
        <div class="period-block">
            <p class="period-block-label">Период инвестирования:</p>
            <p class="period-block-term">12-36 мес.</p>
            <p class="period-block-text">Заработано:</p>
            <img
                class="progressbar"
                src="{{asset('images/dist/progressbar.png')}}"
                alt="progressbar"
                width="100"
                height="20"
            />
            <img
                class="coins"
                src="{{asset('images/dist/coins.png')}}"
                alt="coins"
                width="60"
                height="60"
            />
        </div>
        <div class="diagram-block">
            <img
                src="{{asset('images/dist/diagram.png')}}"
                alt="diagram"
                width="250"
                height="80"
            />
        </div>
        <div class="sum-block">
            <p class="sum-block-label">Минимальная сумма инвестиций:</p>
            <p class="sum-block-amount">₴10 000</p>
        </div>
    </section>
    <section class="calculate">
        <div class="calculate__container">
            <h2 class="calculate__title">Расчет инвестиций</h2>
            <div class="slidecontainer">
                <div>
                    <p class="slide__label">Первый взнос</p>
                    <p class="slide__sum">50 000₴</p>
                </div>
                <input type="range" min="1" max="100" value="20" class="slider" />
                <div class="div">
                    <p class="amount">0₴</p>
                    <p class="amount">100 000₴</p>
                </div>
            </div>
            <div class="slidecontainer">
                <div>
                    <p class="slide__label">Пополнение в месяц</p>
                    <p class="slide__sum">3 000₴</p>
                </div>
                <input type="range" min="1" max="100" value="20" class="slider" />
                <div class="div">
                    <p class="amount">10 дней</p>
                    <p class="amount">24 недели</p>
                </div>
            </div>
            <div class="calculate__period">
                <h3 class="calculate__period-title">Период инвестирования:</h3>
                <div>
                    <button class="calculate__period-btn active-btn">12 мес.</button>
                    <button class="calculate__period-btn">24 мес.</button>
                    <button class="calculate__period-btn">36 мес.</button>
                </div>
            </div>
        </div>
        <div class="calculate__programm">
            <ul class="calculate__programm-list">
                <li>
                    <p class="calculate__programm-label">Ви отримаєте</p>
                    <p class="calculate__programm-text">11 111₴</p>
                </li>
                <li>
                    <p class="calculate__programm-label">Процентная ставка</p>
                    <p class="calculate__programm-text">15.5%</p>
                </li>
                <li>
                    <p class="calculate__programm-label">Период</p>
                    <p class="calculate__programm-text">12 мес.</p>
                </li>
                <li>
                    <p class="calculate__programm-label">Сумма инвестиций</p>
                    <p class="calculate__programm-text">74 000₴</p>
                </li>
            </ul>
            <div>
                <button class="calculate__programm-btn">График начислений</button>
                <button class="calculate__programm-btn">Полные условия</button>
            </div>
            <button class="calculate__btn-invest">Инвестировать</button>
        </div>
    </section>
    <section class="stage">
        <h2 class="stage__title">Почати інвестувати просто</h2>
        <ul class="stage__list">
            <li>
                <p class="stage__step">1</p>
                <h3 class="stage__list-time">24 часа</h3>
                <p class="stage__list-text">Оформите заявку</p>
            </li>
            <img
                src="{{asset('images/dist/arrow-right.png')}}"
                alt="arrow-right"
                width="50px"
                height="20"
            />
            <li>
                <p class="stage__step">2</p>
                <h3 class="stage__list-time">24 часа</h3>
                <p class="stage__list-text">Дождитесь решения</p>
            </li>
            <img
                src="{{asset('images/dist/arrow-right.png')}}"
                alt="arrow-right"
                width="50px"
                height="20"
            />
            <li>
                <p class="stage__step">3</p>
                <h3 class="stage__list-time">24 часа</h3>
                <p class="stage__list-text">Получите деньги</p>
            </li>
        </ul>
    </section>
    <section class="excellence">
        <img
            class="excellence__background"
            src="{{asset('images/dist/grafik-bg.png')}}"
            alt="excellence__background"
        />
        <h2 class="excellence__title">Інвестування</h2>
        <ul class="excellence__list">
            <li>
                <img
                    src="{{asset('images/dist/speed-icon.png')}}"
                    alt="excellence-icon"
                    width="55"
                    height="55"
                />
                <p class="excellence__label">Скорость:</p>
                <p class="excellence__text">
                    Ответим на ваш запрос в течение 1 часа и обработаем заявку в
                    течение 24 часов.
                </p>
            </li>
            <li>
                <img
                    src="{{asset('images/dist/proccent-icon.png')}}"
                    alt="excellence-icon"
                    width="55"
                    height="55"
                />
                <p class="excellence__label">Высокий процент:</p>
                <p class="excellence__text">
                    Мы предлагаем проценты выше, чем в большинстве банков.
                </p>
            </li>
            <li>
                <img
                    src="{{asset('images/dist/shield-icon.png')}}"
                    alt="excellence-icon"
                    width="55"
                    height="55"
                />
                <p class="excellence__label">Безопасность:</p>
                <p class="excellence__text">
                    Мы соблюдаем строгие нормативные требования и используем передовые
                    технологии для защиты ваших инвестиций.
                </p>
            </li>
            <li>
                <img
                    src="{{asset('images/dist/diagram-icon.png')}}"
                    alt="excellence-icon"
                    width="55"
                    height="55"
                />
                <p class="excellence__label">Простота:</p>
                <p class="excellence__text">
                    Мы упрощаем процесс инвестирования, чтобы вы могли получать
                    прибыль без лишних усилий.
                </p>
            </li>
        </ul>
    </section>
    <section class="condition">
        <img
            class="person"
            src="{{asset('images/dist/person.png')}}"
            alt="person"
            width="525"
            height="350"
        />
        <h2 class="condition__title">Требования к инвестору</h2>
        <ul class="condition__list">
            <li>
                <p class="condition__img">
                    <img
                        src="{{asset('images/dist/Checked.png')}}"
                        alt="checkbox"
                        width="30"
                        height="30"
                    />
                </p>
                <p class="condition__text">Возраст от 18 лет</p>
            </li>
            <li>
                <p class="condition__img">
                    <img
                        src="{{asset('images/dist/Checked.png')}}"
                        alt="checkbox"
                        width="30"
                        height="30"
                    />
                </p>
                <p class="condition__text">Паспорт гражданина</p>
            </li>
            <li>
                <p class="condition__img">
                    <img
                        src="{{asset('images/dist/Checked.png')}}"
                        alt="checkbox"
                        width="30"
                        height="30"
                    />
                </p>
                <p class="condition__text">Банковская карта</p>
            </li>
            <li>
                <p class="condition__img">
                    <img
                        src="{{asset('images/dist/Checked.png')}}"
                        alt="checkbox"
                        width="30"
                        height="30"
                    />
                </p>
                <p class="condition__text">Мобильный телефон</p>
            </li>
        </ul>
    </section>
    <section class="question">
        <div class="question__title-block">
            <h2 class="question__title">
                Что Вам будет <br />
                интересно
            </h2>
            <p class="question__image">?</p>
        </div>
        <div class="question__background">
            <ul class="question__list">
                <li class="item1">
                    <div class="question__list-block question--active">
                        <h3 class="question__list-title">Как правильно топить котят</h3>
                    </div>
                    <p class="question__list-text">
                        Кредиты - это удобно, ведь они позволяют нам получить желаемое,
                        не дожидаясь, пока мы накопим на это нужную сумму. Но не стоит
                        забывать, что кредит - это не подарок, а долг, который нужно
                        вернуть. И если не рассчитать свои силы...
                    </p>
                </li>
                <li class="item2">
                    <div class="question__list-block">
                        <h3 class="question__list-title">Как правильно топить котят</h3>
                        <button class="question__list-btn">
                            <svg class="question__icon" width="15px" height="15px">
                                <use xlink:href="./assets/icons.svg#line"></use>
                            </svg>
                        </button>
                    </div>
                </li>
                <li class="item3">
                    <div class="question__list-block">
                        <h3 class="question__list-title">Как правильно топить котят</h3>
                        <button class="question__list-btn">
                            <svg class="question__icon" width="15px" height="15px">
                                <use xlink:href="./assets/icons.svg#line"></use>
                            </svg>
                        </button>
                    </div>
                </li>
                <li class="item4">
                    <div class="question__list-block">
                        <h3 class="question__list-title">Как правильно топить котят</h3>
                        <button class="question__list-btn">
                            <svg class="question__icon" width="15px" height="15px">
                                <use xlink:href="./assets/icons.svg#line"></use>
                            </svg>
                        </button>
                    </div>
                </li>
                <li class="item5">
                    <div class="question__list-block">
                        <h3 class="question__list-title">Как правильно топить котят</h3>
                        <button class="question__list-btn">
                            <svg class="question__icon" width="15px" height="15px">
                                <use xlink:href="./assets/icons.svg#line"></use>
                            </svg>
                        </button>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <section class="tarifs">
        <h2 class="tarifs__title">Тарифы</h2>
        <div class="tarifs__container">
            <div class="tarifs__block">
                <img
                    src="{{asset('images/dist/tarifs-img.png')}}"
                    alt="tarifs-img"
                    width="200"
                    height="200"
                />
                <h3 class="tarifs__block-title">до 50 000</h3>
                <p class="tarifs__bid">14%</p>
                <p class="tarifs__name">Новичок</p>
                <button class="tarifs__btn">Инвестировать</button>
                <button class="tarifs__btn-details">Подробнее</button>
            </div>
            <div class="tarifs__block">
                <h3 class="tarifs__block-title">до 50 000</h3>
                <p class="tarifs__bid">14,5%</p>
                <p class="tarifs__name">Середнячок</p>
                <ul class="tarifs__list">
                    <li>
                        <div>
                            <img
                                src="{{asset('images/dist/card-icon.png')}}"
                                alt="card-icon"
                                width="30"
                                height="30"
                            />
                        </div>
                        <p class="tarifs__text">до 50 000 грн. на карту</p>
                    </li>
                    <li>
                        <div>
                            <img
                                src="{{asset('images/dist/time-icon.png')}}"
                                alt="card-icon"
                                width="30"
                                height="30"
                            />
                        </div>
                        <p class="tarifs__text">Период займа от 10 до 30 дней</p>
                    </li>
                    <li>
                        <div>
                            <img
                                src="{{asset('images/dist/proccent-icon-sick.png')}}"
                                alt="card-icon"
                                width="25"
                                height="25"
                            />
                        </div>
                        <p class="tarifs__text w-text">Ставка 0,8%/день</p>
                    </li>
                    <li>
                        <div>
                            <img
                                src="{{asset('images/dist/moneytime-icon.png')}}"
                                alt="card-icon"
                                width="30"
                                height="30"
                            />
                        </div>
                        <p class="tarifs__text w-text">Проценты в расстрочку</p>
                    </li>
                </ul>
                <button class="tarifs__btn">Инвестировать</button>
            </div>
            <div class="tarifs__block">
                <img
                    src="{{asset('images/dist/tarifs-img.png')}}"
                    alt="tarifs-img"
                    width="200"
                    height="200"
                />
                <h3 class="tarifs__block-title">от 100 000</h3>
                <p class="tarifs__bid">15%</p>
                <p class="tarifs__name">Большечок</p>
                <button class="tarifs__btn">Инвестировать</button>
                <button class="tarifs__btn-details">Подробнее</button>
            </div>
        </div>
        <button class="tarifs__btn tarifs__btn-main">Инвестировать</button>
    </section>
    @include('layouts.includesCredit.footer')
@endsection