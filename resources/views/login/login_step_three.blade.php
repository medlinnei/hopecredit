@extends('layouts.app')
@section('styles')
    @include('layouts.includesCredit.header')
    <section class="auth">
        <h2 class="auth__title">Адреса реєстрації</h2>
        <div class="steps">
            <span class="steps__number">1</span>
            <span class="steps__line"></span>
            <span class="steps__number">2</span>
            <span class="steps__line"></span>
            <span class="steps__number">3</span>
        </div>
        <form class="form" method="post" action="{{route('get.location')}}">
            @csrf
            <label class="form__label"
            ><p>Область</p>
                <input name="region" class="form__input" type="text" />
            </label>
            <label class="form__label"
            ><p>Район</p>
                <input name="district" class="form__input" type="text" />
            </label>
            <label class="form__label"
            ><p>Місто, населений пункт</p>
                <input name="city" class="form__input" type="text" />
            </label>
            <label class="form__label"
            ><p>Індекс(не обов'язково)</p>
                <input name="post_index" class="form__input" type="text" />
            </label>
            <label class="form__label"
            ><p>Вулиця</p>
                <input name="street" class="form__input" type="text" />
            </label>
            <label class="form__label"
            ><p>Будинок</p>
                <input name="house" class="form__input" type="text" />
            </label>
            <label class="form__label"
            ><p>Квартира</p>
                <input name="apartment" class="form__input" type="text" />
            </label>
            <div>
                <input type="checkbox" id="checkbox" name="actual_address_differs" />
                <label class="checkbox__text" for="old-card"
                >Фактична адреса відрізняється
                </label>
            </div>
            <button class="submit" type="submit">Далі</button>
        </form>
    </section>
    @include('layouts.includesCredit.footer')
@endsection
