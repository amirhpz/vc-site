@extends('layouts.base')

@section('title', 'Contact Us - Sina Knowledge-Based Development')

@section('content')

    <section class="page-hero contact-page-hero">
        <div class="page-hero-content">
            <span>CONTACT US</span>

            <h1>Contact Us</h1>

            <p>
                We are ready to answer your questions, suggestions, and collaboration requests.
            </p>
        </div>
    </section>

    <section class="contact-page-section">
        <div class="section-header">
            <span>Get In Touch</span>
            <h2>Contact Information</h2>
        </div>

        <div class="contact-grid contact-page-grid">
            <div class="contact-info contact-page-info">

                <div class="about-card contact-info-card">
                    <div class="contact-info-icon">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>

                    <div>
                        <h3>Address</h3>
                        <p>
                            Shahid Soleimani Highway, beginning of Nelson Mandela Street,
                            Mostazafan Foundation Central Building, 15th Floor, Tehran, Iran
                        </p>
                    </div>
                </div>

                <div class="about-card contact-info-card">
                    <div class="contact-info-icon">
                        <i class="fa-solid fa-phone"></i>
                    </div>

                    <div>
                        <h3>Phone</h3>
                        <p>02188670701</p>
                    </div>
                </div>

                <div class="about-card contact-info-card">
                    <div class="contact-info-icon">
                        <i class="fa-solid fa-envelope"></i>
                    </div>

                    <div>
                        <h3>Email</h3>
                        <p>info@sina.vc</p>
                    </div>
                </div>

            </div>

            <form class="contact-form contact-page-form">
                <input type="text" placeholder="Full Name">

                <input type="email" placeholder="Email Address">

                <input type="text" placeholder="Subject">

                <textarea rows="6" placeholder="Message"></textarea>

                <button class="primary-btn">
                    Send Message
                </button>
            </form>
        </div>
    </section>

@endsection
