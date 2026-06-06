@extends('layouts.base')

@section('title', 'Events - Sina Knowledge-Based Development')

@section('content')

    <section class="events-premium-hero">
        <div class="events-premium-bg"></div>
        <div class="events-premium-glow glow-one"></div>
        <div class="events-premium-glow glow-two"></div>

        <div class="events-premium-hero-content">
            <span>EVENTS</span>

            <h1>
                Investment Bridge Events
            </h1>

            <p>
                A series of specialized events designed to connect strategic challenges,
                innovative teams, future-driven technologies, and targeted investment.
            </p>
        </div>

        <div class="events-premium-hero-visual">
            <div class="events-orbit orbit-large"></div>
            <div class="events-orbit orbit-small"></div>

            <div class="events-hero-card">
                <i class="fa-solid fa-bridge"></i>
                <h3>Investment Bridge</h3>
                <p>The bridge between innovation, industry, and capital</p>
            </div>
        </div>
    </section>

    <section class="events-premium-section">
        <div class="section-header">
            <span>Investment Bridge</span>
            <h2>Held Events</h2>
        </div>

        <div class="events-premium-grid">
            @foreach($events as $event)
                <a href="{{ route('events.show', $event['slug']) }}" class="event-premium-card">
                    <div class="event-premium-image">
                        <img src="{{ $event['image'] }}" alt="{{ $event['title'] }}">

                        <div class="event-premium-overlay"></div>

                        <div class="event-premium-number">
                            {{ $event['number'] }}
                        </div>
                    </div>

                    <div class="event-premium-content">
                        <div class="event-premium-meta">
                            <span>
                                <i class="fa-regular fa-calendar"></i>
                                {{ $event['date'] }}
                            </span>

                            <span>
                                <i class="{{ $event['icon'] }}"></i>
                                {{ $event['category'] }}
                            </span>
                        </div>

                        <h3>{{ $event['title'] }}</h3>

                        <p>
                            {{ $event['description'] }}
                        </p>

                        <div class="event-premium-link">
                            View Details
                            <i class="fa-solid fa-arrow-right"></i>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </section>

@endsection
