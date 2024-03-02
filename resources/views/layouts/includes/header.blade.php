<header>
    <div class="wrapper header-main">
        <a class="logo" href="{{route('index')}}">
            <img
                class="logo__image"
                src="{{asset('images/dist/Logo-white.png')}}"
                alt="logo"
                width="36"
                height="48"
            />
            <p class="logo__text">opeCredit</p>
        </a>
        <div>
            <button class="burger">
                <span class="burger__line burger__main"></span>
                <span class="burger__line"></span>
                <span class="burger__line"></span>
            </button>
        </div>
        <nav>
            <ul class="nav__list nav__list--black">
                <li><a href="{{route('invest.page')}}">Інвестувати</a></li>
                <li><a href="{{route('credit.page')}}">Кредитувати</a></li>
                <li><a href="#">Підтримка</a></li>
                <li><a href="{{route('about.page')}}">Про нас</a></li>
                <li><a href="{{route('news.page')}}">Новости</a></li>
                <li>
                    <a class="signup" href="{{route('login')}}">Увійти</a>
                </li>
            </ul>
        </nav>
    </div>
    @yield('header')
</header>
