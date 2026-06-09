@extends('layouts.base')

@section('title', 'صندوق سرمایه‌گذاری خطرپذیر شرکتی - توسعه دانش بنیان سینا')

@section('meta')
    <meta name="description" content="{{ $seoDescription ?? 'شرکت سرمایه‌گذاری توسعه دانش بنیان سینا،شرکت سرمایه‌گذاری، خطرپذیر فعال در سرمایه‌گذاری استارتاپ‌ها، فناوری‌های نوآورانه و کسب‌وکارهای دانش ‌بنیان' }}">

    <meta name="keywords" content="{{ $seoKeywords ?? 'Venture Capital, VC, Startup, Investment, Innovation, Technology, Venture Capital Firm, توسعه دانش بنیان سینا، سرمایه گذاری خطرپذیر, سرمایه گذاری استارتاپی' }}">

    <meta name="author" content="{{ config('app.name') }}">

    <meta name="robots" content="index,follow,max-image-preview:large,max-snippet:-1,max-video-preview:-1">

    <link rel="canonical" href="{{ url()->current() }}">

    <meta name="theme-color" content="#14d8c4">

    <meta name="application-name" content="{{ config('app.name') }}">

    <meta property="og:type" content="website">

    <meta property="og:site_name" content="{{ config('app.name') }}">

    <meta property="og:title" content="{{ $seoTitle ?? config('app.name') }}">

    <meta property="og:description" content="{{ $seoDescription ?? '' }}">

    <meta property="og:url" content="{{ url()->current() }}">

    <meta property="og:locale" content="{{ app()->getLocale() == 'fa' ? 'fa_IR' : 'en_US' }}">

    <meta property="og:image" content="{{ isset($seoImage) ? asset($seoImage) : asset('site/assets/images/icon.png') }}">

    <meta property="og:image:width" content="1200">

    <meta property="og:image:height" content="630">

    <meta property="og:image:type" content="image/jpeg">

    <meta name="twitter:card" content="summary_large_image">

    <meta name="twitter:title" content="{{ $seoTitle ?? config('app.name') }}">

    <meta name="twitter:description" content="{{ $seoDescription ?? 'شرکت سرمایه‌گذاری توسعه دانش بنیان سینا،شرکت سرمایه‌گذاری، خطرپذیر فعال در سرمایه‌گذاری استارتاپ‌ها، فناوری‌های نوآورانه و کسب‌وکارهای دانش ‌بنیان' }}">

    <meta name="twitter:image" content="{{ isset($seoImage) ? asset($seoImage) : asset('site/assets/images/icon.png') }}">

    <meta name="twitter:url" content="{{ url()->current() }}">
@endsection
@section('content')

    <section class="hero">
        <div class="hero-layout">
            <div class="hero-slider-wrapper">
                <div class="swiper heroSwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide hero-slide" style="background-image:url('{{ asset('site/slider/1.png') }}');">
                            <div class="hero-overlay"></div>
                            <div class="hero-content">
                                <span>VENTURE CAPITAL</span>
                                <h1>توسعه فناوری در 7 کلان محور بنیاد مستضعفان</h1>
                                <p>حمایت از استارتاپ‌ها و طرح‌های دانش ‌بنیان در مسیر رشد و توسعه صنایع زنجیره ارزش بنیاد مستضعفان</p>
                            </div>
                        </div>

                        <div class="swiper-slide hero-slide" style="background-image:url('{{ asset('site/slider/2.png') }}');">
                            <div class="hero-overlay"></div>
                            <div class="hero-content">
                                <span>SMART INVESTMENT</span>
                                <h1>سرعت و دقت سرمایه گذاری ها در 7 مرحله</h1>
                                <p>همراه رشد استارتاپ‌های جوان و فناوری‌های آینده‌محور</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="sectors">
        <div class="section-header">
            <span>Investment Sectors</span>
            <h2> محورهای سرمایه‌گذاری</h2>
        </div>

        <div class="sector-grid">
            <div class="sector-card">
                <i class="fa-solid fa-industry"></i>
                <h3>صنایع معدنی</h3>
            </div>

            <div class="sector-card">
                <i class="fa-solid fa-truck-fast"></i>
                <h3> حمل و نقل ترکیبی </h3>
            </div>

            <div class="sector-card">
                <i class="fa-solid fa-seedling"></i>
                <h3> امنیت غذایی </h3>
            </div>

            <div class="sector-card">
                <i class="fa-solid fa-building"></i>
                <h3> صنعت ساختمان </h3>
            </div>

            <div class="sector-card">
                <i class="fa-solid fa-oil-well"></i>
                <h3>نفت و گاز</h3>
            </div>

            <div class="sector-card">
                <i class="fa-solid fa-chart-line"></i>
                <h3> اقتصاد دیجیتال </h3>
            </div>

            <div class="sector-card">
                <i class="fa-solid fa-brain"></i>
                <h3>هوش مصنوعی</h3>
            </div>
        </div>
    </section>

    <section class="investment-status">
        <div class="section-header">
            <span>Investment Status</span>
            <h2>وضعیت سرمایه‌گذاری‌ها</h2>
        </div>

        <div class="stats-grid">
            <div class="stat-box">
                <div class="stat-glow"></div>

                <div class="stat-number">
                    <span class="counter" data-target="10">0</span>
                    <small>+</small>
                </div>

                <h3>شرکت‌های فعال</h3>
            </div>

            <div class="stat-box">
                <div class="stat-glow"></div>

                <div class="stat-number">
                    <span class="counter" data-target="3">0</span>
                </div>

                <h3>در حال مذاکره</h3>
            </div>

            <div class="stat-box">
                <div class="stat-glow"></div>

                <div class="stat-number">
                    <span class="counter" data-target="31">0</span>
                    <small>+</small>
                </div>

                <h3>سرمایه‌گذاری‌ها</h3>
            </div>

            <div class="stat-box large">
                <div class="stat-glow"></div>

                <div class="stat-number">
                    <span class="counter" data-target="680">0</span>
                    <small>+</small>
                </div>

                <h3>طرح‌های بررسی شده</h3>
            </div>
        </div>
    </section>

    <section class="process">
        <div class="section-header">
            <span>Investment Process</span>
            <h2>فرآیند پذیرش طرح</h2>
        </div>

        <div class="process-wrapper">
            <svg class="process-line" viewBox="0 0 1600 300" preserveAspectRatio="none">
                <path
                    d="M 50 180 C 180 40, 320 40, 450 180 S 720 320, 850 180 S 1120 40, 1250 180 S 1450 320, 1550 180"/>
            </svg>

            <div class="process-item item1">
                <div class="process-circle">1</div>
                <h3>ثبت طرح</h3>
            </div>

            <div class="process-item item2">
                <div class="process-circle">2</div>
                <h3>غربالگری</h3>
            </div>

            <div class="process-item item3">
                <div class="process-circle">3</div>
                <h3>ارزیابی اولیه</h3>
            </div>

            <div class="process-item item4">
                <div class="process-circle">4</div>
                <h3>ارزیابی موشکافانه</h3>
            </div>

            <div class="process-item item5">
                <div class="process-circle">5</div>
                <h3>ارزشگذاری</h3>
            </div>

            <div class="process-item item6">
                <div class="process-circle">6</div>
                <h3>انعقاد قرارداد</h3>
            </div>
        </div>
    </section>

    <section class="portfolio">
        <div class="section-header">
            <span>Portfolio Companies</span>
            <h2>سبد سرمایه گذاری</h2>
        </div>

        @if($projects->count())
            <div class="swiper portfolioSwiper">
                <div class="swiper-wrapper">

                    @foreach($projects as $project)
                        <div class="swiper-slide">

                            <div class="portfolio-card">
                                <div class="portfolio-logo">
                                    @if(!empty($project->cover))
                                        <div class="brand-image-box">
                                            @if(!empty($project->cover))
                                            <img src="{{ asset($project->cover) }}" alt="{{ $project->title }}">
                                            @endif
                                        </div>
                                    @else
                                        <div class="brand-placeholder">
                                            <div class="brand-placeholder-inner">
                                                <i class="fa-solid fa-rocket"></i>
                                            </div>
                                        </div>
                                    @endif
                                </div>

                                <div class="portfolio-content">
                                    <h3>{{ $project->title }}</h3>

                                    <p>
                                        {{ Str::limit(strip_tags($project->description ?? ''), 120) }}
                                    </p>
                                </div>
                            </div>

                        </div>
                    @endforeach

                </div>
            </div>
        @else
            <div class="empty-card">
                <i class="fa-solid fa-rocket"></i>
                <h3>هنوز شرکتی ثبت نشده است</h3>
                <p>
                    اطلاعات شرکت‌های سرمایه‌پذیر به‌زودی در این بخش نمایش داده می‌شود.
                </p>
            </div>
        @endif
    </section>

    <section class="news">
        <div class="section-header">
            <span>News & Events</span>
            <h2>اخبار و رویدادها</h2>
        </div>

        @if($posts->count())
            <div class="swiper newsSwiper">
                <div class="swiper-wrapper">

                    @foreach($posts as $post)
                        <div class="swiper-slide">

                            <div class="news-card">

                                <div class="news-image">
                                    @if(!empty($post->cover))
                                        <img src="{{ asset($post->cover) }}" alt="{{ $post->title }}" class="card-cover-image">
                                    @endif
                                </div>

                                <div class="news-content">
                                <span>
                                    {{ $post->created_at ? \Morilog\Jalali\Jalalian::fromCarbon($post->created_at)->format('Y/m/d') : '' }}
                                </span>

                                    <h3>{{ $post->title }}</h3>

                                    <p>
                                        {{ Str::limit(strip_tags($post->description ?? ''), 120) }}
                                    </p>
                                </div>

                            </div>

                        </div>
                    @endforeach

                </div>
            </div>
        @else
            <div class="empty-card">
                <i class="fa-regular fa-newspaper"></i>
                <h3>هنوز خبری ثبت نشده است</h3>
                <p>
                    اخبار و رویدادهای جدید به‌زودی در این بخش نمایش داده می‌شود.
                </p>
            </div>
        @endif
    </section>

    <section class="partners">
        <div class="section-header">
            <span>Key Partners</span>
            <h2>شرکای کلیدی ما</h2>
        </div>

        @if($companies->count())
            <div class="swiper partnersSwiper">
                <div class="swiper-wrapper">

                    @foreach($companies as $company)
                        <div class="swiper-slide">

                            <div class="partner-card">

                                <div class="partner-logo">
                                    @php
                                        $companyCoverExists = !empty($company->cover) && file_exists(public_path($company->cover));
                                    @endphp

                                    @if($companyCoverExists)
                                        <div class="brand-image-box">
                                            @if(!empty($company->cover))
                                                <img src="{{ asset($company->cover) }}" alt="{{ $company->title }}">
                                            @endif
                                        </div>
                                    @else
                                        <div class="partner-placeholder">
                                            <div class="partner-placeholder-icon">
                                                <i class="fa-solid fa-building"></i>
                                            </div>
                                        </div>
                                    @endif
                                </div>

                                <h3>{{ $company->title }}</h3>

                            </div>

                        </div>
                    @endforeach

                </div>
            </div>
        @else
            <div class="empty-card">
                <i class="fa-solid fa-handshake"></i>
                <h3>هنوز شریکی ثبت نشده است</h3>
                <p>
                    اطلاعات شرکای کلیدی به‌زودی در این بخش نمایش داده می‌شود.
                </p>
            </div>
        @endif
    </section>

    <section class="cta">
        <div class="cta-box">
            <div>
                <span>Start Your Journey</span>
                <h2>ارسال طرح و مدارک جهت جذب سرمایه</h2>
            </div>

            <button type="submit"><a href="{{'https://bestsheet.ir'}}">ثبت و ارسال</a></button>
        </div>
    </section>

@endsection
