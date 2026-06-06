@extends('layouts.base')

@section('title', $event['title'] . ' - توسعه دانش بنیان سینا')

@section('content')

    <section class="single-event-hero">
        <div class="single-event-bg"></div>

        <div class="single-event-hero-content">
            <span>{{ $event['label'] }}</span>

            <h1>
                {{ $event['short_title'] }}
            </h1>

            <p>
                {{ $event['description'] }}
            </p>

            <div class="single-event-hero-meta">
                <div>
                    <i class="fa-regular fa-calendar"></i>
                    <strong>تاریخ انتشار</strong>
                    <span>{{ $event['date'] }}</span>
                </div>

                <div>
                    <i class="{{ $event['icon'] }}"></i>
                    <strong>محور رویداد</strong>
                    <span>{{ $event['category'] }}</span>
                </div>

                <div>
                    <i class="fa-solid fa-bridge"></i>
                    <strong>سلسله رویداد</strong>
                    <span>پل سرمایه‌گذاری</span>
                </div>
            </div>
        </div>
    </section>

    <section class="single-event-section">
        <div class="single-event-layout">

            <article class="single-event-main">
                <div class="single-event-cover">
                    <img src="{{ $event['image'] }}" alt="{{ $event['title'] }}">
                </div>

                <div class="single-event-body">
                    <div class="single-event-badge">
                        <i class="{{ $event['icon'] }}"></i>
                        {{ $event['label'] }}
                    </div>

                    <h2>{{ $event['title'] }}</h2>

                    <p class="single-event-intro">
                        {{ $event['intro'] }}
                    </p>

                    @foreach($event['content'] as $paragraph)
                        <p>
                            {{ $paragraph }}
                        </p>
                    @endforeach

                    <div class="single-event-focus-box">
                        <h3>محورهای اصلی رویداد</h3>

                        <div class="single-event-focus-grid">
                            @foreach($event['focus'] as $item)
                                <div>
                                    <i class="fa-solid fa-check"></i>
                                    <span>{{ $item }}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    @if(!empty($event['timeline']))
                        <div class="single-event-schedule-box">
                            <div class="single-event-inner-header">
                                <span>Event Timeline</span>
                                <h3>زمان‌بندی رویداد</h3>
                            </div>

                            <div class="single-event-schedule-list">
                                @foreach($event['timeline'] as $step)
                                    <div class="single-event-schedule-item">
                                        <div class="single-event-schedule-marker">
                                            <span>{{ $loop->iteration }}</span>
                                        </div>

                                        <div class="single-event-schedule-content">
                                            <strong>{{ $step['time'] }}</strong>
                                            <h4>{{ $step['title'] }}</h4>
                                            <p>{{ $step['description'] }}</p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif

                    @if(!empty($event['registration']))
                        <div class="single-event-register-box">
                            <div class="single-event-register-content">
                                <span>Registration</span>

                                <h3>
                                    {{ $event['registration']['title'] }}
                                </h3>

                                <p>
                                    {{ $event['registration']['description'] }}
                                </p>
                            </div>

                            <a
                                href="{{ route($event['registration']['button_url']) }}"
                                class="single-event-register-btn"
                            >
                                {{ $event['registration']['button_text'] }}
                                <i class="fa-solid fa-arrow-left"></i>
                            </a>
                        </div>
                    @endif
                </div>
            </article>

            <aside class="single-event-sidebar">
                <div class="single-event-side-card">
                    <h3>اطلاعات رویداد</h3>

                    <div class="single-event-info-list">
                        <div>
                            <span>عنوان</span>
                            <strong>{{ $event['title'] }}</strong>
                        </div>

                        <div>
                            <span>دسته‌بندی</span>
                            <strong>{{ $event['category'] }}</strong>
                        </div>

                        <div>
                            <span>تاریخ</span>
                            <strong>{{ $event['date'] }}</strong>
                        </div>
                    </div>
                </div>

                <div class="single-event-side-card">
                    <h3>سایر رویدادها</h3>

                    <div class="related-events-list">
                        @foreach($relatedEvents as $related)
                            <a href="{{ route('events.show', $related['slug']) }}" class="related-event-item">
                                <div class="related-event-icon">
                                    <i class="{{ $related['icon'] }}"></i>
                                </div>

                                <div>
                                    <h4>{{ $related['short_title'] }}</h4>
                                    <span>{{ $related['date'] }}</span>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>

                <div class="single-event-side-card single-event-back-card">
                    <p>
                        برای مشاهده همه رویدادهای پل سرمایه‌گذاری می‌توانید به صفحه رویدادها بازگردید.
                    </p>

                    <a href="{{ route('events') }}">
                        بازگشت به رویدادها
                        <i class="fa-solid fa-arrow-left"></i>
                    </a>
                </div>
            </aside>

        </div>
    </section>

@endsection
