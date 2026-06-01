@extends('layouts.base')

@section('title', 'شرکت‌های سرمایه‌پذیر - توسعه دانش بنیان سینا')

@section('content')

    <section class="page-hero">
        <div class="page-hero-content">
            <span>PORTFOLIO</span>

            <h1>شرکت‌های سرمایه‌پذیر</h1>

            <p>
                مجموعه‌ای از شرکت‌ها و استارتاپ‌های تحت حمایت
            </p>
        </div>
    </section>

    <section class="portfolio-page-section">

        @php
            $projectCount = $projects->count();

            $projectGridClass = match (true) {
                $projectCount === 1 => 'cols-1',
                $projectCount === 2 => 'cols-2',
                $projectCount === 3 => 'cols-3',
                $projectCount === 4 => 'cols-4',
                default => 'cols-more',
            };
        @endphp

        @if($projectCount > 0)
            <div class="dynamic-grid portfolio-list portfolio-page-list {{ $projectGridClass }}">
                @foreach($projects as $project)
                    <div class="portfolio-card portfolio-page-card">
                        <div class="portfolio-logo portfolio-page-logo">
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

                        <div class="portfolio-content portfolio-page-content">
                            <h3>{{ $project->title }}</h3>
                        </div>
                    </div>
                @endforeach
            </div>

            @if($projects->hasPages())
                <div class="site-pagination">
                    @if($projects->onFirstPage())
                        <span class="pagination-btn disabled">
                            قبلی
                        </span>
                    @else
                        <a href="{{ $projects->previousPageUrl() }}" class="pagination-btn">
                            قبلی
                        </a>
                    @endif

                    <div class="pagination-numbers">
                        @php
                            $currentPage = $projects->currentPage();
                            $lastPage = $projects->lastPage();
                            $startPage = max($currentPage - 2, 1);
                            $endPage = min($currentPage + 2, $lastPage);
                        @endphp

                        @if($startPage > 1)
                            <a href="{{ $projects->url(1) }}" class="pagination-number">1</a>

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
                                <a href="{{ $projects->url($page) }}" class="pagination-number">
                                    {{ $page }}
                                </a>
                            @endif
                        @endfor

                        @if($endPage < $lastPage)
                            @if($endPage < $lastPage - 1)
                                <span class="pagination-dots">...</span>
                            @endif

                            <a href="{{ $projects->url($lastPage) }}" class="pagination-number">
                                {{ $lastPage }}
                            </a>
                        @endif
                    </div>

                    @if($projects->hasMorePages())
                        <a href="{{ $projects->nextPageUrl() }}" class="pagination-btn">
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
                <i class="fa-solid fa-rocket"></i>

                <h3>هنوز شرکتی ثبت نشده است</h3>

                <p>
                    اطلاعات شرکت‌های سرمایه‌پذیر به‌زودی در این بخش نمایش داده می‌شود.
                </p>
            </div>
        @endif
    </section>

@endsection
