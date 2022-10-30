<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;

class IndexController extends Controller
{
    public function index()
    {
        $partners_news_titles = Topic::whereType('partners_news ')
            ->latest()
            ->take(11)
            ->get()
            ->map(function($topic) {
                if ($topic->image && Storage::disk('public')->exists($topic->image)) {
                    $image = asset('storage/'.$topic->image);
                }

                return [
                    'id' => $topic->id,
                    'user_id' => $topic->user_id,
                    'title' => $topic->title,
                    'content' => $topic->content,
                    'image' =>  $image ?? null,
                    'type' => $topic->type,
                ];
            });

        $summit_stories_titles = Topic::whereType('summit_stories   ')
            ->latest()
            ->get()
            ->map(function($topic) {
                if ($topic->image && Storage::disk('public')->exists($topic->image)) {
                    $image = asset('storage/'.$topic->image);
                }

                return [
                    'id' => $topic->id,
                    'user_id' => $topic->user_id,
                    'title' => $topic->title,
                    'content' => $topic->content,
                    'image' =>  $image ?? null,
                    'type' => $topic->type,
                ];
            });

        $mass_media_about_us_titles = Topic::whereType('mass_media_about_us ')
            ->latest()
            ->get()
            ->map(function($topic) {
                if ($topic->image && Storage::disk('public')->exists($topic->image)) {
                    $image = asset('storage/'.$topic->image);
                }

                return [
                    'id' => $topic->id,
                    'user_id' => $topic->user_id,
                    'title' => $topic->title,
                    'content' => $topic->content,
                    'image' =>  $image ?? null,
                    'type' => $topic->type,
                ];
            });

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
