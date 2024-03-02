@extends('layouts.app')
@section('styles')
    @include('layouts.includesCredit.header')
    <section class="docs">
        <h2 class="docs__title">Документи</h2>
        <div>
            <ul class="docs__list">
                <li><a href="/" class="docs__link">Умови та правила</a></li>
                <li>
                    <a href="/" class="docs__link">Тарифи до Умов та правил</a>
                </li>
                <li>
                    <a href="/" class="docs__link"
                    >Тарифи за послугами з прийому платежів</a
                    >
                </li>
                <li>
                    <a href="/" class="docs__link">Анкети-заяви + запевнення</a>
                </li>
                <li>
                    <a href="/" class="docs__link"
                    >Звітність та показники діяльності</a
                    >
                </li>
                <li><a href="/" class="docs__link">Ліцензія</a></li>
            </ul>
        </div>
        <button class="docs__btn">Архів документів</button>
    </section>
    @include('layouts.includesCredit.footer')
@endsection
