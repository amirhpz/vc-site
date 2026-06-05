@extends('layouts.base')

@section('title', 'صندوق سرمایه‌گذاری خطرپذیر شرکتی - توسعه دانش بنیان سینا')

@section('content')

<section class="page-hero">
    <div class="page-hero-content">
        <span>ABOUT US</span>
        <h1>درباره ما</h1>
        <p style="text-align: justify">
            شرکت توسعه دانش بنیان سینا به عنوان بازوی سرمایه گذاری خطر پذیر بنیاد مستضعفان انقلاب اسلامی در قالب هلدینگ تحقیق و توسعه دانشمند به ارائه خدمات در حوزه رفع نیازها و چالشهای فناورانه شرکتهای تابعه بنیاد مستضعفان، رفع مسائل حوزه محرومیت زدایی به روش مبتکرانه وهمچنین حل نیازهای راهبردی ملی می پردازد.
        </p>
    </div>
</section>

<section class="about-section">

    <div class="section-header">
        <span>Who We Are</span>
        <h2>معرفی صندوق</h2>
    </div>

    <div class="about-grid">

        <div class="about-card">
            <h3>ماموریت</h3>
            <p>
                ماموریت ما در توسعه دانش بنیان سینا کمک به ایجاد و رشد کسب و کارهای پایدار و قابل رقابت در بازارهای داخلی و خارجی است که به نحوی که با در اختیار قرار دادن سرمایه مورد نیاز، تیم کارشناسی خبره، منتورینگ تخصصی، ارتباط اثربخش با شبکه ای از سرمایه گذاران، افراد و نهادهای تاثیرگذار در حوزه فعالیت سرمایه پذیر در سطح حل مسائل مناطق محروم، بهبود زنجیره ارزش بنیاد مستضعفان و کمک به تقویت راهبردهای کلان ملی بپردازیم.
            </p>
        </div>

        <div class="about-card">
            <h3>چشم‌انداز</h3>
            <p>
                تبدیل شدن به یکی از بازیگران اصلی اکوسیستم سرمایه‌گذاری
                خطرپذیر کشور.
            </p>
        </div>

        <div class="about-card">
            <h3>ارزش‌ها</h3>
            <p>
                شفافیت، نوآوری، مسئولیت‌پذیری و توسعه پایدار.
            </p>
        </div>

    </div>

</section>

<section class="team-section py-5">
    <div class="section-header">
        <span>Who We Are</span>
        <h2>معرفی تیم مدیریت</h2>
    </div>

        <div class="management-grid">

            <div class="team-card featured-card">
                <div class="team-image-box">
                    <img src="{{ asset('site/images/team/ceo.png') }}" alt="مدیرعامل" class="team-image">
                </div>
                <div class="team-card-body">
                    <span class="team-badge">CEO</span>
                    <h3 class="team-name">دکتر مسعود کفایتمند</h3>
                    <p class="team-position">مدیرعامل</p>
                </div>
            </div>

            <div class="team-card featured-card">
                <div class="team-image-box">
                    <img src="{{ asset('site/images/team/investment-manager.png') }}" alt="مدیر برنامه ریزی و سرمایه گذاری" class="team-image">
                </div>
                <div class="team-card-body">
                    <span class="team-badge">CIO</span>
                    <h3 class="team-name">سید طاها میرمحمدی</h3>
                    <p class="team-position">مدیر برنامه ریزی و سرمایه گذاری</p>
                </div>
            </div>

            <div class="team-card featured-card">
                <div class="team-image-box">
                    <img src="{{ asset('site/images/team/it-manager.png') }}" alt="مدیر اداری ، پشتیبانی و فناوری" class="team-image">
                </div>
                <div class="team-card-body">
                    <span class="team-badge">COO</span>
                    <h3 class="team-name">محمد حسین دیوان بیگی</h3>
                    <p class="team-position">مدیر اداری ، پشتیبانی و فناوری</p>
                </div>
            </div>

            <div class="team-card featured-card">
                <div class="team-image-box">
                    <img src="{{ asset('site/images/team/company-manager.png') }}" alt="مدیر امور مجامع و شرکت ها" class="team-image">
                </div>
                <div class="team-card-body">
                    <span class="team-badge">CS</span>
                    <h3 class="team-name">نوید باقری نیا</h3>
                    <p class="team-position">مدیر امور مجامع و شرکت ها</p>
                </div>
            </div>

            <div class="team-card featured-card">
                <div class="team-image-box">
                    <img src="{{ asset('site/images/team/finance-manager.png') }}" alt="مدیر مالی و حسابداری" class="team-image">
                </div>
                <div class="team-card-body">
                    <span class="team-badge">CFO</span>
                    <h3 class="team-name">آتنا باشوکی</h3>
                    <p class="team-position">مدیر مالی و حسابداری</p>
                </div>
            </div>

        </div>
</section>


@endsection
