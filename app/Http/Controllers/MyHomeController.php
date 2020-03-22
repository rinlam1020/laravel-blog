<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\View\View;

class MyHomeController extends Controller
{
    /**
     * Show the application dashboard.
     */
    public function index(Request $request): View
    {
        return view('myhome.index', [
            'greeting'=>'Welcome to my yard'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, Post $post): View
    {
        $post->comments_count = $post->comments()->count();
        $post->likes_count = $post->likes()->count();

        return view('posts.show', [
            'post' => $post
        ]);
    }
}
