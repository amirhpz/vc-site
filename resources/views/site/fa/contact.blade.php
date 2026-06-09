@extends('layouts.base')

@section('title', 'تماس با ما - توسعه دانش بنیان سینا')

@section('content')

    <section class="page-hero contact-page-hero">
        <div class="page-hero-content">
            <span>CONTACT US</span>

            <h1>تماس با ما</h1>

            <p>
                آماده پاسخگویی به سوالات و پیشنهادهای شما هستیم
            </p>
        </div>
    </section>

    <section class="contact-page-section">
        <div class="section-header">
            <span>Get In Touch</span>
            <h2>راه‌های ارتباطی</h2>
        </div>

        <div class="contact-grid contact-page-grid">
            <div class="contact-info contact-page-info">

                <div class="about-card contact-info-card">
                    <div class="contact-info-icon">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>

                    <div>
                        <h3>آدرس</h3>
                        <p>تهران بزرگراه شهید سلیمانی، ابتدای خیابان نلسون ماندلا، ساختمان مرکزی بنیاد مستضعفان، طبقه پانزدهم</p>
                    </div>
                </div>

                <div class="about-card contact-info-card">
                    <div class="contact-info-icon">
                        <i class="fa-solid fa-phone"></i>
                    </div>

                    <div>
                        <h3>تلفن</h3>
                        <p>02188670701</p>
                    </div>
                </div>

                <div class="about-card contact-info-card">
                    <div class="contact-info-icon">
                        <i class="fa-solid fa-envelope"></i>
                    </div>

                    <div>
                        <h3>ایمیل</h3>
                        <p>info@sina.vc</p>
                    </div>
                </div>

            </div>

            <form class="contact-form contact-page-form">
                <input type="text" placeholder="نام و نام خانوادگی">

                <input type="email" placeholder="ایمیل">

                <input type="text" placeholder="موضوع">

                <textarea rows="6" placeholder="متن پیام"></textarea>

                <button class="primary-btn">
                    ارسال پیام
                </button>
            </form>
        </div>
    </section>

@endsection
