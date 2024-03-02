@extends('layouts.app')
@section('styles')
    @include('layouts.includesCredit.header')
    <section class="news">
        <h2 class="news__title">Новини</h2>
        <ul class="news__list">
            <li>
                <img
                    src="{{asset('images/dist/news-img.png')}}"
                    alt="news-img"
                    width="450"
                    height="300"
                />
                <div class="news__container">
                    <h3 class="news__list-title">
                        Три помилки, яких ви припускаєтесь під час створення фінансової
                        подушки у 2024
                    </h3>
                    <p class="news__list-text">
                        Фінансова подушка має бути в кожного, і якщо наразі ви над нею
                        працюєте, переконайтесь, що робите все правильно. Розгляньмо три
                        найпоширеніші помилки, про які ви раніше не замислювались та
                        яких слід уникати під час створення фонду на випадок
                        надзвичайних ситуацій.
                    </p>
                </div>
            </li>
            <li>
                <img
                    src="{{asset('images/dist/news-img.png')}}"
                    alt="news-img"
                    width="450"
                    height="300"
                />
                <div class="news__container">
                    <h3 class="news__list-title">
                        Три помилки, яких ви припускаєтесь під час створення фінансової
                        подушки у 2024
                    </h3>
                    <p class="news__list-text">
                        Фінансова подушка має бути в кожного, і якщо наразі ви над нею
                        працюєте, переконайтесь, що робите все правильно. Розгляньмо три
                        найпоширеніші помилки, про які ви раніше не замислювались та
                        яких слід уникати під час створення фонду на випадок
                        надзвичайних ситуацій.
                    </p>
                </div>
            </li>
        </ul>
        <ul class="news__pagination">
            <li><button class="news__pagination-btn">1</button></li>
            <li><button class="news__pagination-btn">2</button></li>
            <li><button class="news__pagination-btn">3</button></li>
            <li><button class="news__pagination-btn">4</button></li>
            <li><button class="news__pagination-btn">5</button></li>
            <li><button class="news__pagination-btn">6</button></li>
            <li><button class="news__pagination-btn">7</button></li>
            <li><button class="news__pagination-btn">8</button></li>
            <li><button class="news__pagination-btn">9</button></li>
            <li><button class="news__pagination-btn">10</button></li>
            <li><button class="news__pagination-btn">11</button></li>
            <li><button class="news__pagination-btn">12</button></li>
        </ul>
    </section>
    @include('layouts.includesCredit.footer')
@endsection
