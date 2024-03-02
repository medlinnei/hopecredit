@extends('layouts.app')
@section('styles')
    @include('layouts.includesCredit.header')
<section class="pay">
        <h2 class="pay__title">Як сплатити кредит в <span>HopeGroup?</span></h2>
        <button class="pay__btn">Сплатити без авторизації</button>
        <div class="pay__container">
            <ul class="pay__list">
                <li>
                    <div class="pay__list-block pay--active">
                        <h3 class="pay__list-title pay--active">
                            Через особистий кабінет
                        </h3>
                        <button class="pay__list-btn">
                            <svg
                                class="pay__icon pay__icon-active"
                                width="45px"
                                height="45px"
                            >
                                <use xlink:href="../../assets/icons.svg#line"></use>
                            </svg>
                        </button>
                    </div>
                </li>
                <li>
                    <div class="pay__list-block">
                        <h3 class="pay__list-title">Банківський переказ</h3>
                        <button class="pay__list-btn">
                            <svg class="pay__icon" width="45px" height="45px">
                                <use xlink:href="../../assets/icons.svg#line"></use>
                            </svg>
                        </button>
                    </div>
                </li>
                <li>
                    <div class="pay__list-block">
                        <h3 class="pay__list-title">За реквізитами</h3>
                        <button class="pay__list-btn">
                            <svg class="pay__icon" width="45px" height="45px">
                                <use xlink:href="../../assets/icons.svg#line"></use>
                            </svg>
                        </button>
                    </div>
                </li>
            </ul>
            <div class="text__container">
                <h3 class="pay__text-title">
                    Оплата банківською картою в особистому кабінеті
                </h3>
                <p class="pay__list-text">
                    Внести кошти для погашення кредиту можна на головній сторінці
                    Сайту, через особистий кабінет на Сайті, Приват24, мережу
                    платіжних терміналів Приват банку, Easy Pay, City24, 2Click та
                    банківським переказом в будь-якому банку України.
                </p>
                <p class="pay__list-text">
                    Важливо! Будь ласка, зверніть увагу на те, що банківський переказ
                    може надходити протягом 3-х робочих днів. За період надходження
                    платежу, на жаль, нарахування процентів не зупиняється.
                </p>
            </div>
        </div>
    </section>
    @include('layouts.includesCredit.footer')
    @endsection
