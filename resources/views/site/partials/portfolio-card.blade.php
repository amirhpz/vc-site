@php
    /*
     | Public company profile for the portfolio card + its "جزئیات" modal.
     | Only publicly presentable columns are used: registration codes, national
     | IDs, investment amounts and coordinates stay out of the payload.
     */
    $coverPath = trim((string) ($project->cover ?? ''));
    $hasCover = $coverPath !== '' && is_file(public_path($coverPath));

    $website = trim((string) ($project->website ?? ''));
    $website = in_array($website, ['', '-', '#'], true) ? '' : $website;
    $websiteUrl = $website !== '' && filter_var($website, FILTER_VALIDATE_URL) ? $website : null;
    $websiteEmail = !$websiteUrl && $website !== '' && filter_var($website, FILTER_VALIDATE_EMAIL) ? $website : null;

    $formatDate = function ($value) {
        $value = trim((string) $value);

        if ($value === '' || $value === '-' || str_starts_with($value, '0000')) {
            return null;
        }

        // The panel already stores Jalali dates (e.g. 1399-01-10 or 1403/02/06).
        if (preg_match('/^1[34]\d{2}[\/-]/', $value)) {
            return str_replace('-', '/', $value);
        }

        try {
            return \Morilog\Jalali\Jalalian::fromCarbon(
                \Illuminate\Support\Carbon::parse($value)
            )->format('Y/m/d');
        } catch (\Throwable $e) {
            return null;
        }
    };

    $registrationDate = $formatDate($project->registration_date ?? null);
    $startDate = $formatDate($project->start_date ?? null);

    $progress = (int) ($project->progress_percentage ?? 0);

    $share = trim((string) ($project->percentageshare ?? ''));
    $share = $share === '' ? null : (float) $share;
    $share = ($share !== null && $share > 0) ? rtrim(rtrim(number_format($share, 2, '.', ''), '0'), '.') : null;



    $description = trim((string) ($project->description ?? ''));
    $address = trim((string) ($project->address ?? ''));

    $email = trim((string) ($project->email ?? ''));
    $email = filter_var($email, FILTER_VALIDATE_EMAIL) ? $email : '';

    $tel = trim((string) ($project->tel ?? ''));
    $tel = in_array($tel, ['', '-'], true) ? '' : $tel;

    $metaRows = array_filter([
        'نام شرکت' => $project->company_name ?? null,
        'مدیرعامل' => $project->CEO ?? null,
        'تلفن' => $tel,
        'ایمیل' => $email,
    ], fn ($value) => trim((string) $value) !== '');
@endphp

<div class="portfolio-card {{ $cardClass ?? '' }}" data-project-id="{{ $project->id }}">
    <div class="portfolio-logo {{ $logoClass ?? '' }}">
        @if ($hasCover)
            <div class="brand-image-box">
                <img src="{{ asset($coverPath) }}" alt="{{ $project->title }}" />
            </div>
        @else
            <div class="brand-placeholder">
                <div class="brand-placeholder-inner">
                    <i class="fa-solid fa-rocket"></i>
                </div>
            </div>
        @endif
    </div>

    <div class="portfolio-content {{ $contentClass ?? '' }}">
        <h3>{{ $project->title }}</h3>

        @if (!empty($showSummary) && $description !== '')
            <p>{{ Str::limit(strip_tags($description), 120) }}</p>
        @endif

        <div class="portfolio-actions">
            <button type="button" class="portfolio-details-btn" data-modal-trigger aria-haspopup="dialog">
                جزئیات بیشتر
                <i class="fa-solid fa-window-restore"></i>
            </button>
        </div>
    </div>

    {{-- Cloned into #project-modal by portfolio-modal.js; inert until then. --}}
    <template class="project-modal-tpl">
        <div class="project-modal-hero">
            @if ($hasCover)
                <img src="{{ asset($coverPath) }}" alt="{{ $project->title }}" loading="lazy" />
            @else
                <div class="project-modal-hero-placeholder">
                    <i class="fa-solid fa-rocket"></i>
                </div>
            @endif
        </div>

        <div class="project-modal-scroll">
            <div class="project-modal-head">
                <span class="project-modal-eyebrow">{{ $project->company_name ?: 'شرکت سرمایه‌پذیر' }}</span>
                <h2 class="project-modal-title" id="project-modal-title">{{ $project->title }}</h2>

                @if (!empty($project->en_title))
                    <p class="project-modal-en" dir="ltr">{{ $project->en_title }}</p>
                @endif
            </div>
            @if ($metaRows)
                <dl class="project-modal-meta">
                    @foreach ($metaRows as $label => $value)
                        <div class="project-meta-row">
                            <dt>{{ $label }}</dt>
                            <dd>{{ $value }}</dd>
                        </div>
                    @endforeach
                </dl>
            @endif

            @if ($description !== '')
                <div class="project-modal-desc">
                    <h3>درباره شرکت</h3>
                    <p>{{ $description }}</p>
                </div>
            @endif

            @if ($address !== '')
                <div class="project-modal-desc">
                    <h3>آدرس</h3>
                    <p>{{ $address }}</p>
                </div>
            @endif

            @if ($websiteUrl || $websiteEmail || $tel)
                <div class="project-modal-cta">
                    @if ($websiteUrl)
                        <a class="primary-btn" href="{{ $websiteUrl }}" target="_blank" rel="noopener noreferrer"
                            >وب‌سایت شرکت</a
                        >
                    @elseif ($websiteEmail)
                        <a class="primary-btn" href="mailto:{{ $websiteEmail }}">ارتباط با شرکت</a>
                    @endif

                    @if ($tel)
                        <a class="secondary-btn" href="tel:{{ preg_replace('/\s+/', '', $tel) }}">تماس تلفنی</a>
                    @endif
                </div>
            @endif
        </div>
    </template>
</div>
