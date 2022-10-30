<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use Illuminate\Http\Request;
use Inertia\Inertia;

class IndexController extends Controller
{
    public function index()
    {
        $partners_news_titles = Topic::whereType('partners_news_titles')
            ->latest()
            ->take(11)
            ->get();

        $summit_stories_titles = Topic::whereType('summit_stories_titles')
            ->latest()
            ->take(11)
            ->get();

        $mass_media_about_us_titles = Topic::whereType('mass_media_about_us_titles')
            ->latest()
            ->take(11)
            ->get();

        return Inertia::render('Home', [
            'partners_news_titles' => $partners_news_titles,
            'summit_stories_titles' => $summit_stories_titles,
            'mass_media_about_us_titles' => $mass_media_about_us_titles,
        ]);
    }

    public function about()
    {
        return Inertia::render('About');
    }
}
