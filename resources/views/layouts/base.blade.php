<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() === 'fa' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <title>@yield('title', app()->getLocale() === 'fa' ? 'توسعه دانش بنیان سینا' : 'Sina Knowledge-Based Development')</title>
    @yield('meta')

    <link rel="icon" type="image/x-icon" href="{{ asset('site/assets/images/icon.png') }}"/>

    <link rel="stylesheet" href="{{ asset('site/assets/css/swiper-bundle.min.css') }}"/>


    <link rel="stylesheet" href="{{ asset('site/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('site/assets/css/all.min.css') }}"/>
</head>

<body class="{{ session('theme', config('theme.default', 'light')) }}">

@php
    $locale = app()->getLocale();

    $layoutText = [
        'fa' => [
            'home' => 'خانه',
            'about' => 'درباره ما',
            'events' => 'رویدادها',
            'portfolio' => 'پورتفو',
            'news' => 'اخبار',
            'contact' => 'تماس با ما',

            'logo_alt' => 'توسعه دانش بنیان سینا',

            'value_services_title' => 'خدمات ارزش‌آفرینی',
            'service_1' => 'توسعه بازار و اتصال به صنایع' ,
            'service_2' => 'برگزاری کارگاه و رویداد و نمایشگاه' ,
            'service_3' => 'مشاوره‌های تخصصی، آموزش و منتورینگ',
            'service_4' => 'تسهیلات و اعتبارات، پوشش ریسک دانش‌بنیان‌ها',

            'footer_description' => 'شرکت توسعه دانش‌بنیان سینا به عنوان بازوی سرمایه‌گذاری خطرپذیر بنیاد مستضعفان انقلاب اسلامی در قالب هلدینگ تحقیق و توسعه دانشمند به ارائه خدمات در حوزه رفع نیازها و چالش‌های فناورانه شرکت‌های تابعه بنیاد مستضعفان، رفع مسائل حوزه محرومیت‌زدایی به روش مبتکرانه و همچنین حل نیازهای راهبردی ملی می‌پردازد.',

            'footer_contact' => 'ارتباط با ما',
            'address_label' => 'آدرس',
            'address' => 'بزرگراه شهید سلیمانی، ابتدای خیابان نلسون ماندلا، ساختمان مرکزی بنیاد مستضعفان، طبقه پانزدهم',
            'phone_label' => 'تلفن تماس',
            'phone' => '02188670701',
            'postal_code_label' => 'کد پستی',
            'postal_code' => '1519613525',
            'email_label' => 'ایمیل',
            'email' => 'info@sina.vc',

            'copyright' => '© طراحی و پشتیبانی توسط واحد فناوری اطلاعات شرکت توسعه دانش بنیان سینا',
        ],

        'en' => [
            'home' => 'Home',
            'about' => 'About Us',
            'events' => 'Events',
            'portfolio' => 'Portfolio',
            'news' => 'News',
            'contact' => 'Contact Us',

            'logo_alt' => 'Sina Knowledge-Based Development',

            'value_services_title' => 'Value Creation Services',
            'service_1' => 'Workshops, Events and Exhibitions',
            'service_2' => 'Specialized Consulting, Training and Mentoring',
            'service_3' => 'Market Development and Industry Connection',
            'service_4' => 'Facilities, Credits and Risk Coverage for Knowledge-Based Companies',

            'footer_description' => 'Sina Knowledge-Based Development acts as the venture capital arm of the Mostazafan Foundation of Islamic Revolution within the Daneshmand Research and Development Holding. The company provides services focused on addressing technological needs and challenges of affiliated companies, solving deprivation-related issues through innovative approaches, and responding to national strategic needs.',

            'footer_contact' => 'Contact Us',
            'address_label' => 'Address',
            'address' => 'Shahid Soleimani Highway, beginning of Nelson Mandela Street, Mostazafan Foundation Central Building, 15th Floor, Tehran, Iran',
            'phone_label' => 'Phone',
            'phone' => '02188670701',
            'postal_code_label' => 'Postal Code',
            'postal_code' => '1010101010',
            'email_label' => 'Email',
            'email' => 'info@sina.vc',

            'copyright' => '© Designed and supported by the Information Technology Unit of Sina Knowledge-Based Development',
        ],
    ];

    $t = $layoutText[$locale] ?? $layoutText['fa'];
@endphp

<div class="bg-effect"></div>

<header class="navbar">

    <div class="site-tools">

        <div class="site-tool-group language-tool">
            <a
                href="{{ route('language.switch', 'fa') }}"
                class="site-tool-btn {{ $locale === 'fa' ? 'active' : '' }}"
                title="فارسی"
                aria-label="فارسی"
            >
                <img src="{{ asset('site/assets/images/flags/fa.svg') }}" alt="FA" class="tool-flag-img">
                <span class="tool-label">FA</span>
            </a>

            <a
                href="{{ route('language.switch', 'en') }}"
                class="site-tool-btn {{ $locale === 'en' ? 'active' : '' }}"
                title="English"
                aria-label="English"
            >
                <img src="{{ asset('site/assets/images/flags/en.svg') }}" alt="EN" class="tool-flag-img">
                <span class="tool-label">EN</span>
            </a>
        </div>

        <div class="site-tool-group theme-tool">
            <a
                href="{{ route('theme.switch', ['theme' => 'light', 'redirect' => url()->full()]) }}"
                class="theme-tool-btn {{ session('theme', config('theme.default', 'light')) === 'light' ? 'active' : '' }}"
                title="Light mode"
                aria-label="Light mode"
            >
                <i class="fa-solid fa-sun"></i>
            </a>

            <a
                href="{{ route('theme.switch', ['theme' => 'dark', 'redirect' => url()->full()]) }}"
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
            <a href="{{ route('/') }}">{{ $t['home'] }}</a>
            <a href="{{ route('about') }}">{{ $t['about'] }}</a>
            <a href="{{ route('events') }}">{{ $t['events'] }}</a>
        </div>

        <div class="logo">
            <a href="{{ route('/') }}">
                <img src="{{ asset('site/assets/images/logo.png') }}" alt="{{ $t['logo_alt'] }}">
            </a>
        </div>

        <div class="nav-left nav-links">
            <a href="{{ route('portfolio') }}">{{ $t['portfolio'] }}</a>
            <a href="{{ route('news') }}">{{ $t['news'] }}</a>
            <a href="{{ route('contact') }}">{{ $t['contact'] }}</a>
        </div>

    </div>

</header>

@yield('content')

<footer class="footer">

    <div class="footer-glow"></div>

    <div class="footer-grid">

        <div class="footer-column">
            <h3>{{ $t['value_services_title'] }}</h3>

            <a href="{{ route('events') }}">{{ $t['service_1'] }}</a>
            <a href="{{ route('contact') }}">{{ $t['service_2'] }}</a>
            <a href="{{ route('portfolio') }}">{{ $t['service_3'] }}</a>
            <a href="{{ route('news') }}">{{ $t['service_4'] }}</a>
        </div>

        <div class="footer-column middle">
            <img src="{{ asset('site/assets/images/logo.png') }}" alt="{{ $t['logo_alt'] }}">

            <p style="text-align: justify">
                {{ $t['footer_description'] }}
            </p>

            <img src="{{ asset('site/images/logos.png') }}" alt="{{ $t['logo_alt'] }}">
        </div>

        <div class="footer-column">
            <h3>{{ $t['footer_contact'] }}</h3>

            <p>
                {{ $t['address_label'] }}:
                {{ $t['address'] }}
            </p>

            <p>
                {{ $t['phone_label'] }}:
                {{ $t['phone'] }}
            </p>

            <p>
                {{ $t['postal_code_label'] }}:
                {{ $t['postal_code'] }}
            </p>

            <p>
                {{ $t['email_label'] }}:
                {{ $t['email'] }}
            </p>

            <div class="socials">
                <a href="#" aria-label="AFTA">
                    <img src="{{ asset('site/assets/images/certification/afta.svg') }}" alt="AFTA">
                </a>

                <a href="#" aria-label="Knowledge-Based Certification">
                    <img src="{{ asset('site/assets/images/certification/daneshbonyan.svg') }}"
                         alt="Knowledge-Based Certification">
                </a>

                <a href="#" aria-label="Union">
                    <img src="{{ asset('site/assets/images/certification/etehadie.svg') }}" alt="Union">
                </a>

                <a href="#" aria-label="Trust Symbol">
                    <img src="{{ asset('site/assets/images/certification/namad.svg') }}" alt="Trust Symbol">
                </a>

                <a href="#" aria-label="Nasr">
                    <img src="{{ asset('site/assets/images/certification/nasr.svg') }}" alt="Nasr">
                </a>

                <a href="#" aria-label="Registration">
                    <img src="{{ asset('site/assets/images/certification/sabt.svg') }}" alt="Registration">
                </a>
            </div>
        </div>

    </div>

    <div class="copyright">
        {{ $t['copyright'] }}
    </div>

</footer>

<script src="{{ asset('site/assets/js/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('site/assets/js/main.js') }}"></script>

</body>
</html>
