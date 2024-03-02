@extends('layouts.app')
@section('styles')
@include('layouts.includesCredit.header')
     <section class="auth" id="authSection">
      <img
        class="auth__logo"
        src="{{asset('images/dist/Logo-main.png')}}"
        alt="main-logo"
        width="120"
        height="120"
      />
      <form class="form" method="post" action="{{route('get.number')}}">
        @csrf
        <label class="form__label" for="number">
          <p>Номер телефона</p>
          <input class="form__input" type="text" id="number" name="number"/>
        </label>
        <button class="submit" type="submit">Далee</button>
      </form>
    </section>

    <!-- <section class="auth">
      <h2 class="auth__title">Адреса реєстрації</h2>
      <div class="steps">
        <span class="steps__number done"
          ><img
            src="./assets/Checked.png"
            alt="checked"
            width="20"
            height="16"
        /></span>
        <span class="steps__line"></span>
        <span class="steps__number">2</span>
        <span class="steps__line"></span>
        <span class="steps__number">3</span>
      </div>
      <form class="form" action="">
        <label class="form__label"
          ><p>Тип зайнятості</p>
          <input class="form__input" type="text" />
        </label>
        <label class="form__label"
          ><p>Дохід на місяць(грн)</p>
          <input class="form__input" type="number" />
        </label>
        <button class="submit" type="submit">Далі</button>
        <div>
          <input type="checkbox" id="checkbox" name="checkbox" />
          <label class="checkbox__text" for="old-card"
            >Я хороша людина
          </label>
        </div>
      </form>
    </section> -->
    <!-- <section class="auth">
      <h2 class="auth__title">Додаткова інформація</h2>
      <div class="steps">
        <span class="steps__number done"
          ><img
            src="./assets/Checked.png"
            alt="checked"
            width="20"
            height="16"
        /></span>
        <span class="steps__line"></span>
        <span class="steps__number">2</span>
        <span class="steps__line"></span>
        <span class="steps__number">3</span>
      </div>
      <form class="form" action="">
        <label class="form__label"
          ><p>Освіта</p>
          <input class="form__input" type="text" />
        </label>
        <label class="form__label"
          ><p>Сімейний стан</p>
          <input class="form__input" type="text" />
        </label>
        <label class="form__label"
          ><p>Кількість дітей до 18 років</p>
          <input class="form__input" type="text" />
        </label>
        <h2 class="auth__title">Додаткові контактні дані</h2>
        <label class="form__label"
          ><p>Кому належить</p>
          <input class="form__input" type="text" />
        </label>
        <label class="form__label"
          ><p>Номер телефона</p>
          <input class="form__input" type="number" />
        </label>
        <button class="submit" type="submit">Далі</button>
      </form>
    </section> -->
{{--    <section class="auth">--}}
{{--        <h2 class="auth__title bank">--}}
{{--            Реєстрація банківської картки для зарахування грошей--}}
{{--        </h2>--}}
{{--        <div class="steps">--}}
{{--          <span class="steps__number done"--}}
{{--          ><img--}}
{{--                  src="./assets/Checked.png"--}}
{{--                  alt="checked"--}}
{{--                  width="20"--}}
{{--                  height="16"--}}
{{--              /></span>--}}
{{--            <span class="steps__line"></span>--}}
{{--            <span class="steps__number done"--}}
{{--            ><img--}}
{{--                    src="./assets/Checked.png"--}}
{{--                    alt="checked"--}}
{{--                    width="20"--}}
{{--                    height="16"--}}
{{--                /></span>--}}
{{--            <span class="steps__line"></span>--}}
{{--            <span class="steps__number">3</span>--}}
{{--        </div>--}}
{{--        <form class="form" action="">--}}
{{--            <label class="form__label"--}}
{{--            ><p>Номер картки</p>--}}
{{--                <input class="form__input" type="number" />--}}
{{--            </label>--}}
{{--            <div class="form__bank">--}}
{{--                <label class="form__label"--}}
{{--                ><p>Термін дії</p>--}}
{{--                    <input class="form__input" type="number" />--}}
{{--                </label>--}}
{{--                <label class="form__label cvv"--}}
{{--                ><p>CVV</p>--}}
{{--                    <button type="button">--}}
{{--                        <img--}}
{{--                            src="./assets/secret.png"--}}
{{--                            alt="eye"--}}
{{--                            width="25"--}}
{{--                            height="15"--}}
{{--                        />--}}
{{--                    </button>--}}
{{--                    <input class="form__input" type="number" />--}}
{{--                </label>--}}
{{--            </div>--}}
{{--            <button class="submit" type="submit">Далі</button>--}}
{{--        </form>--}}
{{--    </section>--}}
@include('layouts.includesCredit.footer')
@endsection
