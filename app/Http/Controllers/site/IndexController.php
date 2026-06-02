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
        $projects = Project::query()
            ->where('invest_step', '>=', 10)
            ->where('invest_step', '<', 20)
            ->latest()
            ->get();

        $posts = Post::query()
            ->where('status', 4)
            ->latest()
            ->get();

        $companies = Company::query()
            ->where('status', 4)
            ->latest()
            ->get();

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

    public function events()
    {
        return view($this->localizedView('events'));
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
        $post = Post::query()
            ->where('slug', $slug)
            ->where('status', 4)
            ->firstOrFail();

        $relatedPosts = Post::query()
            ->where('status', 4)
            ->where('id', '!=', $post->id)
            ->orderByRaw('priority IS NULL, priority ASC')
            ->orderByDesc('created_at')
            ->limit(3)
            ->get();

        return view($this->localizedView('single-new'), compact('post', 'relatedPosts'));
    }

    public function portfolio()
    {
        $projects = Project::query()
            ->where('invest_step', '>=', 10)
            ->orderByDesc('id')
            ->paginate(12);

        return view($this->localizedView('portfolio'), compact('projects'));
    }

    private function localizedView(string $view): string
    {
        return 'site.' . app()->getLocale() . '.' . $view;
    }
}
