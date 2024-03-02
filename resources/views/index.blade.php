@extends('layouts.app')
@section('styles')
    @include('layouts.includes.header')
    <section class="hero">
        <div class="background" style="height: 663px"></div>
        <div class="blur"></div>
        <img
          class="hero__image"
          src="{{asset('images/dist/PlanetLine.png')}}"
          alt="hero background"
        />
        <br>
        <h1 class="hero__title">Вітаємо в HopeCredit</h1>
        <p class="hero__text">Вибиріть операцію для підтримки ваших планів</p>
        <div class="hero__buttons">
          <button class="hero__button">
            <a href="{{route('credit.page')}}">Кредитуватись</a>
          </button>
          <button class="hero__button">
            <a href="{{route('invest.page')}}">Інвестувати</a>
          </button>
        </div>
      </section>
      <section class="about">
        <div class="about__credit">
          <h3 class="about__credit-title">Кредитування</h3>
          <p class="about__credit-text">
            Кредитуватись в нашій компанії - це дуже зручно швидко та доступний
            спосіб отримати гроші на вашу карту, який дозволяє людям подати заявку на
            отримання фінансової підтримки і отримати рішення в режимі онлайн, не виходчи з дому.
          </p>
          <button class="about__credit-btn">
            <a href="./creditPage.html">Кредитуватись</a>
          </button>
        </div>
        <div class="about__invest">
          <h3 class="about__invest-title">Інвестування</h3>
          <p class="about__invest-text">
            Інвестування в нашій компанії - це зручний та доступний спосіб для інвесторів-початківців,
            який дозволяє здійснювати операції за для створення пасивного заробітку клієнти, всю відповідальність
            ми покладаєм на себе.
          </p>
          <button class="about__invest-btn">
            <a href="./investPage.html">Інвестувати</a>
          </button>
        </div>
      </section>
      <section class="question">
        <div class="question__title-block">
          <h2 class="question__title">
            Що вам може бути цікаво <br />
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
      <section class="trust">
        <h3 class="trust__title">Нам доверяют по всей Украине.</h3>
        <img
          class="trust__image"
          src="{{asset('images/dist/Ukraine.png')}}"
          alt="Ukraine"
          width="595"
          height="406"
        />
        <div class="reviews">
          <div class="reviews__block active-block">
            <div>
              <p class="block__name">Михаил Федоров</p>
              <ul class="star__list">
                <li>
                  <svg class="star__icon" width="15" height="15">
                    <use xlink:href="./assets/icons.svg#star"></use>
                  </svg>
                </li>
                <li>
                  <svg class="star__icon" width="15" height="15">
                    <use xlink:href="./assets/icons.svg#star"></use>
                  </svg>
                </li>
                <li>
                  <svg class="star__icon" width="15" height="15">
                    <use xlink:href="./assets/icons.svg#star"></use>
                  </svg>
                </li>
                <li>
                  <svg class="star__icon" width="15" height="15">
                    <use xlink:href="./assets/icons.svg#star"></use>
                  </svg>
                </li>
                <li>
                  <svg class="star__icon" width="15" height="15">
                    <use xlink:href="./assets/icons.svg#star"></use>
                  </svg>
                </li>
              </ul>
            </div>
            <p class="block__date">03.12.2023</p>
            <p class="block__text">
              Надёжный и удобный банк с широким спектром услуг. Готов доверить
              им кота. Это говорит о многом.
            </p>
          </div>
          <div class="reviews__block pre-block">
            <div>
              <p class="block__name">Михаил Федоров</p>
              <ul class="star__list">
                <li>
                  <svg class="star__icon" width="15" height="15">
                    <use xlink:href="./assets/icons.svg#star"></use>
                  </svg>
                </li>
                <li>
                  <svg class="star__icon" width="15" height="15">
                    <use xlink:href="./assets/icons.svg#star"></use>
                  </svg>
                </li>
                <li>
                  <svg class="star__icon" width="15" height="15">
                    <use xlink:href="./assets/icons.svg#star"></use>
                  </svg>
                </li>
                <li>
                  <svg class="star__icon" width="15" height="15">
                    <use xlink:href="./assets/icons.svg#star"></use>
                  </svg>
                </li>
                <li>
                  <svg class="star__icon" width="15" height="15">
                    <use xlink:href="./assets/icons.svg#star"></use>
                  </svg>
                </li>
              </ul>
            </div>
            <p class="block__date">03.12.2023</p>
            <p class="block__text">
              Надёжный и удобный банк с широким спектром услуг. Готов доверить
              им кота. Это говорит о многом.
            </p>
          </div>
          <div class="reviews__block after-block">
            <div>
              <p class="block__name">Михаил Федоров</p>

              <ul class="star__list">
                <li>
                  <svg class="star__icon" width="15" height="15">
                    <use xlink:href="./assets/icons.svg#star"></use>
                  </svg>
                </li>
                <li>
                  <svg class="star__icon" width="15" height="15">
                    <use xlink:href="./assets/icons.svg#star"></use>
                  </svg>
                </li>
                <li>
                  <svg class="star__icon" width="15" height="15">
                    <use xlink:href="./assets/icons.svg#star"></use>
                  </svg>
                </li>
                <li>
                  <svg class="star__icon" width="15" height="15">
                    <use xlink:href="./assets/icons.svg#star"></use>
                  </svg>
                </li>
                <li>
                  <svg class="star__icon" width="15" height="15">
                    <use xlink:href="./assets/icons.svg#star"></use>
                  </svg>
                </li>
              </ul>
            </div>
            <p class="block__date">03.12.2023</p>
            <p class="block__text">
              Надёжный и удобный банк с широким спектром услуг. Готов доверить
              им кота. Это говорит о многом.
            </p>
          </div>
          <div class="reviews__pagination">
            <div class="arrows">
              <button class="arrow__btn">
                <img src="./assets/arrow-left.png" alt="arrow-left" />
              </button>
              <button class="arrow__btn">
                <img src="./assets/arrow-right.png" alt="arrow-right" />
              </button>
            </div>
            <div>
              <button type="button" class="point"></button>
              <button type="button" class="point"></button>
              <button type="button" class="point"></button>
              <button type="button" class="point"></button>
              <button type="button" class="point"></button>
              <button type="button" class="point"></button>
              <button type="button" class="point active-point"></button>
              <button type="button" class="point"></button>
            </div>
          </div>
        </div>
      </section>
      <section class="advantages">
        <h2 class="advantages__title">Наши преимущества</h2>
        <div class="advantages__container">
          <p class="advantages__text">
            HopeGroup - это современная финансовая компания, которая предлагает
            широкий спектр продуктов и услуг для частных лиц и бизнеса. Мы
            стремимся предоставлять нашим клиентам лучшие финансовые решения,
            которые помогут им достичь своих финансовых целей.
          </p>
          <ul class="advantages__list">
            <li>
              <img
                src="{{asset('images/dist/icon1.png')}}"
                alt="item__icon"
                width="50"
                height="50"
              />
              <div class="item__block">
                <p class="item__name">Надежность</p>
                <p class="item__text">
                  Компания имеет многолетний опыт работы на финансовом рынке и
                  является одним из лидеров в своей отрасли.
                </p>
              </div>
            </li>
            <li>
              <img
                src="{{asset('images/dist/icon2.png')}}"
                alt="item__icon"
                width="50"
                height="50"
              />
              <div class="item__block">
                <p class="item__name">Надежность</p>
                <p class="item__text">
                  Компания имеет многолетний опыт работы на финансовом рынке и
                  является одним из лидеров в своей отрасли.
                </p>
              </div>
            </li>
            <li>
              <img
                src="{{asset('images/dist/icon3.png')}}"
                alt="item__icon"
                width="50"
                height="50"
              />
              <div class="item__block">
                <p class="item__name">Надежность</p>
                <p class="item__text">
                  Компания имеет многолетний опыт работы на финансовом рынке и
                  является одним из лидеров в своей отрасли.
                </p>
              </div>
            </li>
            <li>
              <img
                src="{{asset('images/dist/icon4.png')}}"
                alt="item__icon"
                width="50"
                height="50"
              />
              <div class="item__block">
                <p class="item__name">Надежность</p>
                <p class="item__text">
                  Компания имеет многолетний опыт работы на финансовом рынке и
                  является одним из лидеров в своей отрасли.
                </p>
              </div>
            </li>
          </ul>
        </div>
        <button class="advantages__btn">Наши услуги</button>
      </section>
    @include('layouts.includes.footer')
@endsection
