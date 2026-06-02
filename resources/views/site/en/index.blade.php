@extends('layouts.base')

@section('title', 'Corporate Venture Capital Fund - Sina Knowledge-Based Development')

@section('content')

    <section class="hero">
        <div class="swiper heroSwiper">
            <div class="swiper-wrapper">

                <div class="swiper-slide hero-slide">
                    <div class="hero-overlay"></div>

                    <div class="hero-content">
                        <span>VENTURE CAPITAL</span>

                        <h1>
                            Investing in the Future
                            <br>
                            of Technology and Innovation
                        </h1>

                        <p>
                            Supporting startups and knowledge-based ventures
                            on their path toward growth and transformation
                            within the technology ecosystem.
                        </p>

                        <div class="hero-buttons">
                            <button class="primary-btn">
                                Submit Proposal
                            </button>

                            <button class="secondary-btn">
                                View Portfolio
                            </button>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide hero-slide slide2">
                    <div class="hero-overlay"></div>

                    <div class="hero-content">
                        <span>SMART INVESTMENT</span>

                        <h1>
                            Building the Future
                            <br>
                            Through Smart Investment
                        </h1>

                        <p>
                            Supporting emerging startups and future-oriented technologies.
                        </p>

                        <div class="hero-buttons">
                            <button class="primary-btn">
                                Start Collaboration
                            </button>
                        </div>
                    </div>
                </div>

            </div>

            <div class="swiper-pagination"></div>
        </div>
    </section>

    <section class="sectors">
        <div class="section-header">
            <span>Investment Sectors</span>
            <h2>Key Investment Areas</h2>
        </div>

        <div class="sector-grid">
            <div class="sector-card">
                <i class="fa-solid fa-industry"></i>
                <h3>Mining Industries</h3>
            </div>

            <div class="sector-card">
                <i class="fa-solid fa-truck-fast"></i>
                <h3>Transportation & Logistics</h3>
            </div>

            <div class="sector-card">
                <i class="fa-solid fa-bowl-food"></i>
                <h3>Food Industries</h3>
            </div>

            <div class="sector-card">
                <i class="fa-solid fa-seedling"></i>
                <h3>Agriculture & Livestock</h3>
            </div>

            <div class="sector-card">
                <i class="fa-solid fa-bolt"></i>
                <h3>Power & Energy</h3>
            </div>

            <div class="sector-card">
                <i class="fa-solid fa-chart-line"></i>
                <h3>Financial Technologies</h3>
            </div>

            <div class="sector-card">
                <i class="fa-solid fa-brain"></i>
                <h3>Artificial Intelligence</h3>
            </div>
        </div>
    </section>

    <section class="investment-status">
        <div class="section-header">
            <span>Investment Status</span>
            <h2>Investment Overview</h2>
        </div>

        <div class="stats-grid">
            <div class="stat-box">
                <div class="stat-glow"></div>

                <div class="stat-number">
                    <span class="counter" data-target="12">0</span>
                    <small>+</small>
                </div>

                <h3>Active Companies</h3>
            </div>

            <div class="stat-box">
                <div class="stat-glow"></div>

                <div class="stat-number">
                    <span class="counter" data-target="4">0</span>
                </div>

                <h3>Under Negotiation</h3>
            </div>

            <div class="stat-box">
                <div class="stat-glow"></div>

                <div class="stat-number">
                    <span class="counter" data-target="27">0</span>
                    <small>+</small>
                </div>

                <h3>Investments</h3>
            </div>

            <div class="stat-box large">
                <div class="stat-glow"></div>

                <div class="stat-number">
                    <span class="counter" data-target="680">0</span>
                    <small>+</small>
                </div>

                <h3>Reviewed Proposals</h3>
            </div>
        </div>
    </section>

    <section class="process">
        <div class="section-header">
            <span>Investment Process</span>
            <h2>Proposal Admission Process</h2>
        </div>

        <div class="process-wrapper">
            <svg class="process-line" viewBox="0 0 1600 300" preserveAspectRatio="none">
                <path
                    d="M 50 180 C 180 40, 320 40, 450 180 S 720 320, 850 180 S 1120 40, 1250 180 S 1450 320, 1550 180"/>
            </svg>

            <div class="process-item item1">
                <div class="process-circle">1</div>
                <h3>Proposal Submission</h3>
            </div>

            <div class="process-item item2">
                <div class="process-circle">2</div>
                <h3>Screening</h3>
            </div>

            <div class="process-item item3">
                <div class="process-circle">3</div>
                <h3>Initial Evaluation</h3>
            </div>

            <div class="process-item item4">
                <div class="process-circle">4</div>
                <h3>Due Diligence</h3>
            </div>

            <div class="process-item item5">
                <div class="process-circle">5</div>
                <h3>Valuation</h3>
            </div>

            <div class="process-item item6">
                <div class="process-circle">6</div>
                <h3>Contract Signing</h3>
            </div>
        </div>
    </section>

    <section class="portfolio">
        <div class="section-header">
            <span>Portfolio Companies</span>
            <h2>Portfolio Companies</h2>
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
                                            <img
                                                src="{{ asset($project->cover) }}"
                                                alt="{{ $project->title }}"
                                            >
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
                <h3>No portfolio companies yet</h3>
                <p>
                    Information about portfolio companies will be displayed here soon.
                </p>
            </div>
        @endif
    </section>

    <section class="news">
        <div class="section-header">
            <span>News & Events</span>
            <h2>News & Events</h2>
        </div>

        @if($posts->count())
            <div class="swiper newsSwiper">
                <div class="swiper-wrapper">

                    @foreach($posts as $post)
                        <div class="swiper-slide">

                            <div class="news-card">

                                <div class="news-image">
                                    @if(!empty($post->cover))
                                        <img
                                            src="{{ asset($post->cover) }}"
                                            alt="{{ $post->title }}"
                                            class="card-cover-image"
                                        >
                                    @endif
                                </div>

                                <div class="news-content">
                                    <span>
                                        {{ optional($post->created_at)->format('Y-m-d') }}
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
                <h3>No news has been published yet</h3>
                <p>
                    New updates, events, and announcements will be displayed here soon.
                </p>
            </div>
        @endif
    </section>

    <section class="partners">
        <div class="section-header">
            <span>Key Partners</span>
            <h2>Our Key Partners</h2>
        </div>

        @if($companies->count())
            <div class="swiper partnersSwiper">
                <div class="swiper-wrapper">

                    @foreach($companies as $company)
                        <div class="swiper-slide">

                            <div class="partner-card">

                                <div class="partner-logo">
                                    @if(!empty($company->cover))
                                        <div class="brand-image-box">
                                            <img
                                                src="{{ asset($company->cover) }}"
                                                alt="{{ $company->title }}"
                                            >
                                        </div>
                                    @else
                                        <div class="brand-placeholder">
                                            <div class="brand-placeholder-inner">
                                                <i class="fa-solid fa-handshake"></i>
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
                <h3>No partners yet</h3>
                <p>
                    Information about key partners will be displayed here soon.
                </p>
            </div>
        @endif
    </section>

    <section class="cta">
        <div class="cta-box">
            <div>
                <span>Start Your Journey</span>
                <h2>Ready to Raise Capital?</h2>
            </div>

            <button>Submit Proposal</button>
        </div>
    </section>

@endsection
