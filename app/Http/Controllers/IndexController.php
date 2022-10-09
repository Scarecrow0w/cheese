<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;
use Inertia\Inertia;

class IndexController extends Controller
{
    public function index()
    {
        return Inertia::render('Home', [
          'content' => Content::class
        ]);
    }
    public function about()
    {
        return Inertia::render('About');
    }
}
