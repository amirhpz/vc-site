@extends('layouts.base')

@section('title', 'About Us - Sina Knowledge-Based Development')

@section('content')

    <section class="about-premium-hero">
        <div class="about-premium-hero-bg"></div>
        <div class="about-premium-hero-glow glow-one"></div>
        <div class="about-premium-hero-glow glow-two"></div>

        <div class="about-premium-hero-content">
            <span class="about-premium-label">ABOUT SINA VC</span>

            <h1>
                The Venture Capital Arm
                <br>
                for a Knowledge-Based Future
            </h1>

            <p>
                Sina Knowledge-Based Development acts as the venture capital arm of the
                Mostazafan Foundation of Islamic Revolution within the Daneshmand Research
                and Development Holding. The company operates to address technological needs
                and challenges of the Foundation’s affiliated companies, solve deprivation-related
                issues through innovative approaches, and respond to national strategic needs.
            </p>

            <div class="about-premium-actions">
                <a href="{{ route('portfolio') }}" class="primary-btn about-premium-btn">
                    View Portfolio
                </a>

                <a href="{{ route('contact') }}" class="secondary-btn about-premium-btn">
                    Contact Us
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

                <h3>Impactful Innovation</h3>

                <p>
                    Connecting capital, technology, and experience to create sustainable growth
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

    <section class="about-premium-intro">
        <div class="section-header">
            <span>Who We Are</span>
            <h2>Fund Introduction</h2>
        </div>

        <div class="about-premium-intro-box">
            <div class="about-premium-intro-text">
                <span>Corporate Venture Capital</span>

                <h3>
                    We are not just investors;
                    <br>
                    we are growth partners for future-driven businesses.
                </h3>

                <p>
                    Sina Knowledge-Based Development focuses on venture capital investment
                    to identify, evaluate, and empower innovative capacities. Our approach is
                    not limited to capital injection; it includes specialized support, mentoring,
                    access to influential networks, market analysis, and helping companies build
                    sustainable business models.
                </p>
            </div>

            <div class="about-premium-intro-stats">
                <div class="about-premium-stat">
                    <strong>+12</strong>
                    <span>Active Companies</span>
                </div>

                <div class="about-premium-stat">
                    <strong>+27</strong>
                    <span>Investments</span>
                </div>

                <div class="about-premium-stat">
                    <strong>+680</strong>
                    <span>Reviewed Proposals</span>
                </div>
            </div>
        </div>
    </section>

    <section class="about-premium-values">
        <div class="section-header">
            <span>Our Foundation</span>
            <h2>Mission, Vision and Values</h2>
        </div>

        <div class="about-premium-values-grid">
            <div class="about-premium-value-card">
                <div class="about-premium-value-icon">
                    <i class="fa-solid fa-bullseye"></i>
                </div>

                <span>Mission</span>

                <h3>Mission</h3>

                <p>
                    Our mission is to support the creation and growth of sustainable and competitive
                    businesses in domestic and international markets. We do this by providing the
                    required capital, expert teams, specialized mentoring, and effective connections
                    to a network of investors, individuals, and influential institutions in the investee’s
                    field of activity. Through this approach, we aim to contribute to solving issues
                    in underprivileged regions, improving the value chain of the Mostazafan Foundation,
                    and strengthening national strategic priorities.
                </p>
            </div>

            <div class="about-premium-value-card">
                <div class="about-premium-value-icon">
                    <i class="fa-solid fa-eye"></i>
                </div>

                <span>Vision</span>

                <h3>Vision</h3>

                <p>
                    To become one of the key players in the country’s venture capital ecosystem
                    by identifying technology-driven opportunities, intelligently supporting innovative
                    teams, and creating sustainable value at the national level.
                </p>
            </div>

            <div class="about-premium-value-card">
                <div class="about-premium-value-icon">
                    <i class="fa-solid fa-gem"></i>
                </div>

                <span>Values</span>

                <h3>Values</h3>

                <p>
                    Transparency, innovation, responsibility, sustainable development, long-term
                    collaboration, and real impact are the principles that shape our decisions and
                    investment approach.
                </p>
            </div>
        </div>
    </section>

    <section class="about-premium-roadmap">
        <div class="section-header">
            <span>How We Work</span>
            <h2>Value Creation Path</h2>
        </div>

        <div class="about-premium-timeline">
            <div class="about-premium-timeline-line"></div>

            <div class="about-premium-timeline-item">
                <div class="timeline-number">01</div>
                <div class="timeline-card">
                    <h3>Identifying Challenges and Opportunities</h3>
                    <p>
                        Reviewing technological needs, deprivation-related challenges, and strategic
                        opportunities at both national and organizational levels.
                    </p>
                </div>
            </div>

            <div class="about-premium-timeline-item">
                <div class="timeline-number">02</div>
                <div class="timeline-card">
                    <h3>Specialized Evaluation</h3>
                    <p>
                        Analyzing the team, market, technology, revenue model, growth potential,
                        and impact level of the proposal or company.
                    </p>
                </div>
            </div>

            <div class="about-premium-timeline-item">
                <div class="timeline-number">03</div>
                <div class="timeline-card">
                    <h3>Investment and Empowerment</h3>
                    <p>
                        Providing capital, mentoring, networking, specialized consulting, and support
                        in developing the business structure.
                    </p>
                </div>
            </div>

            <div class="about-premium-timeline-item">
                <div class="timeline-number">04</div>
                <div class="timeline-card">
                    <h3>Growth, Scalability and Impact</h3>
                    <p>
                        Supporting market development, financial sustainability, social impact, and
                        long-term value creation.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="about-premium-team">
        <div class="section-header">
            <span>Management Team</span>
            <h2>Management Team</h2>
        </div>

        <div class="management-grid about-premium-management-grid">

            <div class="about-premium-team-card">
                <div class="about-premium-team-image">
                    <img src="{{ asset('site/images/team/investment-manager.png') }}" alt="Seyed Taha Mirmohammadi">
                </div>

                <div class="about-premium-team-body">
                    <span>CIO</span>
                    <h3>Seyed Taha Mirmohammadi</h3>
                    <p>Planning and Investment Manager</p>
                </div>
            </div>

            <div class="about-premium-team-card">
                <div class="about-premium-team-image">
                    <img src="{{ asset('site/images/team/it-manager.png') }}" alt="Mohammad Hossein Divanbeigi">
                </div>

                <div class="about-premium-team-body">
                    <span>COO</span>
                    <h3>Mohammad Hossein Divanbeigi</h3>
                    <p>Administrative, Support and Technology Manager</p>
                </div>
            </div>

            <div class="about-premium-team-card about-premium-team-card-ceo">
                <div class="about-premium-team-image">
                    <img src="{{ asset('site/images/team/ceo.png') }}" alt="Dr. Masoud Kefayatmand">
                </div>

                <div class="about-premium-team-body">
                    <span>CEO</span>
                    <h3>Dr. Masoud Kefayatmand</h3>
                    <p>Chief Executive Officer</p>
                </div>
            </div>

            <div class="about-premium-team-card">
                <div class="about-premium-team-image">
                    <img src="{{ asset('site/images/team/company-manager.png') }}" alt="Navid Bagherinia">
                </div>

                <div class="about-premium-team-body">
                    <span>CS</span>
                    <h3>Navid Bagherinia</h3>
                    <p>Corporate Affairs and Assemblies Manager</p>
                </div>
            </div>

            <div class="about-premium-team-card">
                <div class="about-premium-team-image">
                    <img src="{{ asset('site/images/team/finance-manager.png') }}" alt="Atena Bashouki">
                </div>

                <div class="about-premium-team-body">
                    <span>CFO</span>
                    <h3>Atena Bashouki</h3>
                    <p>Finance and Accounting Manager</p>
                </div>
            </div>

        </div>
    </section>

@endsection
