<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PageController extends Controller
{
    public function index() {
        $posts = Post::get();
        return view('pages.home', compact(
            'posts'
        ));
    }
}
