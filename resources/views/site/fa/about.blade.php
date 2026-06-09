@extends('layouts.base')

@section('title', 'درباره ما - توسعه دانش بنیان سینا')

@section('content')

    <section class="about-premium-hero">
        <div class="about-premium-hero-bg"></div>
        <div class="about-premium-hero-glow glow-one"></div>
        <div class="about-premium-hero-glow glow-two"></div>

        <div class="about-premium-hero-content">
            <span class="about-premium-label">ABOUT SINA VC</span>

            <h1>
                بازوی سرمایه‌گذاری خطرپذیر
                <br>
                برای آینده‌ای دانش‌بنیان
            </h1>

            <p>
                شرکت توسعه دانش ‌بنیان سینا به عنوان بازوی سرمایه‌گذاری خطرپذیر بنیاد مستضعفان انقلاب اسلامی
                در قالب هلدینگ تحقیق و توسعه دانشمند، در مسیر رفع نیازها و چالش‌های فناورانه شرکت‌های تابعه بنیاد،
                حل مسائل حوزه محرومیت‌زدایی به روش‌های مبتکرانه و پاسخ‌گویی به نیازهای راهبردی ملی فعالیت می‌کند.
            </p>

            <div class="about-premium-actions">
                <a href="{{ route('portfolio') }}" class="primary-btn about-premium-btn">
                    مشاهده پورتفو
                </a>

                <a href="{{ route('contact') }}" class="secondary-btn about-premium-btn">
                    ارتباط با ما
                </a>
            </div>
        </div>

        <div class="about-premium-visual">
            <div class="about-premium-orbit orbit-large"></div>
            <div class="about-premium-orbit orbit-small"></div>

            <div class="about-premium-core-card">
                <div class="about-premium-core-icon">
                    <i class="fa-solid fa-lightbulb"></i>
                </div>

                <h3>نوآوری اثرگذار</h3>

                <p>
                    اتصال سرمایه، فناوری و تجربه برای خلق رشد پایدار
                </p>
            </div>

            <div class="about-premium-floating-card floating-card-1">
                <i class="fa-solid fa-chart-line"></i>
                <span>Growth</span>
            </div>

            <div class="about-premium-floating-card floating-card-2">
                <i class="fa-solid fa-seedling"></i>
                <span>Impact</span>
            </div>

            <div class="about-premium-floating-card floating-card-3">
                <i class="fa-solid fa-handshake"></i>
                <span>Partnership</span>
            </div>
        </div>
    </section>

    <section class="about-premium-values">
        <div class="section-header">
            <span>Our Foundation</span>
            <h2>ماموریت، چشم‌انداز و ارزش‌ها</h2>
        </div>

        <div class="about-premium-values-grid">
            <div class="about-premium-value-card">
                <div class="about-premium-value-icon">
                    <i class="fa-solid fa-bullseye"></i>
                </div>

                <span>Mission</span>

                <h3>ماموریت</h3>

                <p>
                    ماموریت ما کمک به ایجاد و رشد کسب‌وکارهای پایدار و قابل رقابت در بازارهای داخلی و خارجی است؛
                    به نحوی که با تأمین سرمایه، تیم کارشناسی خبره، منتورینگ تخصصی و ارتباط اثربخش با شبکه‌ای
                    از سرمایه‌گذاران، افراد و نهادهای اثرگذار، در حل مسائل مناطق محروم، بهبود زنجیره ارزش بنیاد
                    مستضعفان و تقویت راهبردهای کلان ملی نقش‌آفرینی کنیم.
                </p>
            </div>

            <div class="about-premium-value-card">
                <div class="about-premium-value-icon">
                    <i class="fa-solid fa-eye"></i>
                </div>

                <span>Vision</span>

                <h3>چشم‌انداز</h3>

                <p>
                    تبدیل شدن به یکی از بازیگران اصلی اکوسیستم سرمایه‌گذاری خطرپذیر کشور از طریق شناسایی
                    فرصت‌های فناورانه، حمایت هوشمندانه از تیم‌های نوآور و ایجاد ارزش پایدار در سطح ملی.
                </p>
            </div>

            <div class="about-premium-value-card">
                <div class="about-premium-value-icon">
                    <i class="fa-solid fa-gem"></i>
                </div>

                <span>Values</span>

                <h3>ارزش‌ها</h3>

                <p>
                    شفافیت، نوآوری، مسئولیت‌پذیری، توسعه پایدار، همکاری بلندمدت و تمرکز بر اثرگذاری واقعی،
                    اصولی هستند که تصمیم‌گیری‌ها و مسیر سرمایه‌گذاری ما را شکل می‌دهند.
                </p>
            </div>
        </div>
    </section>

    <section class="about-premium-roadmap">
        <div class="section-header">
            <span>How We Work</span>
            <h2>مسیر خلق ارزش</h2>
        </div>

        <div class="about-premium-timeline">
            <div class="about-premium-timeline-line"></div>

            <div class="about-premium-timeline-item">
                <div class="timeline-number">01</div>
                <div class="timeline-card">
                    <h3>شناسایی چالش و فرصت</h3>
                    <p>
                        بررسی نیازهای فناورانه، مسائل محرومیت‌زدایی و فرصت‌های راهبردی در سطح ملی و سازمانی.
                    </p>
                </div>
            </div>

            <div class="about-premium-timeline-item">
                <div class="timeline-number">02</div>
                <div class="timeline-card">
                    <h3>ارزیابی تخصصی</h3>
                    <p>
                        تحلیل تیم، بازار، فناوری، مدل درآمدی، قابلیت رشد و میزان اثرگذاری طرح یا شرکت.
                    </p>
                </div>
            </div>

            <div class="about-premium-timeline-item">
                <div class="timeline-number">03</div>
                <div class="timeline-card">
                    <h3>سرمایه‌گذاری و توانمندسازی</h3>
                    <p>
                        تأمین سرمایه، منتورینگ، شبکه‌سازی، مشاوره تخصصی و کمک به توسعه ساختار کسب‌وکار.
                    </p>
                </div>
            </div>

            <div class="about-premium-timeline-item">
                <div class="timeline-number">04</div>
                <div class="timeline-card">
                    <h3>رشد، مقیاس‌پذیری و اثرگذاری</h3>
                    <p>
                        همراهی در مسیر توسعه بازار، پایداری مالی، افزایش اثر اجتماعی و خلق ارزش بلندمدت.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="about-premium-team">
        <div class="section-header">
            <span>Management Team</span>
            <h2>معرفی تیم مدیریت</h2>
        </div>

        <div class="management-grid about-premium-management-grid">



            <div class="about-premium-team-card">
                <div class="about-premium-team-image">
                    <img src="{{ asset('site/images/team/investment-manager.png') }}" alt="سید طاها میرمحمدی">
                </div>

                <div class="about-premium-team-body">
                    <span>CIO</span>
                    <h3>سید طاها میرمحمدی</h3>
                    <p>مدیر برنامه‌ریزی و سرمایه‌گذاری</p>
                </div>
            </div>

            <div class="about-premium-team-card">
                <div class="about-premium-team-image">
                    <img src="{{ asset('site/images/team/it-manager.png') }}" alt="محمد حسین دیوان بیگی">
                </div>

                <div class="about-premium-team-body">
                    <span>COO</span>
                    <h3>محمد حسین دیوان بیگی</h3>
                    <p>مدیر اداری، پشتیبانی و فناوری</p>
                </div>
            </div>

            <div class="about-premium-team-card about-premium-team-card-ceo">
                <div class="about-premium-team-image">
                    <img src="{{ asset('site/images/team/ceo.png') }}" alt="دکتر مسعود کفایتمند">
                </div>

                <div class="about-premium-team-body">
                    <span>CEO</span>
                    <h3>دکتر مسعود کفایتمند</h3>
                    <p>مدیرعامل</p>
                </div>
            </div>

            <div class="about-premium-team-card">
                <div class="about-premium-team-image">
                    <img src="{{ asset('site/images/team/company-manager.png') }}" alt="نوید باقری نیا">
                </div>

                <div class="about-premium-team-body">
                    <span>CS</span>
                    <h3>نوید باقری نیا</h3>
                    <p>مدیر امور مجامع و شرکت‌ها</p>
                </div>
            </div>

            <div class="about-premium-team-card">
                <div class="about-premium-team-image">
                    <img src="{{ asset('site/images/team/finance-manager.png') }}" alt="آتنا باشوکی">
                </div>

                <div class="about-premium-team-body">
                    <span>CFO</span>
                    <h3>آتنا باشوکی</h3>
                    <p>مدیر مالی و حسابداری</p>
                </div>
            </div>

        </div>
    </section>

@endsection
