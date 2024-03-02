@extends('layouts.app')
@section('styles')
    @include('layouts.includesCredit.header')
    <section class="company">
        <h2 class="company__title">
            <span>HopeGroup</span>- сервіс онлайн позик, який вирішить ваші
            термінові фінансові проблеми швидко і просто
        </h2>
        <h3>Наш сервіс забезпечує наступне:</h3>
        <ul class="company__list">
            <li>
                <img
                    src="{{asset('images/dist/aboutUs-time.png')}}"
                    alt="aboutUs-time"
                    width="65"
                />
                <p>Швидке оформлення кредиту</p>
            </li>
            <li>
                <img
                    src="{{asset('images/dist/aboutUs-tags.png')}}"
                    alt="aboutUs-time"
                    width="65"
                />
                <p>HopeGroup доступний по всій Україні</p>
            </li>
            <li>
                <img
                    src="{{asset('images/dist/aboutUs-world.png')}}"
                    alt="aboutUs-time"
                    width="65"
                />
                <p>Усі операції онлайн, без офісного візиту</p>
            </li>
            <li>
                <img
                    src="{{asset('images/dist/aboutUs-proccent.png')}}"
                    alt="aboutUs-time"
                    width="65"
                />
                <p>
                    Знижена процентна ставка 0,01% на день для першого кредиту на
                    обраний період
                </p>
            </li>
            <li>
                <img
                    src="{{asset('images/dist/aboutUs-docs.png')}}"
                    alt="aboutUs-time"
                    width="65"
                />
                <p>
                    Оформлення за умови надання мінімальної інформації та документів
                    від споживача
                </p>
            </li>
        </ul>
    </section>
    <section class="guarantees">
        <h3 class="guarantees__title">Гарантії та конфіденційність:</h3>
        <div>
            <p class="guarantees__text guarantees__text--left">
                Взаємини між Товариством та споживачами регулюються законодавством
                України й документами, з якими ви можете ознайомитися на нашому
                сайті в розділі «Документи».
            </p>
            <button class="guarantees__button guarantees__button-right">
                <a href="{{route('documents')}}">Документи</a>
            </button>
        </div>
        <div>
            <p class="guarantees__text guarantees__text--right">
                Інформація про надання Товариством фінансових послуг споживачам,
                зокрема істотних характеристик та умов надання кредитних продуктів,
                доступна в розділі «Кредитні продукти».
            </p>
            <button class="guarantees__button guarantees__button-left">
                <a href="{{route('credit.terms')}}">Кредитні продукти</a>
            </button>
        </div>
    </section>
    <section class="adress">
        <ul class="adress__list">
            <li>
                <p class="adress__label">Адреса</p>
                <p class="adress__text">
                    03062, м. Київ, проспект Берестейський 90-А
                </p>
            </li>
            <li>
                <p class="adress__label">Телефон гарячої лінії</p>
                <p class="adress__text">
                    0 (800) 753-363 <br />(безкоштовно по Україні)
                </p>
                <p class="adress__label">E-mail</p>
                <p class="adress__text">tututata@hopeGroup</p>
            </li>
            <li>
                <p class="adress__label">Графік роботи</p>
                <p class="adress__text">Понеділок — четвер: 9:00-18:00</p>
                <p class="adress__text">П'ятниця: 9:00-16:45</p>
                <p class="adress__text">Перерва: 13:00-13:45</p>
            </li>
        </ul>
    </section>
@include('layouts.includes.footer')
@endsection
