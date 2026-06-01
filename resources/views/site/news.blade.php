@extends('layouts.base')

@section('title', 'اخبار - توسعه دانش بنیان سینا')

@section('content')

    <section class="page-hero news-page-hero">
        <div class="page-hero-content">
            <span>NEWS</span>

            <h1>اخبار</h1>

            <p>
                آخرین اخبار، اطلاعیه‌ها، رویدادها و دستاوردهای توسعه دانش‌بنیان سینا
            </p>
        </div>
    </section>

    <section class="news-page-section">
        @if($posts->count() > 0)
            <div class="news-page-grid">
                @foreach($posts as $post)
                    <article class="news-page-card">
                        <a href="{{ route('news.show', $post->slug) }}" class="news-page-card-link"
                           aria-label="{{ $post->title }}">
                            <div class="news-page-image">
                                @if(!empty($post->cover))
                                    <img
                                        src="{{ asset($post->cover) }}"
                                        alt="{{ $post->title }}"
                                    >
                                @else
                                    <div class="news-page-placeholder">
                                        <i class="fa-regular fa-newspaper"></i>
                                    </div>
                                @endif
                            </div>

                            <div class="news-page-content">
                                <div class="news-page-meta">
                <span>
                    {{ $post->created_at ? \Morilog\Jalali\Jalalian::fromCarbon($post->created_at)->format('Y/m/d') : '' }}
                </span>
                                    @if(!empty($post->priority))
                                        <span>
                        <i class="fa-solid fa-star"></i>
                        خبر منتخب
                    </span>
                                    @endif
                                </div>

                                <h3>{{ $post->title }}</h3>

                                @if(!empty($post->sub_title))
                                    <h4>{{ $post->sub_title }}</h4>
                                @endif

                                <p>
                                    {{ Str::limit(strip_tags($post->description ?? $post->full_description ?? ''), 150) }}
                                </p>

                                <div class="news-page-link">
                                    مطالعه بیشتر
                                    <i class="fa-solid fa-arrow-left"></i>
                                </div>
                            </div>
                        </a>
                    </article>
                @endforeach
            </div>


            @if($posts->hasPages())
                <div class="site-pagination">
                    @if($posts->onFirstPage())
                        <span class="pagination-btn disabled">
                قبلی
            </span>
                    @else
                        <a href="{{ $posts->previousPageUrl() }}" class="pagination-btn">
                            قبلی
                        </a>
                    @endif

                    <div class="pagination-numbers">
                        @php
                            $currentPage = $posts->currentPage();
                            $lastPage = $posts->lastPage();
                            $startPage = max($currentPage - 2, 1);
                            $endPage = min($currentPage + 2, $lastPage);
                        @endphp

                        @if($startPage > 1)
                            <a href="{{ $posts->url(1) }}" class="pagination-number">1</a>

                            @if($startPage > 2)
                                <span class="pagination-dots">...</span>
                            @endif
                        @endif

                        @for($page = $startPage; $page <= $endPage; $page++)
                            @if($page == $currentPage)
                                <span class="pagination-number active">
                        {{ $page }}
                    </span>
                            @else
                                <a href="{{ $posts->url($page) }}" class="pagination-number">
                                    {{ $page }}
                                </a>
                            @endif
                        @endfor

                        @if($endPage < $lastPage)
                            @if($endPage < $lastPage - 1)
                                <span class="pagination-dots">...</span>
                            @endif

                            <a href="{{ $posts->url($lastPage) }}" class="pagination-number">
                                {{ $lastPage }}
                            </a>
                        @endif
                    </div>

                    @if($posts->hasMorePages())
                        <a href="{{ $posts->nextPageUrl() }}" class="pagination-btn">
                            بعدی
                        </a>
                    @else
                        <span class="pagination-btn disabled">
                بعدی
            </span>
                    @endif
                </div>
            @endif

        @else
            <div class="empty-card">
                <i class="fa-regular fa-newspaper"></i>

                <h3>هنوز خبری ثبت نشده است</h3>

                <p>
                    اخبار و رویدادهای جدید مجموعه به‌زودی در این بخش منتشر خواهد شد.
                </p>
            </div>
        @endif
    </section>

@endsection
