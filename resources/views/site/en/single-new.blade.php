@extends('layouts.base')

@section('title', $post->title . ' - توسعه دانش بنیان سینا')

@section('meta')
    <meta name="description" content="{{ Str::limit(strip_tags($post->description ?? $post->sub_title ?? ''), 160) }}">
@endsection

@section('content')

    <section class="page-hero single-news-hero">
        <div class="page-hero-content">
            <span>NEWS DETAILS</span>

            <h1>{{ $post->title }}</h1>

            @if(!empty($post->sub_title))
                <p>
                    {{ $post->sub_title }}
                </p>
            @else
                <p>
                    جزئیات خبر، اطلاعیه یا رویداد منتشرشده توسط توسعه دانش‌بنیان سینا
                </p>
            @endif
        </div>
    </section>

    <section class="single-news-section">
        <div class="single-news-layout">

            <article class="single-news-main">
                <div class="single-news-card">

                    <div class="single-news-cover">
                        @if(!empty($post->cover))
                            <img
                                src="{{ asset($post->cover) }}"
                                alt="{{ $post->title }}"
                            >
                        @else
                            <div class="single-news-placeholder">
                                <i class="fa-regular fa-newspaper"></i>
                            </div>
                        @endif
                    </div>

                    <div class="single-news-body">

                        <div class="single-news-meta">
                            <span>
                                <i class="fa-regular fa-calendar"></i>
                                {{ $post->created_at ? \Morilog\Jalali\Jalalian::fromCarbon($post->created_at)->format('Y/m/d') : 'بدون تاریخ' }}
                            </span>

                            @if(!empty($post->priority))
                                <span>
                                    <i class="fa-solid fa-star"></i>
                                    خبر منتخب
                                </span>
                            @endif
                        </div>

                        <h2>{{ $post->title }}</h2>

                        @if(!empty($post->en_title))
                            <h4>{{ $post->en_title }}</h4>
                        @endif

                        @if(!empty($post->description))
                            <div class="single-news-summary">
                                {{ $post->description }}
                            </div>
                        @endif

                        @if(!empty($post->full_description))
                            <div class="single-news-description">
                                {!! $post->full_description !!}
                            </div>
                        @elseif(!empty($post->description))
                            <div class="single-news-description">
                                <p>{{ $post->description }}</p>
                            </div>
                        @else
                            <div class="single-news-description">
                                <p>
                                    برای این خبر هنوز توضیحات کامل ثبت نشده است.
                                </p>
                            </div>
                        @endif

                        @if(!empty($post->file_path))
                            <div class="single-news-file">
                                <div>
                                    <i class="fa-solid fa-file-arrow-down"></i>
                                    <span>فایل پیوست خبر</span>
                                </div>

                                <a href="{{ asset($post->file_path) }}" target="_blank">
                                    دریافت فایل
                                </a>
                            </div>
                        @endif

                    </div>
                </div>

                @php
                    $galleryItems = [];

                    if (!empty($post->gallery_media)) {
                        $decodedGallery = json_decode($post->gallery_media, true);

                        if (is_array($decodedGallery)) {
                            $galleryItems = $decodedGallery;
                        }
                    }
                @endphp

                @if(count($galleryItems) > 0)
                    <div class="single-news-gallery-box">
                        <div class="section-header single-inner-header">
                            <span>Gallery</span>
                            <h2>گالری تصاویر</h2>
                        </div>

                        <div class="single-news-gallery">
                            @foreach($galleryItems as $media)
                                @php
                                    $mediaPath = is_array($media) ? ($media['path'] ?? $media['url'] ?? null) : $media;
                                @endphp

                                @if(!empty($mediaPath))
                                    <div class="single-news-gallery-item">
                                        <img src="{{ asset($mediaPath) }}" alt="{{ $post->title }}">
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                @endif

            </article>

            <aside class="single-news-sidebar">

                <div class="single-sidebar-card">
                    <h3>اطلاعات خبر</h3>

                    <div class="single-sidebar-info">
                        <div>
                            <span>عنوان</span>
                            <strong>{{ $post->title }}</strong>
                        </div>

                        <div>
                            <span>تاریخ انتشار</span>
                            <strong>
                                {{ $post->created_at ? \Morilog\Jalali\Jalalian::fromCarbon($post->created_at)->format('Y/m/d') : 'بدون تاریخ' }}
                            </strong>
                        </div>

                        @if(!empty($post->priority))
                            <div>
                                <span>وضعیت</span>
                                <strong>خبر منتخب</strong>
                            </div>
                        @endif
                    </div>
                </div>

                @if($relatedPosts->count() > 0)
                    <div class="single-sidebar-card">
                        <h3>اخبار مرتبط</h3>

                        <div class="related-news-list">
                            @foreach($relatedPosts as $relatedPost)
                                <a href="{{ route('news.show', $relatedPost->slug) }}" class="related-news-item">
                                    <div class="related-news-image">
                                        @if(!empty($relatedPost->cover))
                                            <img
                                                src="{{ asset($relatedPost->cover) }}"
                                                alt="{{ $relatedPost->title }}"
                                            >
                                        @else
                                            <i class="fa-regular fa-newspaper"></i>
                                        @endif
                                    </div>

                                    <div class="related-news-content">
                                        <h4>{{ $relatedPost->title }}</h4>

                                        <span>
                                            {{ $relatedPost->created_at ? \Morilog\Jalali\Jalalian::fromCarbon($relatedPost->created_at)->format('Y/m/d') : '' }}
                                        </span>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                @endif

                <div class="single-sidebar-card single-back-card">
                    <h3>بازگشت به اخبار</h3>

                    <p>
                        برای مشاهده سایر اخبار، رویدادها و اطلاعیه‌ها به صفحه اخبار بازگردید.
                    </p>

                    <a href="{{ route('news') }}">
                        مشاهده همه اخبار
                        <i class="fa-solid fa-arrow-left"></i>
                    </a>
                </div>

            </aside>

        </div>
    </section>

@endsection
