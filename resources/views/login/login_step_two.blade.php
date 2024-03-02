@extends('layouts.app')
@section('styles')
    @include('layouts.includesCredit.header')
<section class="auth">
    <h2 class="auth__title">Особисті дані</h2>
    <div class="steps">
        <span class="steps__number">1</span>
        <span class="steps__line"></span>
        <span class="steps__number">2</span>
        <span class="steps__line"></span>
        <span class="steps__number">3</span>
    </div>
    <form class="form" method="post" action="{{route('get.name.info')}}">
        @csrf
        <label class="form__label"
        ><p>Прізвище</p>
            <input class="form__input" name="last_name" type="text" />
        </label>
        <label class="form__label"
        ><p>Ім'я</p>
            <input class="form__input" name="first_name" type="text" />
        </label>
        <label class="form__label"
        ><p>По батькові</p>
            <input class="form__input" name="name_father" type="text" />
        </label>
        <label class="form__label"
        ><p>Електронна адреса</p>
            <input class="form__input" name="email" type="text" />
        </label>
        <label class="form__label"
        ><p>Дата народження</p>
            <input
                class="form__input"
                name="birthday"
                type="date"
                placeholder="Введіть дату народження"
            />
        </label>
        <h2 class="auth__title">Паспортні дані</h2>
        <div class="radio">
            <div>
                <input type="radio" value="old-card" id="old-card" name="type_passport" checked />
                <label class="radio__text" for="old-card">Паспорт старого образца</label>
            </div>
            <div>
                <input type="radio" value="new-card" id="new-card" name="type_passport" />
                <label class="radio__text" for="new-card">ID-карточка</label>
            </div>
        </div>

        <label class="form__label" id="episode_and_number_label">
            <p>Серія паспорта</p>
            <input name="episode_and_number" class="form__input" type="text" />
        </label>
        <label class="form__label">
            <p>№ паспорта</p>
            <input name="number_passport" class="form__input" type="text" />
        </label>

        <label class="form__label"
        ><p>Індефікаційний номер</p>
            <input name="ipn" class="form__input" type="text" />
        </label>
        <button class="submit" type="submit">Далі</button>
    </form>
</section>
    @include('layouts.includesCredit.footer')
@endsection

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function(){
        // Скрыть поле "Серія паспорта" при загрузке страницы, если выбрана ID-карточка
        if($('#new-card').is(':checked')) {
            $('#episode_and_number_label').hide();
        }

        // Показать или скрыть поле при изменении радио-кнопки
        $('input[name="type_passport"]').change(function(){
            if($(this).val() === 'new-card') {
                $('#episode_and_number_label').hide();
            } else {
                $('#episode_and_number_label').show();
            }
        });
    });
</script>



