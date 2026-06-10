<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\site\Company;
use App\Models\site\Post;
use App\Models\site\Project;

class IndexController extends Controller
{
    public function index()
    {
        $projects = Project::query()->where('invest_step', '>=', 10)->where('invest_step', '<', 20)->latest()->get();

        $posts = Post::query()->where('status', 4)->latest()->take(10)->get();

        $companies = Company::query()->where('status', 4)->latest()->get();

        return view($this->localizedView('index'), compact('projects', 'posts', 'companies'));
    }
    public function contact()
    {
        return view($this->localizedView('contact'));
    }

    public function about()
    {
        return view($this->localizedView('about'));
    }

    public function news()
    {
        $posts = Post::query()
            ->where('status', 4)
            ->orderByRaw('priority IS NULL, priority ASC')
            ->orderByDesc('created_at')
            ->paginate(6);

        return view($this->localizedView('news'), compact('posts'));
    }

    public function newsShow($slug)
    {
        $post = Post::query()->where('slug', $slug)->where('status', 4)->firstOrFail();

        $relatedPosts = Post::query()->where('status', 4)->where('id', '!=', $post->id)->orderByRaw('priority IS NULL, priority ASC')->orderByDesc('created_at')->limit(3)->get();

        return view($this->localizedView('single-new'), compact('post', 'relatedPosts'));
    }

    public function portfolio()
    {
        $projects = Project::query()->where('invest_step', '>=', 10)->orderByDesc('id')->paginate(12);

        return view($this->localizedView('portfolio'), compact('projects'));
    }

    private function localizedView(string $view): string
    {
        return 'site.' . app()->getLocale() . '.' . $view;
    }

    public function events()
    {
        $events = collect($this->eventsData());

        return view($this->localizedView('events'), compact('events'));
    }

    public function eventShow(string $slug)
    {
        $events = collect($this->eventsData());

        $event = $events->firstWhere('slug', $slug);

        abort_if(!$event, 404);

        $relatedEvents = $events->where('slug', '!=', $slug)->values();

        return view($this->localizedView('single-event'), compact('event', 'relatedEvents'));
    }

    private function eventsData(): array
    {
        return [
            [
                'slug' => 'first-investment-bridge',
                'number' => '01',
                'label' => 'پل سرمایه‌گذاری اول',
                'title' => 'پل سرمایه‌گذاری اول: خوراک دام و امنیت غذایی',
                'short_title' => 'خوراک دام و امنیت غذایی',
                'date' => '۱۴۰۲/۰۳/۲۱',
                'category' => 'امنیت غذایی',
                'image' => '/site/images/events/1.jpg',
                'description' => 'فراخوان ارسال طرح برای اولین رویداد از سلسله رویدادهای پل سرمایه‌گذاری با موضوع خوراک دام و امنیت غذایی.',
                'intro' => 'اولین رویداد از سلسله رویدادهای پل سرمایه‌گذاری با تمرکز بر خوراک دام، امنیت غذایی، فناوری‌های مرتبط با تولید نهاده‌های دامی و راهکارهای نوآورانه برای کاهش چالش‌های زنجیره تأمین برگزار شد.',
                'content' => [
                    'در سال‌های اخیر، تأمین و تولید نهاده‌های دامی و علوفه با چالش‌های متعددی مواجه بوده است. وابستگی به واردات، محدودیت‌های تأمین، افزایش هزینه‌ها و فشارهای ناشی از تحریم‌ها باعث شده امنیت غذایی به یکی از حوزه‌های راهبردی و حساس تبدیل شود.',
                    'در چنین شرایطی، فناوری و نوآوری می‌تواند مسیر تازه‌ای برای حل مسائل صنعت دام و طیور ایجاد کند. این رویداد با هدف شناسایی طرح‌های فناورانه، معرفی دستاوردهای دانش‌پایه و اتصال تیم‌های نوآور به سرمایه‌گذاران و نقش‌آفرینان این صنعت طراحی شد.',
                ],
                'timeline' => [
                    [
                        'time' => 'مرحله اول',
                        'title' => 'ثبت‌نام و ارسال طرح',
                        'description' => 'تکمیل فرم ثبت‌نام و ارسال اطلاعات اولیه طرح یا شرکت برای بررسی اولیه.',
                    ],
                    [
                        'time' => 'مرحله دوم',
                        'title' => 'غربالگری اولیه',
                        'description' => 'بررسی اولیه طرح‌ها از نظر ارتباط با محور رویداد، ظرفیت رشد و قابلیت سرمایه‌گذاری.',
                    ],
                    [
                        'time' => 'مرحله سوم',
                        'title' => 'ارزیابی تخصصی',
                        'description' => 'تحلیل دقیق‌تر تیم، محصول، بازار، فناوری، مدل درآمدی و میزان آمادگی برای جذب سرمایه.',
                    ],
                    [
                        'time' => 'مرحله چهارم',
                        'title' => 'ارائه به کمیته سرمایه‌گذاری',
                        'description' => 'دعوت از طرح‌های منتخب برای ارائه، مذاکره و بررسی مسیر همکاری یا سرمایه‌گذاری.',
                    ],
                ],
                'registration' => [
                    'title' => 'ارسال طرح و ثبت‌نام در رویداد',
                    'description' => 'اگر در این حوزه صاحب ایده، محصول، فناوری یا کسب‌وکار نوآورانه هستید، می‌توانید اطلاعات طرح خود را برای بررسی اولیه ارسال کنید.',
                    'button_text' => 'ارسال طرح',
                    'button_url' => 'contact',
                ],
                'focus' => [
                    'تولید و تأمین نهاده‌های دامی',
                    'فناوری‌های نوین در خوراک دام و طیور',
                    'راهکارهای کاهش وابستگی به واردات',
                    'نوآوری در زنجیره امنیت غذایی',
                ],
                'icon' => 'fa-solid fa-wheat-awn',
            ],
            [
                'slug' => 'second-investment-bridge',
                'number' => '02',
                'label' => 'پل سرمایه‌گذاری دوم',
                'title' => 'پل سرمایه‌گذاری دوم: لجستیک و حمل‌ونقل هوشمند',
                'short_title' => 'لجستیک و حمل‌ونقل هوشمند',
                'date' => '۱۴۰۲/۰۴/۲۶',
                'category' => 'لجستیک هوشمند',
                'image' => '/site/images/events/2.jpg',
                'description' => 'فراخوان ارسال طرح برای دومین رویداد از سلسله رویدادهای پل سرمایه‌گذاری با موضوع لجستیک و حمل‌ونقل هوشمند.',
                'intro' => 'دومین رویداد پل سرمایه‌گذاری با محوریت لجستیک، حمل‌ونقل هوشمند، فناوری‌های زنجیره تأمین و راهکارهای نوین در بهینه‌سازی جریان کالا و خدمات برگزار شد.',
                'content' => [
                    'ایران به دلیل موقعیت برجسته جغرافیایی، دسترسی به آب‌های آزاد و قرار گرفتن در مسیرهای مهم ترانزیتی، ظرفیت قابل توجهی برای توسعه لجستیک و حمل‌ونقل دارد.',
                    'این رویداد با هدف شناسایی راهکارهای نوآورانه در حوزه حمل‌ونقل هوشمند، افزایش بهره‌وری زنجیره تأمین، توسعه فناوری‌های ترانزیتی و اتصال تیم‌های فناور به سرمایه‌گذاران طراحی شد.',
                ],
                'timeline' => [
                    [
                        'time' => 'مرحله اول',
                        'title' => 'ثبت‌نام و ارسال طرح',
                        'description' => 'تکمیل فرم ثبت‌نام و ارسال اطلاعات اولیه طرح یا شرکت برای بررسی اولیه.',
                    ],
                    [
                        'time' => 'مرحله دوم',
                        'title' => 'غربالگری اولیه',
                        'description' => 'بررسی اولیه طرح‌ها از نظر ارتباط با محور رویداد، ظرفیت رشد و قابلیت سرمایه‌گذاری.',
                    ],
                    [
                        'time' => 'مرحله سوم',
                        'title' => 'ارزیابی تخصصی',
                        'description' => 'تحلیل دقیق‌تر تیم، محصول، بازار، فناوری، مدل درآمدی و میزان آمادگی برای جذب سرمایه.',
                    ],
                    [
                        'time' => 'مرحله چهارم',
                        'title' => 'ارائه به کمیته سرمایه‌گذاری',
                        'description' => 'دعوت از طرح‌های منتخب برای ارائه، مذاکره و بررسی مسیر همکاری یا سرمایه‌گذاری.',
                    ],
                ],
                'registration' => [
                    'title' => 'ارسال طرح و ثبت‌نام در رویداد',
                    'description' => 'اگر در این حوزه صاحب ایده، محصول، فناوری یا کسب‌وکار نوآورانه هستید، می‌توانید اطلاعات طرح خود را برای بررسی اولیه ارسال کنید.',
                    'button_text' => 'ارسال طرح',
                    'button_url' => 'contact',
                ],
                'focus' => [
                    'حمل‌ونقل هوشمند',
                    'بهینه‌سازی زنجیره تأمین',
                    'فناوری‌های ترانزیت و ردیابی',
                    'پلتفرم‌های لجستیکی و مدیریت ناوگان',
                ],
                'icon' => 'fa-solid fa-truck-fast',
            ],
            [
                'slug' => 'third-investment-bridge',
                'number' => '03',
                'label' => 'پل سرمایه‌گذاری سوم',
                'title' => 'رویداد پل سرمایه‌گذاری سوم: فراگیری و فناوری‌های مالی',
                'short_title' => 'فراگیری و فناوری‌های مالی',
                'date' => '۱۴۰۲/۰۸/۱۳',
                'category' => 'فین‌تک',
                'image' => '/site/images/events/3.png',
                'description' => 'فراخوان ارسال طرح برای سومین رویداد از سلسله رویدادهای پل سرمایه‌گذاری با موضوع فراگیری و فناوری‌های مالی.',
                'intro' => 'سومین رویداد پل سرمایه‌گذاری با تمرکز بر فناوری‌های مالی، فراگیری مالی، نوآوری در خدمات مالی و راهکارهای دیجیتال در توسعه دسترسی مالی برگزار شد.',
                'content' => [
                    'فناوری‌های مالی در سال‌های اخیر نقش مهمی در تحول خدمات مالی، افزایش دسترسی‌پذیری، کاهش هزینه‌ها و ایجاد مدل‌های نوآورانه کسب‌وکار ایفا کرده‌اند.',
                    'این رویداد با هدف شناسایی طرح‌های نوآورانه در حوزه فین‌تک، فراگیری مالی، خدمات مالی دیجیتال و اتصال تیم‌های مستعد به سرمایه‌گذاران و بازیگران اثرگذار برگزار شد.',
                ],
                'timeline' => [
                    [
                        'time' => 'مرحله اول',
                        'title' => 'ثبت‌نام و ارسال طرح',
                        'description' => 'تکمیل فرم ثبت‌نام و ارسال اطلاعات اولیه طرح یا شرکت برای بررسی اولیه.',
                    ],
                    [
                        'time' => 'مرحله دوم',
                        'title' => 'غربالگری اولیه',
                        'description' => 'بررسی اولیه طرح‌ها از نظر ارتباط با محور رویداد، ظرفیت رشد و قابلیت سرمایه‌گذاری.',
                    ],
                    [
                        'time' => 'مرحله سوم',
                        'title' => 'ارزیابی تخصصی',
                        'description' => 'تحلیل دقیق‌تر تیم، محصول، بازار، فناوری، مدل درآمدی و میزان آمادگی برای جذب سرمایه.',
                    ],
                    [
                        'time' => 'مرحله چهارم',
                        'title' => 'ارائه به کمیته سرمایه‌گذاری',
                        'description' => 'دعوت از طرح‌های منتخب برای ارائه، مذاکره و بررسی مسیر همکاری یا سرمایه‌گذاری.',
                    ],
                ],
                'registration' => [
                    'title' => 'ارسال طرح و ثبت‌نام در رویداد',
                    'description' => 'اگر در این حوزه صاحب ایده، محصول، فناوری یا کسب‌وکار نوآورانه هستید، می‌توانید اطلاعات طرح خود را برای بررسی اولیه ارسال کنید.',
                    'button_text' => 'ارسال طرح',
                    'button_url' => 'contact',
                ],
                'focus' => [
                    'فناوری‌های مالی',
                    'فراگیری مالی',
                    'خدمات مالی دیجیتال',
                    'راهکارهای نوآورانه پرداخت و اعتبار',
                ],
                'icon' => 'fa-solid fa-chart-line',
            ],
        ];
    }
}
