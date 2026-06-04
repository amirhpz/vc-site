<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() === 'fa' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <title>@yield('title', 'توسعه دانش بنیان سینا')</title>
    @yield('meta')

    <link rel="stylesheet" href="{{asset('site/assets/css/swiper-bundle.min.css')}}"/>
    <link rel="stylesheet" href="{{ asset('site/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{asset('site/assets/css/all.min.css')}}"/>
</head>
<body class="{{ session('theme', config('theme.default')) }}">
<div class="bg-effect"></div>
<!-- Header -->
<header class="navbar">

    <div class="site-tools">

        <div class="site-tool-group language-tool">
            <a href="{{ route('language.switch', 'fa') }}" class="site-tool-btn {{ app()->getLocale() === 'fa' ? 'active' : '' }}" title="فارسی" aria-label="فارسی">
{{--                <span class="tool-flag">🇮🇷</span>--}}
                <span class="tool-label">FA</span>
            </a>
            <a href="{{ route('language.switch', 'en') }}" class="site-tool-btn {{ app()->getLocale() === 'en' ? 'active' : '' }}" title="English" aria-label="English">
{{--                <span class="tool-flag">🇬🇧</span>--}}
                <span class="tool-label">EN</span>
            </a>
        </div>

        <div class="site-tool-group theme-tool">
            <a
                href="{{ route('theme.switch', 'light') }}"
                class="theme-tool-btn {{ session('theme', config('theme.default', 'light')) === 'light' ? 'active' : '' }}"
                title="Light mode"
                aria-label="Light mode"
            >
                <i class="fa-solid fa-sun"></i>
            </a>

            <a
                href="{{ route('theme.switch', 'dark') }}"
                class="theme-tool-btn {{ session('theme', config('theme.default', 'light')) === 'dark' ? 'active' : '' }}"
                title="Dark mode"
                aria-label="Dark mode"
            >
                <i class="fa-solid fa-moon"></i>
            </a>
        </div>
    </div>

    <div class="nav-menu">

        <div class="mobile-toggle">
            <i class="fa-solid fa-bars"></i>
        </div>

        <div class="nav-right nav-links">
            <a href="{{ route('/') }}">خانه</a>
            <a href="{{ route('about') }}">درباره ما</a>
            <a href="{{ route('events') }}">رویدادها</a>
        </div>

        <div class="logo">
            <a href="{{ route('/') }}">
                <img src="{{ asset('site/assets/images/logo.png') }}" alt="توسعه دانش بنیان سینا">
            </a>
        </div>

        <div class="nav-left nav-links">
            <a href="{{ route('portfolio') }}">پورتفو</a>
            <a href="{{ route('news') }}">اخبار</a>
            <a href="{{ route('contact') }}">تماس با ما</a>
        </div>

    </div>

</header>
<!-- Main Content -->
@yield('content')

<!-- Footer -->
<footer class="footer">

    <div class="footer-glow"></div>

    <div class="footer-grid">

        <div class="footer-column">

            <h3> خدمات ارزش‌آفرینی </h3>

            <a href="{{ route('/') }}">برگزاری کارگاه و رویداد و نمایشگاه</a>
            <a href="{{ route('events') }}">مشاوره های تخصصی، آموزش و منتورینگ</a>
            <a href="{{ route('portfolio') }}">توسعه بازار و اتصال به صنایع</a>
            <a href="{{ route('news') }}">تسهیلات و اعتبارات، پوشش ریسک دانش بنیان ها</a>
        </div>

        <div class="footer-column middle">

            <img src="{{asset('site/assets/images/logo.png')}}" alt="">

            <p style="text-align: justify">
                شرکت توسعه دانش بنیان سینا به عنوان بازوی سرمایه گذاری خطر پذیر بنیاد مستضعفان انقلاب اسلامی در قالب هلدینگ تحقیق و توسعه دانشمند به ارائه خدمات در حوزه رفع نیازها و چالشهای فناورانه شرکتهای تابعه بنیاد مستضعفان، رفع مسائل حوزه محرومیت زدایی بهروش مبتکرانه وهمچنین حل نیازهای راهبردی ملی می پردازد.
            </p>

            <img src="{{ asset('site/images/logos.png') }}" alt="توسعه دانش بنیان سینا">

        </div>

        <div class="footer-column">

            <h3>ارتباط با ما</h3>

            <p>آدرس: بزرگراه رسالت غرب، ابتدای خروجی آفریقا، مجتمع مرکزی بنیاد مستضعفان، ساختمان شماره 1، طبقه پانزدهم</p>
            <p>تلفن تماس  : 02188670701</p>
            <p>info@sina.vc</p>

            <div class="socials">

                <a href="#">
                    <i class="fab fa-instagram"></i>
                </a>

                <a href="#">
                    <i class="fab fa-linkedin-in"></i>
                </a>

            </div>

        </div>

    </div>

    <div class="copyright">
        © 2025 Sinavc VC — All Rights Reserved
    </div>

</footer>

<script src={{ asset('site/assets/js/swiper-bundle.min.js') }}></script>

<script src={{asset("site/assets/js/main.js")}}></script>

</body>
</html>
