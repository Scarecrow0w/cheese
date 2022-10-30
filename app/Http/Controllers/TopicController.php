<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;

class TopicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Inertia::render('Topics/Index', [
            'topics' => Topic::all()->map(function($topic) {
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
            })
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('Topics/Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->file('image')) {
            $fileName = $request->file('image')->store('topics', 'public');
        }

        Topic::create([
            'user_id' => Auth::user()->id,
            'title' => $request->title,
            'content' => $request->content,
            'image' => $fileName ?? null,
            'type' => $request->type,
        ]);

        return to_route('topics.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function show(Topic $topic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function edit(Topic $topic)
    {
        return Inertia::render('Topics/Edit', [
            'topic' => $topic,
            'image' => asset('storage/'.$topic->image)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Topic $topic)
    {
        $fileName = $topic->image;

        if ($request->file('image')) {
            $fileName = $request->file('image')->store('topics', 'public');
        }

        $topic->update([
            'user_id' => Auth::user()->id,
            'title' => $request->title,
            'content' => $request->content,
            'image' => $fileName,
            'type' => $request->type,
        ]);

        return to_route('topics.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Topic $topic)
    {
        Storage::delete('public/' . $topic->image);

        $topic->delete();

        return to_route('topics.index');
    }
}
