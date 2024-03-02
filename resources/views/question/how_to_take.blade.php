@extends('layouts.app')
@section('styles')
    @include('layouts.includesCredit.header')
<section class="take">
        <h2 class="take__title">Як взяти кредит в <span>HopeGroup?</span></h2>
        <div class="take__container">
            <ul class="take__list">
                <li>
                    <div class="take__list-block">
                        <img
                            src="{{asset('images/dist/take-image-01.png')}}"
                            alt="take-image-01"
                            width="90"
                        />
                        <p>01</p>
                    </div>
                    <h3 class="take__list-title">Виберіть умови</h3>
                    <p class="take__list-text">
                        Виберіть необхідну суму і термін кредиту, далі натисніть на
                        кнопку
                    </p>
                </li>
                <li>
                    <div class="take__list-block">
                        <img
                            src="{{asset('images/dist/take-image-02.png')}}"
                            alt="take-image-01"
                            width="90"
                        />
                        <p>02</p>
                    </div>
                    <h3 class="take__list-title">Заповніть заявку</h3>
                    <p class="take__list-text">
                        Заповніть просту заявку, щоб ми змогли прийняти рішення за Вашим
                        кредитом.
                    </p>
                </li>
                <li>
                    <div class="take__list-block">
                        <img
                            src="{{asset('images/dist/take-image-03.png')}}"
                            alt="take-image-01"
                            width="90"
                        />
                        <p>03</p>
                    </div>
                    <h3 class="take__list-title">Підпишіть договір</h3>
                    <p class="take__list-text">
                        Ознайомтесь з умовами договору та підпишіть його за допомогою
                        СМС-коду, який буде висланий на Ваш номер телефону.
                    </p>
                </li>
                <li>
                    <div class="take__list-block">
                        <img
                            src="{{asset('images/dist/take-image-04.png')}}"
                            alt="take-image-01"
                            width="90"
                        />
                        <p>04</p>
                    </div>
                    <h3 class="take__list-title">Гроші на картці</h3>
                    <p class="take__list-text">
                        Після підписання договору, гроші будуть зараховані на Вашу карту
                        МИТТЄВО!
                    </p>
                </li>
            </ul>
            <div class="calculate take__calculate">
                <h3 class="take__calculate-title">Первый займ под 0%</h3>
                <div class="slidecontainer take__slide">
                    <div>
                        <p class="slide__label">Сумма</p>
                        <p class="slide__sum">50 000₴</p>
                    </div>
                    <input type="range" min="1" max="100" value="20" class="slider" />
                    <div class="div">
                        <p class="amount">0₴</p>
                        <p class="amount">100 000₴</p>
                    </div>
                </div>
                <div class="slidecontainer take__slide">
                    <div>
                        <p class="slide__label">Период</p>
                        <p class="slide__sum">3 000₴</p>
                    </div>
                    <input type="range" min="1" max="100" value="20" class="slider" />
                    <div class="div">
                        <p class="amount">10 дней</p>
                        <p class="amount">24 недели</p>
                    </div>
                </div>
                <div class="calculate__result take__calculate--result">
                    <p class="result__label">Вы возвращаете:</p>
                    <p class="result__label">До(включительно):</p>

                    <p class="result__amount">50 000</p>
                    <p class="result__amount">15/01/2024</p>
                </div>
                <button class="calculate__btn take__calculate--btn">
                    Получить деньги
                </button>
                <button class="take__promocode">В мене є промокод</button>
                <button class="calculate__programm-btn take__programm-btn">
                    График начислений
                </button>
                <button class="calculate__programm-btn take__programm-btn">
                    Полные условия
                </button>
                <p class="take__text">
                    Додатково перелік кредитних продуктів Товариства, їхні істотні
                    характеристики, калькулятор згідно з Постановою НБУ від 05.10.2021
                    №100 та інша інформація стосовно умов кредитування розміщені в
                    розділі 
                    <a href="/">Кредитні продукти</a>
                </p>
            </div>
        </div>
    </section>
@include('layouts.includesCredit.footer')
@endsection
