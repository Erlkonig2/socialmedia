<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;

class PostController extends Controller
{

    public function store(Request $request) {

        $post = new Post();

        $post->user_id = Auth::id();
        $post->post_content = $request->post;

        $post->save();

        return redirect(RouteServiceProvider::HOME);

    }

    public function view() {

        $posts = Post::with('user')->get();

        return view('dashboard')->with('posts', $posts);

    }

}
